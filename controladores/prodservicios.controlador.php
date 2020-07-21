<?php

class ProductosInicio{



    static public function ctrMostrarProductos($valor, $item){

        
        $tabla="tbl_productos";
        
        $respuesta = ModeloProducto::mostrarProducto($tabla, $valor, $item);
     

        return $respuesta;
    }

    static public function ctrMostrarProd($valor, $item){

        
        $tabla="tbl_productos";
        
        $respuesta = ModeloProducto::mostrarProdVendidos($tabla, $valor, $item);
     

        return $respuesta;
    }




}