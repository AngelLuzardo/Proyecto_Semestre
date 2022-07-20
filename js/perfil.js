$(document).ready(function(){
    $("#btn-datos").click(function(){
        $(".cont_datosPer").css("display","")
        $(".cont_datosClave").css("display","none");
        $(".contDireccion").css("display","none");
    });
    $("#btn-clave").click(function(){
        $(".cont_datosClave").css("display","inline");
        $(".cont_datosPer").css("display","none");
        $(".contDireccion").css("display","none");
    });
    $("#btn-direccion").click(function(){
        $(".contDireccion").css("display","inline");
        $(".cont_datosClave").css("display","none");
        $(".cont_datosPer").css("display","none");
        
    });
    var comunas = $("#comunaSelect");
    $("#regionSelect").change(function(){
            var regionSelect = $(this).val();

            $.ajax({
                data: {regionSelect:regionSelect},
                dataType: 'html',
                type: 'POST',
                url: 'http://localhost/Proyecto_Semestre/usuario/getComunas',
            }).done(function(data){
                comunas.html(data);
            });
        });
});