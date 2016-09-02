@extends('app::layouts.main')

@section('title', 'Procuradores ')

@section('containerTitle', 'Adicionar Procurador')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('procuradores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'procuradores.store')) !!}
		@include('app::pessoas.procurador.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'procuradores.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection