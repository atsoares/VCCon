@extends('app::layouts.main')

@section('title', 'Funcionários ')

@section('containerTitle', 'Listar Funcionários')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcionarios.create') }}">
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
			<th>FUNÇÃO</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($funcionarios as $funcionario)
				<tr>
					<td>{{ $funcionario->nome }}</td>
					<td>{{ $funcionario->cpf }}</td>
					<td>{{ $funcionario->funcoes->nome }}</td>
					<td>{{ $funcionario->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('funcionarios.show', $funcionario->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('funcionarios.edit', $funcionario->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('funcionarios.destroy', $funcionario->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de funcionarios!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $funcionarios->currentPage() !!} de {!! $funcionarios->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $funcionarios->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $funcionarios->count() !!} de {!! $funcionarios->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection