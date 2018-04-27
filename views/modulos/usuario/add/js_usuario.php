<script>
 $("#guardar_user").click(function(){
      var nombre = $("#nombre").val();
      var ap = $("#app").val();
      var am = $("#apm").val();
      var mail = $("#mail").val();
      var fono = $("#fono").val();
      var pass = $("#pass").val();
      var perfil = $("#perfil").val();
     if(nombre != '' && ap != '' && am != '' && mail != '' && fono != '' && pass != '' && perfil != '')
         {
              $.ajax({
                  type : 'POST',
                  url  :  '<?php echo URL?>user/insert',
                  data : {
                    'perfil': perfil,
                    'nombre': nombre,
                    'ap': ap,
                    'am': am,
                    'fono': fono,
                    'mail': mail,
                    'estado': 1,
                    'pass': pass
                  },
                  dataType: "json",
                  success : function(data)
                  {
                      if(data.tipo == 'user_guardado')
                        {
                            alert("Registrado!", "Usuario registrado con exito","success");
                            $("#nombre").val('');
                            $("#app").val('');
                            $("#apm").val('');
                            $("#mail").val('');
                            $("#fono").val('');
                            $("#pass").val('');
                            $("#perfil").val('');
                            $("#pass").val('');

                        }
                      if(data.tipo == 'sin_datos')
                        {
                            alert("Error!", "Faltan datos que ingresar","error");
                        }

                  },
                  error : function( jqXHR, textStatus, errorThrown ) {

                      if (jqXHR.status === 0) {

                        alert('Not connect: Verify Network.');

                      } else if (jqXHR.status == 404) {

                        alert('Requested page not found [404]');

                      } else if (jqXHR.status == 500) {

                        alert('Internal Server Error [500].');

                      } else if (textStatus === 'parsererror') {

                        alert('Requested JSON parse failed.');

                      } else if (textStatus === 'timeout') {

                        alert('Time out error.');

                      } else if (textStatus === 'abort') {

                        alert('Ajax request aborted.');

                      } else {

                        alert('Uncaught Error: ' + jqXHR.responseText);

                      }
                  }
              });
         }else{
            swal("Formulario Incompleto!", "Ingrese todo los datos porfavor","error");
         }
    return false;
  }); /* Registrar usuario */
 $(".accion a").click(function(){
     var clave = $( this ).attr('id');
     var consulta = clave.substring(0,1);
     var id = clave.substring(1);
     var dat = {
         'id' : id
     };
     if(consulta == 'D')
      {
         var url = '<?php echo URL?>user/delete';
          $.ajax({
             type : 'POST',
             url  : url,
             data : dat,
             dataType : 'json',
             success : function(datos)
               {
                   if(datos.tipo == 'user_eliminado')
                       {
                            swal({
                              title:"Usuario Eliminado!",
                              text: "Usuario removido con éxito!",
                              type: "success",
                              showCancelButton: false,
                              confirmButtonColor: "#9bde94",
                              confirmButtonText: "Aceptar",
                              closeOnConfirm: true
                            },function() {
                               location.reload();
                            })
                       }
               }
           });
      }else if(consulta == 'U')
          {
           var url = '<?php echo URL?>user/update';
          $.ajax({
             type : 'POST',
             url  : url,
             data : dat,
             dataType : 'json',
             success : function(datos)
               {
                   if(datos.tipo == 'sin_datos')
                       {
                         swal("Error!", "Intente Nuevamente","error");
                       }
               }
           });
          }


 });
 $(document).ready(function(){
//Aquí va todo el código
 $.ajax({
    url  :  '<?php echo URL?>user/perfiles',
    success : function(data)
    {
      $("<option value=''></option>").appendTo("#perfil");
      var datos = eval("("+data+")");
      for (var i = 0; i < datos.length; i++) {
        switch (datos[i].nom_perfiles) {
          case 'administrador':
            datos[i].nom_perfiles = "Administrador";
            break;
          case 'supervisor':
            datos[i].nom_perfiles = "Supervisor";
            break;
          case 'jefearea':
            datos[i].nom_perfiles = "Jefe de Área";
            break;
          case 'jefedepartamento':
            datos[i].nom_perfiles = "Jefe de Departamento";
            break;
          case 'gerente':
            datos[i].nom_perfiles = "Gerente";
            break;
          case 'jeferelaciones':
            datos[i].nom_perfiles = "Jefe de Relaciones";
            break;
          case 'prevencionista':
            datos[i].nom_perfiles = "Prevencionista";
            break;
        }
      $("<option value='"+datos[i].id_perfiles+"'>"+datos[i].nom_perfiles+"</option>").appendTo("#perfil");
      $("<option value='"+datos[i].id_perfiles+"'>"+datos[i].nom_perfiles+"</option>").appendTo("#perfil_update");
      }
    }
});
});

