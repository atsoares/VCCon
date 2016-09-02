@extends('app::layouts.main')

@section('title', 'Tipo Entidades ')

@section('containerTitle', 'Listar Tipo Entidades')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('tipos.create') }}">
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
			@forelse ($tipoEntidades as $tipoEntidade)
				<tr>
					<td>{{ $tipoEntidade->nome }}</td>					
					<td>{{ $tipoEntidade->ativo }}</td>
					<td>
						<a href="{{ route('tipos.show', $tipoEntidade->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('tipos.edit', $tipoEntidade->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('tipos.destroy', $tipoEntidade->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de tipos de entidade!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $tipoEntidades->currentPage() !!} de {!! $tipoEntidades->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $tipoEntidades->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $tipoEntidades->count() !!} de {!! $tipoEntidades->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection