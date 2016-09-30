<?php

namespace VCCon\Applications\App\Http\Controllers\Funcionarios;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Funcionarios\Contracts\FuncaoContract;
use VCCon\Applications\App\Http\Requests\Funcionarios\FuncaoRequest as Request;

class FuncaoController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Funcao, usando o Contract e o Repository.
     *
     * @var string
     */
	private $FuncaoRepository;	

	/**
     * Função para injetar o objeto Funcao.
     *
     * @var string
     */
	public function __construct(FuncaoContract $FuncaoRepository)
	{
		$this->FuncaoRepository = $FuncaoRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$funcoes = $this->FuncaoRepository->paginate();

		return $this->view('funcionarios.funcao.index', compact('funcoes'));
	}

	public function show($id)
	{
		$funcao = $this->FuncaoRepository->find($id);

		return $this->view('funcionarios.funcao.show', compact('funcao'));
	}

	public function create()
	{
		return $this->view('funcionarios.funcao.create');
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->FuncaoRepository->store($inputs);

        return redirect()->route('funcoes.index')->with('success', 'Função salva com sucesso!');
	}

	public function edit($id)
	{
		$funcao = $this->FuncaoRepository->find($id);

		return $this->view('funcionarios.funcao.edit', compact('funcao'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->FuncaoRepository->update($inputs, $id);

		return redirect()->route('funcoes.index')->with('success', 'Função atualizada com sucesso!');
	}

	public function destroy($id)
	{
        $this->FuncaoRepository->delete($id);

        return redirect()->route('funcoes.index')->with('success', 'Função deletada com sucesso!');
	}
}