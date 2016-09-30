<?php

namespace VCCon\Applications\App\Http\Controllers\Funcionarios;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Funcionarios\Contracts\FuncionarioContract;
use VCCon\Domains\Funcionarios\Contracts\FuncaoContract;
use VCCon\Applications\App\Http\Requests\Funcionarios\FuncionarioRequest as Request;

class FuncionarioController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Funcionario, usando o Contract e o Repository.
     *
     * @var string
     */
	private $FuncionarioRepository;
	private $FuncaoRepository;

	/**
     * Função para injetar o objeto Funcionario.
     *
     * @var string
     */
	public function __construct(FuncionarioContract $FuncionarioRepository, FuncaoContract $FuncaoRepository)
	{
		$this->FuncionarioRepository = $FuncionarioRepository;
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
		$funcionarios = $this->FuncionarioRepository->paginate();
		

		return $this->view('funcionarios.funcionario.index', compact('funcionarios'));
	}

	public function list($id)
	{
		$funcionarios = $this->FuncionarioRepository->findBy('funcao_id', $id);
		
		return $this->view('funcionarios.funcionario.list', compact('funcionarios'));
	}

	public function show($id)
	{
		$funcionario = $this->FuncionarioRepository->find($id);

		return $this->view('funcionarios.funcionario.show', compact('funcionario'));
	}

	public function create()
	{
		$funcao = $this->FuncaoRepository->listsWhere('ativo', 'S', 'nome');

		return $this->view('funcionarios.funcionario.create', compact('funcao'));
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->FuncionarioRepository->store($inputs);

        return redirect()->route('funcionarios.index')->with('success', 'Funcionario salvo com sucesso!');
	}

	public function edit($id)
	{
		$funcionario = $this->FuncionarioRepository->find($id);
		
		$funcao = $this->FuncaoRepository->listsWhere('ativo', 'S', 'nome');

		return $this->view('funcionarios.funcionario.edit', compact('funcionario', 'funcao'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->FuncionarioRepository->update($inputs, $id);

		return redirect()->route('funcionarios.index')->with('success', 'Funcionario atualizado com sucesso!');
	}

	public function destroy($id)
	{
        $this->FuncionarioRepository->delete($id);

        return redirect()->route('funcionarios.index')->with('success', 'Funcionario deletado com sucesso!');
	}
}