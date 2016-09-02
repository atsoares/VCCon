@extends('app::layouts.main')

@section('title', 'Períodos LRF ')

@section('containerTitle', 'Editar Período LRF')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('periodos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('periodos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($lrfPeriodo, array('route' => array('periodos.update', $lrfPeriodo->id))) !!}
		@include('app::lrfProcessos.lrfPeriodo.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'periodos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection