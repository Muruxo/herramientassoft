<?php
  session_start();
  if(!isset($_SESSION['usuario'])){
      header('location:index.php');     
  }
            require_once __DIR__. '/config.php';
            require_once __DIR__. '/clase_sql.php';

    $claseql = new Class_sql();
    $r_usuario = $claseql->ConsultarUsuario($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div>
        <h1 class="Display-1 " style="text-align: center">Bienvenido </h1>
    </div>
    <?php
    include "menu.php";
    ?>
   
        <div class="container">
    <table class="table table-hover table-dark table-borderless table-sm ">
    <thead class="">
    <tr>
        <th style="text-align: center">Foto</th>
        <th style="text-align: center">Datos</th>
    </tr>
    </thead>
    <tbody Id="idtabla">
        <?php $n=1;
         while($fila= $r_usuario->fetch_assoc()){?>
       <tr> <div class=" ">
       <th rowspan="8" class="" height="400px" width="400px"><img id="img" class=" img-fluid mt-5 mx-auto d-block "  src="data:image/jpg/png/jfif;base64, <?php echo base64_encode($fila['USU_FOTO']);?> " width="100%" height="100%"></th>
           </div>
       </tr>
       <tr>
           
           <th>Id <label for="" class="text-danger"><?=$n;?></label></th>
       </tr>
       <tr>
           
           <th>Apellidos y nombres: <label for="" class="text-success"><?=$fila['USU_APNO'];?></label></th>
       </tr>
       <tr>
           
           <th> Cédula: <label for="" class="text-success"><?=$fila['USU_CEDULA'];?></label></th>
       </tr>
       <tr>
           
           <th>Móvil: <label for="" class="text-success"><?=$fila['USU_MOVIL'];?></label></th>
       </tr>
       <tr>
           
           <th>Tipo: <label for="" class="text-success"><?=$fila['USU_TIPO'];?></label></th>
       </tr>
       <tr>
           
           <th>Correo: <label for="" class="text-success"><?=$fila['USU_USEREMAIL'];?></label></th>
       </tr>
       <tr>
           
           <th>Observación: <label for="" class="text-success"><?=$fila['USU_OBSERVACION'];?></label></th>
       </tr>
    <?php $n++;}?>
    </tbody>
    </table>
</div>
    
    <script src="js/jquery.js"></script>
    <script src="js/booper.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>