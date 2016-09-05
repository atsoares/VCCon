@extends('app::layouts.main')

@section('title', 'Condominos ')

@section('containerTitle', 'Listar Condominos')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('condominos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>NOME</th>
			<th>CPF</th>
			<th>UNIDADE</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($condominos as $condomino)
				<tr>
					<td>{{ $condomino->name }}</td>
					<td>{{ $condomino->cpf }}</td>
					<td>{{ $condomino->unidades->numero }}</td>
					<td>{{ $condomino->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('condominos.show', $condomino->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('condominos.edit', $condomino->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('condominos.destroy', $condomino->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de condominos!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $condominos->currentPage() !!} de {!! $condominos->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $condominos->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $condominos->count() !!} de {!! $condominos->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection