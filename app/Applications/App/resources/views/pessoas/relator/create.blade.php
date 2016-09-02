@extends('app::layouts.main')

@section('title', 'Relatores ')

@section('containerTitle', 'Adicionar Relator')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'relatores.store')) !!}
		@include('app::pessoas.relator.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'relatores.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection