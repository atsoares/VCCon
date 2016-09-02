@extends('app::layouts.main')

@section('title', 'Tipo Pessoas ')

@section('containerTitle', 'Editar Tipo Pessoa')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('tipoPessoas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('tipoPessoas.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($tipoPessoa, array('route' => array('tipoPessoas.update', $tipoPessoa->id))) !!}
		@include('app::pessoas.tipoPessoa.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'tipoPessoas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection