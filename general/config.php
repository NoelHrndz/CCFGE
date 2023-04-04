<?php

    $columnas = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z",
    "AA","AB","AC","AD","AE","AF","AG","AH","AI","AJ","AK","AL","AM","AN","AO","AP","AQ","AR","AS","AT","AU","AV","AW","AX","AY","AZ",
    "BA","BB","BC","BD","BE","BF","BG","BH","BI","BJ","BK","BL","BM","BN","BO","BP","BQ","BR","BS","BT","BU","BV","BW","BX","BY","BZ",
    "CA","CB","CC","CD","CE","CF","CG","CH","CI","CJ","CK","CL","CM","CN","CO","CP","CQ","CR","CS","CT","CU","CV","CW","CX","CY","CZ",
    "DA","DB","DC","DD","DE","DF","DG","DH","DI","DJ","DK","DL","DM","DN","DO","DP","DQ","DR","DS","DT","DU","DV","DW","DX","DY","DZ",
    "EA","EB","EC","ED","EE","EF","EG","EH","EI","EJ","EK","EL","EM","EN","EO","EP","EQ","ER","ES","ET","EU","EV","EW","EX","EY","EZ",
    "FA","FB","FC","FD","FE","FF","FG","FH","FI","FJ","FK","FL","FM","FN","FO","FP","FQ","FR","FS","FT","FU","FV","FW","FX","FY","FZ",
    "GA","GB","GC","GD","GE","GF","GG","GH","GI","GJ","GK","GL","GM","GN","GO","GP","GQ","GR","GS","GT","GU","GV","GW","GX","GY","GZ",
    "HA","HB","HC","HD","HE","HF","HG","HH","HI","HJ","HK","HL","HM","HN","HO","HP","HQ","HR","HS","HT","HU","HV","HW","HX","HY","HZ",
    "IA","IB","IC","ID","IE","IF","IG","IH","II","IJ","IK","IL","IM","IN","IO","IP","IQ","IR","IS","IT","IU","IV","IW","IX","IY","IZ",
    "JA","JB","JC","JD","JE","JF","JG","JH","JI","JJ","JK","JL","JM","JN","JO","JP","JQ","JR","JS","JT","JU","JV","JW","JX","JY","JZ",
    "KA","KB","KC","KD","KE","KF","KG","KH","KI","KJ","KK","KL","KM","KN","KO","KP","KQ","KR","KS","KT","KU","KV","KW","KX","KY","KZ"];

    $meses = ["ENE","FEB","MAR","ABR","MAY","JUN","JUL","AGO","SEP","OCT","NOV","DIC"];
    $numero_mes = date('n');
    $mes_anterior = $meses[$numero_mes - 2];
    $año = date("Y");

    $datos_cliente = ["cod_usuario" => "CODIGO EMPLEADO","prestamo" => "PRESTAMO","capital" => "CAPITAL",
    "modo_g_i" => "MODO/ GRUPAL/INDIVIDUAL","cliente" => "CLIENTE","dpi" => "DPI",
    "fecha_nacimiento_deudor" => "FECHA NAC DEUDOR","nombre_grupo" => "NOMBRE GRUPO",
    "municipio" => "MUNICIPIO","direccion_domicilio" => "DIRECION DOMICILIO",
    "aldea" => "ALDEA","telefono_principal" => "TELEFONO PRINCIPAL","telefono_2" => "TEL 2",
    "telefono_ac_deudor" => "TELEFONO AC DEUDOR","telefono_vacunas_deudor" => "TELEFONO VACUNAS DEUDOR",
    "fecha_entrega" => "ENTREGA","fecha_vencimiento" => "VENCIMIENTO","nombre_fiador" => "NOMBRE FIADOR",
    "dpi_fiador" => "DPI FIADOR","fecha_nacimiento_fiador" => "FECHA NAC FIADOR","municipio_fiador" => "MUNICIPIO FIADOR",
    "direccion_fiador_casa" => "DIRECCION FIADOR CAS","direccion_fiador_trabajo" => "DIRECCION FIADOR TRABAJO",
    "telefono_principal_fiador" => "TEL PRINCIPAL","capital_condedido" => "CAPITAL_CONCEDIDO",
    "pago_mes_anterior" => "PAGOS ".$mes_anterior." ".$año.""];

    aldea VARCHAR(50) NOT NULL,
    telefono_principal INT(20) NOT NULL,
    telefono_2 INT(20) NOT NULL,
    telefono_ac_deudor INT(20) NOT NULL,
    telefono_vacunas_deudor INT(20) NOT NULL,
    fecha_entrega DATE NOT NULL,
    fecha_vencimiento DATE NOT NULL,
    nombre_fiador VARCHAR(50) NOT NULL,
    dpi_fiador INT(20) NOT NULL,
    fecha_nacimiento_fiador DATE NOT NULL,
    municipio_fiador VARCHAR(30) NOT NULL,
    direccion_fiador_casa VARCHAR(50) NOT NULL,
    direccion_fiador_trabajo VARCHAR(50) NOT NULL,
    telefono_principal_fiador INT(20) NOT NULL,
    capital_condedido FLOAT(15) NOT NULL,
    pago_mes_anterior FLOAT(15) NOT NULL,
    asignado_semana CHAR(1) NOT NULL,
    asignado_dia CHAR(1) NOT NULL,
    gestion_realizada TEXT NULL, 
    observacion TEXT NULL,
    telefono_actualizado VARCHAR(20) NULL,
    probabilidad_de_pago TEXT NULL,*/
?>
    