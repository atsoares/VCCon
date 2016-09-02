@extends('app::layouts.main')

@section('title', ' Órgãos Julgadores ')

@section('containerTitle', 'Adicionar Órgão Julgador')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('orgaosJulgadores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'orgaosJulgadores.store')) !!}
		@include('app::orgaosJulgadores.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'orgaosJulgadores.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection