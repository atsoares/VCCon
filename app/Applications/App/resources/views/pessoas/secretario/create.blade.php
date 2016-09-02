@extends('app::layouts.main')

@section('title', 'Secretários ')

@section('containerTitle', 'Adicionar Secretário')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('secretarios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'secretarios.store')) !!}
		@include('app::pessoas.secretario.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'secretarios.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection