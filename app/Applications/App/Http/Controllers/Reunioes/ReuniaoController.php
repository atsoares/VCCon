<?php

namespace VCCon\Applications\App\Http\Controllers\Reunioes;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Reunioes\Contracts\ReuniaoContract;
use Spatie\GoogleCalendar\Event;
use Carbon\Carbon;
use Webpatser\Uuid\Uuid;
use DateTime;
use Illuminate\Support\Arr;
use VCCon\Applications\App\Http\Requests\Reunioes\ReuniaoRequest as Request;

class ReuniaoController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Reuniao, usando o Contract e o Repository.
     *
     * @var string
     */
	private $reuniaoRepository;	

	/**
     * Função para injetar o objeto Reuniao.
     *
     * @var string
     */
	public function __construct(ReuniaoContract $reuniaoRepository)
	{
		$this->reuniaoRepository = $reuniaoRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$reunioes = $this->reuniaoRepository->paginate();

		return $this->view('reunioes.index', compact('reunioes'));
	}

	public function calendario()
	{
		return $this->view('reunioes.calendario');
	}

	public function show($id)
	{
		$reuniao = $this->reuniaoRepository->find($id);

		return $this->view('reunioes.show', compact('reuniao'));
	}

	public function create()
	{
		return $this->view('reunioes.create');
	}

	public function store(Request $request)
	{		

		$inputs = $request->except('_token');

		$startDate = new Carbon($request->input('horario_inicio'));
		$endDate = $startDate->addHour();	

		$uuid = Uuid::generate();

		$eventoId = explode("-", $uuid->string);

		$eventoId = $eventoId[0].$eventoId[1].$eventoId[2].$eventoId[3].$eventoId[4];

		$inputs['event_id'] = $eventoId;

		Event::createNew([
		   'id' => $eventoId,
		   'name' => $request->input('tema'),
		   'description' => $request->input('observacao'),
		   'startDateTime' => $startDate,
		   'endDateTime' => $endDate,
		]);
		

        $this->reuniaoRepository->store($inputs);

        return redirect()->route('reunioes.index')->with('success', 'Reunião salva com sucesso!');
	}

	public function edit($id)
	{
		$reuniao = $this->reuniaoRepository->find($id);

		return $this->view('reunioes.edit', compact('reuniao'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$startDate = new Carbon($request->input('horario_inicio'));
		$endDate = $startDate->addHour();	

		$eventoId = $request->input('event_id');

		$evento = Event::findNew($eventoId);

		$evento->name          = $request->input('tema');
		$evento->description   = $request->input('observacao');
		$evento->startDateTime = $startDate; 
		$evento->endDateTime   = $endDate; 
		$evento->saveOld();

		$this->reuniaoRepository->update($inputs, $id);

		return redirect()->route('reunioes.index')->with('success', 'Reunião atualizada com sucesso!');
	}

	public function destroy($id)
	{	

		$reuniao = $this->reuniaoRepository->find($id);

		$eventoId = $reuniao->event_id;  

		$evento = Event::findNew($eventoId);
		$evento->delete();

		$this->reuniaoRepository->delete($id);

        return redirect()->route('reunioes.index')->with('success', 'Reunião deletada com sucesso!');
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