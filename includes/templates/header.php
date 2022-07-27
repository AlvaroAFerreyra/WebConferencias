<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>GDLWEBCAMP</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="../WebConferencias/css/normalize.css">
  <link rel="stylesheet" href="../WebConferencias/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald&family=PT+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
  <link rel="stylesheet" href="../WebConferencias/css/main.css">

  <?php
    $archivo = basename($_SERVER['PHP_SELF']);
    $pagina = str_replace(".php", "", $archivo);
    if($pagina == 'invitados' || $pagina == 'index'){
      echo '<link rel="stylesheet" href="../WebConferencias/css/colorbox.css">';
    }else if($pagina == 'conferencia'){
      echo '<link rel="stylesheet" href="../WebConferencias/css/lightbox.min.css">';
    }
  ?>

  <meta name="theme-color" content="#fafafa">
</head>

<body class="<?php echo $pagina;?>">

  <header class="site_header">
    <div class="hero">
      <div class="contenido_header">
        <nav class="redes_sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
        <div class="informacion_evento">
          <div class="clearfix">
            <p class="fecha"><i class="fa-solid fa-calendar-days"></i> 10-12 Dic</p>
            <p class="ciudad"><i class="fa-solid fa-location-dot"></i> Rosario, Argentina</p>
          </div>
          <h1 class="nombre_sitio">GDLWEBCAMP</h1>
          <p class="eslogan">La mejor conferencia de <span>diseño web</span></p>
        </div>
      </div>
    </div>
  </header>
  <div class="barra">
    <div class="contenedor clearfix">
      <div class="logo">
        <a href="index.php">
            <img src="../WebConferencias/img/logo.svg" alt="Logo">
        </a>  
      </div>
      <div class="menu_movil">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="navegacion_principal clearfix">
        <a href="conferencia.php">Conferencia</a>
        <a href="calendario.php">Calendario</a>
        <a href="invitados.php">Invitados</a>
        <a href="registro.php">Reservaciones</a>
      </nav>
    </div>
  </div>