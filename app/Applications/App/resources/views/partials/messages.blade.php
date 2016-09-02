@if($errors->any())
  <div class="alert alert-danger alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <ul>
      @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
      @endforeach
    </ul>
  </div>
@endif

@if(Session::has('success'))
  <div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
    <h4><i class="fa fa-check fa-fw"></i> Aviso!</h4>
    {!! Session::get('success') !!}
  </div>
@endif
