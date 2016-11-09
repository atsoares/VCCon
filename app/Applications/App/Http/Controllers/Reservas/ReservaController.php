<?php

namespace VCCon\Applications\App\Http\Controllers\Reservas;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Reservas\Contracts\ReservaContract;
use VCCon\Domains\AreasExternas\Contracts\AreaExternaContract;
use VCCon\Domains\Condominos\Contracts\CondominoContract;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use DateTime;
use VCCon\Applications\App\Http\Requests\Reservas\ReservaRequest as Request;

class ReservaController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Reserva, usando o Contract e o Repository.
     *
     * @var string
     */
	private $reservaRepository;	
	private $condominoRepository;
	private $areaExternaRepository;

	/**
     * Função para injetar o objeto Reserva.
     *
     * @var string
     */
	public function __construct(ReservaContract $reservaRepository, CondominoContract $condominoRepository, AreaExternaContract $areaExternaRepository)
	{
		$this->reservaRepository = $reservaRepository;

		$this->condominoRepository = $condominoRepository;
		
		$this->areaExternaRepository = $areaExternaRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$reservas = $this->reservaRepository->paginate();

		return $this->view('reservas.index', compact('reservas'));
	}

	public function calendario()
	{
		return $this->view('reservas.calendario');
	}

	public function show($id)
	{
		$reserva = $this->reservaRepository->find($id);

		return $this->view('reservas.show', compact('reserva'));
	}

	public function create()
	{
		$condominos = $this->condominoRepository->listsWhere('ativo', 'S', 'nome');

		$areaExterna = $this->areaExternaRepository->listsWhere('ativo', 'S', 'nome');

		return $this->view('reservas.create', compact('condominos', 'areaExterna', 'reserva'));
	}

	public function store(Request $request)
	{		

		$evento = new Event;

		$inputs = $request->except('_token');

		$condomino = $this->condominoRepository->find($request->input('condomino_id'));

		$areaExterna = $this->areaExternaRepository->find($request->input('area_externa_id'));

		$startDate = new Carbon($request->input('horario_inicio'));
		$endDate = new Carbon($request->input('horario_fim'));	

		$uuid = Uuid::generate();

		$eventId = explode("-", $uuid->string);

		$eventId = $eventId[0].$eventId[1].$eventId[2].$eventId[3].$eventId[4];

		$evento->id            = $eventId;
		$evento->name          = $areaExterna->nome."444444444444444".$condomino->nome;
		$evento->description   = $request->input('observacao');
		$evento->startDateTime = $startDate; 
		$evento->endDateTime   = $endDate; 
		$evento->save();

		$inputs = array_add($inputs, "evento_id", $eventId);

        $this->reservaRepository->store($inputs);

        return redirect()->route('reservas.index')->with('success', 'Reserva salva com sucesso!');
	}

	public function edit($id)
	{
		$condominos = $this->condominoRepository->listsWhere('ativo', 'S', 'nome');

		$areaExterna = $this->areaExternaRepository->listsWhere('ativo', 'S', 'nome');

		$reserva = $this->reservaRepository->find($id);

		return $this->view('reservas.edit', compact('condominos', 'areaExterna', 'reserva'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$condomino = $this->condominoRepository->find($request->input('condomino_id'));

		$areaExterna = $this->areaExternaRepository->find($request->input('area_externa_id'));

		$evento = Event::find($request->input('evento_id'));

		$startDate = new Carbon($request->input('horario_inicio'));
		$endDate = new Carbon($request->input('horario_fim'));	

		$evento->name          = $areaExterna->nome." - ".$condomino->nome;
		$evento->description   = $request->input('observacao');
		$evento->startDateTime = $startDate; 
		$evento->endDateTime   = $endDate; 
		$evento->save();

		$this->reservaRepository->update($inputs, $id);

		return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso!');
	}

	public function destroy($id)
	{
        $this->reservaRepository->delete($id);

		$evento = Event::find($id);
		$evento->delete();

        return redirect()->route('reservas.index')->with('success', 'Reserva deletada com sucesso!');
	}

	public function change_date_format($date)
	{
		$time = Carbon::createFromFormat('Y-m-d H:i:s', $date);
		return $time->format('Y-m-d H:i:s');
	}
	
	public function change_date_format_fullcalendar($date)
	{
		$time = Carbon::createFromFormat('Y-m-d H:i:s', $date);
		return $time->format('d/m/Y H:i:s');
	}
}