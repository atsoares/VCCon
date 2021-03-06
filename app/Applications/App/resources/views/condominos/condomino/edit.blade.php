@extends('app::layouts.main')

@section('title', 'Condominos ')

@section('containerTitle', 'Editar Condomino')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('condominos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('condominos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($condomino, array('route' => array('condominos.update', $condomino->id))) !!}
		@include('app::condominos.condomino.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'condominos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection