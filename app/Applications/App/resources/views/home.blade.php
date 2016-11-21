@extends('app::layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">
                     Bem vindo a VCCon!  
                </div>

                <div class="panel-body">
                   <img src="{{url('/images/logo_site.png')}}" alt="logo" class="center-block"/>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
