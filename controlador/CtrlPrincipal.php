<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
/*
* Clase CtrlPrincipal
*/
class CtrlPrincipal extends Controlador{
    public function index(){
        $menu = array(
            'CtrlRegistros'=> 'Registros',

        );
    $datos = array(
            'encabezado'=> 'Sistema - Administrador',
            'menu' =>$menu
            );

    $this->mostrarVista('principal.php',$datos);
 }
}
        