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

    <body class="sidebar-collapse sidebar-mini skin-blue-light">
      <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="#" class="logo">
              <!-- mini logo for sidebar mini 50x50 pixels -->
              <span class="logo-mini"><b>VC</b></span>
              <!-- logo for regular state and mobile devices -->
              <span class="logo-lg"><b>VC</b>Con</span>'
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button -->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                    <ul class="nav navbar-nav navbar-nav-menuarea">
                        @section('buttonsHeader')

                        @show
                    </ul>
                    <ul class="nav navbar-nav navbar-nav-notifications pull-right">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o fa-fw"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the messages -->
                                    <ul class="menu">
                                        <li><!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <!-- User Image -->
                                                    <img src="" class="img-circle" alt="User Image"/>
                                                </div>
                                                <!-- Message title and timestamp -->
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o fa-fw"></i> 5 mins</small>
                                                </h4>
                                                <!-- The message -->
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li><!-- end message -->
                                    </ul><!-- /.menu -->
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li><!-- /.messages-menu -->

                        <!-- Notifications Menu -->
                        <li class="dropdown notifications-menu">
                            <!-- Menu toggle button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o fa-fw"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- Inner Menu: contains the notifications -->
                                    <ul class="menu">
                                        <li><!-- start notification -->
                                            <a href="#">
                                                <i class="fa fa-users fa-fw text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li><!-- end notification -->
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks Menu -->
                        <li class="dropdown tasks-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o fa-fw"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                        <li><!-- Task item -->
                                            <a href="#">
                                                <!-- Task title and progress text -->
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <!-- The progress bar -->
                                                <div class="progress xs">
                                                    <!-- Change the css width attribute to simulate progress -->
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li><!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu pull-right">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">
                                    Você acessou como: <br>
                                    <b>Usuario</b>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Meus Dados</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
          </header>

          <!-- Left side column. contains the logo and sidebar -->
          <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <!-- Optionally, you can add icons to the links -->
                    <li>
                        <a href="#">
                            <i class="fa fa-dashboard fa-fw"></i>
                            <span>Painel de Controle</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share fa-fw"></i>
                            <span>Adicionar Links</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('unidades.index') }}">
                                    <i class="fa fa-calendar fa-fw"></i>
                                    Adicionar
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('unidades.index') }}">
                                    <i class="fa fa-calendar fa-fw"></i>
                                    Adicionar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share fa-fw"></i>
                            <span>Adicionar</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('unidades.index') }}">
                                    <i class="fa fa-calendar fa-fw"></i>
                                    Adicionar
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('unidades.index') }}">
                                    <i class="fa fa-calendar fa-fw"></i>
                                    Adicionar
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-share fa-fw"></i>
                            <span>Adicionar</span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="{{ route('unidades.create') }}">
                                    <i class="fa fa-calendar fa-fw"></i>
                                    Adicionar
                                </a>
                            </li>
                                                    </ul>
                    </li>
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
          </aside>

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