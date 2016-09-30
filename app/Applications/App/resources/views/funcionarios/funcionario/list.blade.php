@extends('app::layouts.main')

@section('title', 'Carros ')

@section('containerTitle', 'Listar carros')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('carros.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>CONDÔMINO</th>
			<th>MARCA</th>
			<th>MODELO</th>
			<th>PLACA</th>
			<th>ANO</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($carros as $carro)
				<tr>				
					<td>{{ $carro->condominos->name }}</td>
					<td>{{ $carro->marca }}</td>
					<td>{{ $carro->modelo }}</td>
					<td>{{ $carro->placa }}</td>					
					<td>{{ $carro->ano }}</td>
					<td>{{ $carro->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('carros.show', $carro->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('carros.destroy', $carro->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="8">Não há registros de carros!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection