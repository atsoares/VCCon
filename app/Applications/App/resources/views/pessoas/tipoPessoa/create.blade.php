@extends('app::layouts.main')

@section('title', 'Tipo Pessoas ')

@section('containerTitle', 'Adicionar Tipo Pessoa')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('tipoPessoas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'tipoPessoas.store')) !!}
		@include('app::pessoas.tipoPessoa.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'tipoPessoas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection