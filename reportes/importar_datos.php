<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />
  
    <title>Clientes Mes</title>
    <!-- Favicon icon -->
    <link rel="icon" type="../assets/bootstrap/theme/image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="../assets/bootstrap/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="../assets/bootstrap/theme/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="../assets/bootstrap/theme/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../assets/bootstrap/theme/css/style.css" rel="stylesheet">
    <script src="../libs/jquery.js"></script>
    <link href="../assets/bootstrap/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/estilo.css">

</head>

<body>
    <?php
            include_once "../general/header.php";
    ?>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <div class="text-center">                                                   
                                    <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                        <input type="file" id="file_import" name="calculo" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">
                                        <input type="hidden" name="formulario">
                                        <input type="submit"  value="Subir" class="btn btn-warning">
                                    </form><br>
                                    <input type="button" id="importar_mensual" value="Importar Clientes Cartera Mensual" class="btn btn-danger">
                                    <input type="button" id="importar_semana" value="Importar Clientes de la Semana " class="btn btn-success">
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div> 
</body>        
        <?php
            $resultado = null;
            if(isset($_POST['formulario'])){
            $name = $_FILES['calculo']['name'];
            $tmp_name = $_FILES['calculo']['tmp_name'];
            $error = $_FILES['calculo']['error'];
            if($error){

            }else{
                $ruta = "temp_file/importar.xlsx";
                move_uploaded_file($tmp_name,$ruta);
            }
}
    ?>
    
    
    
    <script src="../assets/bootstrap/theme/plugins/common/common.min.js"></script>
    <script src="../assets/bootstrap/theme/js/custom.min.js"></script>
    <script src="../assets/bootstrap/theme/js/settings.js"></script>
    <script src="../assets/bootstrap/theme/js/gleek.js"></script>
    <script src="../assets/bootstrap/theme/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="../assets/bootstrap/theme/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="../assets/bootstrap/theme/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="../assets/bootstrap/theme/plugins/d3v3/index.js"></script>
    <script src="../assets/bootstrap/theme/plugins/topojson/topojson.min.js"></script>
    <script src="../assets/bootstrap/theme/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="../assets/bootstrap/theme/plugins/raphael/raphael.min.js"></script>
    <script src="../assets/bootstrap/theme/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="../assets/bootstrap/theme/plugins/moment/moment.min.js"></script>
    <script src="../assets/bootstrap/theme/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="../assets/bootstrap/theme/plugins/chartist/js/chartist.min.js"></script>
    <script src="../assets/bootstrap/theme/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/bootstrap/theme/plugins/sweetalert/js/sweetalert.min.js"></script>
    <link href="../assets/bootstrap/theme/plugins/sweetalert/css/sweetalert.css" rel="stylesheet">



    <script src="../assets/bootstrap/theme/js/dashboard/dashboard-1.js"></script>
    <script src="../assets/js/importar.js"></script>

</body>

</html>
