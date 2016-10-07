<?php

namespace VCCon\Applications\App\Http\Controllers\Reservas;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Reservas\Contracts\ReservaContract;
use VCCon\Applications\App\Http\Requests\Reservas\ReservaRequest as Request;

class ReservaController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Reserva, usando o Contract e o Repository.
     *
     * @var string
     */
	private $ReservaRepository;	
	private $CondominoRepository;

	/**
     * Função para injetar o objeto Reserva.
     *
     * @var string
     */
	public function __construct(ReservaContract $ReservaRepository)
	{
		$this->ReservaRepository = $ReservaRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$reservas = $this->ReservaRepository->paginate();

		return $this->view('reservas.index', compact('reservas'));
	}

	public function show($id)
	{
		$reserva = $this->ReservaRepository->find($id);

		return $this->view('reservas.show', compact('reserva'));
	}

	public function create()
	{
		return $this->view('reservas.create');
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->ReservaRepository->store($inputs);

        return redirect()->route('reservas.index')->with('success', 'Reserva salva com sucesso!');
	}

	public function edit($id)
	{
		$reserva = $this->ReservaRepository->find($id);

		return $this->view('reservas.edit', compact('reserva'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->ReservaRepository->update($inputs, $id);

		return redirect()->route('reservas.index')->with('success', 'Reserva atualizada com sucesso!');
	}

	public function destroy($id)
	{
        $this->ReservaRepository->delete($id);

        return redirect()->route('reservas.index')->with('success', 'Reserva deletada com sucesso!');
	}
}