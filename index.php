<?php
    session_start();
    $_SESSION['sesion_ccfge'][1] = "NOEL HERNÁNDEZ";
?>
<script src="libs/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        document.location = "reportes/clientes_mensual.php";
    });
</script>
