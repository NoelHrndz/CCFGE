<?php

include "class.conexion.php";

Class Mensual{

    public function listar_tabla($filtro,$cod_trab){
        $query = Cconexion::ConexionBD()->prepare("SELECT prestamo,cliente,telefono_principal,
        telefono_2,direccion_domicilio FROM clientes WHERE cod_usuario='$cod_trab'AND 
        (prestamo LIKE '%$filtro%' OR telefono_principal LIKE '%$filtro%' OR
        telefono_2 LIKE '%$filtro%' OR direccion_domicilio LIKE '%$filtro%' OR
        cliente LIKE '%$filtro%')");
        $query->execute();
        $clientes = $query->fetchAll();
        $tabla = "";  
        foreach($clientes as $cliente){
            $tabla .= $cliente['cliente']."<br>";
        }
        return $tabla;
    }
}

?>