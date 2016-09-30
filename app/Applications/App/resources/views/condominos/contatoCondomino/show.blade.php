@extends('app::layouts.main')

@section('title', 'Contatos ')

@section('containerTitle', 'Visualizar Contatos')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('contatos.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('contatos.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $contato->present()->createdAt() }} |
				Atualizado em: {{ $contato->present()->updatedAt() }}
			</p>

			<b>Nome</b>
			<p class="text-muted">{{ $contato->nome }}</p>
			<hr>

			<b>Telefone</b>
			<p class="text-muted">{{ $contato->telefone }}</p>
			<hr>

			<b>Email</b>
			<p class="text-muted">{{ $contato->email }}</p>
			<hr>

			<b>Unidade</b>
			<p class="text-muted">{{ $contato->condominos->unidade_id }}</p>
			<hr>

			<b>Condômino</b>
			<p class="text-muted">{{ $contato->condominos->name }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $contato->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $contato->id, 'prefixRoute' => 'contatos'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $contato->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $contato->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $contato->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection