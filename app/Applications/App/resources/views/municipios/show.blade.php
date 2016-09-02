@extends('app::layouts.main')

@section('title', 'Municipios ')

@section('containerTitle', 'Visualizar Municipio')

@section('buttonsHeader')
	@parent
	<li>
		<a href="{{ route('municipios.index') }}">
			<i class="fa fa-list fa-fw" aria-hidden="true"></i>
			Listar
		</a>
	</li>
	<li>
		<a href="{{ route('municipios.create') }}">
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
				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $municipios->present()->createdAt() }} |
				Atualizado em: {{ $municipios->present()->updatedAt() }}
			</p>

			<b>Nome</b>
			<p class="text-muted">{{ $municipios->nome }}</p>
			<hr>

			<b>ID UF</b>
			<p class="text-muted">{{ $municipios->ids_uf }}</p>
			<hr>

			<b>Sigla</b>
			<p class="text-muted">{{ $municipios->sigla }}</p>
			<hr>

			<b>Codigo TCM</b>
			<p class="text-muted">{{ $municipios->codigo_tcm }}</p>
			<hr>
                        
                        <b>Codigo IBGE</b>
			<p class="text-muted">{{ $municipios->codigo_ibge }}</p>
			<hr>
                        
                        <b>Codigo GEONAMES</b>
			<p class="text-muted">{{ $municipios->codigo_geonames }}</p>
			<hr>
                        
			

			<b>CEP</b>
			<p class="text-muted">{{ $municipios->cep }}</p>
			<hr>

			<b>Ativo</b>
			<p class="text-muted">{{ $municipios->ativo }}</p>

			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $municipios->id, 'prefixRoute' => 'municipios'])

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $municipios->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $municipios->present()->createdAt() }}</span>

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
					<span class="time"><i class="fa fa-clock-o"></i> {{ $municipios->present()->createdAt() }}</span>

					<h3 class="timeline-header"><a href="#">Criação</a></h3>

					<div class="timeline-body">
						Descrição
					</div>
				</div>
			</li>
		</ul>
	</div>

@endsection