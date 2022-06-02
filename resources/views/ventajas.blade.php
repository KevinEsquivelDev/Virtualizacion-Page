@extends('layoust.base')

@section('title', 'Login')

@section('content')
<head>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/reset-fonts-grids.css">
    <link rel = ”stylesheet” href = ”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css”>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Blog Template · Bootstrap v5.2</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/blog/">





<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    p {
    font-family: Georgia, "Times New Roman", Times, serif;
    }
    h1, h2, h3, h4, h5, h6, li {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    }
    </style>




    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>




<main class="container">
    <center class="p-1 p-md-7 mb-4 text-white rounded bg-dark text-center">
        <h1 class="display-4 fst-italic">VENTAJAS</h1>
    </center>
</main>
<body>

    <br>
        <h3>1. Reducción de costes</h3>
        <p>Sin duda una de las principales ventajas del uso de la virtualización es el ahorro de dinero que supone para las empresas su implementación. La virtualización puede suponer para el ahorro en el área de TI de tu empresa de hasta un 20 %.</p>

        <h4>Esto se debe a una serie de motivos:</h4>
        <ul>
            <li>La virtualización aprovecha al máximo la capacidad de los servidores y reduce su tiempo de inactividad. De este modo podrás usar los servidores a máxima capacidad y apagar los que no estés usando.</li>
            <li>La virtualización te permitirá ahorrar una gran cantidad de energía, ya que necesitarás un número mucho menor de servidores físicos.</li>
          <li>Al haber menos servidores físicos, también ahorrarás en costes de mantenimiento de equipo. </li>
        </ul>
<br>
        <h4>2. Mejor seguridad</h4>
        <p>La seguridad es otra de las grandes ventajas de la virtualización de servidores. En este apartado las ventajas son:</p>

        <ul>
          <li>Copias de seguridad. La virtualización te permitirá programar de una forma fácil y rápida la realización de backups de cada una de tus máquinas virtuales de tal modo que, en caso de sufrir un ataque o un fallo importante, puedas restaurar tu máquina en un breve espacio de tiempo.</li>
       </ul>

       <p>Este aspecto es clave en cualquier empresa ya que la perdida de datos puede llegar a causar una pérdida de dinero enorme.</p>

<ul>
  <li>Mejor respuesta ante interrupciones imprevistas. A veces los servidores sufren problemas, bien por un fallo en su sistema operativo o por un fallo del hardware. El uso de la virtualización permitirá trasladar los servidores virtuales a otro servidor físico que esté en perfecto estado para que puedas continuar trabajando en el menor tiempo posible.</li>
</ul>

<p>Este aspecto es clave para que tus servidores trabajen durante al mayor tiempo posible, mejorando así la eficiencia de los recursos de tu empresa.</p>

<ul>
  <li>Posibilidad de hacer pruebas de forma segura. La virtualización es una plataforma excelente y segura en la que puedes realizar diferentes pruebas de configuraciones o actualizaciones de software para comprobar que este funciona correctamente. De este modo podrás implementarlo más tarde en tus equipos sin miedo a que ocurra algún problema. </li>
  <li>Reducción del tiempo de recuperación frente a desastres graves. Los desastres graves ocurren, son gajes el oficio que todo administrador de sistemas ha sufrido. La virtualización de servidores te ayudará a proteger tu sistema ante este tipo de fallos en caso de ser víctima de uno de ellos.</li>
</ul>

<p>Para ello puedes crear imágenes de tus sistemas periódicamente o antes de realizar cualquier tipo de modificación o actualización de tus servidores.</p>

<p>Usando de manera conjunta estas imágenes y las copias de seguridad que antes mencionamos, podrás devolver tu sistema a un estado estable y recuperar el 100 % de los datos que tengas almacenados.</p>


<br>
<h4>3. Trabajadores más eficientes</h4>

<p>La virtualización también ofrece ventajas para tus trabajadores que, en definitiva, también son ventajas para la empresa. </p>
<ul>
 <li>Si tus trabajadores se desplazan o tu empresa permite trabajar desde casa el uso de servidores virtuales permite que tus empleados accedan a los datos de tu empresa desde cualquier lugar, lo que facilitará su trabajo y mejorará su rendimiento.</li>
<li>La virtualización permite una administración más sencilla de aspectos como la instalación del software, realizar actualizaciones o mantener la seguridad por lo que tus empleados del área de sistemas verán facilitada su labor.</li>
</ul>
<p>Estas son las tres principales ventajas de la virtualización.
<center class="p-4">
    <center>
        <a href="#"><img src="https://www.rjconcepcion.com/wp-content/uploads/2021/05/virtualizacion-300x192.png" alt="virtualizacion"></a>
    </center>
          <h4 class="fst-italic">Mas informacion</h4>


        <center>

          <ol class="list-unstyled">
            <li><a href="https://www.ionos.es/digitalguide/servidores/configuracion/virtualizacion/">Virtualizacion: el alma de la nube</a></li>
            <li><a href="https://rcg-comunicaciones.es/ventajas-e-inconvenientes-la-virtualizacion/">las principales ventajas e inconvenientes de la virtualizacion de servidores</a></li>
            <li><a href="https://www.jmgvirtualconsulting.com/vmware-vsphere/ventajas-desventajas-virtualizacion-servidores-vmware/">Ventajas y desventajas de la virtualización de servidores VMware</a></li>
            <li><a href="https://openwebinars.net/blog/virtualizacion-que-es-para-que-sirve-y-ventajas/">Virtualización: Qué es, para qué sirve y ventajas</a></li>
          </ol>
        </center>
</body>
</html>
@endsection
