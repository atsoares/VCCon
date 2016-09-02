@extends('app::layouts.main')

@section('title', 'Municipios ')

@section('containerTitle', 'Adicionar Municipios')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('municipios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'municipios.store')) !!}
		@include('app::municipios.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'municipios.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection