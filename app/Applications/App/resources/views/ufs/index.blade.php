@extends('app::layouts.main')

@section('title', 'Ufs ')

@section('containerTitle', 'Listar Ufs')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('ufs.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>NOME</th>
			<th>SIGLA</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($ufs as $uf)
				<tr>
					<td>{{ $uf->nome }}</td>
					<td>{{ $uf->sigla }}</td>
					<td>{{ $uf->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('ufs.show', $uf->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('ufs.edit', $uf->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('ufs.destroy', $uf->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de ufs!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $ufs->currentPage() !!} de {!! $ufs->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $ufs->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $ufs->count() !!} de {!! $ufs->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection