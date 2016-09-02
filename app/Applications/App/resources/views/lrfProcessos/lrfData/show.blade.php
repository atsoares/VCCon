@extends('app::layouts.main')

@section('title', 'Datas LRF ')

@section('containerTitle', 'Visualizar Data LRF')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('datas.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('datas.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $lrfData->present()->createdAt() }} |
				Atualizado em: {{ $lrfData->present()->updatedAt() }}
			</p>

			<b>Exercício</b>
			<p class="text-muted">{{ $lrfData->exercicio }}</p>
			<hr>

			<b>Período</b>
			<p class="text-muted">{{ $lrfData->getLrfPeriodo->nome }}</p>
			<hr>

			<b>Data Publicação</b>
			<p class="text-muted">{{ $lrfData->present()->dataLimite() }}</p>
			<hr>

			<b>Data Limite</b>
			<p class="text-muted">{{ $lrfData->present()->dataPublicacao() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $lrfData->id, 'prefixRoute' => 'datas'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfData->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfData->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfData->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection