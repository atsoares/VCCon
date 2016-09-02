@extends('app::layouts.main')

@section('title', 'Categorias de Processo ')

@section('containerTitle', 'Editar Categoria de Processo')

@section('buttonsHeader')
@parent
<li>
    <a href="{{ route('processoCategorias.index') }}">
        <i class="fa fa-list fa-fw" aria-hidden="true"></i>
        Listar
    </a>
</li>
<li>
    <a href="{{ route('processoCategorias.create') }}">
        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>
        Adicionar
    </a>
</li>
@endsection

@section('content')
{!! Form::model($processoCategorias, array('route' => array('processoCategorias.update', $processoCategorias->id))) !!}
@include('app::processoCategorias.partials.form')
@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'processoCategorias.index'])
{!! Form::close() !!}
@endsection

@section('scripts')
@parent
<script src="{{ elixir('js/app.js') }}"></script>
@endsection