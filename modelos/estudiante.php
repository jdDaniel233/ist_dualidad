<?php 
//incluir la conexion de base de datos
require "../config/Conexion.php";
class Estudiante{


	//implementamos nuestro constructor
public function __construct(){

}

//metodo insertar regiustro
	
public function guardarEstudiante($nombre, $correo, $telefono, $direccion, $carrera, $cedula, $periodo, $login, $clave){
$sql="call sp_estudiantes(1,'$nombre', '$correo', '$telefono', '$direccion', $carrera, '$cedula', $periodo, '$login', '$clave')";
//return $sql;
	echo $sql;
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

public function listar(){
	$sql="call  sp_usuarios(2, '0', '0', '0', '0',0 , '0',0 , '0', '0')";
	return ejecutarConsultaSP($sql);
}

public function editar($usu_id,$usu_nombre,$usu_cedula,$usu_telefono,$usu_correo,$usu_cargo,$usu_login,$usu_clave,$permisos){
	$sql="call  sp_insertausuario($usu_id,'$usu_nombre','$usu_cedula','$usu_telefono','$usu_correo','$usu_cargo','$usu_login','$usu_clave','1')";
	$row=ejecutarConsultaSP($sql);
	 $num_elementos=0;
	 $sw=true;
	 $sql_detalle="CALL sp_insertapermisos(0,$usu_id,$permisos[$num_elementos])";
     //borro permisos 
	 $g=ejecutarConsulta($sql_detalle);
	 while ($num_elementos < count($permisos)) {
        //echo $permisos[$num_elementos];
	 	$sql_detalle="CALL  sp_insertapermisos(1,$usu_id,$permisos[$num_elementos])";
        ejecutarConsulta($sql_detalle) or $sw=false;
	 	$num_elementos=$num_elementos+1;
	 }
	 return $sw;

}
public function desactivar($usu_id){
	$sql="call sp_actdes_usuario($usu_id,0)";
	return ejecutarConsultaSP($sql);
}
public function activar($usu_id){
	$sql="call sp_actdes_usuario($usu_id,1)";
	return ejecutarConsultaSP($sql);
}

//metodo para mostrar registros
public function mostrar($usu_id){
	$sql="call  sp_usuarios(1,$usu_id)";
	$row=ejecutarConsultaSP($sql);
	//$sql="SELECT * FROM usuario where usu_id=usu_id";
	return $row->fetch_row();
	//ejecutarConsultaSimpleFila($sql));
}

public function verificar($usu_login,$usu_clave){
	$sql="call sp_logeo('$usu_login','$usu_clave');";
   // return $sql;
	return ejecutarConsultaSP($sql);	
}

public function obten_motivos($id){
	$sql="CALL sp_catalgo('scpa', 0,0,$id);";
	return ejecutarConsultaSP($sql);
}

}

 ?>
