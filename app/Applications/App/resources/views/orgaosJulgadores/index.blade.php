@extends('app::layouts.main')

@section('title', '  Órgãos Julgadores ')

@section('containerTitle', 'Listar Órgão Julgador')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('orgaosJulgadores.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>SIGLA</th>	
			<th>NOME</th>			
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($orgaosJulgadores as $orgaoJulgador)
				<tr>
					<td>{{ $orgaoJulgador->codigo }}</td>
					<td>{{ $orgaoJulgador->nome }}</td>					
					<td>{{ $orgaoJulgador->ativo }}</td>
					<td>
						<a href="{{ route('orgaosJulgadores.show', $orgaoJulgador->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('orgaosJulgadores.edit', $orgaoJulgador->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('orgaosJulgadores.destroy', $orgaoJulgador->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de Órgãos Julgadores!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $orgaosJulgadores->currentPage() !!} de {!! $orgaosJulgadores->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $orgaosJulgadores->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $orgaosJulgadores->count() !!} de {!! $orgaosJulgadores->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection