@extends('app::layouts.main')

@section('title', 'Reuniões ')

@section('containerTitle', 'Listar Reuniões')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('reunioes.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
	<li>
		<a href="{{ route('reservas.calendario') }}">
			<i class="fa fa-calendar fa-fw" aria-hidden="true"></i>
			Calendário
		</a>
	</li>

@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>DATA</th>
			<th>HORÁRIO</th>
			<th>TEMA</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($reunioes as $reuniao)
				<tr>
					<td>{{ $reuniao->present()->dataInicio }}</td>
					<td>{{ $reuniao->present()->horaInicio }}</td>
					<td>{{ $reuniao->tema }}</td>
					<td>

						<a href="{{ route('reunioes.show', $reuniao->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('reunioes.edit', $reuniao->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('reunioes.destroy', $reuniao->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de reuniões!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $reunioes->currentPage() !!} de {!! $reunioes->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $reunioes->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $reunioes->count() !!} de {!! $reunioes->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
	

@endsection