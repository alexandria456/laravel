<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="{{asset('assets/admin/css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/css/sidebar.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>
    </nav>

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar navbar-primary elevation-4">
        <a href="{{ url ('/') }}" target="_blank" class="brand-link">
            <i class="nav-icon fas fa-home" style="color:#ffffff"></i>
            <span class="brand-text font-weight-light" style="color:#ffffff">На сайт</span>
        </a>

        <!--Sidebar-->

        <div class="sidebar">
            <!--Sidebar user (optional)-->
            <div>
                <div style="color:#ffffff">
                    <p>Admin panel</p>
                </div>
            </div>

            <!-- Sidebar Menu-->
                    <nav class="mt-2">

                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="{{route('Admin.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-home" style="color:#ffffff"></i>
                            <p style="color:#ffffff">Главная</p>
                        </a>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-plane-departure" style="color:#ffffff"></i>
                            <p style="color:#ffffff">
                                Рейсы
                                <i class="right fas fa-angle-left" style="color:#ffffff"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('Flights.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color:#ffffff"></i>
                                    <p style="color:#ffffff">Список рейсов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('Flights.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color:#ffffff"></i>
                                    <p style="color:#ffffff">Создать рейс</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-user-alt" style="color:#ffffff"></i>
                            <p  style="color:#ffffff">
                                Пассажиры
                                <i class="right fas fa-angle-left" style="color:#ffffff"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('Passengers.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color:#ffffff"></i>
                                    <p style="color:#ffffff">Список пассажиров</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('Passengers.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon" style="color:#ffffff"></i>
                                    <p style="color:#ffffff">Зарегистрировать</p>
                                </a>
                            </li>
                        </ul>
                    </li>
<!--
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-ticket-alt"></i>
                            <p>
                                Билеты
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('Tickets.index')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Список билетов</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('Tickets.create')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Оформить билет</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                   -->
                </ul>
            </nav>
        </div>

    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error) <!--Переменная errors является экземпляром Illuminate\Support\MessageBag и всегда определена-->
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        @if (session()->has('Success')) <!--Проверка существования переменной. has() - Определение наличия каких-либо сообщений в сессии и вернет true-->
                            <div class="alert alert-success">
                                {{session('Success')}}
                            </div>
                        @endif
                </div>

            </div>
        </div>
        @yield('content')
    </div>
</div>
<script src="{{asset('assets/admin/js/admin.js')}}"></script>
<!--<script>
    $('.nav-sidebar a').each(function (){
        let location = window.location.protocol + '//' + window.location.host + window.location.pathname;
        let link = this.href;
        if(link == location){
            $(this).addClass('active');
            $(this).closest('.has-treeview').addClass('menu-open');
        }
    });
</script> -->

</body>
</html>
