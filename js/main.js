/*LOGIN*/
$(document).ready( function () {
  $("#danger").hide();
  $("#btn_login").click(function (event) {
    event.preventDefault();
    let numcontrol = $("#numcontrol").val();
    let password  = $("#password").val();
    let data = $(this).serializeArray();

    if (numcontrol == "" && password == "") {
        $("#danger").show().text("por favor complete todos los campos");   
    }else{
        $.ajax({
          url:"./config/login.php",
          type:'post',
          dataType:'text',
          data:{numcontrol: numcontrol, password:password},
          success:( function (resp) {
              if (resp == "success") {
                console.log(resp);
                window.location.href = "main.php";
              }else{
                alert(resp);
              }
          })
        });             
      }
  });
});

/*ANIMACION DE SLIDE PARA EL MENU*/
$(document).ready( function () {
  $("#btn_toggle").click(function () {
    $("#slidedown").slideToggle();
  });
});

/*CONFIRMA SI DESEA CERRAR LA SESION*/
$(document).ready( function () {
  $("#close").on("click", function (event) {
      let confirmacion = confirm("¿Desea cerrar la sesion?");
        if (confirmacion) {
          $.ajax({
            url:"./config/logout.php",
            type:"POST",
          });
        }else{
          console.log("sesion no cerrada");
          event.preventDefault();
        }
  });
}); 

/*ROTA PARA DIRIGIRSE A LOS FORMULARIOS AL DAR CLICK*/
$(document).ready(function () {
  $("#btn_alimentos").on("click", function () {
    window.location.href = "./views/transporte.php";
  });
  $("#btn_transporte").on("click", function () {
    window.location.href = "./views/alimentos.php";
  });
  $("#btn_volver").on("click", function () {
    window.location.href = "../main.php";
  })
});



