@extends('app::layouts.main')

@section('title', 'Secretários ')

@section('containerTitle', 'Listar Secretário')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('secretarios.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>PESSOA</th>
			<th>TIPO</th>
			<th>MODELO DE CERTIDÃO</th>
			<th>EM EXERCÍCIO</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($secretarios as $secretario)
				<tr>
					<td>{{ $secretario->pessoas->nome_completo }}</td>
					<td>{{ $secretario->secretarioTipos->nome }}</td>
					<td>{{ $secretario->modelo_certidao }}</td>
					<td>{{ $secretario->present()->emExercicio() }}</td>
					<td>{{ $secretario->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('secretarios.show', $secretario->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('secretarios.edit', $secretario->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('secretarios.destroy', $secretario->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de secretários!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $secretarios->currentPage() !!} de {!! $secretarios->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $secretarios->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $secretarios->count() !!} de {!! $secretarios->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection