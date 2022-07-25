
  $(document).ready(function () {
    $("#btn-registrar").click(function () {
      $("#modalRegistrarse").modal("show");
    });
  
    var comuna = $("#selectComuna");
  
    $("#selectRegion").change(function () {
      var selectRegion = $(this).val();
      
      $.ajax({
        data: {
          selectRegion: selectRegion
        },
        dataType: 'html',
        type: 'POST',
        url: "http://localhost/Proyecto_Semestre/usuario/getComunas",
      }).done(function (data) {
        comuna.html(data);
      });
    });

    var comuna = $("#comunaSelect");
  
    $("#comunaSelect").change(function () {
      var selectRegion = $(this).val();
      
      $.ajax({
        data: {
          selectRegion: selectRegion
        },
        dataType: 'html',
        type: 'POST',
        url: "http://localhost/Proyecto_Semestre/usuario/getComunas",
      }).done(function (data) {
        comuna.html(data);
      });
    });
  
  
    $(".c1").mouseover(function () {
      $("#c1").fadeIn(200);
      $("#c2").fadeOut();
      $("#c3").fadeOut();
      $("#c4").fadeOut();
      $("#c5").fadeOut();
    });
    $(".c2").mouseover(function () {
      $("#c2").fadeIn(200);
      $("#c1").fadeOut();
      $("#c3").fadeOut();
      $("#c4").fadeOut();
      $("#c5").fadeOut();
    });
    $(".c3").mouseover(function () {
      $("#c3").fadeIn(200);
      $("#c1").fadeOut();
      $("#c2").fadeOut();
      $("#c4").fadeOut();
      $("#c5").fadeOut();
    });
    $(".c4").mouseover(function () {
      $("#c4").fadeIn(200);
      $("#c1").fadeOut();
      $("#c2").fadeOut();
      $("#c3").fadeOut();
      $("#c5").fadeOut();
    });
    $(".c5").mouseover(function () {
      $("#c5").fadeIn(200);
      $("#c4").fadeOut();
      $("#c3").fadeOut();
      $("#c2").fadeOut();
      $("#c1").fadeOut();
    });
    $("body").click(function () {
      $("#c1").fadeOut();
      $("#c2").fadeOut();
      $("#c3").fadeOut();
      $("#c4").fadeOut();
      $("#c5").fadeOut();
    });
  
    $(".btnCat").click(function () {
      $(".nav_cont_cat").css("display", "inline");
      $(".btn_cat_cerrar").css("display", "inline");
      $(".btn_cat").css("display", "none");
      $(".nav_cont_cat").show(300);
      $(".nav_cat").show(600);
    });
    $(".btnCatCerrar").click(function () {
      $(".nav_cont_cat").css("display", "none");
      $(".nav_cat").css("display", "none");
      $(".btn_cat_cerrar").css("display", "");
      $(".btn_cat").css("display", "inline");
      $(".nav_cont_cat").hide(1000);
      $(".nav_cont_cat").hide(1000);
    });
    $(".nav_cont_cat").click(function () {
      $(".nav_cont_cat").css("display", "none");
      $(".nav_cat").css("display", "none");
      $(".btn_cat_cerrar").css("display", "");
      $(".btn_cat").css("display", "inline");
      $(".nav_cont_cat").hide(1000);
      $(".nav_cont_cat").hide(1000);
    });
  
  });
  