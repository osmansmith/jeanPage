 <div class="content-wrapper" ng-app="validaciones" ng-controller="envio1">
    <section class="content">
       <div class="row">
        <div class="col-sm-9 col-sm-offset-1">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de Usuarios</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
             <input type="number" value="" name="id" id="id" hidden>
              <div class="box-body">
                <div class="form-group">
                  <label for="inputnombre" class="col-sm-2 control-label">Nombres</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="nombre" ng-model="nombre" name="nombre" placeholder="Nombres">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputapellido" class="col-sm-2 control-label">Apellido Paterno</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="app" ng-model="app" name="app" placeholder="Apellido Paterno">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputapellido" class="col-sm-2 control-label">Apellido Materno</label>

                  <div class="col-sm-9">
                    <input type="text" class="form-control" id="apm" ng-model="apm" name="apm" placeholder="Apellido Materno">
                  </div>
                </div>
                <div class="form-group">
                 <label for="inputfono" class="col-sm-2 control-label">Telefono</label>
                 <div class="col-sm-9">
                   <input type="text" class="form-control" id="fono" ng-model="fono" name="fono" placeholder="Telefono">
                 </div>
               </div>
                <div class="form-group">
                  <label for="inputusuario" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-9">
                    <input type="Email" class="form-control" id="mail" name="mail" ng-model="mail" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputpass" class="col-sm-2 control-label">Contraseña</label>
                  <div class="col-sm-9">
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputperfil" class="col-sm-2 control-label">Perfil</label>
                  <div class="col-sm-9">
                    <select name="perfil" id="perfil" class="form-control">
                    </select>
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               <div class="col-sm-5 col-sm-offset-2">
                <button type="submit" class="btn btn-info" id="guardar_user">Guardar</button>
                </div>
              </div>
              <!-- /.box-footer -->
             </form>
            </div>
           </div><!-- /.col-sm-6 .col-sm-offset-3 -->
          </div><!-- /.row -->
    </section>
</div>
