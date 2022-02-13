<?php
    // session_start();
    // if(!isset($_SESSION['usuario1'])){
    //     header('location:index.php');     
    // }
    require_once __DIR__.'/config.php';
    require_once __DIR__.'/clase_sql.php'; 

    $claseSql = new Class_sql();
    $paciente = $claseSql->ConsultarTurno();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
    <title>Clientes</title>
</head>

<body>
    <?php
    include "menu.php";
?>
    <div class="container mt-3">
        <div class="row">
            <div>
                <button type="button" class="btn btn-outline-success t-3 float-end" data-bs-toggle="modal"
                    data-bs-target="#modal_turno">Nuevo Turno </button>
            </div>
        </div>

        <div class="row">
            <div class="card border-primary mb-3 ">
                <div class="card-header text-center">
                    <h3>Agendar Turno</h3>


                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped" border=1 id="tcliente">
                        <thead>
                            <tr>
                                <th>Nº</th>
                                <th>Fecha</th>
                                <th>Horario</th>
                                <th>Apellidos y Nombres</th>
                                <!-- <th>Dirección</th>
                                <th>Teléfono</th> -->
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $n=1;
            while($row = $paciente->fetch_assoc()){ ?>
                            <tr>
                                <td> <?= $n; ?> </td>
                                <td> <?= $row['date']; ?> </td>
                                <td> <?= $row['time']; ?> </td>
                                <td> <?= $row['usu_ape'] ?></td>


                                <td>
                                    <a href='actualizar.php?cedula=<?php echo $row['cedula']?>'><button
                                            class="btn btn-success" data-bs-toggle="modal"
                                            data-bs-target="#act_cli"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                height="16" fill="currentColor" class="bi bi-pencil"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z" />
                                            </svg></button></a>
                                </td>
                                <td>
                                    <a href='delete.php?cedula=<?php echo $row['cedula']?>'><button
                                            class="btn btn-danger" onclick="eliminar()"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path
                                                    d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                                <path fill-rule="evenodd"
                                                    d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                            </svg></button></a>
                                </td>
                            </tr>

                            <?php $n++; } ?>
                        </tbody>
                </div>
            </div>
            </table>
        </div>
    </div>

    <!-- Modal -->

    <div class="modal " tabindex="-1" id="modal_turno">
        <div class="modal-dialog modal-sm">
            <form action="turno_insertar.php" method="POST" class="needs-validation" novalidate>
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5>Agendar Turno</h5>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="">
                            <label for="ced" class="form-label">Cédula:</label>
                            <div>
                                <input class="form-control" type="text" name="txtced" id="ced"
                                    value="<?= $row['usu_ape'] ?> " required autocomplete="off">
                                <div class="invalid-feedback">
                                    Ingrese su ID
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            <div class="">
                                <label for="ape" required>Apellidos y Nombres:</label>
                                <div>
                                    <input class="form-control" type="text" name="txtape" id="ape" autocomplete="off" required>
                                    <div class="invalid-feedback">
                                        Ingrese Apellidos y Nombres Completos
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <label for="nom">Doctor:</label>
                                <div>
                                    <select name="sldoctor" id="" class="form-control">
                                        <option value="1">Dr. Arellano - Medicina General</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="">
                                <label for="dir" class="col-form-label">Fecha del Turno:</label>
                                <div>
                                    <input class="form-control" type="date" name="dt" id="dir" required>
                                    <div class="invalid-feedback">
                                        Seleccione Fecha
                                    </div>
                                </div>
                                <div class="">
                                    <!-- <div class="row"> -->
                                    <label for="tel" class="col-1 col-form-label">Hora:</label>
                                    <div>
                                        <select name="sltime" id="" class="form-control">
                                            <option value="08:00:00">08:00</option>
                                            <option value="08:15:00">08:15</option>
                                            <option value="08:30:00">08:30</option>
                                            <option value="08:45:00">08:45</option>
                                            <option value="09:00:00">09:00</option>
                                            <option value="09:15:00">09:15</option>
                                            <option value="09:30:00">09:30</option>
                                            <option value="09:45:00">09:45</option>
                                            <option value="10:00:00">10:00</option>
                                            <option value="10:15:00">10:15</option>
                                            <option value="10:30:00">10:30</option>
                                            <option value="10:45:00">10:45</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer ">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

                        </div>

                    </div>

            </form>
        </div>
    </div>
    <br>
    <hr>
    <div>
        <!-- <a href="index.php"> <button type="button" class="btn btn-danger float-end" >Menú</button></a> -->
    </div>


</body>

<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap5.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/sweetalert2@9.js"></script>
<script>
    (function () {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
<script>
    $(document).ready(function () {
        $('#tcliente').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Registros del 0 al 0",
                "infoFiltered": "(Total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "sProcessing": "Procesando...",
            }
        });
    });
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    function eliminar() {
        swal("Registro Eliminado", "Exitosamente", "success", {

            button: "OK",
        });
    }
</script>

</html>