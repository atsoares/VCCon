@extends('app::layouts.main')

@section('title', 'Secretários ')

@section('containerTitle', 'Visualizar Secretário')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('secretarios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('secretarios.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $secretario->present()->createdAt() }} |
				Atualizado em: {{ $secretario->present()->updatedAt() }}
			</p>

			<b>Pessoa</b>
			<p class="text-muted">{{ $secretario->pessoas->nome_completo }}</p>
			<hr>

			<b>Tipo de Secretário</b>
			<p class="text-muted">{{ $secretario->secretarioTipos->nome }}</p>
			<hr>

			<b>Modelo de certidão</b>
			<p class="text-muted">{{ $secretario->modelo_certidao }}</p>
			<hr>

			<b>Secretário está exercício</b>
			<p class="text-muted">{{ $secretario->present()->emExercicio() }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $secretario->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $secretario->id, 'prefixRoute' => 'secretarios'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $secretario->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $secretario->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $secretario->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection