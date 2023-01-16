$(document).ready( function () {
    $("#login_admin").click( function (event) {
        event.preventDefault();
        let data =  $("#form").serialize();
        $.ajax({
            url:"./config/login_admin.php",
            method:"post",
            dataType:"text",
            data: data,
            success: function (resp) {
                if (resp == "success") {
                    console.log(resp);
                    window.location.href = "main.php";
                    $("#form")[0].reset();
                }else{
                    alert(resp);
                }
            },
            error: function (jqXRH, estado, error) {
                console.log(estado);
                console.log(error);
            }
        });
    });
});

/*close session*/
$(document).ready( function () {
    $("#close_admin").on("click", function (event) {
        let confirmacion = confirm("¿Desea cerrar la sesion?");
          if (confirmacion) {
            $.ajax({
              url:"/webbecas/admin/config/close_sesion.php",
              type:"POST",
            });
          }else{
            event.preventDefault();
          }
    });
  });

/*Aprobar*/
$(document).ready(function () {
  $(".aprobar").click(function (event) {
      //let el = this;
      let aprobarid = $(this).data('id');
      let confirmacion = confirm("¿Estas seguro de Aprobara esta solicitud?");
      if (confirmacion) {
          $.ajax({
              url:'../config/aprobar.php',
              type:'POST',
              data:{id: aprobarid},
              success:function (response) {
                  if (response == "success") {
                      window.location.reload();
                  }
              },
              error: function (jqXRH, estado, error) {
                console.log(error);
                console.log(estado);
              }
          });
      }else{
        console.log("cancelado");
        event.preventDefault();
      }
  });
});

/*RECHAZAR*/
$(document).ready(function () {
  $(".rechazar").click(function (event) {
      //let el = this;
      let rechazarid = $(this).data('id');
      let confirmacion = confirm("¿Estas seguro de Rechazar esta solicitud?");
      if (confirmacion) {
          $.ajax({
              url:'../config/rechazar.php',
              type:'POST',
              data:{id: rechazarid},
              success:function (response) {
                  if (response == "success") {
                    window.location.reload();
                  }
              },
              error: function (jqXRH, estado, error) {
                console.log(error);
                console.log(estado);
              }
          });
      }else{
        console.log("cancelado");
        event.preventDefault();
      }
  });
});