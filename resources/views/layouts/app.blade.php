<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>.:TaxiSeguro</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    {!! Html::style("css/lib/bootstrap.css") !!}
    {!! Html::style("css/lib/dataTable.css") !!}
    {!! Html::style("css/lib/bootstrap-datepicker.css") !!}
    {!! Html::style("css/font-awesome/css/font-awesome.css") !!}
    {!! Html::style("select2/css/select2.css") !!}


    <!-- Styles
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">-->
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
        .hover_link{
            color: #000;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#spark-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->


                    {!! Html::image('img/logo2.png','Imagen no encontrada',array('width'=>'70'))!!}

            </div>

            <div class="collapse navbar-collapse" id="spark-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" style="font-size: 17px; margin-top: 10px;" >
                    <li>
                        <a  href="{{ url('/vehiculo') }}">
                            <span class="fa fa-taxi" aria-hidden="true"></span>
                            Gestión de vehiculos
                        </a>
                    </li>
                    <li>
                        <a  href="{{ url('/conductor') }}">
                            <span class="fa fa-users" aria-hidden="true"></span>
                            Gestión de operarios
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/') }}">
                            <span class="fa fa-male" aria-hidden="true"></span>
                            Gestión de propietarios
                        </a>
                    </li>

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right" style="font-size: 17px; margin-top: 10px;">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <span class="fa fa-user" aria-hidden="true"></span>
                                {{ Auth::user()->nombres.'  '.Auth::user()->apellidos }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>TERMINAR SESIÓN</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        @yield('content')
    </div>
</div>


    <!-- JavaScripts -->
    {!! Html::script('js/lib/jquery-1.11.3.js') !!}
    {!! Html::script('js/lib/dataTables-1.10.js') !!}
    {!! Html::script('js/lib/bootstrap-datepicker.js') !!}
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {!! Html::script('select2/js/select2.js') !!}
    <script>
        $('.tiempo').datepicker({
            format: 'yyyy-mm-dd'
        });
        $("#conductor_id").select2({
            maximumSelectionLength: 2

        });
        @yield('script')
    </script>
</body>
</html>
