@extends('app::layouts.main')

@section('title', 'Municipios ')

@section('containerTitle', 'Editar Municipio')

@section('buttonsHeader')
@parent
<li>
    <a href="{{ route('municipios.index') }}">
        <i class="fa fa-list fa-fw" aria-hidden="true"></i>
        Listar
    </a>
</li>
<li>
    <a href="{{ route('municipios.create') }}">
        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
        Adicionar
    </a>
</li>
@endsection

@section('content')
{!! Form::model($municipios, array('route' => array('municipios.update', $municipios->id))) !!}
@include('app::municipios.partials.form')
@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'municipios.index'])
{!! Form::close() !!}
@endsection

@section('scripts')
@parent
<script src="{{ elixir('js/app.js') }}"></script>
@endsection