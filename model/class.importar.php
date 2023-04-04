<?php

require "../vendor/autoload.php";
require "class.conexion.php";
require "../general/config.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

Class Importar{
    
    public function importar_mes(){
        global $columnas,$datos_cliente;
        $nombreArchivo = "../reportes/temp_file/importar.xlsx";
        $documento = IOFactory::load($nombreArchivo);
        $totalHojas = $documento->getSheetCount();
        $hojaActual = $documento->getSheet(0);
        $letra = $hojaActual->getHighestColumn(); 
        $pos = array_search($letra, $columnas); 
        $pos_1 = 0; 
        for($i=0;$i<=$pos;$i++){
            if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['cod_usuario']){
                $pos_1 = $i;         
            }
        }   
        return $pos_1;
    }


    
    //for($indiceHoja = 0; $indiceHoja < $totalHojas; $indiceHoja++){
       /* $hojaActual = $documento->getSheet(0);
        $numeroFilas = $hojaActual->getHighestDataRow();
        $letra = $hojaActual->getHighestColumn();
        if($hojaActual->getCellByColumnAndRow('1',"1")=="Tiempo"){
            for($indiceFila = 2; $indiceFila <= $numeroFilas; $indiceFila++){
            $nombre = $hojaActual->getCellByColumnAndRow('3',$indiceFila);
            $nombreSe = trim($nombre);
            $apellido = $hojaActual->getCellByColumnAndRow('4',$indiceFila);
            $nombreCompleto = $nombreSe." ".$apellido;
            $fechaHora = $hojaActual->getCellByColumnAndRow('1',$indiceFila)->getFormattedValue();
            $exfh = explode(" ", $fechaHora);
            $exf = explode("/", $exfh[0]);
            $sqlfh = $exf[2]."-".$exf[0]."-".$exf[1]." ".$exfh[1].":00";
            if($nombre!=""){
                $cadena = $cadena."INSERT INTO temp_detalle(cod_sucursal,empleado,fecha_hora_marcaje) VALUES ('$sucursal','$nombreCompleto','$sqlfh');\n";
            }
        }
        $query = Cconexion::ConexionBD()->prepare($cadena);
        $query->execute();
        $query = Cconexion::ConexionBD()->prepare("INSERT INTO detalle SELECT * FROM temp_detalle as t1 
        WHERE NOT EXISTS(SELECT * FROM detalle as t2 WHERE t1.cod_sucursal=t2.cod_sucursal AND
        t1.empleado=t2.empleado AND t1.fecha_hora_marcaje=t2.fecha_hora_marcaje)");
        $query->execute();
        $query = Cconexion::ConexionBD()->prepare("DELETE FROM temp_detalle WHERE cod_sucursal='$sucursal'");
        $query->execute();

        echo "Datos Importados";
        }
        else{
            echo "Formato no coincide con sucursal";
        }*/
    }
?>