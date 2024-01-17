<?php
require "../config/Conexion.php";

class Conexion{
	//implementamos nuestro constructor
public function __construct(){
	
}
	
	public function datatabledoc () {
		$sql = "call sp_estudiantes(3, '0', '0', '0', '0', 0, '0', 0, '0', '0');";
		return ejecutarConsultaSP($sql);
	}

public function datatabledoc2 ($id) {
		$sql = "call sp_estudiantes(4, '0', '0', '0', '0', 0, '$id', 0, '0', '0');";
		return ejecutarConsultaSP($sql);
	}
	
	public function combo_estado() {
    $sql = "CALL sp_cat(4)";
    return ejecutarConsultaSP($sql);
}
	
}
?>
	
	