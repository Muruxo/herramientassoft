

<?php
    class Class_sql{
        // Atributos
        private $bd; 


        //Constructor
        public function __construct(){
            $this->bd = new mysqli(HOST, USER, PASS, BD);
            // $this->bd -> set_charset();
        }

        //Métodos - Funciones 
        
        public function InsertarUser($ape, $ced,  $tel, $ema, $con, $obs){
            $resultado = $this->bd->query("INSERT INTO usuarios(usu_ape, usu_ced, usu_cel, usu_ema, usu_con, usu_obs) 
            VALUES (UPPER('$ape'),'$ced', '$tel','$ema','$con',UPPER('$obs'))");
            return true; 
        }
        public function InsertarTurno($id, $doc, $dat, $hor){
            $resultado = $this->bd->query("INSERT INTO turno(id_usu, id_doc, date, time) 
            VALUES ('$id','$doc','$dat','$hor')");
            return true; 
        }

        public function ConsultaUser($usu1, $cla1){
            $resultado = $this->bd->query("SELECT * FROM usuarios  WHERE usu_ema='$usu1' AND usu_con='$cla1'");
            return $resultado; 
        }

        public function ConsultaCliUnic($ema){
            $resultado = $this->bd->query("SELECT * FROM usuarios WHERE usu_ema = '$ema'");
            return $resultado;

        }
        public function ConsultarUsuario($usu1){

            $resultado = $this->bd->query("SELECT * FROM usuarios WHERE usu_ema='$usu1'");

            return $resultado;
        }

        public function InsertarImage($ruta){
            $resultado = $this->bd->query("INSERT INTO usuarios(USU_FOTO) 
            VALUES ('$ruta')");
            return true; 
        }
        public function ConsultarTurno(){
            $resultado = $this->bd->query("SELECT * FROM turno t INNER JOIN usuarios u ON t.id_usu = u.usu_cod");
            return $resultado;
        }
        
    }


?>