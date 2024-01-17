<?php
ob_start();
session_start();

if (!isset($_SESSION['est_nombre']) && isset($_SESSION['est_id'])) {
    // Manejo de sesión no válida
    header("Location: login.html");
    exit;
} else {
    $cedula = $_SESSION['est_id'];
    $id = $_SESSION['est_id'];
    require 'header.php';

    if ($_SESSION['Generación'] == 1) {
        ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="card text-center">
                        <h1>Bitácora</h1>
                    </div>


                    <!-- <div class="col-md-12">
                   
                        

                        <div class="box">
                            <form id="datosprincipales">
                                <div>
                                    <input type="hidden" class="form-control" name="cedula" id="cedula"
                                        value="<?php //echo $cedula ?>" readonly>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="est_cedula">Estudiante:</label>
                                    <input type="text" class="form-control" name="est_cedula" id="est_cedula" readonly>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="cat_carrera">Carrera:</label>
                                    <input type="text" class="form-control" name="cat_carrera" id="cat_carrera" readonly>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="detplan_nombreEmpresa">Empresa formadora:</label>
                                    <input type="text" class="form-control" name="detplan_nombreEmpresa"
                                        id="detplan_nombreEmpresa" readonly>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="cat_paralelo">Ciclo / Paralelo:</label>
                                    <input type="text" class="form-control" name="cat_paralelo" id="cat_paralelo" readonly>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="usu_id">Tutor académico:</label>
                                    <input type="text" class="form-control" name="usu_id" id="usu_id" readonly>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="detplan_areaTrabajo">Área de trabajo:</label>
                                    <input type="text" class="form-control" name="detplan_areaTrabajo" id="detplan_areaTrabajo"
                                        readonly>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="detplan_CedTutEmpresarial">Tutor empresarial:</label>
                                    <input type="text" class="form-control" name="detplan_CedTutEmpresarial"
                                        id="detplan_CedTutEmpresarial" readonly>
                                </div>

                                <div class="form-group col-lg-6 ">
                                    <label for="cat_periodo">Periodo académico:</label>
                                    <input type="text" class="form-control" name="cat_periodo" id="cat_periodo" readonly>
                                </div>

                            </form>
                        </div>
                    </div>
                </div> -->
                    <!-- Formulario flotante -->
                    <div class="col-md-12">
                        <div class="box">
                            <div class="container">
                                <div class="row justify-content-center">

                                    <form method="POST" id="bitacora" enctype="multipart/form-data">

                                        <div class="text-center">
                                            <h3 class="text-dark">Ingrese correctamente los datos para registrar la actividad
                                                realizada</h3>
                                        </div>

                                        <div>
                                            <input type="hidden" class="form-control" name="detb_id" id="detb_id">
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_fecha">Fecha: dd-mm-aaaa</label>
                                            <input type="date" class="form-control" name="detb_fecha" id="detb_fecha" required>
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_horaIngreso">HORA DE INGRESO: HH-MM</label>
                                            <input type="time" class="form-control" name="detb_horaIngreso"
                                                id="detb_horaIngreso" required>
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_horaSalida">HORA DE SALIDA: HH-MM</label>
                                            <input type="time" class="form-control" name="detb_horaSalida" id="detb_horaSalida"
                                                required>
                                        </div>

                                        <div class="form-group col-lg-3 text-center">
                                            <label for="detb_TotalHoras">TOTAL HORAS: HORA/DÍA</label>
                                            <input type="time" class="form-control" name="detb_TotalHoras" id="detb_TotalHoras"
                                                required>
                                        </div>
                                        <!-- Primer campo de texto -->
                                        <div class="form-group col-lg-6 ">
                                            <label for="detb_actividadesRealizadas">Actividades Realizadas:</label>
                                            <textarea id="detb_actividadesRealizadas" name="detb_actividadesRealizadas"
                                                class="form-control" required maxlength="100"
                                                oninput="actualizarContador('detb_actividadesRealizadas', 'caracteresRestantes1')"></textarea>
                                            <small id="caracteresRestantes1">100/100</small>
                                        </div>

                                        <!-- Segundo campo de texto -->
                                        <div class="form-group  col-lg-6">
                                            <label for="detb_experiencias">Experiencias:</label>
                                            <textarea id="detb_experiencias" name="detb_experiencias" class="form-control"
                                                required maxlength="100"
                                                oninput="actualizarContador('detb_experiencias', 'caracteresRestantes2')"></textarea>
                                            <small id="caracteresRestantes2">100/100</small>
                                        </div>

                                        <!-- Tercer campo de texto -->
                                        <div class="form-group  col-lg-6">
                                            <label for="detb_aprendizajes">Aprendizajes:</label>
                                            <textarea id="detb_aprendizajes" name="detb_aprendizajes" class="form-control"
                                                required maxlength="100"
                                                oninput="actualizarContador('detb_aprendizajes', 'caracteresRestantes3')"></textarea>
                                            <small id="caracteresRestantes3">100/100</small>
                                        </div>

                                        <!-- Cuarto campo de texto -->
                                        <div class="form-group  col-lg-6">
                                            <label for="detb_propuestas">Propuestas:</label>
                                            <textarea id="detb_propuestas" name="detb_propuestas" class="form-control" required
                                                maxlength="100"
                                                oninput="actualizarContador('detb_propuestas', 'caracteresRestantes4')"></textarea>
                                            <small id="caracteresRestantes4">100/100</small>
                                        </div>

                                        <div>
                                            <input type="hidden" class="form-control" name="est_id" id="est_id"
                                                value="<?php echo $cedula ?>" readonly>
                                        </div>


                                        <div class="form-group col-lg-6 text-center">
                                            <button class="btn btn-primary m-2" type="submit">
                                                <i class="fa fa-save"></i> Guardar actividad
                                            </button>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 text-center">
                                            <button class="btn btn-success" onclick="mostrarform(true)" id="btnagregar"><i
                                                    class="fa fa-plus-circle"></i>Subir bitácora</button>
                                            <div class="box-tools pull-right">
                                            </div>
                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Mostrar datos del datatable -->
                    <div class="col-md-12">
                        <div class="box">
                            <div style="width:900" id="listadoactividades">
                                <form>
                                    <div>
                                        <input type="hidden" class="form-control" name="id" id="id" value="<?php echo $id ?>"
                                            readonly>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="tbllistado"
                                            class="table table-striped table-bordered table-condensed table-hover">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th></th>
                                                    <th>FECHA <br>dd-mm-aaaa</th>
                                                    <th>HORA DE INGRESO <br>HH-MM</th>
                                                    <th>HORA DE SALIDA <br> HH-MM</th>
                                                    <th>TOTAL <br>HORA/DÍA</th>
                                                    <th>ACTIVIDADES REALIZADAS <br>(DETALLE LAS ACTIVIDADES)</th>
                                                    <th>EXPERIENCIAS ADQUIRIDAS</th>
                                                    <th>APRENDIZAJES LOGRADOS</th>
                                                    <th>PROPUESTAS DE MEJORA</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Tus datos aquí -->
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">

                                <div class="panel-body" id="formularioregistros">
                                  <!--  <form method="POST" id="for" enctype="multipart/form-data">
                                        <input class="form-control" type="text" name="cedula" id="cedula"
                                            value="<?php echo $cedula; ?>">

                                        <input class="form-control" type="text" name="tipo" id="tipo" value="1041">


                                        <div class="form-group col-lg-6 col-md-6 col-xs-12">
                                            <label for="doce_archivo">Archivo PDF(*):</label>
                                            <input type="file" class="form-control" name="doce_archivo" id="doce_archivo"
                                                accept=".pdf" required>
                                        </div>


                                        <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <!-- <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button> -->
                                        <!--    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Subir
                                                documento
                                            </button>
                                            <button class="btn btn-danger" id="btnagregar" onclick="cancelarform()"
                                                type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                                        </div>
                                    </form>-->
                                </div>
                                <!-- Fin centro -->
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
    ?>
    <script src="scripts/bitacora.js"></script>
    <?php
}

ob_end_flush();
?>