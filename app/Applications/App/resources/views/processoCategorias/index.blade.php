@extends('app::layouts.main')

@section('title', 'Categorias de Processo')

@section('containerTitle', 'Listar Categorias de Processo')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('processoCategorias.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>CÓDIGO</th>
			<th>NOME</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($processoCategorias as $processoCategoria)
				<tr>
					<td>{{ $processoCategoria->codigo }}</td>
					<td>{{ $processoCategoria->nome }}</td>
					<td>{{ $processoCategoria->ativo }}</td>
					<td>
						<a href="{{ route('processoCategorias.show', $processoCategoria->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('processoCategorias.edit', $processoCategoria->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('processoCategorias.destroy', $processoCategoria->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de Categorias de Processo!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $processoCategorias->currentPage() !!} de {!! $processoCategorias->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $processoCategorias->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $processoCategorias->count() !!} de {!! $processoCategorias->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection