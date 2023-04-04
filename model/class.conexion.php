<?php
    class Cconexion{

        public static function ConexionBD(){
            $host = "localhost";
            $dbname = "CCFGE";
            $username = "root";     
            $pasword = "";
            try{
                $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$pasword);           
            }catch(PDOEXception $e){
                echo $e;
            }    
            return $conn;   
        }

    }
?>