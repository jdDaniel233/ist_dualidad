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
	public function guardarPlanificacion($empresa, $tutorEmpresarial, $encargado, $titulo, $cargo, $carrera, $periodo, $nucleo, $proyecto, $fechaInicio, $fechafin, $diaspro, $horasDestinadas, $horasproyecto, $totalhoras, $fechaEntregaDocse, $fechaFinEntregaDocst, $fechaFinEntregaDocsg){
    $sql = "call sp_planificacion(1, '$empresa', '$tutorEmpresarial', '$encargado', '$titulo', '$cargo', $carrera, $periodo, '$nucleo', '$proyecto', '$fechaInicio', '$fechafin', '$diaspro', '$horasDestinadas', '$horasproyecto', '$totalhoras', '$fechaEntregaDocse', '$fechaFinEntregaDocst', '$fechaFinEntregaDocsg');";
    echo $sql; // Agrega esta línea para imprimir la consulta (solo con fines de depuración)
    return ejecutarConsultaSP($sql);
}
	
	public function datatablebitacora ($id) {
		$sql = "call sp_bitacora(2,'$id',0, '0', '0', '0', '0', '0', '0', '0', '0');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}

	public function datatableplani () {
		$sql = "call dualidad.sp_planificacion(2, '', '', '', '', '',0 ,0 , '', '', '', '', '', '', '', '', '', '', '');";
		// echo $sql;
		return ejecutarConsultaSP($sql);
	}
	
	public function combo_carrera() {
    $sql = "CALL sp_cat(1)";
    return ejecutarConsultaSP($sql);
}

public function combo_periodo() {
    $sql = "CALL sp_cat(2)";
    return ejecutarConsultaSP($sql);
}
	
	
}
?>
	
	