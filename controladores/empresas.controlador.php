<?php

class ControladorEmpresas{

	/*=============================================
	MOSTRAR EmpresaS
	=============================================*/

	static public function ctrMostrarEmpresas($valor, $item){

		$tabla = "tbl_datos_empresa";

		$respuesta = ModeloEmpresa::mdlMostrarEmpresas($tabla, $valor, $item);

		return $respuesta;

	}



}