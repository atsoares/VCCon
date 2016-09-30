@extends('app::layouts.main')

@section('title', 'Contatos ')

@section('containerTitle', 'Editar Contato')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('contatos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('contatos.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($contato , array('route' => array('contatos.update', $contato ->id))) !!}
		@include('app::condominos.contatoCondomino.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'contatos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection