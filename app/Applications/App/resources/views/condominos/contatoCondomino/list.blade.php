@extends('app::layouts.main')

@section('title', 'Contatos ')

@section('containerTitle', 'Listar contatos')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('contatos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>CONDÔMINO</th>
			<th>NOME</th>
			<th>TELEFONE</th>
			<th>UNIDADE</th>
			<th>ATIVO</th>
			<th>AÇÕES</th>
		</thead>
		<tbody>
			@forelse ($contatos as $contato)
				<tr>
					<td>{{ $contato->condominos->name }}</td>
					<td>{{ $contato->nome }}</td>
					<td>{{ $contato->telefone }}</td>			
					<td>{{ $contato->condominos->unidade_id }}</td>
					<td>{{ $contato->present()->isAtivo() }}</td>
					<td>
						<a href="{{ route('contatos.show', $contato->id) }}" class="btn btn-xs btn-info">
							<i class="fa fa-search fa-fw" aria-hidden="true"></i>
							VISUALIZAR
						</a>

						<a href="{{ route('contatos.edit', $contato->id) }}" class="btn btn-xs btn-primary">
							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
							EDITAR
						</a>

						<a href="{{ route('contatos.destroy', $contato->id) }}" class="btn btn-xs btn-danger btn-message-deletar">
							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>
							DELETAR
						</a>
					</td>
				</tr>
			@empty
				<tr>
					<td colspan="8">Não há registros de contatos!</td>
				</tr>
			@endforelse
		</tbody>
	</table>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection