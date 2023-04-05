<?php

    include_once "../model/class.importar.php";

    $importar = new Importar();

    if(isset($_POST['importar_mensual'])){
        $mensual = $importar->importar_mes();
        print_r(json_encode($mensual));
    }
    if(isset($_POST['importar_semana'])){
        $semanal = $importar->importar_semana();
        print_r(json_encode($semanal));
    }

?>