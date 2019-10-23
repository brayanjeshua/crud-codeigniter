<!DOCTYPE html>
<html>
<head>
  <title>Crud</title>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--Version de Bootstrap funcionando para todo el proyecto-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- Estilos Generales -->
  <link rel="stylesheet" href="<?php echo site_url('assets/css/estilos.css'); ?>">

  <!-- Favicon -->

</head>

<body>

  <!-- master.php -->
  <?php if(isset($content)) {  echo $content; } ?>


<!--JQuery for support in buscar -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- For Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="<?php echo site_url('assets/js/generalFunctions.js') ?>" charset="utf-8"></script>