$(document).ready(function(){
  $.ajax({
    url  :  '<?php echo URL?>user/listar',
    success : function(data){

      var datos = eval("("+data+")");
      // console.log(datos[i].nom_perfil);
      var nuevaFila = "";
      for (var i = 0; i < datos.length; i++) {
        switch (datos[i].nom_perfil) {
          case 'administrador':
            datos[i].nom_perfil = "Administrador";
            break;
          case 'supervisor':
            datos[i].nom_perfil = "Supervisor";
            break;
          case 'jefearea':
            datos[i].nom_perfil = "Jefe de Área";
            break;
          case 'jefedepartamento':
            datos[i].nom_perfil = "Jefe de Departamento";
            break;
          case 'gerente':
            datos[i].nom_perfil = "Gerente";
            break;
          case 'jeferelaciones':
            datos[i].nom_perfil = "Jefe de Relaciones";
            break;
          case 'prevencionista':
            datos[i].nom_perfil = "Prevencionista";
            break;
        }
      nuevaFila="<tr id='"+datos[i].id_user+"'><td>"+datos[i].nom_user+"</td><td>"+datos[i].ap_user+"</td><td>"+datos[i].am_user+"</td><td>"+datos[i].fono_user+"</td><td>"+datos[i].mail_user+"</td><td>"+datos[i].nom_perfil+"</td><td><a id='"+datos[i].id_user+"' onclick='delete_user(this.id)' class='btn btn-danger btn-xs' title='Eliminar'><i class='fa fa-times'></i></a></td><td><a id='"+datos[i].id_user+"' onclick='update_user(this.id)' class='btn btn-warning btn-xs' title='Editar'><i class='fa fa-pencil'></i></a></td></tr>";
       $("#listar").append(nuevaFila);
     }
    }
  });
});
function delete_user(id){

  var listartr = "#listar tr#"+id;
  var url = '<?php echo URL?>user/delete';
   $.ajax({
      type : 'POST',
      url  : url,
      data : {'id':id},
      dataType : 'json',
      success : function(datos)
        {
            if(datos.tipo == 'user_eliminado')
                {
                  alert("Usuario Eliminado");
                  $(listartr).remove();
                }
        }
    });

}
function update_user(id){

  var url = '<?php echo URL?>user/update_user';
   $.ajax({
      type : 'POST',
      url  : url,
      data : {'id':id},
      dataType : 'json',
      success : function(datos)
        {
            if(datos.tipo == 'almacenado'){
              window.location.href = "<?php echo URL?>modulo/user/actualiza";
            }
        }
    });

}

$(document).ready(function(){
//Aquí va todo el código
$.ajax({
   url  :  '<?php echo URL?>user/datos_update_user',
   success : function(data)
   {
     var datos = eval("("+data+")");
     $("#id_update").val(datos[0].id_user);
     $("#nombre_update").val(datos[0].nom_user);
     $("#app_update").val(datos[0].ap_user);
     $("#apm_update").val(datos[0].am_user);
     $("#mail_update").val(datos[0].mail_user);
     $("#fono_update").val(datos[0].fono_user);
     $("#perfil_update").val(datos[0].nom_user);
     $('#perfil_update > option[value='+datos[0].id_perfil+']').attr('selected', 'selected');
   }
});
});

$("#actualizar_user").click(function(){

  var id = $("#id_update").val();
  var nombre = $("#nombre_update").val();
  var ap = $("#app_update").val();
  var am = $("#apm_update").val();
  var mail = $("#mail_update").val();
  var fono = $("#fono_update").val();
  var perfil = $("#perfil_update").val();

  if(nombre != '' && ap != '' && am != '' && mail != '' && fono != '' && id != '' && perfil != '')
      {
           $.ajax({
               type : 'POST',
               url  :  '<?php echo URL?>user/update_datos_user',
               data : {
                 'perfil': perfil,
                 'nombre': nombre,
                 'ap': ap,
                 'am': am,
                 'fono': fono,
                 'mail': mail,
                 'id': id
               },
               dataType: "json",
               success : function(data)
               {
                 if(data.tipo == 'actualizado'){
                   alert('Actualizado');
                   window.location.href = "<?php echo URL?>modulo/user/lista";
                 }
               }
             });
       }
});

</script>
