@extends('app::layouts.main')

@section('title', 'Períodos LRF ')

@section('containerTitle', 'Visualizar Período LRF')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('periodos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('periodos.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $lrfPeriodo->present()->createdAt() }} |
				Atualizado em: {{ $lrfPeriodo->present()->updatedAt() }}
			</p>

			<b>Código</b>
			<p class="text-muted">{{ $lrfPeriodo->codigo }}</p>
			<hr>

			<b>Nome</b>
			<p class="text-muted">{{ $lrfPeriodo->nome }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $lrfPeriodo->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $lrfPeriodo->id, 'prefixRoute' => 'periodos'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfPeriodo->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfPeriodo->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfPeriodo->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection