@extends('app::layouts.main')

@section('title', 'Atividades Funcionário ')

@section('containerTitle', 'Editar Atividade')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcoes.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('funcoes.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($funcao , array('route' => array('funcoes.update', $funcao ->id))) !!}
		@include('app::funcionarios.funcao.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'funcoes.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection