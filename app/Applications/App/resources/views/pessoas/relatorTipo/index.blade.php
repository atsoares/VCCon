@extends('app::layouts.main')

@section('title', 'Tipo Relatores ')

@section('containerTitle', 'Listar Tipo Relatores')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatorTipos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')

	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>NOME</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($relatorTipos as $relatorTipo)
				<tr>
					<td>{{ $relatorTipo->nome }}</td>
					<td>{{ $relatorTipo->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('relatorTipos.show', $relatorTipo->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('relatorTipos.edit', $relatorTipo->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('relatorTipos.destroy', $relatorTipo->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de tipos de secretário!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $relatorTipos->currentPage() !!} de {!! $relatorTipos->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $relatorTipos->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $relatorTipos->count() !!} de {!! $relatorTipos->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection