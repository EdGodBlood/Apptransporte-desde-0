<?php
require_once SYS . DIRECTORY_SEPARATOR . "modelox.php";
require_once "TablaInterface.php";
require_once PER . DIRECTORY_SEPARATOR . "BaseDeDatos.php";
class registros extends Modelox implements TablaInterface {
private $_id_reg; # Nuestro (PK)
private $_od_reg;
private $_bd;
const TABLA = 'registros';
#Constructor
public function __construct($id_reg=null, $od_reg=""){
$this->_bd = new BaseDeDatos(new MySQL());
$this->_id_reg = $id_reg;
$this->_od_reg = $od_reg; 
}
# Implementamos lo que dice la INTERFACE
public function nuevo(){
$sql = "INSERT INTO ". self::TABLA 
." (id_reg, od_reg) VALUES (".
$this->_id_reg .",'". $this->_od_reg ."'"
.");";
return $this->_bd->ejecutar($sql);
}
public function editar(){
$sql ="UPDATE ". self::TABLA 
. " SET od_reg='".$this->_od_reg."'"
." WHERE id_reg=".$this->_id_reg.";";
return $this->_bd->ejecutar($sql);
}
public function eliminar(){
$sql ="DELETE FROM ". self::TABLA 
." WHERE id_reg=".$this->_id_reg.";";
return $this->_bd->ejecutar($sql);
}
public function leer($todo=true){
$sql ="SELECT * FROM ". self::TABLA ;
if (!$todo)
$sql .=" WHERE id_reg=".$this->_id_reg.";";
$datos=$this->_bd->ejecutar($sql);
if (!$todo)
$this->setPropiedades($datos[0]);
return $datos;
}
#Devolvemos las propiedades
public function getId_reg(){
return $this->_id_reg;
}
public function getOd_reg(){
return $this->_od_reg;
}
private function setPropiedades ($registro){
$this->_id_reg= $registro["id_reg"];
$this->_od_reg=$registro["od_reg"];
}
}
