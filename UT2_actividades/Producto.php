<?php
    class Producto{
        CONST IVA = 0.23;

        private static $numProductos = 0;

        public static function nuevoProducto(): void{
            self::$numProductos++;
        }
    }

    Producto::nuevoProducto();
    $impuesto = Producto::IVA;
    echo $impuesto;
?>