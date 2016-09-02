@extends('app::layouts.main')

@section('title', 'Municipios ')

@section('containerTitle', 'Listar Municipios')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('municipios.create') }}">
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
			<th>CODIGO TCM</th>
			<th>CODIGO IBGE</th>
			<th>CODIGO GEONAMES</th>
                        <th>CEP</th>
                        <th>ATIVO</th>
                        <th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($municipios as $municipio)
				<tr>
					<td>{{ $municipio->nome }}</td>
					<td>{{ $municipio->sigla }}</td>
                                        <td>{{ $municipio->codigo_tcm }}</td>
                                        <td>{{ $municipio->codigo_ibge }}</td>
					<td>{{ $municipio->codigo_geonames}}</td>
					<td>{{ $municipio->cep }}</td>
                                        <td>{{ $municipio->ativo }}</td>
					<td>
						<a href="{{ route('municipios.show', $municipio->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('municipios.edit', $municipio->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('municipios.destroy', $municipio->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="8">Não há registros de municipios!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $municipios->currentPage() !!} de {!! $municipios->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $municipios->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $municipios->count() !!} de {!! $municipios->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection