<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Crear Cuenta</title>
</head>
<style>
    img {
        width: 20%;
    }
</style>

<body>


    <div class="" tabindex="-1" id="">
        <div class="modal-dialog">
            <form action="user_insert.php" method="POST" class="needs-validation" novalidate
                enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5>Crear Usuario</h5>
                    </div>
                    <div class="modal-body">
                        <div id="imagenPreview" class="ml-5" align="center">
                            <img src="img/perfil2.png" alt="perfil">
                        </div>

                        <div class="row">
                         <!--      <div class="col-8 " align=""> 
				<div id="">
                    <label for="">Seleccione Foto de Perfil:</label>
                    <br>
                    <div class=" mt-2 mb-2"> 
					<input type="file" name="img" id="img" >
                    
					</div>
				</div> -->


                <!-- <input class="form-control" type="text" autocomplete="none" name="txtced"
                                        id="txtced" maxlength="13"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        required autocomplete="off">
                                         -->
                            <div class="row">
                                <label for="" class="form-label">Cédula:</label>
                                <div>
                                    <input class="form-control" type="number" autocomplete="none" name="txtced"
                                        id="txtced" maxlength="10"required autocomplete="off">
                                    <div class="invalid-feedback">
                                        Ingrese Cédula
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <label for="ape">Apellidos y Nombres:</label>
                                <div>
                                    <input class="form-control" type="text" name="txtape" autocomplete="off"
                                        id="txtape" style="text-transform:uppercase" required="" >
                                    <div class="invalid-feedback">
                                        Ingrese sus Apellidos y Nombres
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <label for="ced" class="form-label">Movil:</label>
                                <div>
                                    <input class="form-control" autocomplete="off" type="number" name="txttel"
                                        id="txtetel" maxlength="10"
                                        oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        required>
                                    <div class="invalid-feedback">
                                        Ingrese un Número Correcto
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-8">
                        <label for="nom">Tipo de Usuario:</label>
                        <div> 
                            <input class="form-control" type="number" autocomplete="none" name="txttip" id="txttip" value="7" max="7" min="7" maxlength="1" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"required>
                            <div class="invalid-feedback">
                                    Usuario no Ingresado
                                </div>
                        </div></div>
                    </div> -->
                            <div class="row">
                                <label for="ced" class="form-label">Email:</label>
                                <div>
                                    <input class="form-control" type="email" autocomplete="off" name="txtema"
                                        id="txtema" required>
                                    <div class="invalid-feedback">
                                        Ingrese Email
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <label for="dir" class="col-1 col-form-label">Constraseña:</label>
                                <div>
                                    <input class="form-control" type="password" autocomplete="off" name="txtcon"
                                        id="txtcon" required>
                                    <div class="invalid-feedback">
                                        Ingrese Contraseña
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label for="tel" class="col-5 col-form-label">Verificar Contraseña:</label>
                                <div>
                                    <input class="form-control" type="password" autocomplete="off" name="txtcon2"
                                        id="txtcon2" required>
                                    <div class="invalid-feedback">
                                        Contraseñas no coinciden
                                    </div>
                                </div>
                            </div>

                            <!-- <div class="row">
                        <label for="ced" class="form-label" >Estado:</label>
                            <div>
                                <select name="slest" id="slest">
                                    <option value="1" selected >Activo</option>
                                   
                                </select>
                                <div class="invalid-feedback">
                                    Ingrese Email
                                </div>
                            </div>
                    </div> -->
                            <div class="row">
                                <label for="ced" class="form-label">Observaciones:</label>
                                <div>
                                    <input class="form-control" type="text" name="txtobs" id="txtobs" autocomplete="off">

                                </div>
                            </div>

                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary" name="btn-agregar"
                                id="btn-agregar">Guardar</button>
                            <a href="index.php"><button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Cerrar</button></a>
                        </div>

                    </div>
            </form>
        </div>
    </div>

    </div>
</body>

</html>


<script type="text/javascript" src="js/bootstrap-filestyle.js"> </script>
<script src="js/sweetalert2@9.js"></script>
<script serc="js/bootstrap.js"></script>
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
                        Swal.fire({
                            icon: 'error',
                            title: 'Datos Incompletos o Erroneos',
                            text: 'Verifique su infomación'
                        })
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Registro Exitoso',
                            text: 'Su usuario ha sido creado',
                            timer: 3000,
                        })

                    }

                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    (function () {
        function filePreview(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#imagenPreview').html("<img src='" + e.target.result + "' />");
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $('#img').change(function () {
            filePreview(this);
        });
    })();
</script>