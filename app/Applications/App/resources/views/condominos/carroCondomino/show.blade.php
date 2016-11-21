@extends('app::layouts.main')

@section('title', 'Carros ')

@section('containerTitle', 'Visualizar Carro')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('carros.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('carros.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $carro->present()->createdAt() }} |
				Atualizado em: {{ $carro->present()->updatedAt() }}
			</p>

			<b>Marca</b>
			<p class="text-muted">{{ $carro->marca }}</p>
			<hr>

			<b>Modelo</b>
			<p class="text-muted">{{ $carro->modelo }}</p>
			<hr>

			<b>Placa</b>
			<p class="text-muted">{{ $carro->placa }}</p>
			<hr>

			<b>Ano</b>
			<p class="text-muted">{{ $carro->ano }}</p>
			<hr>

			<b>Condômino</b>
			<p class="text-muted">{{ $carro->condominos->name }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $carro->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $carro->id, 'prefixRoute' => 'carros'])

		</div>
	</div>
	<div class="col-md-6">
		<h3>Timeline</h3>
		<ul class="timeline">
			<li class="time-label">
				<span class="bg-green">
					{{ $carro->present()->updatedAt() }}
				</span>
			</li>
			<li>
				<!-- timeline icon -->
				<i class="fa fa-check bg-blue" aria-hidden="true"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> {{ $carro->present()->updatedAt() }}</span>

					<h3 class="timeline-header"><a href="#">Edição</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
			<li class="time-label">
				<span class="bg-green">
					{{ $carro->present()->createdAt() }}
				</span>
			</li>
			<li>
				<!-- timeline icon -->
				<i class="fa fa-check bg-blue" aria-hidden="true"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> {{ $carro->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection