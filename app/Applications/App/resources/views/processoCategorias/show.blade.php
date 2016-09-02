@extends('app::layouts.main')

@section('title', 'Categorias de Processo ')

@section('containerTitle', 'Visualizar Categoria de Processo')

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

<div class="col-md-6 box-visualizar">
    <h3>Informações</h3>
    <div class="box-body">
        <p  class="text-muted">
            <i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $processoCategorias->present()->createdAt() }} |
            Atualizado em: {{ $processoCategorias->present()->updatedAt() }}
        </p>

        <b>Código</b>
        <p class="text-muted">{{ $processoCategorias->codigo }}</p>
        <hr>

        <b>Nome</b>
        <p class="text-muted">{{ $processoCategorias->nome }}</p>
        <hr>

        <b>Ativo</b>
        <p class="text-muted">{{ $processoCategorias->ativo }}</p>

        @include('app::partials.boxFooter', ['view' => 'show', 'id' => $processoCategorias->id, 'prefixRoute' => 'processoCategorias'])

    </div>
</div>
<div class="col-md-6">
    <h3>Timeline</h3>
    <ul class="timeline">
        <li class="time-label">
            <span class="bg-green">
                10 Feb. 2014
            </span>
        </li>
        <li>
            <!-- timeline icon -->
            <i class="fa fa-check bg-blue" aria-hidden="true"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> {{ $processoCategorias->present()->createdAt() }}</span>

                <h3 class="timeline-header"><a href="#">Edição</a></h3>

                <div class="timeline-body">
                    Descrição
                </div>
            </div>
        </li>
        <li>
            <!-- timeline icon -->
            <i class="fa fa-check bg-blue" aria-hidden="true"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> {{ $processoCategorias->present()->createdAt() }}</span>

                <h3 class="timeline-header"><a href="#">Edição</a></h3>

                <div class="timeline-body">
                    Descrição
                </div>
            </div>
        </li>
        <li class="time-label">
            <span class="bg-green">
                10 Feb. 2014
            </span>
        </li>
        <li>
            <!-- timeline icon -->
            <i class="fa fa-check bg-blue" aria-hidden="true"></i>
            <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> {{ $processoCategorias->present()->createdAt() }}</span>

                <h3 class="timeline-header"><a href="#">Criação</a></h3>

                <div class="timeline-body">
                    Descrição
                </div>
            </div>
        </li>
    </ul>
</div>

@endsection