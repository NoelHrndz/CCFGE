<?php

    require "../model/class.c_mes.php";

    $listar = new Mensual();

    if(isset($_POST['filtro_mes'])){
        $tabla = $listar->listar_tabla($_POST['filtro_mes'],$_POST['cod_trab']);
        print_r($tabla);
    }
    if(isset($_POST['cod_usuario_modal'])){
        $datos = $listar->datos_modal($_POST['cod_usuario_modal'],$_POST['prestamo']);
        print_r($datos);
    }

?>