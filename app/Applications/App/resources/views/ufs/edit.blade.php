@extends('app::layouts.main')

@section('title', 'Ufs ')

@section('containerTitle', 'Editar Uf')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('ufs.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('ufs.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::model($uf, array('route' => array('ufs.update', $uf->id))) !!}
		@include('app::ufs.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'ufs.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection