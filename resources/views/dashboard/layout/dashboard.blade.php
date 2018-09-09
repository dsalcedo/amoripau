<html>
<head>
    <title>AMORIPAU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker-1.6.4/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-datepicker-1.6.4/css/bootstrap-datepicker3.min.css') }}">
    <style>
        #header{
            background-color: #E22380;
            margin-bottom: 0px;
            margin-top: 0px;
            height: 60px;
        }
        #header:after{
            content:"";
            display:inline-block;
            width: 100%;
        }
        #mySidebar{
            background-color: #E22380;
            height: 100%;
            display: block;
            width: 15%;
            position:absolute!important;
            animation:animateleft 0.4s;
            color: white;
        }@keyframes animateleft{from{left:-300px;opacity:0} to{left:0;opacity:1}}


        .bar-item{
            width:100%;
            display:block;
            padding:8px 16px;
            text-align:left;
            border:none;
            white-space:normal;
            float:none;
            outline:0;
            color: white;
        }
        #main-container{
            margin-top: 0%;
            margin-left: 0%;
        }
        #page-container{
            position: relative;
            margin-left: 15%;
            height: 90%;
            overflow-y: scroll;
        }
        #footer{
            background-color: #E22380;
            position: relative;
            margin-left: 15%;
            height: 10%;
        }
        #openNav{
            display: none;
        }
        #logo{
            height: 100%;
            width: 15%;
        }
        .page-header,.widget{
            background: #fff;
        }
        .widget .widget-heading, h4.widget-body{
            font-weight: 400;
        }
        .widget-footer {
            padding: 15px 20px;
            border-top: 1px solid #e6e6e6;
        }

        .widget-heading,.page-header{
            border-left: 2px solid #e6e6e6;
            border-right: 2px solid #e6e6e6;
            border-top: 2px solid #e6e6e6;
            border-bottom: 2px solid #e6e6e6;
            padding: 10px;
        }

        .widget-body{
            border-left: 2px solid #e6e6e6;
            border-right: 2px solid #e6e6e6;
            border-top: none;
            border-bottom: 2px solid #e6e6e6;
            padding: 10px;
        }
        a:link
        {
            text-decoration:none;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome5.2/css/all.css') }}">
</head>
<body>

    <div class="main-container-fluid" id="main-container">
        <header class="header" id="header" >
            <div class="row-fluid" style="padding-left: 15px">
                <button id="openNav" class="" onclick="w3_open()" style="height: 100%; width: 5%; color: white; background-color: #E22380; border-color: #E22380;">&#9776;</button>
                <img src="{{ asset('images/Amoripau_logo_blanco.png') }}" alt="" width="100" id="logo" style="padding: 5px;">
            </div>
        </header>

        <div id="mySidebar">
            <button class="bar-item button btn-danger text-center "
                    onclick="w3_close()" style="color: white;"><h4>Cerrar &times;</h4></button>
            <ul class="list-unstyled">
                <li class="panel">
                    <a class="bar-item" href="{{ route('inicio') }}" style="color:white">
                        <i class="fa fa-home"></i>
                        <span class="sidebar-title active">Inicio </span>
                    </a>
                </li>
                <li class="panel">
                    <a class="bar-item" href="{{ route('empleados.index') }}" style="color:white">
                        <i class="fas fa-user"></i>
                        <span class="sidebar-title active">Empleados</span>
                    </a>
                </li>
                <li class="panel">
                    <a class="bar-item" href="{{ route('producto.index') }}" style="color:white">
                        <i class="fas fa-boxes"></i>
                        <span class="sidebar-title active">Productos</span>
                    </a>
                </li>
                <li class="panel">
                    <a data-toggle="collapse" href="#configuracion" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: white;" class="bar-item">
                        <i class="fas fa-cogs"></i>
                        <span class="sidebar-title">Configuración</span>
                    </a>
                    <ul class="collapse list-unstyled " id="configuracion">
                        <li class="panel"><a href="{{ route('purezas.index') }}" id="personal" class="bar-item"><i class="fas fa-atom"></i><span class="sidebar-title"> Purezas</span></a></li>
                        <li class="panel"><a href="{{ route('promocion.index') }}" id="personal" class="bar-item"><i class="fas fa-tag"></i><span class="sidebar-title"> Promociones</span></a></li>
                        <li class="panel"><a href="{{ route('tipo.producto.index') }}" id="personal" class="bar-item"><i class="fas fa-gem"></i><span class="sidebar-title"> Tipo de joya</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="page-container" id="page-container">
                @yield('content')
        </div>

        <div class="footer" id="footer">{{ date('Y') }} &copy; AMORIPAU</div>

    </div>

    <script>
        function w3_open() {
            document.getElementById("main-container").style.marginLeft = "15%";
            document.getElementById("page-container").style.marginLeft = "15%";
            document.getElementById("footer").style.marginLeft = "15%";
            document.getElementById("mySidebar").style.width = "15%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'none';
            document.getElementById("main-container").style.marginLeft = "0%";
        }
        function w3_close() {
            document.getElementById("main-container").style.marginLeft = "0%";
            document.getElementById("page-container").style.marginLeft = "0%";
            document.getElementById("main-container").style.marginTop = "0%";
            document.getElementById("footer").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }
    </script>
    <script src="{{ asset('fontawesome5.2/js/all.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('bootstrap-datepicker-1.6.4/js/bootstrap-datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('sweetalert/sweetalert.min.js') }}"></script>
    @yield('javascript')

</body>
</html>
