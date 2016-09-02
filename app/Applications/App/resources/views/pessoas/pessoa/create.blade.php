@extends('app::layouts.main')

@section('title', 'Pessoas ')

@section('containerTitle', 'Adicionar Pessoa')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('pessoas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'pessoas.store')) !!}
		@include('app::pessoas.pessoa.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'pessoas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection