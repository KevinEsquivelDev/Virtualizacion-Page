<!doctype html>
<html lang="es">
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
    </style>


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>
<body>



<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">virtualización</h1>
    </div>
  </div>


  <div class="row g-5">
    <div class="col-md-8">


      <article class="blog-post">
      <img src="1.PNG" class="img-fluid" >
        <h2 class="blog-post-title mb-1">Que es virtualización</h2>

<h3> Formas de virtualización</h3>
<p>El término virtualización se acuñó en 1960 y hace referencia a la creación de máquinas virtuales, un concepto de la virtualización de hardware. A día de hoy, en el ámbito de la TI moderna se pueden encontrar diversas formas de virtualización que consiguen la abstracción de recursos de TI como software, memoria, datos o componentes de red. Se puede distinguir entre:</p>
<ul>
<li>virtualización de software.</li>
<li>virtualización de hardware.</li>
<li>virtualización de almacenamiento.</li>
<li>virtualización de datos.</li>
<li>virtualización de red.</li>
</ul>

<h4>Virtualización de hardware</h4>
<p>Con el término virtualización de hardware se hace referencia a tecnologías que ponen a disposición componentes de hardware a través de un software con independencia de su soporte físico. El ejemplo clásico de la virtualización de hardware es la máquina virtual (MV).</p>

<h4>Vitalización de software</h4>
<p>Se habla de virtualización de software cuando son los componentes de software y no los de hardware los que se virtualizan. Los enfoques principales de este concepto de virtualización son:</p>

<ul>
<li>La virtualización de aplicaciones</li>
<li>La virtualización de escritorio</li>
<li>La virtualización del sistema operativo</li>
</ul>

<h4>Virtualización de almacenamiento</h4>
<p>La virtualización de almacenamiento, también conocida como almacenamiento definido por software, se trata de un concepto de virtualización que tiene como objetivo la representación virtual de los diversos recursos de almacenamiento de una empresa, tales como discos duros, memorias flash o unidades de cinta, con el objetivo de hacerlos disponibles como un grupo de recursos interrelacionado. Esta solución de virtualización establece una capa de abstracción entre los distintos medios de almacenamiento físicos y el nivel lógico, en el cual se puede gestionar al conjunto de recursos de almacenamiento de forma centralizada a través de software.</p>

<h4>La virtualización de datos</h4>
<p>La virtualización de datos condensa diferentes enfoques de virtualización en el marco del análisis de almacén de datos, que tiene como objetivo que las aplicaciones proporcionen acceso a los datos abstraídos de realidades físicas, para lo que se crea una copia maestra, esto es, una copia virtual del estado del conjunto de datos.</p>
<p>La virtualización de datos consiste, así, en un concepto de integración de información que se aleja de procedimientos clásicos como pueden ser los procesos ETL, mediante los que se establecen una capa de abstracción entre las fuentes de datos físicas y la representación virtual de datos.</p>

<h4>Virtualización de redes</h4>
<p>La virtualización de redes comprende diferentes enfoques en los que los recursos de red a nivel de hardware o software se abstraen de su base física. Por norma general este tipo de virtualización se utiliza en lo que respecta a conceptos de seguridad y responde a dos objetivos principales:</p>

<ul>
    <li>Los recursos físicos de red deben agruparse por medio de la virtualización en una unidad lógica</li>
    <li>Los recursos de red físicos deben poderse dividir en diferentes unidades virtuales por medio de la virtualización.</li>
</ul>

<div class="p-4">
          <h4 class="fst-italic">Mas informacion</h4>
          <ol class="list-unstyled">
            <li><a href="https://www.ionos.es/digitalguide/servidores/configuracion/virtualizacion/">Virtualizacion: el alma de la nube</a></li>
            <li><a href="https://rcg-comunicaciones.es/ventajas-e-inconvenientes-la-virtualizacion/">las principales ventajas e inconvenientes de la virtualizacion de servidores</a></li>
            <li><a href="https://www.jmgvirtualconsulting.com/vmware-vsphere/ventajas-desventajas-virtualizacion-servidores-vmware/">Ventajas y desventajas de la virtualización de servidores VMware</a></li>
            <li><a href="https://openwebinars.net/blog/virtualizacion-que-es-para-que-sirve-y-ventajas/">Virtualización: Qué es, para qué sirve y ventajas</a></li>
          </ol>
        </div>
</main>



</body>
</html>
