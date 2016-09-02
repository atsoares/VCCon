@extends('app::layouts.main')

@section('title', 'Ufs ')

@section('containerTitle', 'Adicionar Uf')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('ufs.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'ufs.store')) !!}
		@include('app::ufs.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'ufs.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection