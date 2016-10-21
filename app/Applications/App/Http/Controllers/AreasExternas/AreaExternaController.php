<?php

namespace VCCon\Applications\App\Http\Controllers\AreasExternas;

use VCCon\Applications\App\Http\Controllers\AppBaseController;
use VCCon\Domains\AreasExternas\Contracts\AreaExternaContract;
use VCCon\Applications\App\Http\Requests\AreasExternas\AreaExternaRequest as Request;

class AreaExternaController extends AppBaseController
{
	/**
     * Cria variável para o construtor de AreaExterna, usando o Contract e o Repository.
     *
     * @var string
     */
	private $areaExternaRepository;	

	/**
     * Função para injetar o objeto AreaExterna.
     *
     * @var string
     */
	public function __construct(AreaExternaContract $areaExternaRepository)
	{
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
		$areasExternas = $this->areaExternaRepository->paginate();

		return $this->view('areasExternas.index', compact('areasExternas'));
	}

	public function show($id)
	{
		$areaExterna = $this->areaExternaRepository->find($id);

		return $this->view('areasExternas.show', compact('areaExterna'));
	}

	public function create()
	{
		return $this->view('areasExternas.create');
	}

	public function store(Request $request)
	{
		$inputs = $request->except('_token');

        $this->areaExternaRepository->store($inputs);

        return redirect()->route('areasExternas.index')->with('success', 'Área externa salva com sucesso!');
	}

	public function edit($id)
	{
		$areaExterna = $this->areaExternaRepository->find($id);

		return $this->view('areasExternas.edit', compact('areaExterna'));
	}

	public function update(Request $request, $id)
	{
		$inputs = $request->except('_token');

		$this->areaExternaRepository->update($inputs, $id);

		return redirect()->route('areasExternas.index')->with('success', 'Área externa atualizada com sucesso!');
	}

	public function destroy($id)
	{
        $this->areaExternaRepository->delete($id);

        return redirect()->route('areasExternas.index')->with('success', 'Área externa deletada com sucesso!');
	}
}