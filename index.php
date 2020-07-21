<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/empresas.controlador.php";
require_once "controladores/prodservicios.controlador.php";



require_once "modelos/empresas.modelo.php";
require_once "modelos/prodservicios.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();