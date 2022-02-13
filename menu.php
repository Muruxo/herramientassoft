<?php

  require_once __DIR__.'/config.php';
  require_once __DIR__.'/clase_sql.php'; 

  $claseSql = new Class_sql();
  
?>

<div class="container">
    <div class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand"><img src="img/inicio.png" alt="" width="60px" height="60px"></a>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav me-auto mb-2">
                    </ul>
                    <span class="nabvar-text">
                        
                    </span>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="salir.php" class="nav-link">Cerrar sesión</a>
                        </li>
                    </ul>
                </div> 
        </div>
    </div>
</div>