@extends('app::layouts.main')

@section('title', 'Pessoas ')

@section('containerTitle', 'Editar Pessoa')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('pessoas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('pessoas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($pessoa, array('route' => array('pessoas.update', $pessoa->id))) !!}
		@include('app::pessoas.pessoa.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'pessoas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection