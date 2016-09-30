@extends('app::layouts.main')

@section('title', 'Funcionarios ')

@section('containerTitle', 'Adicionar Funcionario')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcionarios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'funcionarios.store')) !!}
		@include('app::funcionarios.funcionario.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'funcionarios.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection