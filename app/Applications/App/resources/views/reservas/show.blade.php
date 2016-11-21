@extends('app::layouts.main')

@section('title', 'Reservas ')

@section('containerTitle', 'Visualizar Reserva')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('reservas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('reservas.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $reserva->present()->createdAt() }} |
				Atualizado em: {{ $reserva->present()->updatedAt() }}
			</p>

			<b>Reservado por</b>
			<p class="text-muted">{{ $reserva->condomino->nome }}</p>
			<hr>

			<b>Área reservada</b>
			<p class="text-muted">{{ $reserva->areaExterna->nome }}</p>
			<hr>

			<b>Data da reserva</b>
			<p class="text-muted">{{ $reserva->present()->dataInicio }}</p>
			<hr>

			<b>Horário de início</b>
			<p class="text-muted">{{ $reserva->present()->horaInicio  }}</p>
			<hr>

			<b>Horário de término</b>
			<p class="text-muted">{{ $reserva->present()->horaFim  }}</p>
			<hr>

			<b>Observação</b>
			<p class="text-muted">{{ $reserva->observacao  }}</p>
			<hr>

			<b>Ativa</b>
			<p class="text-muted">{{ $reserva->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $reserva->id, 'prefixRoute' => 'reservas'])

		</div>
	</div>
	<div class="col-md-6">
		<h3>Timeline</h3>
		<ul class="timeline">
			<li class="time-label">
				<span class="bg-green">
					{{ $reserva->present()->updatedAt() }}
				</span>
			</li>
			<li>
				<!-- timeline icon -->
				<i class="fa fa-check bg-blue" aria-hidden="true"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> {{ $reserva->present()->updatedAt() }}</span>

					<h3 class="timeline-header"><a href="#">Edição</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
			<li class="time-label">
				<span class="bg-green">
					{{ $reserva->present()->createdAt() }}
				</span>
			</li>
			<li>
				<!-- timeline icon -->
				<i class="fa fa-check bg-blue" aria-hidden="true"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> {{ $reserva->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection