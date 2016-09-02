@extends('app::layouts.main')

@section('title', 'Tipo Entidades ')

@section('containerTitle', 'Editar Tipo Entidade')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('tipos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('tipos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($tipoEntidade, array('route' => array('tipos.update', $tipoEntidade->id))) !!}
		@include('app::tipoEntidades.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'tipos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection