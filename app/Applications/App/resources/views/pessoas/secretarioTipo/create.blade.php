@extends('app::layouts.main')

@section('title', 'Tipo Secretários ')

@section('containerTitle', 'Adicionar Tipo Secretário')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('secretarioTipos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'secretarioTipos.store')) !!}
		@include('app::pessoas.secretarioTipo.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'secretarioTipos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection