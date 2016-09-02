@extends('app::layouts.main')

@section('title', 'Relatores ')

@section('containerTitle', 'Editar Relator')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('relatores.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($relator , array('route' => array('relatores.update', $relator ->id))) !!}
		@include('app::pessoas.relator.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'relatores.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection