@extends('app::layouts.main')

@section('title', 'Atividades Funcionário ')

@section('containerTitle', 'Listar atividades')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcoes.create') }}">
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
			@forelse ($funcoes as $funcao)
				<tr>				
					<td>{{ $funcao->nome }}</td>
					<td>{{ $funcao->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('funcoes.show', $funcao->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('funcoes.edit', $funcao->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('funcoes.destroy', $funcao->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="8">Não há registros de funcoes!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $funcoes->currentPage() !!} de {!! $funcoes->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $funcoes->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $funcoes->count() !!} de {!! $funcoes->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection