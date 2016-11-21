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
use Mail;
use Illuminate\Support\Arr;
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
	public $mailchimp;
    public $listId = '0e5ec5601as';


	/**
     * Função para injetar o objeto Reserva.
     *
     * @var string
     */
	public function __construct(\Mailchimp $mailchimp, ReservaContract $reservaRepository, CondominoContract $condominoRepository, AreaExternaContract $areaExternaRepository)
	{
		$this->mailchimp = $mailchimp;

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

		$inputs = $request->except('_token');
		
		$condomino = $this->condominoRepository->find($request->input('condomino_id'));

		$areaExterna = $this->areaExternaRepository->find($request->input('area_externa_id'));

		$startDate = new Carbon($request->input('horario_inicio'));
		$endDate = new Carbon($request->input('horario_fim'));	

        $texto = 'Reservado área externa '.$areaExterna->nome.' para o condômino '.$condomino->nome.' no dia '.$this->dataInicio($request->input('horario_inicio')).' às '.$this->horaInicio($request->input('horario_inicio'));
       
        $subject = 'Reserva de área externa';

        try {

	        $options = [
	        'list_id'   => $this->listId,
	        'subject' => $subject,
	        'from_name' => 'VCCon',
	        'from_email' => 'vc.con@yahoo.com',
	        'to_name' => 'Condôminos'];

	        $content = [
	        'html' => $texto,
	        'text' => strip_tags($texto)];

	        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

	        $this->mailchimp->campaigns->send($campaign['id']);

        } catch (Exception $e) {

        	return redirect()->back()->with('error','Error from MailChimp');

        }

		$uuid = Uuid::generate();

		$eventoId = explode("-", $uuid->string);

		$eventoId = $eventoId[0].$eventoId[1].$eventoId[2].$eventoId[3].$eventoId[4];

		$inputs['event_id'] = $eventoId;

		$evento = new Event;
		$evento->id            = $eventoId;
		$evento->name          = $areaExterna->nome." - ".$condomino->nome;
		$evento->description   = $request->input('observacao');
		$evento->startDateTime = $startDate; 
		$evento->endDateTime   = $endDate; 
		$evento->saveNew();

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

		$startDate = new Carbon($request->input('horario_inicio'));
		$endDate = new Carbon($request->input('horario_fim'));	

		$texto = 'Alterado reserva de área externa '.$areaExterna->nome.' para o condômino '.$condomino->nome.' no dia '.$this->dataInicio($request->input('horario_inicio')).' às '.$this->horaInicio($request->input('horario_inicio'));
       
        $subject = 'Atualizada reserva de área externa';

        /*try {

	        $options = [
	        'list_id'   => $this->listId,
	        'subject' => $subject,
	        'from_name' => 'VCCon',
	        'from_email' => 'vc.con@yahoo.com',
	        'to_name' => 'Condôminos'];

	        $content = [
	        'html' => $texto,
	        'text' => strip_tags($texto)];

	        $campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

	        $this->mailchimp->campaigns->send($campaign['id']);

        } 

        catch (Exception $e) {

        	return redirect()->back()->with('error','Error from MailChimp');

        }*/

		$eventoId = $request->input('event_id');

		$evento = Event::find($eventoId);

		$evento->name          = $areaExterna->nome." - ".$condomino->nome;
		$evento->description   = $request->input('observacao');
		$evento->startDateTime = $startDate; 
		$evento->endDateTime   = $endDate; 
		$evento->saveOld();

		$this->reservaRepository->update($inputs, $id);

		return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso!');
	}

	public function destroy($id)
	{	

		$reserva = $this->reservaRepository->find($id);

		$eventoId = $reserva->event_id;  

		$evento = Event::find($eventoId);
		$evento->delete();

		$this->reservaRepository->delete($id);

        return redirect()->route('reservas.index')->with('success', 'Reserva deletada com sucesso!');
	}

	public function dataInicio($date)
	{
		$time = Carbon::createFromFormat('Y-m-d H:i:s', $date);
		return $time->format('d/m/Y');
	}

	public function horaInicio($date)
	{
		$time = Carbon::createFromFormat('Y-m-d H:i:s', $date);
		return $time->format('H:i');
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

	public function sendEmail()
    {
        $user = User::findOrFail($id);

        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
    }
}