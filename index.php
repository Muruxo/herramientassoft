
<?php

    require_once __DIR__.'/config.php';
    require_once __DIR__.'/clase_sql.php'; 

    $claseSql = new Class_sql();
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
    <title>Login</title>
</head>
<style>
    .sidenav{
        color: #000;
    }
    .body{
        background: rgb(243, 249, 249 ) ; 
    }
</style>
<body>
    <div class="sidenav">
        <center>
        <div class="login-main-text">
            <h2>Login</h2>
            <p>"Aqui tu mensaje"</p>
            <img src="img/smart-home-1.jpg" alt="" width="90%"></center>
        </div>
    </div>
    <div class="main">
        <div class="col-6">
            <div class="login-form">
                <form action="" method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <label for="usu">Ususario:</label>
                        <div class="col-10">
                            <input type="text" name="txtusu" id="txtusu" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese Usuario
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label for="pas">Password:</label>
                        <div class="col-10">
                            <input type="password" name="txtpas" id="txtpas" class="form-control" required>
                            <div class="invalid-feedback">
                                Ingrese Contraseña
                            </div>
                        </div>
                    </div>
                        <div>
                             <a href="recover.php"><h6 >Haz olvidado tu constraseña?    </h6></a>
                        </div>
                     <div class="text-center">
                        <a href="crear.php"><button type="button" class="btn btn-secondary mt-3 ml-5 btn-center" data-bs-toggle="modal" data-bs-target="#modal_cre">Crear Cuenta</button></a>
                        <button type="submit" class="btn btn-primary btn-block mt-3 ml-5 btn-center">Ingresar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>


    
    
</body>
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
        }

        form.classList.add('was-validated')
      }, false)
    })
    })()
</script>
</html>

<?php
    if($_POST){
        $usu = $_POST['txtusu'];
        $pas = $_POST['txtpas'];
        $r_usuario = $claseSql->ConsultaUser($usu, $pas);
        if($r_usuario->num_rows>0){
            // Usuario Correcto
            session_start();
            $_SESSION['usuario'] = $usu; 
            header('location: turno.php'); 
        }else{?>
            <script>
               Swal.fire({
                   icon:'error',
                   title: 'Acceso Denegado',
                   text: 'Usuario Incorrecto'
               })
            </script>
       <?php }
    }



?>