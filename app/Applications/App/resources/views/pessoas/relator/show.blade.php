@extends('app::layouts.main')

@section('title', 'Relatores ')

@section('containerTitle', 'Visualizar Relator')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('relatores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('relatores.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $relator->present()->createdAt() }} |
				Atualizado em: {{ $relator->present()->updatedAt() }}
			</p>

			<b>Pessoa</b>
			<p class="text-muted">{{ $relator->pessoas->nome_completo }}</p>
			<hr>

			<b>Tipo de relator</b>
			<p class="text-muted">{{ $relator->relatorTipos->nome }}</p>
			<hr>

			<b>Código PE</b>
			<p class="text-muted">{{ $relator->codigo_pe }}</p>
			<hr>

			<b>relator Substituído</b>
			<p class="text-muted">{{ $relator->relator_substituido }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $relator->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $relator->id, 'prefixRoute' => 'relatores'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $relator->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $relator->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $relator->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection