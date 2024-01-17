<?php
ob_start();
session_start();

if (!isset($_SESSION['est_nombre']) && isset($_SESSION['est_id'])) {
    // Manejo de sesión no válida
    header("Location: login.html");
    exit;
} else {
    $cedula = $_SESSION['est_id'];

    require 'header.php';

    if ($_SESSION['Generación'] == 1) {
        ?>

        <div class="content-wrapper">
            <section class="content">
                <div class="row justify-content-center">
                    <div class="col-md-11">
                        <div class="card text-center">
                            <h1>Historial de Empresas</h1>
                        </div>
                        <!-- Historial de prácticas  -->
                        <div class="box">
                            <div style="width:700" id="historial">
                                <form>
                                    <div>
                                        <input type="hidden" class="form-control" name="cedula" id="cedula"
                                            value="<?php echo $cedula ?>" readonly>
                                    </div>
                                    <div class="table-responsive ">
                                        <table id="tblhistorial"
                                            class="table table-striped table-bordered table-condensed table-hover justify-content-center">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th>Nombre de la empresa</th>
                                                    <th>Horas completadas</th>
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
                </div>
            </section>
        </div>
        <?php
    } else {
        require 'noacceso.php';
    }
    require 'footer.php';
    ?>
    <script src="scripts/historialpracticas.js"></script>
    <?php
}

ob_end_flush();
?>