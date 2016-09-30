@extends('app::layouts.main')

@section('title', 'Atividades Funcionário ')

@section('containerTitle', 'Adicionar Atividade')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcoes.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'funcoes.store')) !!}
		@include('app::funcionarios.funcao.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'funcoes.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection