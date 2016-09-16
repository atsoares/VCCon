@extends('app::layouts.main')

@section('title', 'Contatos ')

@section('containerTitle', 'Adicionar Contato')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('contatos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'contatos.store')) !!}
		@include('app::condominos.contatoCondomino.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'contatos.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection