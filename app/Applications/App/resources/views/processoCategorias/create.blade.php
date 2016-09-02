@extends('app::layouts.main')

@section('title', 'Categorias de Processo')

@section('containerTitle', 'Adicionar Categoria de Processo')

@section('buttonsHeader')
@parent
<li>
    <a href="{{ route('processoCategorias.index') }}">
        <i class="fa fa-list fa-fw" aria-hidden="true"></i>
        Listar
    </a>
</li>
@endsection

@section('content')
{!! Form::open(array('route' => 'processoCategorias.store')) !!}
@include('app::processoCategorias.partials.form')
@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'processoCategorias.index'])
{!! Form::close() !!}
@endsection

@section('scripts')
@parent
<script src="{{ elixir('js/app.js') }}"></script>
@endsection