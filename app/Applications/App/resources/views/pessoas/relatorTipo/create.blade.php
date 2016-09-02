@extends('app::layouts.main')

@section('title', 'Tipo Relatores ')

@section('containerTitle', 'Adicionar Tipo Relator')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatorTipos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'relatorTipos.store')) !!}
		@include('app::pessoas.relatorTipo.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'relatorTipos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection