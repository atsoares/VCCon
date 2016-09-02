@extends('app::layouts.main')

@section('title', 'Tipo Secretários ')

@section('containerTitle', 'Listar Tipo Secretários')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('secretarioTipos.create') }}">
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
			@forelse ($secretarioTipos as $secretarioTipo)
				<tr>
					<td>{{ $secretarioTipo->nome }}</td>
					<td>{{ $secretarioTipo->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('secretarioTipos.show', $secretarioTipo->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('secretarioTipos.edit', $secretarioTipo->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('secretarioTipos.destroy', $secretarioTipo->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
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
			<p>Página {!! $secretarioTipos->currentPage() !!} de {!! $secretarioTipos->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $secretarioTipos->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $secretarioTipos->count() !!} de {!! $secretarioTipos->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection