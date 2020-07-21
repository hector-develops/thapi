<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <?php

    $item = null;
    $valor = null;
    $value1="http://localhost/backend/";

    $empresa = ControladorEmpresas::ctrMostrarEmpresas($item, $valor);
    for ($i = 0; $i < count($empresa); $i++) {
  

?>
  <title>TheColorTintayToner</title>
  <link rel="icon" type="image/png" href="<?php echo $value1.$empresa[$i]["logo"];  }?>" />

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" type="text/css" href="vistas/dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/css/self.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/OwlCarousel2-2.2.1/owl.carousel.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/OwlCarousel2-2.2.1/owl.theme.default.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/OwlCarousel2-2.2.1/animate.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/css/main_styles.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/css/responsive.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/css/contact_styles.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="vistas/dist/css/contact_responsive.css" rel="stylesheet">
  <!-- Custom fonts for this template -->
  <link rel="stylesheet" type="text/css" href="vistas/dist/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>


    <?php
      include "modulos/encabezado.php";

      if(empty($_GET["ruta"])){
        
           include "modulos/home.php";
        
      }elseif(isset($_GET["ruta"])){
          if($_GET["ruta"]== "home" ||
             $_GET["ruta"]== "" ||
             $_GET["ruta"]== "producto-servicio" ||
             $_GET["ruta"]== "contactanos"){
  
            include "modulos/".$_GET["ruta"].".php";
          }
        }

      include "modulos/footer.php";
    ?>





  <!-- Bootstrap core JavaScript -->
  <script src="vistas/dist/jquery/jquery-3.2.1.min.js"></script>      
  <script src="vistas/dist/jquery/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
  <script src="vistas/dist/bootstrap/js/popper.js"></script>
  <script src="vistas/dist/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="vistas/dist/bootstrap/js/bootstrap.min.js"></script>
  <script src="vistas/dist/js/isotope.pkgd.min.js"></script>
  <script src="vistas/dist/js/easing.js"></script>
  <script src="vistas/dist/js/custom.js"></script>
  <script src="vistas/dist/js/contact_custom.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>

</body>

</html>
