<?php
ob_start();
session_start();

if (!isset($_SESSION['usu_nombre']) && isset($_SESSION['usu_id'])) {
    // Manejo de sesión no válida
    header("Location: login.html");
    exit;
} else {

    $id = $_SESSION['usu_id'];
    require 'header.php';

    if ($_SESSION['Actas'] == 1) {
        ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box">
                            <div class="card text-center">
                                <h1>Informe semestral de gestoria</h1>
                            </div>
                            <form method="POST" id="inicio" enctype="multipart/form-data">

                                <div>
                                    <input type="hidden" name="creador" id="creador"
                                        value="<?php echo isset($id) ? $id : ''; ?>">
                                </div>

                                <div class="form-group  col-lg-12  text-center">
                                    <label for="infosem_objetivo">Objetivo del informe(*):</label>
                                    <textarea rows="4" id="infosem_objetivo" name="infosem_objetivo"
                                        class="form-control"></textarea>
                                </div>

                                <div class="form-group  col-lg-12  text-center">
                                    <label for="infosem_conclusion">Conclusión(*):</label>
                                    <textarea rows="4" id="infosem_conclusion" name="infosem_conclusion"
                                        class="form-control"></textarea>
                                </div>

                                <div class="form-group  col-lg-12  text-center">
                                    <label for="infosem_recomendacion">Recomendaciones(*):</label>
                                    <textarea rows="4" id="infosem_recomendacion" name="infosem_recomendacion"
                                        class="form-control"></textarea>
                                </div>


                                <div class="form-group  col-lg-12  text-center">
                                    <label for="infosem_anexo">Anexos(*):</label>
                                    <textarea rows="4" id="infosem_anexo" name="infosem_anexo" class="form-control"></textarea>
                                </div>


                                <div class="form-group col-lg-12 text-center">
                                    <label for="detplan_nombreEmpresa">Estudiantes matriculados en la carrera(*)</label>
                                    <input type="text" class="form-control" name="detplan_nombreEmpresa"
                                        id="detplan_nombreEmpresa" placeholder="no llenar " readonly>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-6 text-center">
                                        <h3>Actividades planificadas</h3>
                                    </div>

                                    <div class="form-group col-lg-6 text-center">
                                        <h3>Actividades ejecutadas</h3>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-lg-3 text-center">
                                        <label for="infosem_planiEstudiantes">Número de estudiantes(*)</label>
                                        <input type="number" class="form-control" name="infosem_planiEstudiantes"
                                            id="infosem_planiEstudiantes">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="infosem_planiDocentes">Número de docentes(*)</label>
                                        <input type="number" class="form-control" name="infosem_planiDocentes"
                                            id="infosem_planiDocentes">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="infosem_ejeEstudiantes">Número de estudiantes(*)</label>
                                        <input type="number" class="form-control" name="infosem_ejeEstudiantes"
                                            id="infosem_ejeEstudiantes">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="infosem_ejeDocentes">Número de docentes(*)</label>
                                        <input type="text" class="form-control" name="infosem_ejeDocentes"
                                            id="infosem_ejeDocentes">
                                    </div>
                                </div>

                                <div class="form-group col-lg-12 text-center">
                                    <button class="btn btn-primary m-2" name="guardar" id="guardar">
                                        <i class="fa fa-save"></i> Guardar información
                                    </button>
                                </div>

                            </form>


                            <form method="POST" id="convenios" enctype="multipart/form-data">

                                <div class="row">
                                    <!--  Empresas con convenios -->
                                    <div class="text-center  col-lg-12 text-center">
                                        <h3>Números de empresas con convenios</h3>
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Nombre de la empresa (*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">Sector productivo al que pertence(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">Relación con el perfil de egreso(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">N* estudiantes(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Medios de verificación(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <!-- Empresas con tipo de documento -->
                                    <div class="text-center text-center form-group col-lg-12">
                                        <h3>Número de empresas con otro tipo de documento que validan las prácticas
                                            preprofesionales</h3>
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Nombre de la empresa (*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">Tipo documento(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">Sector productivo al que pertence(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">Relación con el perfil de egreso(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-2 text-center">
                                        <label for="cat_peridodo">Número de estudiantes beneficiarios(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Medios de verificación(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <!-- Prácticas realizadas en el instituto -->
                                    <div class="text-center text-center form-group col-lg-12">
                                        <h3>Número de estudiantes que realizaron sus prácticas preprofesionales en el IST
                                            17J</h3>
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Nombre del instituto (*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name=""
                                            value="Instituto Superior Tecnológico “17 de Julio”">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Relación con el perfil de egreso(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Número de estudiantes beneficiarios(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-3 text-center">
                                        <label for="cat_peridodo">Medios de verificación(*):</label>
                                        <br>
                                        <input class="form-control" type="text" id="" name="">
                                    </div>

                                    <div class="form-group col-lg-12 text-center">
                                        <button class="btn btn-primary m-2" name="guardar" id="guardar">
                                            <i class="fa fa-save"></i> Guardar información
                                        </button>
                                    </div>
                            </form>

                            <!-- Fin -->

                            <!-- 12 campos de resumenes -->

                            <form method="POST" id="resumen" enctype="multipart/form-data">
                                <div class="table table-bordered col-lg-12">
                                    <div>
                                        <h3 class="text-center"> Resumen estadístico </h3>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <th></th>
                                            <th>Número</th>
                                            <th>Observación</th>
                                        </tr>
                                        <tr>
                                            <td>Cantidad de convenios suscritos (vigentes) que beneficia a su carrera</td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Cantidad de empresas con convenios que fomentaron el desarrollo de las
                                                    prácticas preprofesionales durante este periodo académico</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <p>Cantidad de estudiantes que realizaron más de 1 actividad en el mismo
                                                    periodo académico pero programadas en diferentes empresas y en
                                                    diferentes fechas.</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cantidad de estudiantes certificados para el pase de nivel</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cantidad de estudiantes certificados como requisito para su titulación
                                                </p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cantidad de estudiantes con sanciones disciplinarias durante sus
                                                    prácticas preprofesionales</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cantidad de estudiantes que no aprobaron las prácticas preprofesionales
                                                </p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cantidad de tutores académicos que entregaron los informes de
                                                    acompañamiento</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Cantidad de tutores académicos pendientes por reportar los informes de
                                                    acompañamiento</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <p>Otras actividades realizadas. Descríbalas</p>
                                            </td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                            <td><input class="form-control" type="text" id="" name=""></td>
                                        </tr>

                                    </table>

                                </div>

                                <div class="form-group col-lg-12 text-center">
                                    <button class="btn btn-primary m-2" name="guardar" id="guardar">
                                        <i class="fa fa-save"></i> Guardar asignación
                                    </button>
                                </div>
                        </div>
                        </form>
                    </div>


                    <div class="row">
                        <div class="col-md-12">

                            <div id="listadoactividades">
                                <form>

                                    <div class="text-center">
                                        <label for="temas">Temas (*):</label>
                                        <br>
                                        <select name="temas" id="temas" required class="text-center" onchange="traerTema();">
                                        </select>
                                    </div>

                                    <input type="hidden" name="buscarTema" id="buscarTema" class="text-center">
                                </form>
                                <div class="table-responsive">
                                    <table id="tbllistado3"
                                        class="table table-striped table-bordered table-condensed table-hover">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th></th>
                                                <th>Nombre de la empresa</th>
                                                <th>Estudiante</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Tus datos aquí -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
    <script src="scripts/informeGestorial.js"></script>
    <?php
}

ob_end_flush();
?>