@extends('app::layouts.main')

@section('title', 'Reservas ')

@section('containerTitle', 'Listar Reservas')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('reservas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>DATA</th>
			<th>CONDÔMINO</th>
			<th>ÁREA RESERVADA</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($reservas as $reserva)
				<tr>
					<td>{{ $reserva->present()->dataTimeInicio }}</td>
					<td>{{ $reserva->condomino->nome }}</td>
					<td>{{ $reserva->areaExterna->nome }}</td>
					<td>{{ $reserva->present()->isAtivo() }}</td>
					<td>

						<a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('reservas.destroy', $reserva->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="6">Não há registros de reservas!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

	<div class="row">
		<div class="col-md-4">
			<p>Página {!! $reservas->currentPage() !!} de {!! $reservas->lastPage() !!}</p>
		</div>

		<div class="col-md-4 text-center">
			{{ $reservas->render() }}
		</div>

		<div class="col-md-4 text-right">
			<p>Visualizando {!! $reservas->count() !!} de {!! $reservas->total() !!}</p>
		</div>
	</div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
	

@endsection