@extends('app::layouts.main')

@section('title', 'Tipo Procuradores ')

@section('containerTitle', 'Adicionar Tipo Procurador')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('procuradorTipos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'procuradorTipos.store')) !!}
		@include('app::pessoas.procuradorTipo.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'procuradorTipos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection