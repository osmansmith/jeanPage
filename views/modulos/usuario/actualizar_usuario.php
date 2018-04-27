<div class="content-wrapper" ng-app="validaciones" ng-controller="envio1">
   <section class="content">
      <div class="row">
       <div class="col-sm-9 col-sm-offset-1">
       <div class="box box-info">
           <div class="box-header with-border">
             <h3 class="box-title">Actualizar Usuario</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <form class="form-horizontal">
            <input type="number" value="" name="id_update" id="id_update" hidden>
             <div class="box-body">
               <div class="form-group">
                 <label for="inputnombre" class="col-sm-2 control-label">Nombres</label>

                 <div class="col-sm-9">
                   <input type="text" class="form-control" id="nombre_update" ng-model="nombre_update" name="nombre_update" placeholder="Nombres">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputapellido" class="col-sm-2 control-label">Apellido Paterno</label>

                 <div class="col-sm-9">
                   <input type="text" class="form-control" id="app_update" ng-model="app" name="app_update" placeholder="Apellido Paterno">
                 </div>
               </div>
                <div class="form-group">
                 <label for="inputapellido" class="col-sm-2 control-label">Apellido Materno</label>

                 <div class="col-sm-9">
                   <input type="text" class="form-control" id="apm_update" ng-model="apm" name="apm_update" placeholder="Apellido Materno">
                 </div>
               </div>
               <div class="form-group">
                <label for="inputfono" class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" id="fono_update" ng-model="fono" name="fono_update" placeholder="Telefono">
                </div>
              </div>
               <div class="form-group">
                 <label for="inputusuario" class="col-sm-2 control-label">Email</label>

                 <div class="col-sm-9">
                   <input type="Email" class="form-control" id="mail_update" name="mail_update" ng-model="mail" placeholder="Email">
                 </div>
               </div>
               <div class="form-group">
                 <label for="inputperfil" class="col-sm-2 control-label">Perfil</label>
                 <div class="col-sm-9">
                   <select name="perfil_update" id="perfil_update" class="form-control">
                   </select>
                 </div>
               </div>

             </div>
             <!-- /.box-body -->
             <div class="box-footer">
              <div class="col-sm-5 col-sm-offset-2">
               <button type="button" class="btn btn-info" id="actualizar_user">Guardar</button>
               </div>
             </div>
             <!-- /.box-footer -->
            </form>
           </div>
          </div><!-- /.col-sm-6 .col-sm-offset-3 -->
         </div><!-- /.row -->
   </section>
</div>
