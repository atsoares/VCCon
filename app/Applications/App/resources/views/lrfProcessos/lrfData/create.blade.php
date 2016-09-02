@extends('app::layouts.main')

@section('title', 'Datas LRF ')

@section('containerTitle', 'Adicionar Data LRF')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('datas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
@endsection

@section('content')
	{!! Form::open(array('route' => 'datas.store')) !!}
		@include('app::lrfProcessos.lrfData.partials.form')
		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'datas.index'])
	{!! Form::close() !!}
@endsection

@section('scripts')
	@parent
	<script src="{{ elixir('js/app.js') }}"></script>
@endsection