@extends('app::layouts.main')

@section('title', 'Reuniões ')

@section('containerTitle', 'Visualizar Reunião')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('reunioes.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('reunioes.create') }}">
			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>
			Adicionar
		</a>
	</li>
	<li>
		<a href="{{ route('reservas.calendario') }}">
			<i class="fa fa-calendar fa-fw" aria-hidden="true"></i>
			Calendário
		</a>
	</li>	
@endsection

@section('content')

	<div class="col-md-6 box-visualizar">
		<h3>Informações</h3>
		<div class="box-body">
			<p  class="text-muted">
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $reuniao->present()->createdAt() }} |
				Atualizado em: {{ $reuniao->present()->updatedAt() }}
			</p>

			<b>Data da reunião</b>
			<p class="text-muted">{{ $reuniao->present()->dataInicio }}</p>
			<hr>

			<b>Horário de início</b>
			<p class="text-muted">{{ $reuniao->present()->horaInicio  }}</p>
			<hr>

			<b>Tema</b>
			<p class="text-muted">{{ $reuniao->tema }}</p>
			<hr>

			<b>Pauta</b>
			<p class="text-muted">{{ $reuniao->observacao  }}</p>
			<hr>

			<b>Condôminos presente</b>
			<p class="text-muted">{{ $reuniao->condominos_presente }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $reuniao->id, 'prefixRoute' => 'reunioes'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $reuniao->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $reuniao->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $reuniao->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection