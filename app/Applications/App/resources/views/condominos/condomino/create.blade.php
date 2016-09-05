@extends('app::layouts.main')

@section('title', 'Condominos ')

@section('containerTitle', 'Adicionar Condomino')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('condominos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'condominos.store')) !!}
		@include('app::condominos.condomino.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'condominos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection