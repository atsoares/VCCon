@extends('app::layouts.main')

@section('title', 'Procuradores ')

@section('containerTitle', 'Listar Procuradores')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('procuradores.create') }}">
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
			<th>PROCURADOR SUBSTITUÍDO</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($procuradores as $procurador)
				<tr>
					<td>{{ $procurador->codigo_pe }}</td>
					<td>{{ $procurador->pessoas->nome_completo }}</td>
					<td>{{ $procurador->procuradorTipos->nome }}</td>
					<td>{{ $procurador->procurador_substituido }}</td>
					<td>{{ $procurador->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('procuradores.show', $procurador->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('procuradores.edit', $procurador->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('procuradores.destroy', $procurador->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de procuradores!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $procuradores->currentPage() !!} de {!! $procuradores->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $procuradores->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $procuradores->count() !!} de {!! $procuradores->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection