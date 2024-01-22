<?php
require "../config/Conexion.php";

class Conexion{
	//implementamos nuestro constructor
public function __construct(){
	
}
	
	public function datatableEst () {
		$sql = "call sp_estudiantes(2, '0', '0', '0', '0', 0, '0', 0, '0', '0');";
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
	public function guardarEva($id,$criterio1, $criterio2, $criterio3, $criterio4, $criterio5,$criterio6, $criterio7, $criterio8, $criterio9, $criterio10){
    $sql = "call sp_rubrica(2, $id, '$criterio1', '$criterio2', '$criterio3', '$criterio4', '$criterio5', '$criterio6', '$criterio7', '$criterio8', '$criterio9', '$criterio10')";
    //echo $sql; // Agrega esta línea para imprimir la consulta (solo con fines de depuración)
    return ejecutarConsultaSP($sql);
}

	
	
}
?>
	
	