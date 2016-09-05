[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfData/create.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfData/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex bec1706..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfData/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Datas LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Data LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('datas.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::open(array('route' => 'datas.store')) !!}[m
[31m-		@include('app::lrfProcessos.lrfData.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'datas.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfData/edit.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfData/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 0159a73..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfData/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Datas LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Data LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('datas.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('datas.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::model($lrfData, array('route' => array('datas.update', $lrfData->id))) !!}[m
[31m-		@include('app::lrfProcessos.lrfData.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'datas.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfData/index.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfData/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 5aaa251..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfData/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,78 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Datas LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Datas LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('datas.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>EXERCÍCIO</th>[m
[31m-			<th>PERÍODO</th>[m
[31m-			<th>DATA LIMITE</th>[m
[31m-			<th>DATA DE PUBLICAÇÃO</th>[m
[31m-			<th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($lrfDatas as $lrfData)[m
[31m-				<tr>[m
[31m-					<td>{{ $lrfData->exercicio }}</td>[m
[31m-					<td>{{ $lrfData->getLrfPeriodo->nome }}</td>[m
[31m-					<td>{{ $lrfData->present()->dataPublicacao() }}</td>[m
[31m-					<td>{{ $lrfData->present()->dataLimite() }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('datas.show', $lrfData->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('datas.edit', $lrfData->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('datas.destroy', $lrfData->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="6">Não há registros de datas!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $lrfDatas->currentPage() !!} de {!! $lrfDatas->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $lrfDatas->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $lrfDatas->count() !!} de {!! $lrfDatas->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfData/partials/form.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfData/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 65a47d3..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfData/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,21 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('exercicio', 'Exercício *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::number('exercicio', \Carbon\Carbon::now()->year, array('class' => 'form-control', 'readonly')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-3">[m
[31m-        {!! Form::label('periodo_id', 'Períodos *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::select('periodo_id', $lrfPeriodos, null, array('class' => 'form-control', 'placeholder' => 'Selecione um período...')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('data_publicacao', 'Data Publicação *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::date('data_publicacao', null, array('class' => 'form-control')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('data_limite', 'Data Limite *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::date('data_limite', null, array('class' => 'form-control')) !!}[m
[31m-    </div>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfData/show.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfData/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 4485963..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfData/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,107 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Datas LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Data LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('datas.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('datas.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-	<div class="col-md-6 box-visualizar">[m
[31m-		<h3>Informações</h3>[m
[31m-		<div class="box-body">[m
[31m-			<p  class="text-muted">[m
[31m-				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $lrfData->present()->createdAt() }} |[m
[31m-				Atualizado em: {{ $lrfData->present()->updatedAt() }}[m
[31m-			</p>[m
[31m-[m
[31m-			<b>Exercício</b>[m
[31m-			<p class="text-muted">{{ $lrfData->exercicio }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Período</b>[m
[31m-			<p class="text-muted">{{ $lrfData->getLrfPeriodo->nome }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Data Publicação</b>[m
[31m-			<p class="text-muted">{{ $lrfData->present()->dataLimite() }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Data Limite</b>[m
[31m-			<p class="text-muted">{{ $lrfData->present()->dataPublicacao() }}</p>[m
[31m-[m
[31m-			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $lrfData->id, 'prefixRoute' => 'datas'])[m
[31m-[m
[31m-		</div>[m
[31m-	</div>[m
[31m-	<div class="col-md-6">[m
[31m-		<h3>Timeline</h3>[m
[31m-		<ul class="timeline">[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfData->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfData->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfData->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-		</ul>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/create.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 02c8c82..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Períodos LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Período LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('periodos.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::open(array('route' => 'periodos.store')) !!}[m
[31m-		@include('app::lrfProcessos.lrfPeriodo.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'periodos.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/edit.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex a7fc930..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Períodos LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Período LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('periodos.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('periodos.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::model($lrfPeriodo, array('route' => array('periodos.update', $lrfPeriodo->id))) !!}[m
[31m-		@include('app::lrfProcessos.lrfPeriodo.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'periodos.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/index.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex f6d66b7..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,76 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Períodos LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Períodos LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('periodos.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')	[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>CÓDIGO</th>[m
[31m-			<th>NOME</th>[m
[31m-			<th>ATIVO</th>[m
[31m-			<th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($lrfPeriodos as $lrfPeriodo)[m
[31m-				<tr>[m
[31m-					<td>{{ $lrfPeriodo->codigo }}</td>[m
[31m-					<td>{{ $lrfPeriodo->nome}}</td>[m
[31m-					<td>{{ $lrfPeriodo->present()->isAtivo() }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('periodos.show', $lrfPeriodo->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('periodos.edit', $lrfPeriodo->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('periodos.destroy', $lrfPeriodo->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="6">Não há registros de períodos!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $lrfPeriodos->currentPage() !!} de {!! $lrfPeriodos->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $lrfPeriodos->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $lrfPeriodos->count() !!} de {!! $lrfPeriodos->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/partials/form.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 54ac67b..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,18 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('codigo', 'Código *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('codigo', null, array('class' => 'form-control maxLength', 'maxlength' => 2)) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-3">[m
[31m-        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome', null, array('class' => 'form-control maxLength', 'maxlength' => 60)) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/show.blade.php b/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex f9aea74..0000000[m
[1m--- a/app/Applications/App/resources/views/lrfProcessos/lrfPeriodo/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,103 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Períodos LRF ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Período LRF')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('periodos.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('periodos.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-	<div class="col-md-6 box-visualizar">[m
[31m-		<h3>Informações</h3>[m
[31m-		<div class="box-body">[m
[31m-			<p  class="text-muted">[m
[31m-				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $lrfPeriodo->present()->createdAt() }} |[m
[31m-				Atualizado em: {{ $lrfPeriodo->present()->updatedAt() }}[m
[31m-			</p>[m
[31m-[m
[31m-			<b>Código</b>[m
[31m-			<p class="text-muted">{{ $lrfPeriodo->codigo }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Nome</b>[m
[31m-			<p class="text-muted">{{ $lrfPeriodo->nome }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Ativo</b>[m
[31m-			<p class="text-muted">{{ $lrfPeriodo->present()->isAtivo() }}</p>[m
[31m-[m
[31m-			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $lrfPeriodo->id, 'prefixRoute' => 'periodos'])[m
[31m-[m
[31m-		</div>[m
[31m-	</div>[m
[31m-	<div class="col-md-6">[m
[31m-		<h3>Timeline</h3>[m
[31m-		<ul class="timeline">[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfPeriodo->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfPeriodo->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $lrfPeriodo->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-		</ul>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/municipios/create.blade.php b/app/Applications/App/resources/views/municipios/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex f317e74..0000000[m
[1m--- a/app/Applications/App/resources/views/municipios/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Municipios ')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Municipios')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('municipios.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::open(array('route' => 'municipios.store')) !!}[m
[31m-		@include('app::municipios.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'municipios.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/municipios/edit.blade.php b/app/Applications/App/resources/views/municipios/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 8657d3d..0000000[m
[1m--- a/app/Applications/App/resources/views/municipios/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Municipios ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Municipio')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-@parent[m
[31m-<li>[m
[31m-    <a href="{{ route('municipios.index') }}">[m
[31m-        <i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-        Listar[m
[31m-    </a>[m
[31m-</li>[m
[31m-<li>[m
[31m-    <a href="{{ route('municipios.create') }}">[m
[31m-        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-        Adicionar[m
[31m-    </a>[m
[31m-</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-{!! Form::model($municipios, array('route' => array('municipios.update', $municipios->id))) !!}[m
[31m-@include('app::municipios.partials.form')[m
[31m-@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'municipios.index'])[m
[31m-{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-@parent[m
[31m-<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/municipios/index.blade.php b/app/Applications/App/resources/views/municipios/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 96e3586..0000000[m
[1m--- a/app/Applications/App/resources/views/municipios/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,84 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Municipios ')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Municipios')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('municipios.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>NOME</th>[m
[31m-			<th>SIGLA</th>[m
[31m-			<th>CODIGO TCM</th>[m
[31m-			<th>CODIGO IBGE</th>[m
[31m-			<th>CODIGO GEONAMES</th>[m
[31m-                        <th>CEP</th>[m
[31m-                        <th>ATIVO</th>[m
[31m-                        <th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($municipios as $municipio)[m
[31m-				<tr>[m
[31m-					<td>{{ $municipio->nome }}</td>[m
[31m-					<td>{{ $municipio->sigla }}</td>[m
[31m-                                        <td>{{ $municipio->codigo_tcm }}</td>[m
[31m-                                        <td>{{ $municipio->codigo_ibge }}</td>[m
[31m-					<td>{{ $municipio->codigo_geonames}}</td>[m
[31m-					<td>{{ $municipio->cep }}</td>[m
[31m-                                        <td>{{ $municipio->ativo }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('municipios.show', $municipio->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('municipios.edit', $municipio->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('municipios.destroy', $municipio->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="8">Não há registros de municipios!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $municipios->currentPage() !!} de {!! $municipios->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $municipios->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $municipios->count() !!} de {!! $municipios->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/municipios/partials/form.blade.php b/app/Applications/App/resources/views/municipios/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 2e84a8d..0000000[m
[1m--- a/app/Applications/App/resources/views/municipios/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,46 +0,0 @@[m
[31m-<div class="row">[m
[31m-    [m
[31m-      <div class="form-group col-md-6">[m
[31m-        {!! Form::label('nome', 'Nome do Município *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome', null, array('class'=>'form-control maxLength','maxlength'=>'60')) !!}[m
[31m-    </div>[m
[31m-    <div class="form-group col-md-3">[m
[31m-        {!! Form::label('ufs_id', 'ID Unidade Federativa *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::select('ufs_id', $listaUf, null, array('class'=>'form-control', 'placeholder' => 'Selecione um Estado...')) !!}[m
[31m-    </div>[m
[31m-  [m
[31m-    <div class="form-group col-md-3">[m
[31m-        {!! Form::label('sigla', 'Sigla *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('sigla', null, array('class' => 'form-control maxLength','maxlength'=>'3')) !!}[m
[31m-    </div>[m
[31m-</div>[m
[31m-<div class="row">[m
[31m-    [m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('codigo_tcm', 'Código TCM *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::number('codigo_tcm', null, array('class' => 'form-control maxLength','maxlength'=>'3')) !!}[m
[31m-    </div>[m
[31m-      <div class="form-group col-md-2">[m
[31m-        {!! Form::label('codigo_ibge', 'Código IBGE *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::number('codigo_ibge', null, array('class' => 'form-control maxLength','maxlength'=>'7')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-      <div class="form-group col-md-2">[m
[31m-        {!! Form::label('codigo_geonames', 'Código Geonames *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::number('codigo_geonames', null, array('class' => 'form-control maxLength','maxlength'=>'7')) !!}[m
[31m-    </div>[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('cep', 'CEP*', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::number('cep', null, array('class' => 'form-control maxLength','maxlength'=>'8')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-   [m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/municipios/show.blade.php b/app/Applications/App/resources/views/municipios/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 5fb0af0..0000000[m
[1m--- a/app/Applications/App/resources/views/municipios/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,125 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Municipios ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Municipio')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('municipios.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('municipios.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-	<div class="col-md-6 box-visualizar">[m
[31m-		<h3>Informações</h3>[m
[31m-		<div class="box-body">[m
[31m-			<p  class="text-muted">[m
[31m-				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $municipios->present()->createdAt() }} |[m
[31m-				Atualizado em: {{ $municipios->present()->updatedAt() }}[m
[31m-			</p>[m
[31m-[m
[31m-			<b>Nome</b>[m
[31m-			<p class="text-muted">{{ $municipios->nome }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>ID UF</b>[m
[31m-			<p class="text-muted">{{ $municipios->ids_uf }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Sigla</b>[m
[31m-			<p class="text-muted">{{ $municipios->sigla }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Codigo TCM</b>[m
[31m-			<p class="text-muted">{{ $municipios->codigo_tcm }}</p>[m
[31m-			<hr>[m
[31m-                        [m
[31m-                        <b>Codigo IBGE</b>[m
[31m-			<p class="text-muted">{{ $municipios->codigo_ibge }}</p>[m
[31m-			<hr>[m
[31m-                        [m
[31m-                        <b>Codigo GEONAMES</b>[m
[31m-			<p class="text-muted">{{ $municipios->codigo_geonames }}</p>[m
[31m-			<hr>[m
[31m-                        [m
[31m-			[m
[31m-[m
[31m-			<b>CEP</b>[m
[31m-			<p class="text-muted">{{ $municipios->cep }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Ativo</b>[m
[31m-			<p class="text-muted">{{ $municipios->ativo }}</p>[m
[31m-[m
[31m-			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $municipios->id, 'prefixRoute' => 'municipios'])[m
[31m-[m
[31m-		</div>[m
[31m-	</div>[m
[31m-	<div class="col-md-6">[m
[31m-		<h3>Timeline</h3>[m
[31m-		<ul class="timeline">[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $municipios->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $municipios->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $municipios->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-		</ul>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/orgaosJulgadores/create.blade.php b/app/Applications/App/resources/views/orgaosJulgadores/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex ed806cd..0000000[m
[1m--- a/app/Applications/App/resources/views/orgaosJulgadores/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', ' Órgãos Julgadores ')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Órgão Julgador')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('orgaosJulgadores.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::open(array('route' => 'orgaosJulgadores.store')) !!}[m
[31m-		@include('app::orgaosJulgadores.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'orgaosJulgadores.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/orgaosJulgadores/edit.blade.php b/app/Applications/App/resources/views/orgaosJulgadores/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 9991f36..0000000[m
[1m--- a/app/Applications/App/resources/views/orgaosJulgadores/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', ' Órgãos Julgadores ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Órgão Julgador')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('orgaosJulgadores.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('orgaosJulgadores.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::model($orgaoJulgador, array('route' => array('orgaosJulgadores.update', $orgaoJulgador->id))) !!}[m
[31m-		@include('app::orgaosJulgadores.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'orgaosJulgadores.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/orgaosJulgadores/index.blade.php b/app/Applications/App/resources/views/orgaosJulgadores/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 7b6c990..0000000[m
[1m--- a/app/Applications/App/resources/views/orgaosJulgadores/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,76 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', '  Órgãos Julgadores ')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Órgão Julgador')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('orgaosJulgadores.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>SIGLA</th>	[m
[31m-			<th>NOME</th>			[m
[31m-			<th>ATIVO</th>[m
[31m-			<th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($orgaosJulgadores as $orgaoJulgador)[m
[31m-				<tr>[m
[31m-					<td>{{ $orgaoJulgador->codigo }}</td>[m
[31m-					<td>{{ $orgaoJulgador->nome }}</td>					[m
[31m-					<td>{{ $orgaoJulgador->ativo }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('orgaosJulgadores.show', $orgaoJulgador->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('orgaosJulgadores.edit', $orgaoJulgador->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('orgaosJulgadores.destroy', $orgaoJulgador->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="6">Não há registros de Órgãos Julgadores!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $orgaosJulgadores->currentPage() !!} de {!! $orgaosJulgadores->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $orgaosJulgadores->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $orgaosJulgadores->count() !!} de {!! $orgaosJulgadores->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/orgaosJulgadores/partials/form.blade.php b/app/Applications/App/resources/views/orgaosJulgadores/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex b389716..0000000[m
[1m--- a/app/Applications/App/resources/views/orgaosJulgadores/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,16 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-1">[m
[31m-        {!! Form::label('sigla', 'Sigla *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('codigo', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'1')); !!}[m
[31m-    </div>   [m
[31m-    <div class="form-group col-md-8">[m
[31m-        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'30')); !!}[m
[31m-    </div>   [m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div!>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/orgaosJulgadores/show.blade.php b/app/Applications/App/resources/views/orgaosJulgadores/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 8b234ee..0000000[m
[1m--- a/app/Applications/App/resources/views/orgaosJulgadores/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,103 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', ' Órgãos Julgadores ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Órgão Julgador')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('orgaosJulgadores.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('orgaosJulgadores.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-	<div class="col-md-6 box-visualizar">[m
[31m-		<h3>Informações</h3>[m
[31m-		<div class="box-body">[m
[31m-			<p  class="text-muted">[m
[31m-				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $orgaoJulgador->present()->createdAt() }} |[m
[31m-				Atualizado em: {{ $orgaoJulgador->present()->updatedAt() }}[m
[31m-			</p>[m
[31m-[m
[31m-			<b>Código</b>[m
[31m-			<p class="text-muted">{{ $orgaoJulgador->codigo }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Nome</b>[m
[31m-			<p class="text-muted">{{ $orgaoJulgador->nome }}</p>[m
[31m-			<hr>[m
[31m-			[m
[31m-			<b>Ativo</b>[m
[31m-			<p class="text-muted">{{ $orgaoJulgador->ativo }}</p>[m
[31m-[m
[31m-			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $orgaoJulgador->id, 'prefixRoute' => 'orgaosJulgadores'])[m
[31m-[m
[31m-		</div>[m
[31m-	</div>[m
[31m-	<div class="col-md-6">[m
[31m-		<h3>Timeline</h3>[m
[31m-		<ul class="timeline">[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $orgaoJulgador->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $orgaoJulgador->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $orgaoJulgador->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-		</ul>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/processoCategorias/create.blade.php b/app/Applications/App/resources/views/processoCategorias/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 15d3992..0000000[m
[1m--- a/app/Applications/App/resources/views/processoCategorias/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Categorias de Processo')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Categoria de Processo')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-@parent[m
[31m-<li>[m
[31m-    <a href="{{ route('processoCategorias.index') }}">[m
[31m-        <i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-        Listar[m
[31m-    </a>[m
[31m-</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-{!! Form::open(array('route' => 'processoCategorias.store')) !!}[m
[31m-@include('app::processoCategorias.partials.form')[m
[31m-@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'processoCategorias.index'])[m
[31m-{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-@parent[m
[31m-<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/processoCategorias/edit.blade.php b/app/Applications/App/resources/views/processoCategorias/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex bc9bf43..0000000[m
[1m--- a/app/Applications/App/resources/views/processoCategorias/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Categorias de Processo ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Categoria de Processo')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-@parent[m
[31m-<li>[m
[31m-    <a href="{{ route('processoCategorias.index') }}">[m
[31m-        <i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-        Listar[m
[31m-    </a>[m
[31m-</li>[m
[31m-<li>[m
[31m-    <a href="{{ route('processoCategorias.create') }}">[m
[31m-        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-        Adicionar[m
[31m-    </a>[m
[31m-</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-{!! Form::model($processoCategorias, array('route' => array('processoCategorias.update', $processoCategorias->id))) !!}[m
[31m-@include('app::processoCategorias.partials.form')[m
[31m-@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'processoCategorias.index'])[m
[31m-{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-@parent[m
[31m-<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/processoCategorias/index.blade.php b/app/Applications/App/resources/views/processoCategorias/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 361a66d..0000000[m
[1m--- a/app/Applications/App/resources/views/processoCategorias/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,76 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Categorias de Processo')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Categorias de Processo')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('processoCategorias.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>CÓDIGO</th>[m
[31m-			<th>NOME</th>[m
[31m-			<th>ATIVO</th>[m
[31m-			<th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($processoCategorias as $processoCategoria)[m
[31m-				<tr>[m
[31m-					<td>{{ $processoCategoria->codigo }}</td>[m
[31m-					<td>{{ $processoCategoria->nome }}</td>[m
[31m-					<td>{{ $processoCategoria->ativo }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('processoCategorias.show', $processoCategoria->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('processoCategorias.edit', $processoCategoria->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('processoCategorias.destroy', $processoCategoria->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="6">Não há registros de Categorias de Processo!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $processoCategorias->currentPage() !!} de {!! $processoCategorias->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $processoCategorias->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $processoCategorias->count() !!} de {!! $processoCategorias->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/processoCategorias/partials/form.blade.php b/app/Applications/App/resources/views/processoCategorias/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex fc5eb10..0000000[m
[1m--- a/app/Applications/App/resources/views/processoCategorias/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,18 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-3">[m
[31m-        {!! Form::label('codigo', 'Código *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('codigo', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'10')); !!}[m
[31m-    </div>[m
[31m-    <div class="form-group col-md-9">[m
[31m-        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome', null, array('class'=>'form-control', 'required'=>'required','maxlength'=>'60')); !!}[m
[31m-    </div>[m
[31m-</div>[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/processoCategorias/show.blade.php b/app/Applications/App/resources/views/processoCategorias/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 09eee61..0000000[m
[1m--- a/app/Applications/App/resources/views/processoCategorias/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,103 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Categorias de Processo ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Categoria de Processo')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-@parent[m
[31m-<li>[m
[31m-    <a href="{{ route('processoCategorias.index') }}">[m
[31m-        <i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-        Listar[m
[31m-    </a>[m
[31m-</li>[m
[31m-<li>[m
[31m-    <a href="{{ route('processoCategorias.create') }}">[m
[31m-        <i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-        Adicionar[m
[31m-    </a>[m
[31m-</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-<div class="col-md-6 box-visualizar">[m
[31m-    <h3>Informações</h3>[m
[31m-    <div class="box-body">[m
[31m-        <p  class="text-muted">[m
[31m-            <i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $processoCategorias->present()->createdAt() }} |[m
[31m-            Atualizado em: {{ $processoCategorias->present()->updatedAt() }}[m
[31m-        </p>[m
[31m-[m
[31m-        <b>Código</b>[m
[31m-        <p class="text-muted">{{ $processoCategorias->codigo }}</p>[m
[31m-        <hr>[m
[31m-[m
[31m-        <b>Nome</b>[m
[31m-        <p class="text-muted">{{ $processoCategorias->nome }}</p>[m
[31m-        <hr>[m
[31m-[m
[31m-        <b>Ativo</b>[m
[31m-        <p class="text-muted">{{ $processoCategorias->ativo }}</p>[m
[31m-[m
[31m-        @include('app::partials.boxFooter', ['view' => 'show', 'id' => $processoCategorias->id, 'prefixRoute' => 'processoCategorias'])[m
[31m-[m
[31m-    </div>[m
[31m-</div>[m
[31m-<div class="col-md-6">[m
[31m-    <h3>Timeline</h3>[m
[31m-    <ul class="timeline">[m
[31m-        <li class="time-label">[m
[31m-            <span class="bg-green">[m
[31m-                10 Feb. 2014[m
[31m-            </span>[m
[31m-        </li>[m
[31m-        <li>[m
[31m-            <!-- timeline icon -->[m
[31m-            <i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-            <div class="timeline-item">[m
[31m-                <span class="time"><i class="fa fa-clock-o"></i> {{ $processoCategorias->present()->createdAt() }}</span>[m
[31m-[m
[31m-                <h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-                <div class="timeline-body">[m
[31m-                    Descrição[m
[31m-                </div>[m
[31m-            </div>[m
[31m-        </li>[m
[31m-        <li>[m
[31m-            <!-- timeline icon -->[m
[31m-            <i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-            <div class="timeline-item">[m
[31m-                <span class="time"><i class="fa fa-clock-o"></i> {{ $processoCategorias->present()->createdAt() }}</span>[m
[31m-[m
[31m-                <h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-                <div class="timeline-body">[m
[31m-                    Descrição[m
[31m-                </div>[m
[31m-            </div>[m
[31m-        </li>[m
[31m-        <li class="time-label">[m
[31m-            <span class="bg-green">[m
[31m-                10 Feb. 2014[m
[31m-            </span>[m
[31m-        </li>[m
[31m-        <li>[m
[31m-            <!-- timeline icon -->[m
[31m-            <i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-            <div class="timeline-item">[m
[31m-                <span class="time"><i class="fa fa-clock-o"></i> {{ $processoCategorias->present()->createdAt() }}</span>[m
[31m-[m
[31m-                <h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-                <div class="timeline-body">[m
[31m-                    Descrição[m
[31m-                </div>[m
[31m-            </div>[m
[31m-        </li>[m
[31m-    </ul>[m
[31m-</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/processoTipo/partials/form.blade.php b/app/Applications/App/resources/views/processoTipo/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 0e9aea1..0000000[m
[1m--- a/app/Applications/App/resources/views/processoTipo/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,38 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-9">[m
[31m-        {!! Form::label('nome_completo', 'Nome Completo *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome_completo', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'60')); !!}[m
[31m-    </div>[m
[31m-    <div class="form-group col-md-3">[m
[31m-        {!! Form::label('cpf', 'CPF *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('cpf', null, array('class'=>'form-control', 'required'=>'required','maxlength'=>'11')); !!}[m
[31m-    </div>[m
[31m-</div>[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-4">[m
[31m-        {!! Form::label('nome_condensado', 'Nome Condensado *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome_condensado', null, array('class' => 'form-control', 'maxlength'=>'30')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('data_nomeacao', 'Data Nomeação *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::date('data_nomeacao', null, array('class' => 'form-control')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('data_posse', 'Data Posse *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::date('data_posse', null, array('class' => 'form-control')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-     <div class="form-group col-md-2">[m
[31m-        {!! Form::label('data_saida', 'Data Saída *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::date('data_saida', null, array('class' => 'form-control')) !!}[m
[31m-    </div>[m
[31m-[m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/tipoEntidades/create.blade.php b/app/Applications/App/resources/views/tipoEntidades/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 6e59f12..0000000[m
[1m--- a/app/Applications/App/resources/views/tipoEntidades/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Tipo Entidades ')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Tipo Entidade')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('tipos.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::open(array('route' => 'tipos.store')) !!}[m
[31m-		@include('app::tipoEntidades.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'tipos.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/tipoEntidades/edit.blade.php b/app/Applications/App/resources/views/tipoEntidades/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex c476cc5..0000000[m
[1m--- a/app/Applications/App/resources/views/tipoEntidades/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Tipo Entidades ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Tipo Entidade')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('tipos.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('tipos.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::model($tipoEntidade, array('route' => array('tipos.update', $tipoEntidade->id))) !!}[m
[31m-		@include('app::tipoEntidades.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'tipos.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/tipoEntidades/index.blade.php b/app/Applications/App/resources/views/tipoEntidades/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex af8d36f..0000000[m
[1m--- a/app/Applications/App/resources/views/tipoEntidades/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,74 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Tipo Entidades ')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Tipo Entidades')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('tipos.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>NOME</th>			[m
[31m-			<th>ATIVO</th>[m
[31m-			<th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($tipoEntidades as $tipoEntidade)[m
[31m-				<tr>[m
[31m-					<td>{{ $tipoEntidade->nome }}</td>					[m
[31m-					<td>{{ $tipoEntidade->ativo }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('tipos.show', $tipoEntidade->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('tipos.edit', $tipoEntidade->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('tipos.destroy', $tipoEntidade->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="6">Não há registros de tipos de entidade!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $tipoEntidades->currentPage() !!} de {!! $tipoEntidades->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $tipoEntidades->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $tipoEntidades->count() !!} de {!! $tipoEntidades->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/tipoEntidades/partials/form.blade.php b/app/Applications/App/resources/views/tipoEntidades/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex fea1184..0000000[m
[1m--- a/app/Applications/App/resources/views/tipoEntidades/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,12 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-8">[m
[31m-        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome', null, array('class'=>'form-control', 'required'=>'required', 'maxlength'=>'30')); !!}[m
[31m-    </div>   [m
[31m-    <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div!>[m
[31m-</div>[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/tipoEntidades/show.blade.php b/app/Applications/App/resources/views/tipoEntidades/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex eec1215..0000000[m
[1m--- a/app/Applications/App/resources/views/tipoEntidades/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,99 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Tipo Entidades ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Tipo Entidade')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('tipos.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('tipos.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-	<div class="col-md-6 box-visualizar">[m
[31m-		<h3>Informações</h3>[m
[31m-		<div class="box-body">[m
[31m-			<p  class="text-muted">[m
[31m-				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $tipoEntidade->present()->createdAt() }} |[m
[31m-				Atualizado em: {{ $tipoEntidade->present()->updatedAt() }}[m
[31m-			</p>[m
[31m-[m
[31m-			<b>Nome</b>[m
[31m-			<p class="text-muted">{{ $tipoEntidade->nome }}</p>[m
[31m-			<hr>[m
[31m-			[m
[31m-			<b>Ativo</b>[m
[31m-			<p class="text-muted">{{ $tipoEntidade->ativo }}</p>[m
[31m-[m
[31m-			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $tipoEntidade->id, 'prefixRoute' => 'tipos'])[m
[31m-[m
[31m-		</div>[m
[31m-	</div>[m
[31m-	<div class="col-md-6">[m
[31m-		<h3>Timeline</h3>[m
[31m-		<ul class="timeline">[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $tipoEntidade->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $tipoEntidade->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $tipoEntidade->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-		</ul>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/ufs/create.blade.php b/app/Applications/App/resources/views/ufs/create.blade.php[m
[1mdeleted file mode 100644[m
[1mindex de9018b..0000000[m
[1m--- a/app/Applications/App/resources/views/ufs/create.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,27 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Ufs ')[m
[31m-[m
[31m-@section('containerTitle', 'Adicionar Uf')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('ufs.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::open(array('route' => 'ufs.store')) !!}[m
[31m-		@include('app::ufs.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'ufs.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/ufs/edit.blade.php b/app/Applications/App/resources/views/ufs/edit.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 5261045..0000000[m
[1m--- a/app/Applications/App/resources/views/ufs/edit.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,33 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Ufs ')[m
[31m-[m
[31m-@section('containerTitle', 'Editar Uf')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('ufs.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('ufs.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	{!! Form::model($uf, array('route' => array('ufs.update', $uf->id))) !!}[m
[31m-		@include('app::ufs.partials.form')[m
[31m-		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'ufs.index'])[m
[31m-	{!! Form::close() !!}[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/ufs/index.blade.php b/app/Applications/App/resources/views/ufs/index.blade.php[m
[1mdeleted file mode 100644[m
[1mindex d62e644..0000000[m
[1m--- a/app/Applications/App/resources/views/ufs/index.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,76 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Ufs ')[m
[31m-[m
[31m-@section('containerTitle', 'Listar Ufs')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('ufs.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-	[m
[31m-	<table class="table table-bordered table-striped table-condensed table-hover dataTable">[m
[31m-		<thead>[m
[31m-			<th>NOME</th>[m
[31m-			<th>SIGLA</th>[m
[31m-			<th>ATIVO</th>[m
[31m-			<th>AÇÕES</th>[m
[31m-		</thead>[m
[31m-		<tbody>[m
[31m-			@forelse ($ufs as $uf)[m
[31m-				<tr>[m
[31m-					<td>{{ $uf->nome }}</td>[m
[31m-					<td>{{ $uf->sigla }}</td>[m
[31m-					<td>{{ $uf->present()->isAtivo() }}</td>[m
[31m-					<td>[m
[31m-						<a href="{{ route('ufs.show', $uf->id) }}" class="btn btn-xs btn-info">[m
[31m-							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[31m-							VISUALIZAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('ufs.edit', $uf->id) }}" class="btn btn-xs btn-primary">[m
[31m-							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
[31m-							EDITAR[m
[31m-						</a>[m
[31m-[m
[31m-						<a href="{{ route('ufs.destroy', $uf->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
[31m-					</td>[m
[31m-				</tr>[m
[31m-			@empty[m
[31m-				<tr>[m
[31m-					<td colspan="6">Não há registros de ufs!</td>[m
[31m-				</tr>[m
[31m-			@endforelse[m
[31m-		</tbody>[m
[31m-	</table>[m
[31m-[m
[31m-	<div class="row">[m
[31m-		<div class="col-md-4">[m
[31m-			<p>Página {!! $ufs->currentPage() !!} de {!! $ufs->lastPage() !!}</p>[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-center">[m
[31m-			{{ $ufs->render() }}[m
[31m-		</div>[m
[31m-[m
[31m-		<div class="col-md-4 text-right">[m
[31m-			<p>Visualizando {!! $ufs->count() !!} de {!! $ufs->total() !!}</p>[m
[31m-		</div>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
[31m-[m
[31m-@section('scripts')[m
[31m-	@parent[m
[31m-	<script src="{{ elixir('js/app.js') }}"></script>[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/ufs/partials/form.blade.php b/app/Applications/App/resources/views/ufs/partials/form.blade.php[m
[1mdeleted file mode 100644[m
[1mindex a6097cc..0000000[m
[1m--- a/app/Applications/App/resources/views/ufs/partials/form.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,16 +0,0 @@[m
[31m-<div class="row">[m
[31m-    <div class="form-group col-md-6">[m
[31m-        {!! Form::label('nome', 'Nome *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('nome', null, array('class'=>'form-control', 'maxlength'=>'60')); !!}[m
[31m-    </div>[m
[31m-    <div class="form-group col-md-4">[m
[31m-        {!! Form::label('sigla', 'Sigla *', array('class' => 'text-red')) !!}[m
[31m-        {!! Form::text('sigla', null, array('class'=>'form-control','maxlength'=>'2')); !!}[m
[31m-    </div>[m
[31m-     <div class="form-group col-md-2">[m
[31m-        {!! Form::label('ativo', 'Ativo *', array('class' => 'text-red')) !!}[m
[31m-        <br/>[m
[31m-        {!! Form::radio('ativo', 'S', array('class' => 'form-control')) !!} Sim[m
[31m-        {!! Form::radio('ativo', 'N', array('class' => 'form-control')) !!} Não[m
[31m-    </div>[m
[31m-</div>[m
[1mdiff --git a/app/Applications/App/resources/views/ufs/show.blade.php b/app/Applications/App/resources/views/ufs/show.blade.php[m
[1mdeleted file mode 100644[m
[1mindex 5482134..0000000[m
[1m--- a/app/Applications/App/resources/views/ufs/show.blade.php[m
[1m+++ /dev/null[m
[36m@@ -1,103 +0,0 @@[m
[31m-@extends('app::layouts.main')[m
[31m-[m
[31m-@section('title', 'Ufs ')[m
[31m-[m
[31m-@section('containerTitle', 'Visualizar Uf')[m
[31m-[m
[31m-@section('buttonsHeader')[m
[31m-	@parent[m
[31m-	<li>[m
[31m-		<a href="{{ route('ufs.index') }}">[m
[31m-			<i class="fa fa-list fa-fw" aria-hidden="true"></i>[m
[31m-			Listar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-	<li>[m
[31m-		<a href="{{ route('ufs.create') }}">[m
[31m-			<i class="fa fa-plus fa-fw" aria-hidden="true"></i>[m
[31m-			Adicionar[m
[31m-		</a>[m
[31m-	</li>[m
[31m-@endsection[m
[31m-[m
[31m-@section('content')[m
[31m-[m
[31m-	<div class="col-md-6 box-visualizar">[m
[31m-		<h3>Informações</h3>[m
[31m-		<div class="box-body">[m
[31m-			<p  class="text-muted">[m
[31m-				<i class="fa fa-clock-o" aria-hidden="true"></i> Criado em: {{ $uf->present()->createdAt() }} |[m
[31m-				Atualizado em: {{ $uf->present()->updatedAt() }}[m
[31m-			</p>[m
[31m-[m
[31m-			<b>Nome</b>[m
[31m-			<p class="text-muted">{{ $uf->nome }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Sigla</b>[m
[31m-			<p class="text-muted">{{ $uf->sigla }}</p>[m
[31m-			<hr>[m
[31m-[m
[31m-			<b>Ativo</b>[m
[31m-			<p class="text-muted">{{ $uf->present()->isAtivo() }}</p>[m
[31m-[m
[31m-			@include('app::partials.boxFooter', ['view' => 'show', 'id' => $uf->id, 'prefixRoute' => 'ufs'])[m
[31m-[m
[31m-		</div>[m
[31m-	</div>[m
[31m-	<div class="col-md-6">[m
[31m-		<h3>Timeline</h3>[m
[31m-		<ul class="timeline">[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $uf->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fa fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $uf->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Edição</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-			<li class="time-label">[m
[31m-				<span class="bg-green">[m
[31m-					10 Feb. 2014[m
[31m-				</span>[m
[31m-			</li>[m
[31m-			<li>[m
[31m-				<!-- timeline icon -->[m
[31m-				<i class="fawarning: CRLF will be replaced by LF in app/Applications/App/resources/views/unidades/edit.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in app/Applications/App/resources/views/unidades/index.blade.php.
The file will have its original line endings in your working directory.
warning: CRLF will be replaced by LF in app/Domains/Unidades/Models/Unidade.php.
The file will have its original line endings in your working directory.
 fa-check bg-blue" aria-hidden="true"></i>[m
[31m-				<div class="timeline-item">[m
[31m-					<span class="time"><i class="fa fa-clock-o"></i> {{ $uf->present()->createdAt() }}</span>[m
[31m-[m
[31m-					<h3 class="timeline-header"><a href="#">Criação</a></h3>[m
[31m-[m
[31m-					<div class="timeline-body">[m
[31m-						Descrição[m
[31m-					</div>[m
[31m-				</div>[m
[31m-			</li>[m
[31m-		</ul>[m
[31m-	</div>[m
[31m-[m
[31m-@endsection[m
\ No newline at end of file[m
[1mdiff --git a/app/Applications/App/resources/views/unidades/edit.blade.php b/app/Applications/App/resources/views/unidades/edit.blade.php[m
[1mindex 917b925..2e096f5 100644[m
[1m--- a/app/Applications/App/resources/views/unidades/edit.blade.php[m
[1m+++ b/app/Applications/App/resources/views/unidades/edit.blade.php[m
[36m@@ -23,7 +23,7 @@[m
 [m
 @section('content')[m
 	{!! Form::model($unidade, array('route' => array('unidades.update', $unidade->id))) !!}[m
[31m-		@include('app::unidades.unidade.partials.form')[m
[32m+[m		[32m@include('app::unidades.partials.form')[m
 		@include('app::partials.boxFooter', ['view' => 'form', 'routeForm' => 'unidades.index'])[m
 	{!! Form::close() !!}[m
 @endsection[m
[1mdiff --git a/app/Applications/App/resources/views/unidades/index.blade.php b/app/Applications/App/resources/views/unidades/index.blade.php[m
[1mindex e6fa641..e519f50 100644[m
[1m--- a/app/Applications/App/resources/views/unidades/index.blade.php[m
[1m+++ b/app/Applications/App/resources/views/unidades/index.blade.php[m
[36m@@ -20,7 +20,7 @@[m
 		<thead>[m
 			<th>NÚMERO</th>[m
 			<th>ATIVO</th>[m
[31m-			<th>CONDOMINO</th>[m
[32m+[m			[32m<th>CONDÔMINO</th>[m
 			<th>AÇÕES</th>[m
 		</thead>[m
 		<tbody>[m
[36m@@ -28,6 +28,7 @@[m
 				<tr>[m
 					<td>{{ $unidade->numero }}</td>[m
 					<td>{{ $unidade->ativo }}</td>[m
[32m+[m					[32m<td></td>[m
 					<td>[m
 						<a href="{{ route('unidades.show', $unidade->id) }}" class="btn btn-xs btn-info">[m
 							<i class="fa fa-search fa-fw" aria-hidden="true"></i>[m
[36m@@ -38,11 +39,6 @@[m
 							<i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>[m
 							EDITAR[m
 						</a>[m
[31m-[m
[31m-						<a href="{{ route('unidades.destroy', $unidade->id) }}" class="btn btn-xs btn-danger btn-message-deletar">[m
[31m-							<i class="fa fa-trash-o fa-fw" aria-hidden="true"></i>[m
[31m-							DELETAR[m
[31m-						</a>[m
 					</td>[m
 				</tr>[m
 			@empty[m
[1mdiff --git a/app/Domains/Unidades/Models/Unidade.php b/app/Domains/Unidades/Models/Unidade.php[m
[1mindex b82c192..c7b39de 100644[m
[1m--- a/app/Domains/Unidades/Models/Unidade.php[m
[1m+++ b/app/Domains/Unidades/Models/Unidade.php[m
[36m@@ -25,7 +25,7 @@[m [mclass Unidade extends Model[m
      *[m
      * @var string[m
      */[m
[31m-    protected $presenter = \VCCon\Domains\Unidades\Presenters\PessoaPresenter::class;[m
[32m+[m[32m    protected $presenter = \VCCon\Domains\Unidades\Presenters\UnidadePresenter::class;[m
 [m
     /**[m
      * Atributos da tabela que podem ser preenchidos.[m
[1mdiff --git a/composer.lock b/composer.lock[m
[1mindex c748bc3..cd41793 100644[m
[1m--- a/composer.lock[m
[1m+++ b/composer.lock[m
[36m@@ -4,21 +4,21 @@[m
         "Read more about it at https://getcomposer.org/doc/01-basic-usage.md#composer-lock-the-lock-file",[m
         "This file is @generated automatically"[m
     ],[m
[31m-    "hash": "6acc7fc351f714ede0c32a85ed6e2629",[m
[32m+[m[32m    "hash": "3e371ad1c0cd85af178e4d4f8827f97e",[m
     "content-hash": "2a728ad3ce367699e15a00ad0e6ec41c",[m
     "packages": [[m
         {[m
             "name": "adldap2/adldap2",[m
[31m-            "version": "v6.1.1",[m
[32m+[m[32m            "version": "v6.1.5",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/Adldap2/Adldap2.git",[m
[31m-                "reference": "761f58ac20aab331ff547f6474bf712ad5b87002"[m
[32m+[m[32m                "reference": "d75cc64074c8ead82cabc86e1be35b6259e57edf"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/Adldap2/Adldap2/zipball/761f58ac20aab331ff547f6474bf712ad5b87002",[m
[31m-                "reference": "761f58ac20aab331ff547f6474bf712ad5b87002",[m
[32m+[m[32m                "url": "https://api.github.com/repos/Adldap2/Adldap2/zipball/d75cc64074c8ead82cabc86e1be35b6259e57edf",[m
[32m+[m[32m                "reference": "d75cc64074c8ead82cabc86e1be35b6259e57edf",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -57,20 +57,20 @@[m
                 "ldap",[m
                 "windows"[m
             ],[m
[31m-            "time": "2016-08-02 16:03:35"[m
[32m+[m[32m            "time": "2016-08-25 13:26:07"[m
         },[m
         {[m
             "name": "adldap2/adldap2-laravel",[m
[31m-            "version": "v2.1.0",[m
[32m+[m[32m            "version": "v2.1.1",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/Adldap2/Adldap2-Laravel.git",[m
[31m-                "reference": "09d40db21c5485af247cddeeef2d54a72afbeac2"[m
[32m+[m[32m                "reference": "88ea93d681fb4d7808a18fde836fedbf99a41541"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/Adldap2/Adldap2-Laravel/zipball/09d40db21c5485af247cddeeef2d54a72afbeac2",[m
[31m-                "reference": "09d40db21c5485af247cddeeef2d54a72afbeac2",[m
[32m+[m[32m                "url": "https://api.github.com/repos/Adldap2/Adldap2-Laravel/zipball/88ea93d681fb4d7808a18fde836fedbf99a41541",[m
[32m+[m[32m                "reference": "88ea93d681fb4d7808a18fde836fedbf99a41541",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -97,25 +97,25 @@[m
                 "laravel",[m
                 "ldap"[m
             ],[m
[31m-            "time": "2016-07-28 16:19:38"[m
[32m+[m[32m            "time": "2016-08-11 15:26:14"[m
         },[m
         {[m
             "name": "barryvdh/laravel-debugbar",[m
[31m-            "version": "v2.2.2",[m
[32m+[m[32m            "version": "V2.2.3",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/barryvdh/laravel-debugbar.git",[m
[31m-                "reference": "c291e58d0a13953e0f68d99182ee77ebc693edc0"[m
[32m+[m[32m                "reference": "ecd1ce5c4a827e2f6a8fb41bcf67713beb1c1cbd"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/barryvdh/laravel-debugbar/zipball/c291e58d0a13953e0f68d99182ee77ebc693edc0",[m
[31m-                "reference": "c291e58d0a13953e0f68d99182ee77ebc693edc0",[m
[32m+[m[32m                "url": "https://api.github.com/repos/barryvdh/laravel-debugbar/zipball/ecd1ce5c4a827e2f6a8fb41bcf67713beb1c1cbd",[m
[32m+[m[32m                "reference": "ecd1ce5c4a827e2f6a8fb41bcf67713beb1c1cbd",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[31m-                "illuminate/support": "5.1.*|5.2.*",[m
[31m-                "maximebf/debugbar": "~1.11.0",[m
[32m+[m[32m                "illuminate/support": "5.1.*|5.2.*|5.3.*",[m
[32m+[m[32m                "maximebf/debugbar": "~1.11.0|~1.12.0",[m
                 "php": ">=5.5.9",[m
                 "symfony/finder": "~2.7|~3.0"[m
             },[m
[36m@@ -151,7 +151,7 @@[m
                 "profiler",[m
                 "webprofiler"[m
             ],[m
[31m-            "time": "2016-05-11 13:54:43"[m
[32m+[m[32m            "time": "2016-07-29 15:00:36"[m
         },[m
         {[m
             "name": "classpreloader/classpreloader",[m
[36m@@ -209,16 +209,16 @@[m
         },[m
         {[m
             "name": "davejamesmiller/laravel-breadcrumbs",[m
[31m-            "version": "3.0.0",[m
[32m+[m[32m            "version": "3.0.1",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/davejamesmiller/laravel-breadcrumbs.git",[m
[31m-                "reference": "5a5d5d1b1f5780359604f7fde11bbf810ff3e9e4"[m
[32m+[m[32m                "reference": "460bf79e83ff9e3db1e3f1c40169d8893893f8ff"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/davejamesmiller/laravel-breadcrumbs/zipball/5a5d5d1b1f5780359604f7fde11bbf810ff3e9e4",[m
[31m-                "reference": "5a5d5d1b1f5780359604f7fde11bbf810ff3e9e4",[m
[32m+[m[32m                "url": "https://api.github.com/repos/davejamesmiller/laravel-breadcrumbs/zipball/460bf79e83ff9e3db1e3f1c40169d8893893f8ff",[m
[32m+[m[32m                "reference": "460bf79e83ff9e3db1e3f1c40169d8893893f8ff",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -228,7 +228,7 @@[m
             },[m
             "require-dev": {[m
                 "mockery/mockery": "0.9.*",[m
[31m-                "orchestra/testbench": "3.0.*",[m
[32m+[m[32m                "orchestra/testbench": "3.2.*|3.3.*",[m
                 "phpunit/phpunit": "4.*",[m
                 "satooshi/php-coveralls": "0.6.*"[m
             },[m
[36m@@ -250,11 +250,11 @@[m
                 }[m
             ],[m
             "description": "A simple Laravel-style way to create breadcrumbs in Laravel 4+.",[m
[31m-            "homepage": "https://github.com/davejamesmiller/laravel-breadcrumbs",[m
[32m+[m[32m            "homepage": "http://laravel-breadcrumbs.davejamesmiller.com",[m
             "keywords": [[m
                 "laravel"[m
             ],[m
[31m-            "time": "2015-02-08 21:44:39"[m
[32m+[m[32m            "time": "2016-08-28 16:57:03"[m
         },[m
         {[m
             "name": "dnoegel/php-xdg-base-dir",[m
[36m@@ -487,16 +487,16 @@[m
         },[m
         {[m
             "name": "iatstuti/laravel-nullable-fields",[m
[31m-            "version": "1.1.0",[m
[32m+[m[32m            "version": "1.3.0",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/michaeldyrynda/laravel-nullable-fields.git",[m
[31m-                "reference": "8da5415d379febbdcaf1e1963d0f3d4c3d58832d"[m
[32m+[m[32m                "reference": "d9dcb328d2f4471f0bff29391d034c53aa73a576"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/michaeldyrynda/laravel-nullable-fields/zipball/8da5415d379febbdcaf1e1963d0f3d4c3d58832d",[m
[31m-                "reference": "8da5415d379febbdcaf1e1963d0f3d4c3d58832d",[m
[32m+[m[32m                "url": "https://api.github.com/repos/michaeldyrynda/laravel-nullable-fields/zipball/d9dcb328d2f4471f0bff29391d034c53aa73a576",[m
[32m+[m[32m                "reference": "d9dcb328d2f4471f0bff29391d034c53aa73a576",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -525,7 +525,7 @@[m
                 }[m
             ],[m
             "description": "This trait allows you to easily flag attributes that should be set as null when being persisted to the database using the Laravel PHP Framework.",[m
[31m-            "time": "2016-05-22 13:03:32"[m
[32m+[m[32m            "time": "2016-08-24 00:35:51"[m
         },[m
         {[m
             "name": "jakub-onderka/php-console-color",[m
[36m@@ -769,16 +769,16 @@[m
         },[m
         {[m
             "name": "laravel/framework",[m
[31m-            "version": "5.2.41",[m
[32m+[m[32m            "version": "v5.2.45",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/laravel/framework.git",[m
[31m-                "reference": "29ba2e310cfeb42ab6545bcd81ff4c2ec1f6b5c2"[m
[32m+[m[32m                "reference": "2a79f920d5584ec6df7cf996d922a742d11095d1"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/laravel/framework/zipball/29ba2e310cfeb42ab6545bcd81ff4c2ec1f6b5c2",[m
[31m-                "reference": "29ba2e310cfeb42ab6545bcd81ff4c2ec1f6b5c2",[m
[32m+[m[32m                "url": "https://api.github.com/repos/laravel/framework/zipball/2a79f920d5584ec6df7cf996d922a742d11095d1",[m
[32m+[m[32m                "reference": "2a79f920d5584ec6df7cf996d922a742d11095d1",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -859,7 +859,7 @@[m
                 "pusher/pusher-php-server": "Required to use the Pusher broadcast driver (~2.0).",[m
                 "symfony/css-selector": "Required to use some of the crawler integration testing tools (2.8.*|3.0.*).",[m
                 "symfony/dom-crawler": "Required to use most of the crawler integration testing tools (2.8.*|3.0.*).",[m
[31m-                "symfony/psr-http-message-bridge": "Required to psr7 bridging features (0.2.*)."[m
[32m+[m[32m                "symfony/psr-http-message-bridge": "Required to use psr7 bridging features (0.2.*)."[m
             },[m
             "type": "library",[m
             "extra": {[m
[36m@@ -895,7 +895,7 @@[m
                 "framework",[m
                 "laravel"[m
             ],[m
[31m-            "time": "2016-07-20 13:13:06"[m
[32m+[m[32m            "time": "2016-08-26 11:44:52"[m
         },[m
         {[m
             "name": "laravelcollective/html",[m
[36m@@ -1011,16 +1011,16 @@[m
         },[m
         {[m
             "name": "league/flysystem",[m
[31m-            "version": "1.0.25",[m
[32m+[m[32m            "version": "1.0.27",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/thephpleague/flysystem.git",[m
[31m-                "reference": "a76afa4035931be0c78ca8efc6abf3902362f437"[m
[32m+[m[32m                "reference": "50e2045ed70a7e75a5e30bc3662904f3b67af8a9"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/a76afa4035931be0c78ca8efc6abf3902362f437",[m
[31m-                "reference": "a76afa4035931be0c78ca8efc6abf3902362f437",[m
[32m+[m[32m                "url": "https://api.github.com/repos/thephpleague/flysystem/zipball/50e2045ed70a7e75a5e30bc3662904f3b67af8a9",[m
[32m+[m[32m                "reference": "50e2045ed70a7e75a5e30bc3662904f3b67af8a9",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -1090,20 +1090,20 @@[m
                 "sftp",[m
                 "storage"[m
             ],[m
[31m-            "time": "2016-07-18 12:22:57"[m
[32m+[m[32m            "time": "2016-08-10 08:55:11"[m
         },[m
         {[m
             "name": "maximebf/debugbar",[m
[31m-            "version": "v1.11.1",[m
[32m+[m[32m            "version": "v1.12.0",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/maximebf/php-debugbar.git",[m
[31m-                "reference": "d9302891c1f0a0ac5a4f66725163a00537c6359f"[m
[32m+[m[32m                "reference": "e634fbd32cd6bc3fa0e8c972b52d4bf49bab3988"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/maximebf/php-debugbar/zipball/d9302891c1f0a0ac5a4f66725163a00537c6359f",[m
[31m-                "reference": "d9302891c1f0a0ac5a4f66725163a00537c6359f",[m
[32m+[m[32m                "url": "https://api.github.com/repos/maximebf/php-debugbar/zipball/e634fbd32cd6bc3fa0e8c972b52d4bf49bab3988",[m
[32m+[m[32m                "reference": "e634fbd32cd6bc3fa0e8c972b52d4bf49bab3988",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -1122,7 +1122,7 @@[m
             "type": "library",[m
             "extra": {[m
                 "branch-alias": {[m
[31m-                    "dev-master": "1.11-dev"[m
[32m+[m[32m                    "dev-master": "1.12-dev"[m
                 }[m
             },[m
             "autoload": {[m
[36m@@ -1151,7 +1151,7 @@[m
                 "debug",[m
                 "debugbar"[m
             ],[m
[31m-            "time": "2016-01-22 12:22:23"[m
[32m+[m[32m            "time": "2016-05-15 13:11:34"[m
         },[m
         {[m
             "name": "monolog/monolog",[m
[36m@@ -1375,24 +1375,26 @@[m
         },[m
         {[m
             "name": "owen-it/laravel-auditing",[m
[31m-            "version": "2.3.7",[m
[32m+[m[32m            "version": "2.4.5",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/owen-it/laravel-auditing.git",[m
[31m-                "reference": "36bf31429987b8cc12771005f245acab771bbd06"[m
[32m+[m[32m                "reference": "373efca888f42dd6d317703b66cd22797377ab1c"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/owen-it/laravel-auditing/zipball/36bf31429987b8cc12771005f245acab771bbd06",[m
[31m-                "reference": "36bf31429987b8cc12771005f245acab771bbd06",[m
[32m+[m[32m                "url": "https://api.github.com/repos/owen-it/laravel-auditing/zipball/373efca888f42dd6d317703b66cd22797377ab1c",[m
[32m+[m[32m                "reference": "373efca888f42dd6d317703b66cd22797377ab1c",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[31m-                "illuminate/support": "~5.0|~5.1",[m
[31m-                "php": ">=5.5.9"[m
[32m+[m[32m                "illuminate/support": "5.1.* || 5.2.* || 5.3.*",[m
[32m+[m[32m                "php": ">=5.5.9",[m
[32m+[m[32m                "ramsey/uuid": "~3.0"[m
             },[m
             "require-dev": {[m
[31m-                "phpunit/phpunit": "~4.0"[m
[32m+[m[32m                "mockery/mockery": "~0.9.4",[m
[32m+[m[32m                "phpunit/phpunit": "~5.4"[m
             },[m
             "type": "package",[m
             "autoload": {[m
[36m@@ -1406,20 +1408,28 @@[m
             ],[m
             "authors": [[m
                 {[m
[31m-                    "name": "Antério",[m
[32m+[m[32m                    "name": "Antério Vieira",[m
                     "email": "anteriovieira@gmail.com"[m
[32m+[m[32m                },[m
[32m+[m[32m                {[m
[32m+[m[32m                    "name": "Raphael França",[m
[32m+[m[32m                    "email": "raphaelfrancabsb@gmail.com"[m
                 }[m
             ],[m
[31m-            "description": "Keep a change history for your models using laravel version 5.*",[m
[31m-            "homepage": "https://github.com/owen-it/laravel-auditing",[m
[32m+[m[32m            "description": "Keep a change history for your models using laravel and lumen",[m
[32m+[m[32m            "homepage": "https://laravel-auditing.com",[m
             "keywords": [[m
[32m+[m[32m                "Audit",[m
[32m+[m[32m                "activity",[m
                 "auditing",[m
                 "laravel",[m
                 "log",[m
[31m-                "observe",[m
[32m+[m[32m                "logging",[m
[32m+[m[32m                "lumen",[m
[32m+[m[32m                "observer",[m
                 "register"[m
             ],[m
[31m-            "time": "2016-07-31 05:34:38"[m
[32m+[m[32m            "time": "2016-08-18 17:23:52"[m
         },[m
         {[m
             "name": "paragonie/random_compat",[m
[36m@@ -1580,17 +1590,97 @@[m
             "time": "2016-03-09 05:03:14"[m
         },[m
         {[m
[32m+[m[32m            "name": "ramsey/uuid",[m
[32m+[m[32m            "version": "3.5.0",[m
[32m+[m[32m            "source": {[m
[32m+[m[32m                "type": "git",[m
[32m+[m[32m                "url": "https://github.com/ramsey/uuid.git",[m
[32m+[m[32m                "reference": "a6d15c8618ea3951fd54d34e326b68d3d0bc0786"[m
[32m+[m[32m            },[m
[32m+[m[32m            "dist": {[m
[32m+[m[32m                "type": "zip",[m
[32m+[m[32m                "url": "https://api.github.com/repos/ramsey/uuid/zipball/a6d15c8618ea3951fd54d34e326b68d3d0bc0786",[m
[32m+[m[32m                "reference": "a6d15c8618ea3951fd54d34e326b68d3d0bc0786",[m
[32m+[m[32m                "shasum": ""[m
[32m+[m[32m            },[m
[32m+[m[32m            "require": {[m
[32m+[m[32m                "paragonie/random_compat": "^1.0|^2.0",[m
[32m+[m[32m                "php": ">=5.4"[m
[32m+[m[32m            },[m
[32m+[m[32m            "replace": {[m
[32m+[m[32m                "rhumsaa/uuid": "self.version"[m
[32m+[m[32m            },[m
[32m+[m[32m            "require-dev": {[m
[32m+[m[32m                "apigen/apigen": "^4.1",[m
[32m+[m[32m                "codeception/aspect-mock": "1.0.0",[m
[32m+[m[32m                "goaop/framework": "1.0.0-alpha.2",[m
[32m+[m[32m                "ircmaxell/random-lib": "^1.1",[m
[32m+[m[32m                "jakub-onderka/php-parallel-lint": "^0.9.0",[m
[32m+[m[32m                "mockery/mockery": "^0.9.4",[m
[32m+[m[32m                "moontoast/math": "^1.1",[m
[32m+[m[32m                "phpunit/phpunit": "^4.7|>=5.0 <5.4",[m
[32m+[m[32m                "satooshi/php-coveralls": "^0.6.1",[m
[32m+[m[32m                "squizlabs/php_codesniffer": "^2.3"[m
[32m+[m[32m            },[m
[32m+[m[32m            "suggest": {[m
[32m+[m[32m                "ext-libsodium": "Provides the PECL libsodium extension for use with the SodiumRandomGenerator",[m
[32m+[m[32m                "ext-uuid": "Provides the PECL UUID extension for use with the PeclUuidTimeGenerator and PeclUuidRandomGenerator",[m
[32m+[m[32m                "ircmaxell/random-lib": "Provides RandomLib for use with the RandomLibAdapter",[m
[32m+[m[32m                "moontoast/math": "Provides support for converting UUID to 128-bit integer (in string form).",[m
[32m+[m[32m                "ramsey/uuid-console": "A console application for generating UUIDs with ramsey/uuid",[m
[32m+[m[32m                "ramsey/uuid-doctrine": "Allows the use of Ramsey\\Uuid\\Uuid as Doctrine field type."[m
[32m+[m[32m            },[m
[32m+[m[32m            "type": "library",[m
[32m+[m[32m            "extra": {[m
[32m+[m[32m                "branch-alias": {[m
[32m+[m[32m                    "dev-master": "3.x-dev"[m
[32m+[m[32m                }[m
[32m+[m[32m            },[m
[32m+[m[32m            "autoload": {[m
[32m+[m[32m                "psr-4": {[m
[32m+[m[32m                    "Ramsey\\Uuid\\": "src/"[m
[32m+[m[32m                }[m
[32m+[m[32m            },[m
[32m+[m[32m            "notification-url": "https://packagist.org/downloads/",[m
[32m+[m[32m            "license": [[m
[32m+[m[32m                "MIT"[m
[32m+[m[32m            ],[m
[32m+[m[32m            "authors": [[m
[32m+[m[32m                {[m
[32m+[m[32m                    "name": "Marijn Huizendveld",[m
[32m+[m[32m                    "email": "marijn.huizendveld@gmail.com"[m
[32m+[m[32m                },[m
[32m+[m[32m                {[m
[32m+[m[32m                    "name": "Thibaud Fabre",[m
[32m+[m[32m                    "email": "thibaud@aztech.io"[m
[32m+[m[32m                },[m
[32m+[m[32m                {[m
[32m+[m[32m                    "name": "Ben Ramsey",[m
[32m+[m[32m                    "email": "ben@benramsey.com",[m
[32m+[m[32m                    "homepage": "https://benramsey.com"[m
[32m+[m[32m                }[m
[32m+[m[32m            ],[m
[32m+[m[32m            "description": "Formerly rhumsaa/uuid. A PHP 5.4+ library for generating RFC 4122 version 1, 3, 4, and 5 universally unique identifiers (UUID).",[m
[32m+[m[32m            "homepage": "https://github.com/ramsey/uuid",[m
[32m+[m[32m            "keywords": [[m
[32m+[m[32m                "guid",[m
[32m+[m[32m                "identifier",[m
[32m+[m[32m                "uuid"[m
[32m+[m[32m            ],[m
[32m+[m[32m            "time": "2016-08-02 18:39:32"[m
[32m+[m[32m        },[m
[32m+[m[32m        {[m
             "name": "respect/validation",[m
[31m-            "version": "1.0.7",[m
[32m+[m[32m            "version": "1.0.9",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/Respect/Validation.git",[m
[31m-                "reference": "6597aa51149aff674faa9db1729c0c70392aa296"[m
[32m+[m[32m                "reference": "fb7f19f9ad96eb9ccb49e12212d7ebd90f9e0bea"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/Respect/Validation/zipball/6597aa51149aff674faa9db1729c0c70392aa296",[m
[31m-                "reference": "6597aa51149aff674faa9db1729c0c70392aa296",[m
[32m+[m[32m                "url": "https://api.github.com/repos/Respect/Validation/zipball/fb7f19f9ad96eb9ccb49e12212d7ebd90f9e0bea",[m
[32m+[m[32m                "reference": "fb7f19f9ad96eb9ccb49e12212d7ebd90f9e0bea",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -1641,7 +1731,7 @@[m
                 "validation",[m
                 "validator"[m
             ],[m
[31m-            "time": "2016-05-07 18:51:56"[m
[32m+[m[32m            "time": "2016-08-03 09:05:28"[m
         },[m
         {[m
             "name": "swiftmailer/swiftmailer",[m
[36m@@ -2477,16 +2567,16 @@[m
         },[m
         {[m
             "name": "vlucas/phpdotenv",[m
[31m-            "version": "v2.3.0",[m
[32m+[m[32m            "version": "v2.4.0",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/vlucas/phpdotenv.git",[m
[31m-                "reference": "9ca5644c536654e9509b9d257f53c58630eb2a6a"[m
[32m+[m[32m                "reference": "3cc116adbe4b11be5ec557bf1d24dc5e3a21d18c"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/9ca5644c536654e9509b9d257f53c58630eb2a6a",[m
[31m-                "reference": "9ca5644c536654e9509b9d257f53c58630eb2a6a",[m
[32m+[m[32m                "url": "https://api.github.com/repos/vlucas/phpdotenv/zipball/3cc116adbe4b11be5ec557bf1d24dc5e3a21d18c",[m
[32m+[m[32m                "reference": "3cc116adbe4b11be5ec557bf1d24dc5e3a21d18c",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[36m@@ -2498,7 +2588,7 @@[m
             "type": "library",[m
             "extra": {[m
                 "branch-alias": {[m
[31m-                    "dev-master": "2.3-dev"[m
[32m+[m[32m                    "dev-master": "2.4-dev"[m
                 }[m
             },[m
             "autoload": {[m
[36m@@ -2523,7 +2613,7 @@[m
                 "env",[m
                 "environment"[m
             ],[m
[31m-            "time": "2016-06-14 14:14:52"[m
[32m+[m[32m            "time": "2016-09-01 10:05:43"[m
         }[m
     ],[m
     "packages-dev": [[m
[36m@@ -3436,23 +3526,23 @@[m
         },[m
         {[m
             "name": "sebastian/environment",[m
[31m-            "version": "1.3.7",[m
[32m+[m[32m            "version": "1.3.8",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/sebastianbergmann/environment.git",[m
[31m-                "reference": "4e8f0da10ac5802913afc151413bc8c53b6c2716"[m
[32m+[m[32m                "reference": "be2c607e43ce4c89ecd60e75c6a85c126e754aea"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "uwarning: CRLF will be replaced by LF in readme.md.
The file will have its original line endings in your working directory.
rl": "https://api.github.com/repos/sebastianbergmann/environment/zipball/4e8f0da10ac5802913afc151413bc8c53b6c2716",[m
[31m-                "reference": "4e8f0da10ac5802913afc151413bc8c53b6c2716",[m
[32m+[m[32m                "url": "https://api.github.com/repos/sebastianbergmann/environment/zipball/be2c607e43ce4c89ecd60e75c6a85c126e754aea",[m
[32m+[m[32m                "reference": "be2c607e43ce4c89ecd60e75c6a85c126e754aea",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[31m-                "php": ">=5.3.3"[m
[32m+[m[32m                "php": "^5.3.3 || ^7.0"[m
             },[m
             "require-dev": {[m
[31m-                "phpunit/phpunit": "~4.4"[m
[32m+[m[32m                "phpunit/phpunit": "^4.8 || ^5.0"[m
             },[m
             "type": "library",[m
             "extra": {[m
[36m@@ -3482,7 +3572,7 @@[m
                 "environment",[m
                 "hhvm"[m
             ],[m
[31m-            "time": "2016-05-17 03:18:57"[m
[32m+[m[32m            "time": "2016-08-18 05:49:44"[m
         },[m
         {[m
             "name": "sebastian/exporter",[m
[36m@@ -3850,28 +3940,29 @@[m
         },[m
         {[m
             "name": "webmozart/assert",[m
[31m-            "version": "1.0.2",[m
[32m+[m[32m            "version": "1.1.0",[m
             "source": {[m
                 "type": "git",[m
                 "url": "https://github.com/webmozart/assert.git",[m
[31m-                "reference": "30eed06dd6bc88410a4ff7f77b6d22f3ce13dbde"[m
[32m+[m[32m                "reference": "bb2d123231c095735130cc8f6d31385a44c7b308"[m
             },[m
             "dist": {[m
                 "type": "zip",[m
[31m-                "url": "https://api.github.com/repos/webmozart/assert/zipball/30eed06dd6bc88410a4ff7f77b6d22f3ce13dbde",[m
[31m-                "reference": "30eed06dd6bc88410a4ff7f77b6d22f3ce13dbde",[m
[32m+[m[32m                "url": "https://api.github.com/repos/webmozart/assert/zipball/bb2d123231c095735130cc8f6d31385a44c7b308",[m
[32m+[m[32m                "reference": "bb2d123231c095735130cc8f6d31385a44c7b308",[m
                 "shasum": ""[m
             },[m
             "require": {[m
[31m-                "php": ">=5.3.3"[m
[32m+[m[32m                "php": "^5.3.3|^7.0"[m
             },[m
             "require-dev": {[m
[31m-                "phpunit/phpunit": "^4.6"[m
[32m+[m[32m                "phpunit/phpunit": "^4.6",[m
[32m+[m[32m                "sebastian/version": "^1.0.1"[m
             },[m
             "type": "library",[m
             "extra": {[m
                 "branch-alias": {[m
[31m-                    "dev-master": "1.0-dev"[m
[32m+[m[32m                    "dev-master": "1.2-dev"[m
                 }[m
             },[m
             "autoload": {[m
[36m@@ -3895,7 +3986,7 @@[m
                 "check",[m
                 "validate"[m
             ],[m
[31m-            "time": "2015-08-24 13:29:44"[m
[32m+[m[32m            "time": "2016-08-09 15:02:57"[m
         }[m
     ],[m
     "aliases": [],[m
[1mdiff --git a/readme.md b/readme.md[m
[1mindex 92e7f1e..ee142d1 100644[m
[1m--- a/readme.md[m
[1m+++ b/readme.md[m
[36m@@ -1,8 +1,5 @@[m
 # VCCon[m
 [m
[31m-[![build status](http://gitlab.tcm.ce.gov.br/DITEC/access/badges/master/build.svg)](http://gitlab.tcm.ce.gov.br/DITEC/access/commits/master)[m
[31m-[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)[m
[31m-[m
 Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.[m
 [m
 Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.[m
