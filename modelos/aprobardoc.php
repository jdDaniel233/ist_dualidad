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
	//echo $sql;
		return ejecutarConsultaSP($sql);
	}
	public function datatabledoc3 ($id) {
		$sql = "call sp_estudiantes(5, '0', '0', '0', '0', 0, '$id', 0, '0', '0');";
	//echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	public function guardarAprobacion($idFila,$estado, $observacion) {
    $sql = "call dualidad.sp_subirDoc(2,' ',' ', 2, 2, $idFila, $estado, '$observacion');";
		
    return ejecutarConsultaSP($sql);
}
	public function eliminar($id_doc) {
		$sql = "DELETE FROM `dualidad`.`documentoestudiante` WHERE (`doce_id` = '$id_doc');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	
}
?>
	
	