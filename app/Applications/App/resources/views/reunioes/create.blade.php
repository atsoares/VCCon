@extends('app::layouts.main')

@section('title', 'Reuniões ')

@section('containerTitle', 'Adicionar Reunião')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('reunioes.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
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
	{!! Form::open(array('route' => 'reunioes.store')) !!}
		@include('app::reunioes.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'reunioes.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
	
@endsection