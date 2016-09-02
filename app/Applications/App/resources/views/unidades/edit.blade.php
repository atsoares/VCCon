
@extends('app::layouts.main')

@section('title', 'Unidades ')

@section('containerTitle', 'Editar Unidade')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('unidades.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('unidades.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($unidade, array('route' => array('unidades.update', $unidade->id))) !!}
		@include('app::unidades.unidade.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'unidades.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection