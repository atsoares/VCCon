@extends('app::layouts.main')

@section('title', 'Carros ')

@section('containerTitle', 'Adicionar Carro')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('carros.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'carros.store')) !!}
		@include('app::condominos.carroCondomino.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'carros.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection