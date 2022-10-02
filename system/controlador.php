<?php
require_once SYS . DIRECTORY_SEPARATOR . 'vista.php';

abstract class Controlador {
    static protected function mostrarVista(
        $vista,
        $datos='',
        $comoContenido=FALSE
    ){
        Vista::mostrar($vista,$datos,$comoContenido);
    }
}