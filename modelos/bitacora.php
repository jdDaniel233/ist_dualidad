<?php
require "../config/Conexion.php";

class Conexion{
	//implementamos nuestro constructor
public function __construct(){
	
}
	

	

	public function guardarBitacora($id){
    $sql = "call sp_bitacora(1,'$id',0, '0', '0', '0', '0', '0', '0', '0', '0');";
   // echo $sql; // Agrega esta línea para imprimir la consulta (solo con fines de depuración)
    return ejecutarConsultaSP($sql);
}
	public function guardarBitacoraDetalle($bita_id, $fecha, $horaIngreso, $horaSalida, $totalHoras, $actividadesRea, $experiencias, $aprendizajes, $propuestas){
    $sql = "call sp_bitacora(3,'0', $bita_id, '$fecha', '$horaIngreso', '$horaSalida', '$totalHoras', '$actividadesRea', '$experiencias', '$aprendizajes', '$propuestas');";
    //echo $sql; // Agrega esta línea para imprimir la consulta (solo con fines de depuración)
    return ejecutarConsultaSP($sql);
}
	
	public function datatablebitacora ($id) {
		$sql = "call sp_bitacora(2,'$id',0, '0', '0', '0', '0', '0', '0', '0', '0');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}

	public function datatablebitacoradet($id) {
		$sql = "call sp_bitacora(4, '', $id, '', '', '', '', '', '', '', '');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	public function eliminar($id_reg) {
		$sql = "DELETE FROM `dualidad`.`detallebitacora` WHERE (`detb_id` = '$id_reg');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	public function eliminarenca($idFila) {
		$sql = "DELETE FROM `dualidad`.`bitacora` WHERE (`bit_id` = '$idFila');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	public function EditarBitacoraDetalle($bita_id2, $fecha2, $horaIngresoModal, $horaSalidaModal, $TotalHorasModal, $actividadesRea2, $experiencias2, $aprendizajes2, $propuestas2, $id_reg) {
    $sql = "UPDATE `dualidad`.`detallebitacora` SET 
            `bit_id` = '$bita_id2', 
            `detb_fecha` = '$fecha2', 
            `detb_horaIngreso` = '$horaIngresoModal', 
            `detb_horaSalida` = '$horaSalidaModal', 
            `detb_TotalHoras` = '$TotalHorasModal', 
            `detb_actividadesRealizadas` = '$actividadesRea2', 
            `detb_experiencias` = '$experiencias2', 
            `detb_aprendizajes` = '$aprendizajes2', 
            `detb_propuestas` = '$propuestas2' 
            WHERE (`detb_id` = '$id_reg');";
    // echo $sql;
    return ejecutarConsultaSP($sql);
}

	
	
}
?>
	
	