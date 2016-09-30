@extends('app::layouts.main')

@section('title', 'Funcionarios ')

@section('containerTitle', 'Editar Funcionario')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcionarios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('funcionarios.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($funcionario, array('route' => array('funcionarios.update', $funcionario->id))) !!}
		@include('app::funcionarios.funcionario.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'funcionarios.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection