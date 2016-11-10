@extends('app::layouts.main')

@section('title', 'Áreas Externas ')

@section('containerTitle', 'Listar Áreas Externas')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('areasExternas.create') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
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
			@forelse ($areasExternas as $areaExterna)
			
			
				<tr>
					<td>{{ $areaExterna->nome }}</td>
					<td>{{ $areaExterna->present()->isAtivo() }}</td>
					
					<td>
						<a href="{{ route('areasExternas.show', $areaExterna->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('areasExternas.edit', $areaExterna->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de áreas externas!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $areasExternas->currentPage() !!} de {!! $areasExternas->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $areasExternas->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $areasExternas->count() !!} de {!! $areasExternas->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection

