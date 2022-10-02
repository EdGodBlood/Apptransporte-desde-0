<?php
require_once SYS . DIRECTORY_SEPARATOR . 'Controlador.php';
require_once MOD . DIRECTORY_SEPARATOR . 'Registros.php';
/*
* Clase CtrlRegistros
*/
class CtrlRegistros extends Controlador {
public function index(){
# Mostramos los datos
$registros = new Registros();
$datosRegistros = $registros->leer();
$datos = array(
'titulo'=>'Registros',
'encabezado'=>'Listado de Registros',
'datos'=>$datosRegistros,
);
$this->mostrarVista('registros/mostrar.php',$datos);
}
public function eliminar(){
    if (isset($_REQUEST['id_reg'])) {
    $registros = new Registros($_REQUEST['id_reg']);
    $registros->eliminar();
    $this->index();
    } else
    echo "...El Id a ELIMINAR es requerido";
    }
public function guardarNuevo(){
$registros = new Registros (
$_POST["id_reg"],
$_POST["od_reg"],
);
$registros->nuevo();
$this->index();
}
public function guardarEditar(){
$registros = new Registros (
$_POST["id_reg"], #El id que enviamos
$_POST["od_reg"],
);
$registros->editar();
$this->index();
}
public function nuevo(){
#Mostramos el Formulario de Nuevo
$datos=array(
'encabezado'=>'Nuevo Registro'
);
$this->mostrarVista('registros/frmNuevo.php',$datos);
}
public function editar(){
#Mostramos el Formulario de Editar
if (isset($_REQUEST['id_reg'])) {
$registros = new Registros($_REQUEST['id_reg']);
$registros->leer(false);
$datos = array(
'encabezado'=>'Editando Registros: '. $_REQUEST['id_reg'],
'registros'=>$registros, 
);
$this->mostrarVista('registros/frmEditar.php',$datos);
} else
echo "...El Id a EDITAR es requerido";
}
}
