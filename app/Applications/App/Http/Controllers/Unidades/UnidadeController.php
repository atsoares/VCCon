<?php

namespace VCCon\Applications\App\Http\Controllers\Unidades;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Unidades\Contracts\UnidadeContract;
use VCCon\Domains\Condominos\Contracts\CondominoContract;
use VCCon\Applications\App\Http\Requests\Unidades\UnidadeRequest as Request;

class UnidadeController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Unidade, usando o Contract e o Repository.
     *
     * @var string
     */
	private $UnidadeRepository;	
	private $CondominoRepository;

	/**
     * Função para injetar o objeto Unidade.
     *
     * @var string
     */
	public function __construct(UnidadeContract $UnidadeRepository, CondominoContract $CondominoRepository)
	{
		$this->UnidadeRepository = $UnidadeRepository;
		$this->CondominoRepository = $CondominoRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$unidades = $this->UnidadeRepository->paginate();

		return $this->view('unidades.index', compact('unidades'));
	}

	public function show($id)
	{
		$unidade = $this->UnidadeRepository->find($id);

		return $this->view('unidades.show', compact('unidade'));
	}

	public function create()
	{
		return $this->view('unidades.create');
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->UnidadeRepository->store($inputs);

        return redirect()->route('unidades.index')->with('success', 'Unidade salva com sucesso!');
	}

	public function edit($id)
	{
		$unidade = $this->UnidadeRepository->find($id);

		return $this->view('unidades.edit', compact('unidade'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->UnidadeRepository->update($inputs, $id);

		return redirect()->route('unidades.index')->with('success', 'Unidade atualizada com sucesso!');
	}

	public function destroy($id)
	{
        $this->UnidadeRepository->delete($id);

        return redirect()->route('unidades.index')->with('success', 'Unidade deletada com sucesso!');
	}
}