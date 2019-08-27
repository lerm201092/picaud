$(document).ready(function(){
    llenar_select_tipoid();
});

function llenar_select_tipoid(){

    var parametros = {
        "opcion" : "llenar_tipoid"
    };

    $.ajax({
        url: "../model/registro.php",
        type: "POST",
        data: parametros,
        success: function(resp)
        {
            try {
                var json         = eval("(" + resp + ")");
                cargar_select("sel_tipoid", json);
                $("#sel_tipoid").on("change", function(){
                    console.log($("#sel_tipoid").val());
                });
            } catch (error) {
                error_try(error);
            }
            
            
        }
    });
}

function error_try(error){
    alert("Ha ocurrido un grave error en el sistema, para mayor información verifique la consola del navegador");
    console.error(error);
}

function cargar_select(nombre, datos){
    var html = "<option value='0' selected>- Escoja una opción -</option>";
    var cant_registros = datos.length;
    for(var i=0; i<cant_registros; i++){
        html+="<option value='"+datos[i][0]+"'>"+datos[i][1]+"</option>";
    }   
    $("#"+nombre).html(html);
}