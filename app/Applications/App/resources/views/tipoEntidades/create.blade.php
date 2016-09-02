@extends('app::layouts.main')

@section('title', 'Tipo Entidades ')

@section('containerTitle', 'Adicionar Tipo Entidade')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('tipos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'tipos.store')) !!}
		@include('app::tipoEntidades.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'tipos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection