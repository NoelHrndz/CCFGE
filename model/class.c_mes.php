<?php

include "class.conexion.php";

Class Mensual{

    public function listar_tabla($filtro,$cod_trab){
        $query = Cconexion::ConexionBD()->prepare("SELECT cod_usuario,prestamo,cliente,telefono_principal,
        telefono_2,direccion_domicilio FROM clientes WHERE cod_usuario='$cod_trab'AND 
        (prestamo LIKE '%$filtro%' OR telefono_principal LIKE '%$filtro%' OR
        telefono_2 LIKE '%$filtro%' OR direccion_domicilio LIKE '%$filtro%' OR
        cliente LIKE '%$filtro%')");
        $query->execute();
        $clientes = $query->fetchAll();
        $tabla = "<table class='table table-striped table-bordered nowrap'>";
        $tabla .= "<thead class='thead-dark'>";
        $tabla .= "<tr>";
        $tabla .= "<th>Prestamo</th>";
        $tabla .= "<th>Cliente</th>";
        $tabla .= "<th>Telefono</th>";
        $tabla .= "<th>Direccion</th>";
        $tabla .= "<th>Opciones</th>";
        $tabla .= "</tr>";
        $tabla .= "</thead>";
        $tabla .= "<tbody>";
        foreach($clientes as $cliente){
            $tabla .= "<tr>";
            $tabla .= "<td>".$cliente['prestamo']."</td>";
            $tabla .= "<td>".$cliente['cliente']."</td>";
            if($cliente['telefono_principal']=="0"){
                if($cliente['telefono_2']=="0"){
                    $tabla .= "<td>No registrado</td>";
                }else{
                    $tabla .= "<td><a href='tel:".$cliente['telefono_2']."'>".$cliente['telefono_2']."</a></td>";
                }
            }else{
                $tabla .= "<td><a href='tel:".$cliente['telefono_principal']."'>".$cliente['telefono_principal']."</a></td>";
            }

            $tabla .= "<td>".$cliente['direccion_domicilio']."</td>";
            $tabla .= "<td><button class='btn btn-success' onclick='ver_mens(".$cliente['cod_usuario'].",".$cliente['prestamo'].")'><img src='../assets/images/ver.png' height ='25' width='25'></button></td>";
            $tabla .= "</tr>";
        }
        $tabla .= "</tbody>";
        $tabla .= "</table>";
        return $tabla;
    }
    public function datos_modal($cod_usuario,$prestamo){
        $query = Cconexion::ConexionBD()->prepare("SELECT * FROM clientes 
        WHERE cod_usuario='$cod_usuario' AND prestamo='$prestamo'");
        $query->execute();
        $clientes = $query->fetchAll();
        $datos = "";
        foreach($clientes as $cliente){
            $datos .= "<b>Prestamo: </b>".$cliente['prestamo']."<br>"; 
            $datos .= "<b>Capital: </b>Q ".$cliente['capital']."<br>"; 
            $datos .= "<b>Modo: </b>".$cliente['modo_g_i']."<br>"; 
            $datos .= "<b>Cliente: </b>".$cliente['cliente']."<br>"; 
            $datos .= "<b>DPI: </b>".$cliente['dpi']."<br>"; 
            $datos .= "<b>Fecha de Nacimiento Deudor: </b>".$cliente['fecha_nacimiento_deudor']."<br>"; 
            $datos .= "<b>Nombre_Grupo: </b>".$cliente['nombre_grupo']."<br>"; 
            $datos .= "<b>Municipio: </b>".$cliente['municipio']."<br>"; 
            $datos .= "<b>Direccion Domicilio: </b>".$cliente['direccion_domicilio']."<br>"; 
            $datos .= "<b>Aldea: </b>".$cliente['aldea']."<br>"; 
            $datos .= "<b>Telefono Principal: </b>".$cliente['telefono_principal']."<br>"; 
            $datos .= "<b>Telefono 2: </b>".$cliente['telefono_2']."<br>"; 
            $datos .= "<b>Telefono Actualizado Deudor : </b>".$cliente['telefono_ac_deudor']."<br>"; 
            $datos .= "<b>Telefono Vacunas Deudor: </b>".$cliente['telefono_vacunas_deudor']."<br>"; 
            $datos .= "<b>Fecha Entrega: </b>".$cliente['fecha_entrega']."<br>"; 
            $datos .= "<b>Fecha Vencimiento: </b>".$cliente['fecha_vencimiento']."<br>"; 
            $datos .= "<b>Nombre Fiador: </b>".$cliente['nombre_fiador']."<br>"; 
            $datos .= "<b>DPI Fiador: </b>".$cliente['dpi_fiador']."<br>"; 
            $datos .= "<b>Fecha de Nacimiento Fiador: </b>".$cliente['fecha_nacimiento_fiador']."<br>"; 
            $datos .= "<b>Municipio Fiador: </b>".$cliente['municipio_fiador']."<br>"; 
            $datos .= "<b>Direccion Casa Fiador: </b>".$cliente['direccion_fiador_casa']."<br>"; 
            $datos .= "<b>Direccion Trabajo Fiador: </b>".$cliente['direccion_fiador_trabajo']."<br>"; 
            $datos .= "<b>Telefono Fiador: </b>".$cliente['telefono_principal_fiador']."<br>"; 
            $datos .= "<b>Capital Concedida: </b>Q ".$cliente['capital_concedido']."<br>"; 
            $datos .= "<b>Pago Mes Anterior: </b>".$cliente['pago_mes_anterior']."<br>"; 
        }
        return $datos;
    }
}

?>