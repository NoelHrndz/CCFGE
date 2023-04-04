$(document).ready(function () {
    $('#importar_mensual').click(function (e) { 
        importar_mensual();
    });
    $('#importar_semana').click(function (e) { 
        importar_semana();       
    });
});// fin ready

function importar_mensual(){
    swal({title:"Importar Cartera Mensual",text:"¿Está seguro de importar toda la cartera? * Los datos anteriores seran eliminados *",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Si, importar",closeOnConfirm:!1},function(){
        
        $.ajax({
            type: "POST",
            url: "../controller/importar.php",
            data: {importar_mensual:"S"},
            success: function (response) {
                swal({title:response,text:"",timer:2e3,showConfirmButton:!1,type:"success"});
                alert(response);
            }
        });
    
    });
}
function importar_semana(){
    swal({title:"Importar Clientes de la Semana",text:"¿Está seguro de importar datos de la semana?",type:"warning",showCancelButton:!0,confirmButtonColor:"#DD6B55",confirmButtonText:"Si, importar",closeOnConfirm:!1},function(){
        
        $.ajax({
            type: "POST",
            url: "../controller/importar.php",
            data: {importar_semana:"S"},
            success: function (response) {
                swal({title:response,text:"",timer:2e3,showConfirmButton:!1,type:"success"});
                
                
            }
        });
    
    });
}

