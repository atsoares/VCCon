<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8">
        <title>VCCon - @yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
        <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>-->
        <![endif]-->
        
    </head>

    <body class="sidebar-collapse sidebar-lg skin-blue-light">
      <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>VC</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><img src="{{url('/images/logo_icon.png')}}" alt="logo" height="46" width="97"/>  <b>VC</b>Con</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button -->

                    <ul class="nav navbar-nav navbar-nav-menuarea">
                        @section('buttonsHeader')

                        @show
                    </ul>
                    <ul class="nav navbar-nav navbar-nav-notifications pull-right">
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu pull-right">
                           <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Registrar</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                    </ul>
                                </li>
                            @endif
                        </li>
                    </ul>
                </nav>
          </header>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    @yield('title')
                </h1>
                <ol class="breadcrumb">
                    <!--
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Layout</a></li>
                    <li class="active">Fixed</li>
                    -->
                </ol>
            </section>
            <section class="content">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <div class="row">
                            <div class="col-md-9">
                                <h3 class="box-title">@yield('containerTitle')</h3>
                            </div>
                            <div class="box-tools pull-right col-md-3 text-right">
                                @include('app::partials.buttonsExport')
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        @include('app::partials.messages')
                        @yield('content')
                    </div>
                </div>
            </section>
        </div><!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                VCCon - Village Castelli Condominio
            </div>
            <!-- Default to the left -->
            <strong> Estágio 2</strong>
        </footer>

    </div><!-- ./wrapper -->

    @section('scripts')
        <script src="{{ elixir('js/vendor.js') }}"></script>
    @show

    </body>
</html>