<?php

require "../vendor/autoload.php";
require "class.conexion.php";
require "../general/config.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

Class Importar{
    
    public function importar_mes(){
        global $columnas,$datos_cliente,$datos_cliente_unique;
        $query = Cconexion::ConexionBD()->prepare("DELETE FROM clientes");
        $query->execute();
        $nombreArchivo = "../reportes/temp_file/importar.xlsx";
        $documento = IOFactory::load($nombreArchivo);
        $totalHojas = $documento->getSheetCount();
        $hojaActual = $documento->getSheet(0);
        $numeroFilas = $hojaActual->getHighestDataRow();
        $letra = $hojaActual->getHighestColumn(); 
        $pos = array_search($letra, $columnas); 
        $posdata = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]; 
        $confdata = [false,false,false,false,false,false,false,false,false,
        false,false,false,false,false,false,false,false,false,false,false,
        false,false,false,false,false,false];
        for($i=1;$i<=$pos + 1;$i++){
            if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['cod_usuario'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['cod_usuario']." "){
                $posdata[0] = $i;
                $confdata[0] = true;         
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['prestamo'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['prestamo']." "){
                $posdata[1] = $i;    
                $confdata[1] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['capital'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['capital']." "){
                $posdata[2] = $i;    
                $confdata[2] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['modo_g_i'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['modo_g_i']." "){
                $posdata[3] = $i;    
                $confdata[3] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['cliente'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['cliente']." "){
                $posdata[4] = $i;    
                $confdata[4] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['dpi'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['dpi']." "){
                $posdata[5] = $i;    
                $confdata[5] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_nacimiento_deudor'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_nacimiento_deudor']." "){
                $posdata[6] = $i;    
                $confdata[6] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['nombre_grupo'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['nombre_grupo']." "){
                $posdata[7] = $i;    
                $confdata[7] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['municipio'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['municipio']." "){
                $posdata[8] = $i;    
                $confdata[8] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['direccion_domicilio'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['direccion_domicilio']." "){
                $posdata[9] = $i;    
                $confdata[9] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['aldea'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['aldea']." "){
                $posdata[10] = $i;    
                $confdata[10] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_principal'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_principal']." "){
                $posdata[11] = $i;    
                $confdata[11] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_2'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_2']." "){
                $posdata[12] = $i;    
                $confdata[12] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_ac_deudor'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_ac_deudor']." "){
                $posdata[13] = $i;    
                $confdata[13] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_vacunas_deudor'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_vacunas_deudor']." "){
                $posdata[14] = $i;    
                $confdata[14] = true; 
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_entrega'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_entrega']." "){
                $posdata[15] = $i;    
                $confdata[15] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_vencimiento'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_vencimiento']." "){
                $posdata[16] = $i;    
                $confdata[16] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['nombre_fiador'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['nombre_fiador']." "){
                $posdata[17] = $i;    
                $confdata[17] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['dpi_fiador'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['dpi_fiador']." "){
                $posdata[18] = $i;    
                $confdata[18] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_nacimiento_fiador'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['fecha_nacimiento_fiador']." "){
                $posdata[19] = $i;    
                $confdata[19] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['municipio_fiador'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['municipio_fiador']." "){
                $posdata[20] = $i;    
                $confdata[20] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['direccion_fiador_casa'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['direccion_fiador_casa']." "){
                $posdata[21] = $i;    
                $confdata[21] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['direccion_fiador_trabajo'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['direccion_fiador_trabajo']." "){
                $posdata[22] = $i;    
                $confdata[22] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_principal_fiador'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['telefono_principal_fiador']." "){
                $posdata[23] = $i;    
                $confdata[23] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['capital_condedido'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['capital_condedido']." "){
                $posdata[24] = $i;    
                $confdata[24] = true;
            }else if($hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['pago_mes_anterior'] || $hojaActual->getCellByColumnAndRow($i,"1")==$datos_cliente['pago_mes_anterior']." "){
                $posdata[25] = $i;    
                $confdata[25] = true;
            }
        }   
        session_start();
        $cad_sql = "";
        $mensaje = [];
        if($confdata[0] && $confdata[1] && $confdata[2] && $confdata[3] && $confdata[4] && $confdata[5] 
        && $confdata[6] && $confdata[7] && $confdata[8] && $confdata[9] && $confdata[10] && $confdata[11] 
        && $confdata[12] && $confdata[13] && $confdata[14] && $confdata[15] && $confdata[16] && $confdata[17] 
        && $confdata[18] && $confdata[19] && $confdata[20] && $confdata[21] && $confdata[22] && $confdata[23] 
        && $confdata[24] && $confdata[25]){
        for($indiceFila = 2; $indiceFila <= $numeroFilas; $indiceFila++){
            if($hojaActual->getCellByColumnAndRow($posdata[0],$indiceFila) == $_SESSION['sesion_ccfge'][1]){
                $cod_usu = trim($hojaActual->getCellByColumnAndRow($posdata[0],$indiceFila));
                $pre = trim($hojaActual->getCellByColumnAndRow($posdata[1],$indiceFila)->getFormattedValue());
                $cap = trim($hojaActual->getCellByColumnAndRow($posdata[2],$indiceFila));
                $mod_gi = trim($hojaActual->getCellByColumnAndRow($posdata[3],$indiceFila));
                $cli = trim($hojaActual->getCellByColumnAndRow($posdata[4],$indiceFila));
                $dpi = trim($hojaActual->getCellByColumnAndRow($posdata[5],$indiceFila));  
                $dpi1 = 0;
                if(is_numeric($dpi)){
                    $dpi1 = $dpi;
                }       
                $fec_nac_deu = trim($hojaActual->getCellByColumnAndRow($posdata[6],$indiceFila)->getFormattedValue());
                $f1 = "0000-00-00";
                $ex = explode("/",$fec_nac_deu);
                if(isset($ex[0]) && isset($ex[1]) && isset($ex[2])){
                    $f1 = $ex[2]."-".$ex[0]."-".$ex[1];
                }   
                $nom_gru = trim($hojaActual->getCellByColumnAndRow($posdata[7],$indiceFila));
                $mun = trim($hojaActual->getCellByColumnAndRow($posdata[8],$indiceFila));
                $dir_dom = trim($hojaActual->getCellByColumnAndRow($posdata[9],$indiceFila));
                $ald = trim($hojaActual->getCellByColumnAndRow($posdata[10],$indiceFila));
                $tel_pri = trim($hojaActual->getCellByColumnAndRow($posdata[11],$indiceFila));
                $t1 = 0;
                if(is_numeric($tel_pri)){
                    $t1 = $tel_pri;
                }else{
                    $t1 = 0; 
                }
                $tel_2 = trim($hojaActual->getCellByColumnAndRow($posdata[12],$indiceFila));
                $t2 = 0;
                if(is_numeric($tel_2)){
                    $t2 = $tel_2;
                }else{
                    $t2 = 0; 
                }
                $tel_ac_deu = trim($hojaActual->getCellByColumnAndRow($posdata[13],$indiceFila));
                $t3 = 0;
                if(is_numeric($tel_ac_deu)){
                    $t3 = $tel_ac_deu;
                }else{
                    $t3 = 0; 
                }
                $tel_vac_deu = trim($hojaActual->getCellByColumnAndRow($posdata[14],$indiceFila));
                $t4 = 0;
                if(is_numeric($tel_vac_deu)){
                    $t4 = $tel_vac_deu;
                }else{
                    $t4 = 0; 
                }
                $fec_ent = trim($hojaActual->getCellByColumnAndRow($posdata[15],$indiceFila)->getFormattedValue());
                $f2 = "0000-00-00";
                $ex = explode("/",$fec_ent);
                if(isset($ex[0]) && isset($ex[1]) && isset($ex[2])){
                    $f2 = $ex[2]."-".$ex[0]."-".$ex[1];
                }    
                $fec_ven = trim($hojaActual->getCellByColumnAndRow($posdata[16],$indiceFila)->getFormattedValue());
                $f3 = "0000-00-00";
                $ex = explode("/",$fec_ven);
                if(isset($ex[0]) && isset($ex[1]) && isset($ex[2])){
                    $f3 = $ex[2]."-".$ex[0]."-".$ex[1];
                }  
                $nom_fia = trim($hojaActual->getCellByColumnAndRow($posdata[17],$indiceFila));
                $dpi_fia = trim($hojaActual->getCellByColumnAndRow($posdata[18],$indiceFila));
                $dpi2 = 0;
                if(is_numeric($dpi_fia)){
                    $dpi2 = $dpi_fia;
                } 
                $fec_nac_fia = trim($hojaActual->getCellByColumnAndRow($posdata[19],$indiceFila)->getFormattedValue());
                $f4 = "0000-00-00";
                $ex = explode("/",$fec_nac_fia);
                if(isset($ex[0]) && isset($ex[1]) && isset($ex[2])){
                    $f4 = $ex[2]."-".$ex[0]."-".$ex[1];
                }  
                $mun_fia = trim($hojaActual->getCellByColumnAndRow($posdata[20],$indiceFila));
                $dir_fia_cas = trim($hojaActual->getCellByColumnAndRow($posdata[21],$indiceFila));
                $dir_fia_tra = trim($hojaActual->getCellByColumnAndRow($posdata[22],$indiceFila));
                $tel_pri_fia = trim($hojaActual->getCellByColumnAndRow($posdata[23],$indiceFila));
                $t5 = 0;
                if(is_numeric($tel_pri_fia)){
                    $t5 = $tel_pri_fia;
                }else{
                    $t5 = 0; 
                }
                $cap_con = trim($hojaActual->getCellByColumnAndRow($posdata[24],$indiceFila));
                $pag_ant = trim($hojaActual->getCellByColumnAndRow($posdata[25],$indiceFila));
                $cad_sql .= "INSERT INTO clientes(cod_usuario,prestamo,capital,modo_g_i,cliente,dpi,
                fecha_nacimiento_deudor,nombre_grupo,municipio,direccion_domicilio,aldea,telefono_principal,
                telefono_2,telefono_ac_deudor,telefono_vacunas_deudor,fecha_entrega,fecha_vencimiento,nombre_fiador,
                dpi_fiador,fecha_nacimiento_fiador,municipio_fiador,direccion_fiador_casa,direccion_fiador_trabajo,
                telefono_principal_fiador,capital_condedido,pago_mes_anterior,asignado_semana,asignado_dia) VALUES 
                ('$cod_usu','$pre','$cap','$mod_gi','$cli','$dpi1','$f1','$nom_gru','$mun','$dir_dom','$ald','$t1',
                '$t2','$t3','$t4','$f2','$f3','$nom_fia','$dpi2','$f4','$mun_fia','$dir_fia_cas',
                '$dir_fia_tra','$t5','$cap_con','$pag_ant','N','N');"; 
            }
            
            
            
        }
        $query_sep = explode(";",$cad_sql);
        foreach($query_sep as $action){
            if($action!=""){
                $query = Cconexion::ConexionBD()->prepare($action);
                $query->execute();
            }         
        }
        $mensaje = ["respuesta" => true, "mensaje" => "Datos Importados Correctamente"];       
        
    }
    else{
        $error = "Error al Importar los datos\n";
        $error .= "No se reconocieron las siguientes columnas:\n";
        for($i=0;$i<25;$i++){
            if(!$confdata[$i]){
                $error .= "-".$datos_cliente[$datos_cliente_unique[$i]]."\n";
            }
        }
        $mensaje = ["respuesta" => false, "mensaje" => $error];
    }
    return $mensaje;
    
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