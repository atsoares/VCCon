@extends('app::layouts.main')

@section('title', ' Órgãos Julgadores ')

@section('containerTitle', 'Editar Órgão Julgador')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('orgaosJulgadores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('orgaosJulgadores.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($orgaoJulgador, array('route' => array('orgaosJulgadores.update', $orgaoJulgador->id))) !!}
		@include('app::orgaosJulgadores.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'orgaosJulgadores.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection