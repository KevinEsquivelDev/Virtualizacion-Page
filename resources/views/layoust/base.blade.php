<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO-@yield('title')</title> <!--nombre de la pagina-->

    <!--Estilos de Boopstrap y CSS-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!--Se agrega Boostrap a traves de el CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!--Para agragar el icono de basurero-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!--Para iconoz-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://use.fontawesome.com/releases/vVERSION/js/all.js" data-mutate-approach="sync"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <style>

        * {
            margin:0px;
            padding:0px;
        }

        #header {
            margin:auto;
            width:500px;
            font-family:Arial, Helvetica, sans-serif;
        }

        ul, ol {
            list-style:none;
        }

        .nav > li {
            float:left;
        }

        .nav li a {
            background-color:#000;
            color:#fff;
            text-decoration:none;
            padding:10px 12px;
            display:block;
        }

        .nav li a:hover {
            background-color:#434343;
        }

        .nav li ul {
            display:none;
            position:absolute;
            min-width:140px;
        }

        .nav li:hover > ul {
            display:block;
        }

        .nav li ul li {
            position:relative;
        }

        .nav li ul li ul {
            right:-140px;
            top:0px;
        }
    </style>
</head>

<body>
<nav>
    <div id="navbar navbar-expand-lg bg-p-4 mb-7 text-white" style="background-color: #1D26E4";>
        <ul class="nav">
            <li><a href="">Información</a>
                <ul>
                    <li><a href="{{url('/')}}">Inicio</a></li>
                    <li><a href="{{url('/info')}}">¿Qué es?</a></li>
                    <li><a href="{{url('/ventajas')}}">Ventajas</a></li>
                    <li><a href="{{url('/desventajas')}}">Desventajas</a></li>
                </ul>
            </li>
            <li><a href="http://www.microven.net/departamento-tecnico-informatico/virtualizacion-de-servidores">Contacto</a></li>
        </ul>
    </div>

</nav>
<div class="container">
@yield('content') <!--para navbar-->
</div>

<script src="{{asset('js/app.js')}}"></script>
@yield('js')<!--Ayuda con mostrar el mensaje de error-->

</body>
</html>
