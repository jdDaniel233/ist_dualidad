<?php
require "../config/Conexion.php";

class Conexion{
	//implementamos nuestro constructor
public function __construct(){
	
}
	

	

	public function guardarBitacora($id){
    $sql = "call sp_bitacora(1,'$id',0, '0', '0', '0', '0', '0', '0', '0', '0');";
    echo $sql; // Agrega esta línea para imprimir la consulta (solo con fines de depuración)
    return ejecutarConsultaSP($sql);
}
	public function guardarBitacoraDetalle($bita_id, $fecha, $horaIngreso, $horaSalida, $totalHoras, $actividadesRea, $experiencias, $aprendizajes, $propuestas){
    $sql = "call sp_bitacora(3,'0', $bita_id, '$fecha', '$horaIngreso', '$horaSalida', '$totalHoras', '$actividadesRea', '$experiencias', '$aprendizajes', '$propuestas');";
    echo $sql; // Agrega esta línea para imprimir la consulta (solo con fines de depuración)
    return ejecutarConsultaSP($sql);
}
	
	public function datatablebitacora ($id) {
		$sql = "call sp_bitacora(2,'$id',0, '0', '0', '0', '0', '0', '0', '0', '0');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}

	public function datatablebitacoradet () {
		$sql = "Select * from detallebitacora;";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	
}
?>
	
	