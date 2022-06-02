@extends('layoust.base')

@section('title', 'Login')

@section('content')
    <style>
        body {
            height: 1200px;
            background-image:  url("https://www.cgti.es/contenidoscgti/uploads/2020/03/imagen.jpg");
            background-size: 80%;
            background-repeat: no-repeat;
            background-position: center center;
            box-shadow: 0 26px 42px rgba(0, 0, 0, 0.1);
        }
        </style>
<body>
<center>
<div class="container mt-5"> @yield('content')

        <a class=" container  navbar-center" href="#">
        </a>
        <h1>PROYECTO DE SISTEMAS OPERATIVOS II</h1>
        <h1>GRUPO II</h1>
</div>
    </center>
</body>
</html>
@endsection
