$(document).ready(function () {
    listar_clientes();
    $('#filtro_mes').keyup(function (e) { 
        listar_clientes();
    });
});
function listar_clientes(){
    $.ajax({
        type: "POST",
        url: "../controller/c_mes.php",
        data: {filtro_mes:$('#filtro_mes').val(),cod_trab:$('#cod_trab').val()},
        success: function (response) {
            $("#table_mes").html(response);
        }
    });
}
function ver_mens(cod_usuario,prestamo){
    $('#modalcliente').modal("show");
    $('#title_cliente').text("Datos Cliente - "+prestamo);
    $.ajax({
        type: "POST",
        url: "../controller/c_mes.php",
        data: {cod_usuario_modal:cod_usuario,prestamo:prestamo},
        success: function (response) {
            $('#datos_modal').html(response);
        }
    });
}