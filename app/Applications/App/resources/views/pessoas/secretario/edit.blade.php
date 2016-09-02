@extends('app::layouts.main')

@section('title', 'Secretários ')

@section('containerTitle', 'Editar Secretário')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('secretarios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('secretarios.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($secretario , array('route' => array('secretarios.update', $secretario ->id))) !!}
		@include('app::pessoas.secretario.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'secretarios.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection