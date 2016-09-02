@extends('app::layouts.main')

@section('title', 'Unidades ')

@section('containerTitle', 'Adicionar Unidade')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('unidades.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'unidades.store')) !!}
		@include('app::unidades.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'unidades.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection
