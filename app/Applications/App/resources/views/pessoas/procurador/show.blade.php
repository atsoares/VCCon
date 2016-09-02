@extends('app::layouts.main')

@section('title', 'Procuradores ')

@section('containerTitle', 'Visualizar Procurador')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('procuradores.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('procuradores.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $procurador->present()->createdAt() }} |
				Atualizado em: {{ $procurador->present()->updatedAt() }}
			</p>

			<b>Pessoa</b>
			<p class="text-muted">{{ $procurador->pessoas->nome_completo }}</p>
			<hr>

			<b>Tipo de Procurador</b>
			<p class="text-muted">{{ $procurador->procuradorTipos->nome }}</p>
			<hr>

			<b>Código PE</b>
			<p class="text-muted">{{ $procurador->codigo_pe }}</p>
			<hr>

			<b>Procurador Substituído</b>
			<p class="text-muted">{{ $procurador->procurador_substituido }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $procurador->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $procurador->id, 'prefixRoute' => 'procuradores'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $procurador->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $procurador->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $procurador->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection