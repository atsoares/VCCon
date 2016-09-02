@extends('app::layouts.main')

@section('title', 'Tipo Pessoas ')

@section('containerTitle', 'Listar Tipo Pessoas')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('tipoPessoas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>NOME</th>
			<th>RESPONSÁVEL</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($tipoPessoas as $tipoPessoa)
				<tr>
					<td>{{ $tipoPessoa->nome }}</td>
					<td>{{ $tipoPessoa->present()->isResponsavel() }}</td>
					<td>{{ $tipoPessoa->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('tipoPessoas.show', $tipoPessoa->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('tipoPessoas.edit', $tipoPessoa->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('tipoPessoas.destroy', $tipoPessoa->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de tipos de pessoa!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $tipoPessoas->currentPage() !!} de {!! $tipoPessoas->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $tipoPessoas->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $tipoPessoas->count() !!} de {!! $tipoPessoas->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection