@extends('app::layouts.main')

@section('title', 'Tipo Relatores ')

@section('containerTitle', 'Editar Tipo Relator')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatorTipos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('relatorTipos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($relatorTipo, array('route' => array('relatorTipos.update', $relatorTipo->id))) !!}
		@include('app::pessoas.relatorTipo.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'relatorTipos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection