@extends('app::layouts.main')

@section('title', 'Funcionarios ')

@section('containerTitle', 'Visualizar Funcionario')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('funcionarios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('funcionarios.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $funcionario->present()->createdAt() }} |
				Atualizado em: {{ $funcionario->present()->updatedAt() }}
			</p>

			<b>Nome</b>
			<p class="text-muted">{{ $funcionario->name }}</p>
			<hr>

			<b>CPF</b>
			<p class="text-muted">{{ $funcionario->cpf }}</p>
			<hr>

			<b>Telefone</b>
			<p class="text-muted">{{ $funcionario->telefone }}</p>
			<hr>

			<b>Atividade/Função</b>
			<p class="text-muted">{{ $funcionario->funcoes->nome }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $funcionario->present()->isAtivo() }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $funcionario->id, 'prefixRoute' => 'funcionarios'])

		</div>
	</div>
	<div class="col-md-6">
		<h3>Timeline</h3>
		<ul class="timeline">
			<li class="time-label">
				<span class="bg-green">
					{{ $funcionario->present()->updatedAt() }}
				</span>
			</li>
			<li>
				<!-- timeline icon -->
				<i class="fa fa-check bg-blue" aria-hidden="true"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> {{ $funcionario->present()->updatedAt() }}</span>

					<h3 class="timeline-header"><a href="#">Edição</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
			<li class="time-label">
				<span class="bg-green">
					{{ $funcionario->present()->createdAt() }}
				</span>
			</li>
			<li>
				<!-- timeline icon -->
				<i class="fa fa-check bg-blue" aria-hidden="true"></i>
				<div class="timeline-item">
					<span class="time"><i class="fa fa-clock-o"></i> {{ $funcionario->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection