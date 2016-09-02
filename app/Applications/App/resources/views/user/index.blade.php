@extends('app::layouts.main')

@section('title', 'Usuários')

@section('containerTitle', 'Listar Usuários')

@section('buttonsHeader')
	@parent
	<a href="#" class="btn btn-flat btn-xs btn-default">
    	<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
      	ADICIONAR
    </a>
@endsection

@section('content')	
	
	<table class="table table-bordered table-striped table-condensed table-hover dataTable">
		<thead>
			<th>ID</th>
			<th>NOME</th>
			<th>EMAIL</th>
			<th>CRIADO EM</th>
			<th>ATUALIZADO EM</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->created_at }}</td>
					<td>{{ $user->updated_at }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{!! $users->render() !!}

@endsection