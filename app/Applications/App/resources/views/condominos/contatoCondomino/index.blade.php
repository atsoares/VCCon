@extends('app::layouts.main')

@section('title', 'Tipo Procuradores ')

@section('containerTitle', 'Listar Tipo Procuradores')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('procuradorTipos.create') }}">
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
			@forelse ($procuradorTipos as $procuradorTipo)
				<tr>
					<td>{{ $procuradorTipo->nome }}</td>
					<td>{{ $procuradorTipo->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('procuradorTipos.show', $procuradorTipo->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('procuradorTipos.edit', $procuradorTipo->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('procuradorTipos.destroy', $procuradorTipo->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de tipos de procurador!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $procuradorTipos->currentPage() !!} de {!! $procuradorTipos->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $procuradorTipos->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $procuradorTipos->count() !!} de {!! $procuradorTipos->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection