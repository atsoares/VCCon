@extends('app::layouts.main')

@section('title', 'Reservas ')

@section('containerTitle', 'Calendário de Reservas')

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
@endsection

@section('content')
	
	<div id='calendar'></div>

@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection