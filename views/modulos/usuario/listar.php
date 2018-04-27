 <div class="content-wrapper" ng-app="validaciones" ng-controller="envio2">
    <section class="content">
       <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

       <!--contenido-->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de usuarios</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-responsive" id="listar">
                <thead>
                 <tr>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Perfil</th>
                  <th colspan="2">Acciones</th>
                </tr>
                  </thead>
                 <tbody>
                  <!-- <tr ng-repeat="n in campos" >

                  </tr>  -->
                 <!-- <?php
                       $con = new Conect;
                       $con->consulta("SELECT * FROM user");
                       $num = $con->total();
                       while($campo = $con->extraer_registro())
                       {
                           echo '<tr>';
                             for($i = 0 ; $i<count($num); $i++)
                             {
                                 echo '<td>'.$campo['ID_USER'].'</td>
                                       <td>'.utf8_encode($campo['NOM_USER']).'</td>
                                       <td>'.utf8_encode($campo['AP_USER']).' '.utf8_encode($campo['AM_USER']).'</td>';
                                        $con->consulta2("SELECT NOM_PERFIL FROM perfil WHERE ID_PERFIL =".$campo['ID_PERFIL']);
                                        $ARR = $con->extraer_registro2();
                                 echo '<td>'.utf8_encode($ARR['NOM_PERFIL']).'</td>';

                             }
                               echo '<td class="accion">
                                    <a id="D'.$campo['ID_USER'].'" class="btn btn-danger btn-xs" title="Eliminar"><i class="fa fa-times"></i></a>
                                    <a id="U'.$campo['ID_USER'].'" class="btn btn-warning btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
                                    </td>
                                    </tr>';
                       }
                  ?> -->

                 </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div><!-- /.col-sm-6 .col-sm-offset-3 -->
       </div><!-- /.row -->
    </section>
</div>
