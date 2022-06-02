@extends('layoust.base')

@section('title', 'Login')

@section('content')

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
    </style>

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
</head>




<main class="container">
    <center class="p-1 p-md-7 mb-4 text-white rounded bg-dark text-center">
            <h1 class="display-4 fst-italic">¿QUÉ ES VIRTUALIZACIÓN</h1>
        </center>
</main>
    <body>

    <p>La tecnología que permite crear servicios de TI útiles, con recursos que están tradicionalmente limitados al hardware  Gracias a que distribuye las funciones de una máquina física entre varios usuarios o entornos,
        posibilita el uso de toda la capacidad de la máquina.</p>
        <br>
    <p>
        Aunque la virtualización data de la década de los sesenta, comenzó a adoptarse más ampliamente a principios del año 2000. Las tecnologías que posibilitaron la virtualización, como los hipervisores, se desarrollaron
        hace muchas décadas para permitir que varios usuarios accedieran simultáneamente a computadoras que realizaban procesamiento por lotes. El procesamiento por lotes era un tipo de informática popular en el ámbito
        empresarial que ejecutaba tareas rutinarias miles de veces y muy rápidamente (como las nóminas).
    </p>
    <center>
        <a href="#"><img src="https://www.redhat.com/cms/managed-files/how-virtualization-works-400x217.png" alt="virtualizacion"></a>
    </center>

    <p>La virtualización sirve principalmente para compartir los recursos de un servidor y optimizar el uso de sus procesadores. Asimismo, su puesta en marcha aumentará la calidad y agilidad de la infraestructura informática y mejorará en todo momento los tiempos de respuesta del servidor.

        Se podría indicar que es buena opción para las empresas ya que reduce el hardware aportando un importante ahorro de costes, proporciona encapsulación, aislamiento y sobre todo independencia.</p>


    <h1>Cómo funciona la virtualización</h1>

    <p>Para una mejor comprensión del funcionamiento de la virtualización vamos a compararla con algo de la vida cotidiana:<p>

       <p> Podríamos imaginarnos que tenemos un hotel muy grande, con muchos metros en un único espacio. Para un mayor aprovechamiento de este, queremos dividirlo en pequeñas habitaciones individuales, diferentes e independientes entre sí, pero formando un único hotel. Si lo aplicamos
        a nuestro ámbito, el hotel haría referencia a un servidor físico, en el que haciendo uso de la virtualización lo dividimos a nivel lógico en varias máquinas virtuales (habitaciones), funcionando simultáneamente e independientes entre sí.</p>

        <p>Para construir cada una de las habitaciones, tendríamos que repartir la cantidad de metros existentes, los recursos que tenemos, etcétera. Lo mismo ocurriría en el caso del servidor, tendríamos que asignar a cada máquina virtual los recursos del hardware (memoria RAM,
            procesadores, espacio…) e instalarle el sistema operativo que se va a utilizar en cada una de ellas (Windows, Linux…). Es importante destacar que todos estos recursos serán tomados de la máquina física principal o servidor sobre el que se ejecuta todo.</p>

    <p>Hay dos elementos fundamentales a la hora de explicar cómo funciona la virtualización:</p>

    <h2>1. Máquina virtual</h2>
        <p>Es el corazón de la virtualización. Se crea completamente por software y puede ejecutar sistemas operativos y aplicaciones. Además, se encuentra respaldada por los recursos de un servidor físico.

    <center>
        <a href="#"><img src="https://dc722jrlp2zu8.cloudfront.net/media/cache/27/58/2758e356ffc700f325a5e7f03a17a70c.webp" alt="virtualizacion"></a>
    </center>

       <h2>2. Hipervisor</h2>
       <p> Es el que se encarga de crear una capa de virtualización. Asigna dinámicamente a cada máquina virtual los recursos que necesita, para que independientemente del sistema operativo que utiliza, crea que el hardware físico del servidor principal está a su disposición.
           Es de vital importancia que funcione correctamente para obtener de las máquinas virtuales el resultado esperado, pero para que esto ocurra debemos asegurarnos siempre de que tanto el almacenamiento como los componentes de la red funcionan bien.

        <p>Cuando instalamos cualquier sistema operativo en una de las máquinas virtuales, este va a funcionar con el mismo patrón y método que en una máquina física (licencias, actualizaciones…) por lo que también es susceptible de ser atacado. Esto nos lleva a pensar que es muy
        importante, en caso de que la máquina no haya sido creada para probar ataques en ella, que se utilicen herramientas de seguridad (antivirus, cifrado, actualización continua…) para evitar poner en peligro nuestra privacidad.</p>
    <div class="p-4 text-center">
        <h4 class="fst-italic">Mas información</h4>
        <ol class="list-unstyled">
            <li><a href="https://www.ionos.es/digitalguide/servidores/configuracion/virtualizacion/">Virtualizacion: el alma de la nube</a></li>
            <li><a href="https://rcg-comunicaciones.es/ventajas-e-inconvenientes-la-virtualizacion/">las principales ventajas e inconvenientes de la virtualizacion de servidores</a></li>
            <li><a href="https://www.jmgvirtualconsulting.com/vmware-vsphere/ventajas-desventajas-virtualizacion-servidores-vmware/">Ventajas y desventajas de la virtualización de servidores VMware</a></li>
            <li><a href="https://openwebinars.net/blog/virtualizacion-que-es-para-que-sirve-y-ventajas/">Virtualización: Qué es, para qué sirve y ventajas</a></li>
        </ol>
    </div>

</body>
</html>
@endsection
