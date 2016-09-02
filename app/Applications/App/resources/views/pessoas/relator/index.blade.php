@extends('app::layouts.main')

@section('title', 'Relatores ')

@section('containerTitle', 'Listar Relatores')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatores.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>CÓDIGO PE</th>
			<th>PESSOA</th>
			<th>TIPO</th>
			<th>RELATOR SUBSTITUÍDO</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($relatores as $relator)
				<tr>
					<td>{{ $relator->codigo_pe }}</td>
					<td>{{ $relator->pessoas->nome_completo }}</td>
					<td>{{ $relator->relatorTipos->nome }}</td>
					<td>{{ $relator->relator_substituido }}</td>
					<td>{{ $relator->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('relatores.show', $relator->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('relatores.edit', $relator->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('relatores.destroy', $relator->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de relatores!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $relatores->currentPage() !!} de {!! $relatores->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $relatores->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $relatores->count() !!} de {!! $relatores->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection