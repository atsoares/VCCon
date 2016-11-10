@extends('app::layouts.main')

@section('title', 'Reservas ')

@section('containerTitle', 'Editar Reserva')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('reservas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('reservas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
	<li>
		<a href="{{ route('reservas.calendario') }}">
			<i class="fa fa-calendar fa-fw" aria-hidden="true"></i>
			Calendário
		</a>
	</li>	
@endsection

@section('content')
	{!! Form::model($reserva, array('route' => array('reservas.update', $reserva->id))) !!}
		@include('app::reservas.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'reservas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection