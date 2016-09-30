<?php

namespace VCCon\Applications\App\Http\Controllers\Condominos;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\Condominos\Contracts\CondominoContract;
use VCCon\Domains\Condominos\Contracts\ContatoCondominoContract;
use VCCon\Applications\App\Http\Requests\Condominos\ContatoCondominoRequest as Request;

class ContatoCondominoController extends AppBaseController
{
	/**
     * Cria variável para o construtor de Condomino, usando o Contract e o Repository.
     *
     * @var string
     */
	private $CondominoRepository;
	private $ContatoCondominoRepository;
	//private $ContatoCondominoRepository;
	//private $ContatoCondominoRepository;

	/**
     * Função para injetar o objeto Condomino.
     *
     * @var string
     */
	public function __construct(CondominoContract $CondominoRepository, ContatoCondominoContract $ContatoCondominoRepository)
	{
		$this->CondominoRepository = $CondominoRepository;
		$this->ContatoCondominoRepository = $ContatoCondominoRepository;
	}

	/**
     * Chamadas aos métodos do Repository, retornando o result para as views (index, show, create, edit) .
     * Métodos de store, update e destroy também usam métodos do Repository, e retorna para a view index.
     *
     * @var array
     */
	public function index()
	{
		$contatos = $this->ContatoCondominoRepository->paginate();
		

		return $this->view('condominos.contatoCondomino.index', compact('contatos'));
	}

	public function list($id)
	{
		$contatos = $this->ContatoCondominoRepository->findBy('condomino_id', $id);
		
		
		return $this->view('condominos.contatoCondomino.list', compact('contatos'));
	}

	public function show($id)
	{
		$contato = $this->ContatoCondominoRepository->find($id);

		return $this->view('condominos.contatoCondomino.show', compact('contato'));
	}

	public function create()
	{
		$condomino = $this->CondominoRepository->listsWhere('ativo', 'S', 'name');

		return $this->view('condominos.contatoCondomino.create', compact('condomino'));
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->ContatoCondominoRepository->store($inputs);

        return redirect()->route('contatos.index')->with('success', 'Contato do condomino salvo com sucesso!');
	}

	public function edit($id)
	{
		$contato = $this->ContatoCondominoRepository->find($id);
		
		$condomino = $this->CondominoRepository->listsWhere('ativo', 'S', 'name');

		return $this->view('condominos.contatoCondomino.edit', compact('contato', 'condomino'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->ContatoCondominoRepository->update($inputs, $id);

		return redirect()->route('contatos.index')->with('success', 'Contato do condomino atualizado com sucesso!');
	}

	public function destroy($id)
	{
        $this->ContatoCondominoRepository->delete($id);

        return redirect()->route('contatos.index')->with('success', 'Contato do condomino deletado com sucesso!');
	}
}