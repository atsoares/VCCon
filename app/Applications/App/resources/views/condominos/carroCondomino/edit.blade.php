@extends('app::layouts.main')

@section('title', 'Carros ')

@section('containerTitle', 'Editar Carro')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('carros.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('carros.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($carro , array('route' => array('carros.update', $carro ->id))) !!}
		@include('app::condominos.carroCondomino.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'carros.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection