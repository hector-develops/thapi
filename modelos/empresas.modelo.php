<?php

require_once "conexion.php";

class ModeloEmpresa{

	/*=============================================
	MOSTRAR Empresa
	=============================================*/

	static public function mdlMostrarEmpresas($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();
			// var_dump($stmt);
			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();
			// var_dump($stmt);

			return $stmt -> fetchAll();

			

		}

		$stmt -> close();

		$stmt = null;

    }
 }