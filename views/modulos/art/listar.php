 <div class="content-wrapper" ng-app="validaciones" ng-controller="envio2">
    <section class="content">
       <div class="row">
        <div class="col-sm-10 col-sm-offset-1">

       <!--contenido-->
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Listado de ART</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered table-responsive" id="listar">
                <thead>
                 <tr>
                  <th>creado por</th>
                  <th>Archivo</th>
                  <th>fecha de creacion</th>                  
                </tr>
                  </thead>
                 <tbody>                
                  <?php
                       $con = new Conect;
                       $con->consulta("SELECT * FROM form,user WHERE form.ID_USER = user.ID_USER");
                       $num = $con->total();
                       if($num>0)
                       {
                           while($campo = $con->extraer_registro())
                           {
                               echo '<tr>';
                                 for($i = 0 ; $i<count($num); $i++)
                                 {
                                     
                                     echo  '<td>'.utf8_encode($campo['NOM_USER']).' '.utf8_encode($campo['AP_USER']).'</td>
                                            <td> <a href="'.URL.$campo['PATH_FORM'].'">ART</a> </td>
                                            <td> '.$campo['FECHA_FORM'].'</td>';                                             
                                 }
                                   echo '</tr>';
                           }
                       }else{
                        ?>
                        <tr>
                          <td colspan="3">No se han registrado ART</td>
                        </tr>
                        <?php
                       }
                      
                  ?> 

                 </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div><!-- /.col-sm-6 .col-sm-offset-3 -->
       </div><!-- /.row -->
    </section>
</div>
