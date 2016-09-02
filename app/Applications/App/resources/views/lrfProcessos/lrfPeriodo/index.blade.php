@extends('app::layouts.main')

@section('title', 'Períodos LRF ')

@section('containerTitle', 'Listar Períodos LRF')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('periodos.create') }}">
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
			@forelse ($lrfPeriodos as $lrfPeriodo)
				<tr>
					<td>{{ $lrfPeriodo->codigo }}</td>
					<td>{{ $lrfPeriodo->nome}}</td>
					<td>{{ $lrfPeriodo->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('periodos.show', $lrfPeriodo->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('periodos.edit', $lrfPeriodo->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('periodos.destroy', $lrfPeriodo->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de períodos!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $lrfPeriodos->currentPage() !!} de {!! $lrfPeriodos->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $lrfPeriodos->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $lrfPeriodos->count() !!} de {!! $lrfPeriodos->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection