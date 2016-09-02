@if($view == 'form')
  <div class="box-footer">
    <div class="col-md-4 text-red">
      * Campo Obrigatório
    </div>
    <div class="col-md-4 text-center">
      <a href="{{ route($routeForm) }}" class="btn btn-flat btn-default">
        <i class="fa fa-close fa-fw" aria-hidden="true"></i>
        Cancelar
      </a>
      <button class="btn btn-flat btn-primary" type="submit">
        <i class="fa fa-check fa-fw" aria-hidden="true"></i>
        Salvar
      </button>
    </div>
  </div>
@else
  <div class="box-footer">
    <div class="text-center">
      <a href="{{ route($prefixRoute.'.index') }}" class="btn btn-flat btn-default">
        <i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i>
        Voltar
      </a>
      <a href="{{ route($prefixRoute.'.edit', $id) }}" class="btn btn-flat btn-primary">
        <i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>
        Editar
      </a>
    </div>
  </div>
@endif