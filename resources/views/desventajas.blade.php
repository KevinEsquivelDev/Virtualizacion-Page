@extends('layoust.base')

@section('title', 'Login')

@section('content')
<head>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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

      .contenedor
      {
          width: 100%;
          height: auto;
          display: flex !important; / ETIQUETA QUE POSICIONA UNO AL LADO DEL OTRO */
      flex-wrap: wrap;
      }

      .contenedor .hijo
      {
          width: 600px;
          height: 600px;
          background-color: #ECF9FA;
      }

      .contenedor .hijo1
      {
          width: 600px;
          height: 600px;
          background-color: #FEEFE9;
      }
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>

<body>



<main class="container">
    <center class="p-1 p-md-7 mb-4 text-white rounded bg-dark text-center">
        <h1 class="display-4 fst-italic">DESVENTAJAS</h1>
    </center>
    <center class="contenedor ">
        <center class="hijo">
            <h4>1. Aumento de los costos iniciales</h4>
            <p>La inversión en software para gestionar servidores virtuales, y quizás la necesidad de adquirir nuevo hardware para poder implementar la virtualización de servidores, puede suponer un obstáculo si tu empresa es pequeña o no dispones de los recursos suficientes.</p>
            <p>Es necesario realizar un estudio previo para conocer cuáles serán los gastos de implementación de esta tecnología en tu empresa.</p>
            <p>Por otro lado, siempre tienes la opción de alquilar los servidores a una empresa proveedora, eso sí, deberás asegurarte de que la empresa contratada asegure al 100 % los datos de tu negocio.</p>

            <h4>Necesidad de aprender a manejar el nuevo entorno virtual</h4>
            <p>Antes de implementar la virtualización en tu empresa deberás tener en cuenta que, si tus administradores de sistemas no están familiarizados con la gestión de este tipo de entornos virtuales, deberán aprender a manejar multitud de nuevas herramientas, lo cual no siempre es fácil.</p>

        </center>
        <br>
        <div class="hijo1">
            <h4>2. Menor rendimiento</h4>
            <p>Dado que los servidores virtuales corren en una capa intermedia a la del hardware real el rendimiento será inferior que mediante el uso de servidores tradicionales.</p>
            <p>Por otro lado, si instalas muchas máquinas virtuales en un solo servidor físico acabarás saturando el mismo, lo cual también implicará una reducción considerable del rendimiento. Es importante que solo se creen las máquinas virtuales indispensables, ni una más.</p>
            <p>De nuevo debemos mencionar la importancia de realizar un estudio previo que te permita prever qué cantidad de servidores y recursos necesitarás para que el rendimiento sea el adecuado.</p>
            <p>Como has podido leer son muchos y muy diferentes los aspectos que se han de considerar a la hora de implantar la virtualización de servidores en una empresa.</p>
            <p>Por último, nos encantaría conocer tu opinión sobre esta tecnología, por ejemplo, ¿cuáles consideras que son los aspectos, tanto favorables como desfavorables, de la virtualización? o si en tu empresa trabajas con servidores virtuales nos encantaría conocer tu opinión y cuáles son las herramientas que consideras clave para su uso.</p>
        </div>
    </center>


<center class="p-4">
          <h4 class="fst-italic">Mas informacion</h4>
          <ol class="list-unstyled">
            <li><a href="https://www.ionos.es/digitalguide/servidores/configuracion/virtualizacion/">Virtualizacion: el alma de la nube</a></li>
            <li><a href="https://rcg-comunicaciones.es/ventajas-e-inconvenientes-la-virtualizacion/">las principales ventajas e inconvenientes de la virtualizacion de servidores</a></li>
            <li><a href="https://www.jmgvirtualconsulting.com/vmware-vsphere/ventajas-desventajas-virtualizacion-servidores-vmware/">Ventajas y desventajas de la virtualización de servidores VMware</a></li>
            <li><a href="https://openwebinars.net/blog/virtualizacion-que-es-para-que-sirve-y-ventajas/">Virtualización: Qué es, para qué sirve y ventajas</a></li>
          </ol>
        </center>
</main>
</body>
</html>
@endsection
