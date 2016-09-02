@extends('app::layouts.main')

@section('title', 'Datas LRF ')

@section('containerTitle', 'Listar Datas LRF')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('datas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>EXERCÍCIO</th>
			<th>PERÍODO</th>
			<th>DATA LIMITE</th>
			<th>DATA DE PUBLICAÇÃO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($lrfDatas as $lrfData)
				<tr>
					<td>{{ $lrfData->exercicio }}</td>
					<td>{{ $lrfData->getLrfPeriodo->nome }}</td>
					<td>{{ $lrfData->present()->dataPublicacao() }}</td>
					<td>{{ $lrfData->present()->dataLimite() }}</td>
					<td>
						<a href="{{ route('datas.show', $lrfData->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('datas.edit', $lrfData->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('datas.destroy', $lrfData->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de datas!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $lrfDatas->currentPage() !!} de {!! $lrfDatas->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $lrfDatas->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $lrfDatas->count() !!} de {!! $lrfDatas->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection