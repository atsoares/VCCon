<?php

namespace VCCon\Applications\App\Http\Controllers\Condominos;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Condominos\Contracts\CondominoContract;
use VCCon\Domains\Condominos\Contracts\CarroCondominoContract;
use VCCon\Applications\App\Http\Requests\Condominos\CarroCondominoRequest as Request;

class CarroCondominoController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Condomino, usando o Contract e o Repository.
     *
     * @var string
     */
	private $CondominoRepository;
	private $CarroCondominoRepository;
	//private $CarroCondominoRepository;
	//private $ContatoCondominoRepository;

	/**
     * Função para injetar o objeto Condomino.
     *
     * @var string
     */
	public function __construct(CondominoContract $CondominoRepository, CarroCondominoContract $CarroCondominoRepository)
	{
		$this->CondominoRepository = $CondominoRepository;
		$this->CarroCondominoRepository = $CarroCondominoRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$carros = $this->CarroCondominoRepository->paginate();
		

		return $this->view('condominos.carroCondomino.index', compact('carros'));
	}

	public function list($id)
	{
		$carros = $this->CarroCondominoRepository->findBy('condomino_id', $id);
		
		
		return $this->view('condominos.carroCondomino.list', compact('carros'));
	}

	public function show($id)
	{
		$carro = $this->CarroCondominoRepository->find($id);

		return $this->view('condominos.carroCondomino.show', compact('carro'));
	}

	public function create()
	{
		$condomino = $this->CondominoRepository->listsWhere('ativo', 'S', 'name');

		return $this->view('condominos.carroCondomino.create', compact('condomino'));
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->CarroCondominoRepository->store($inputs);

        return redirect()->route('carros.index')->with('success', 'Carro do condomino salvo com sucesso!');
	}

	public function edit($id)
	{
		$carro = $this->CarroCondominoRepository->find($id);
		
		$condomino = $this->CondominoRepository->listsWhere('ativo', 'S', 'name');

		return $this->view('condominos.carroCondomino.edit', compact('carro', 'condomino'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->CarroCondominoRepository->update($inputs, $id);

		return redirect()->route('carros.index')->with('success', 'Carro do condomino atualizado com sucesso!');
	}

	public function destroy($id)
	{
        $this->CarroCondominoRepository->delete($id);

        return redirect()->route('carros.index')->with('success', 'Carro do condomino deletado com sucesso!');
	}
}