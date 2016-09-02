@extends('app::layouts.main')

@section('title', 'Pessoas ')

@section('containerTitle', 'Listar Pessoas')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('pessoas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>CPF</th>
			<th>NOME COMPLETO</th>
			<th>DATA NOMEAÇÃO</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($pessoas as $pessoa)
				<tr>
					<td>{{ $pessoa->cpf }}</td>
					<td>{{ $pessoa->nome_completo }}</td>
					<td>{{ $pessoa->present()->dataNomeacao() }}</td>
					<td>{{ $pessoa->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('pessoas.show', $pessoa->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('pessoas.edit', $pessoa->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('pessoas.destroy', $pessoa->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de pessoas!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $pessoas->currentPage() !!} de {!! $pessoas->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $pessoas->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $pessoas->count() !!} de {!! $pessoas->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection