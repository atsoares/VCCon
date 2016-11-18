@extends('app::layouts.main')

@section('title', 'Eventos ')

@section('containerTitle', 'Calendário de Eventos')

@section('buttonsHeader')
	@parent
@endsection

@section('content')

	Legenda: 
	<a href="{{ route('reservas.index') }}" class="btn btn-xs btn-warning">
		<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Reservas
	</a>
	<a href="{{ route('reunioes.index') }}" class="btn btn-xs btn-success">
		<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Reuniões
	</a>
	
	<div id='calendar'></div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection