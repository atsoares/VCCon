<?php

namespace VCCon\Applications\App\Http\Controllers\Condominos;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Condominos\Contracts\CondominoContract;
use VCCon\Domains\Unidades\Contracts\UnidadeContract;
use VCCon\Applications\App\Http\Requests\Condominos\CondominoRequest as Request;

class CondominoController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Condomino, usando o Contract e o Repository.
     *
     * @var string
     */
	private $CondominoRepository;
	private $UnidadeRepository;
	//private $CarroCondominoRepository;
	//private $ContatoCondominoRepository;

	/**
     * Função para injetar o objeto Condomino.
     *
     * @var string
     */
	public function __construct(CondominoContract $CondominoRepository, UnidadeContract $UnidadeRepository)
	{
		$this->CondominoRepository = $CondominoRepository;
		$this->UnidadeRepository = $UnidadeRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$condominos = $this->CondominoRepository->paginate();
		
		return $this->view('condominos.condomino.index', compact('condominos'));
	}

	public function show($id)
	{
		$condomino = $this->CondominoRepository->find($id);

		return $this->view('condominos.condomino.show', compact('condomino'));
	}

	public function create()
	{
		$unidades = $this->UnidadeRepository->listsWhere('ocupada', 'N', 'numero');

		return $this->view('condominos.condomino.create', compact('unidades'));
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

		$unidade = $request->unidade_id;

        $this->CondominoRepository->store($inputs);

        $this->UnidadeRepository->update(['ocupada' => 'S'], $unidade);

        return redirect()->route('condominos.index')->with('success', 'Condomino salvo com sucesso!');
	}

	public function edit($id)
	{
		$condomino = $this->CondominoRepository->find($id);
		
		$unidades = $this->UnidadeRepository->listsWhere('ativo', 'S', 'numero');

		return $this->view('condominos.condomino.edit', compact('condomino', 'unidades'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$unidade = $request->unidade_id;

		$this->CondominoRepository->update($inputs, $id);

		$this->UnidadeRepository->update(['ocupada' => 'S'], $unidade);

		return redirect()->route('condominos.index')->with('success', 'Condomino atualizado com sucesso!');
	}

	public function destroy($id)
	{
        $this->CondominoRepository->delete($id);

        return redirect()->route('condominos.index')->with('success', 'Condomino deletado com sucesso!');
	}
}