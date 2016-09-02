@extends('app::layouts.main')

@section('title', 'Pessoas ')

@section('containerTitle', 'Visualizar Pessoa')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('pessoas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('pessoas.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $pessoa->present()->createdAt() }} |
				Atualizado em: {{ $pessoa->present()->updatedAt() }}
			</p>

			<b>CPF</b>
			<p class="text-muted">{{ $pessoa->cpf }}</p>
			<hr>

			<b>Nome Completo</b>
			<p class="text-muted">{{ $pessoa->nome_completo }}</p>
			<hr>

			<b>Nome Condensado</b>
			<p class="text-muted">{{ $pessoa->nome_condensado }}</p>
			<hr>

			<b>Data Nomeação</b>
			<p class="text-muted">{{ $pessoa->present()->dataNomeacao() }}</p>
			<hr>

			<b>Data Posse</b>
			<p class="text-muted">{{ $pessoa->present()->dataPosse() }}</p>
			<hr>

			<b>Data Saída</b>
			<p class="text-muted">{{ $pessoa->present()->dataSaida() }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $pessoa->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $pessoa->id, 'prefixRoute' => 'pessoas'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $pessoa->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $pessoa->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $pessoa->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection