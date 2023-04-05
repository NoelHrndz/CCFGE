<?php

    require "../model/class.c_mes.php";

    $listar = new Mensual();

    if(isset($_POST['filtro_mes'])){
        $tabla = $listar->listar_tabla($_POST['filtro_mes'],$_POST['cod_trab']);
        print_r($tabla);
    }

?>