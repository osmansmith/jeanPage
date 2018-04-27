<?php date_default_timezone_set("Chile/Continental");?>
 <head>
  <link rel="stylesheet" href="<?php echo URL?>public/dist/css/art.css" type="text/css" media="screen">
 </head>
 <div class="content-wrapper">
    <section class="content">
       <div class="row">
       <div class="col-sm-12">
         <section class="content-header">
              
              <h1>
                ANÁLISIS DE RIESGOS DEL TRABAJO
                <small>- ART </small>
              </h1>
            <!-- <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">UI</a></li>
              <li class="active">General</li>
            </ol> -->
         </section>
         	 <h1 class="text-center"> </h1>
       </div>
      <form id="art" class="form-horizontal">
        <div class="col-sm-12">           
                <div class="box box-default">
                  <div class="box-header">
                    <h3 class="box-title">PASO 1</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">
                    <!-- PASO 1 -->
                       <table class="table table-responsive table-bordered">
                       <thead>
                         <tr class="superior">                           
                           <td class="text-left">IDENTIFICACIÓN GENERAL</td>
                         </tr>
                       </thead>               
                       </table>  
                       <table class="table table-responsive table-bordered">
                         <tbody>
                          
                           <tr class="hidden-xs">
                               <td class="fondo-celda col-xs-6 col-sm-2 col-md-2 "> 
                                  <b class="fondo-celda form-control">Nombre Empresa:</b>
                               </td>
                               <td class="col-xs-6 col-sm-4 col-md-4">
                                  <input type="text" class="form-control" id="p1_nombre" name="p1_nombre">
                               </td> 
                               <td class="fondo-celda col-xs-6 col-sm-2 col-md-2"> 
                                  <b class=" fondo-celda form-control">Gerencia:</b>                               
                               </td>
                               <td class="col-xs-6 col-sm-4 col-md-4">
                                  <input type="text" class="form-control" id="p1_gerencia" name="p1_gerencia">
                               </td>
                           </tr>
                           <tr class="visible-xs">
                             <td class="fondo-celda col-xs-6"> 
                                  <b class="fondo-celda form-control ">Nombre Empresa:</b>
                               </td>
                               <td class="col-xs-6">
                                  <input type="text" class="form-control" id="p1_nombre" name="p1_nombre">
                               </td> 
                           </tr>
                           <tr class="visible-xs">
                             <td class="fondo-celda col-xs-6"> 
                                  <b class="fondo-celda form-control">Gerencia:</b>                               
                               </td>
                               <td class="col-xs-6">
                                  <input type="text" class="form-control" id="p1_gerencia" name="p1_gerencia">
                               </td>
                           </tr>
                           

                         <tr class="hidden-xs">
                           <td colspan="1" class="fondo-celda">
                              <b class="fondo-celda form-control" style="text-align: left;">Nombre Actividad:</b>                                                                                             
                           </td>
                           <td colspan="3" class="col-md-12">
                              <input type="text" class="form-control" id="p1_actividad" name="p1_actividad">
                           </td>
                         </tr>
                         
                         <tr class="visible-xs">
                           <td colspan="4" class="fondo-celda col-xs-12" >
                              <b class="fondo-celda text-center form-control">Nombre Actividad</b>                                                              
                           </td>
                        </tr>
                           <tr class="visible-xs">
                           <td colspan="4" class="col-xs-12" >                                                            
                                 <input type="text" class="form-control" id="p1_actividad" name="p1_actividad">
                           </td>
                         </tr>
                         <tr class="hidden-xs">
                               <td class="fondo-celda col-xs-5 col-sm-2 col-md-2"> 
                                  <b class="fondo-celda form-control ">Área :</b>
                               </td>
                               <td class="col-xs-7 col-sm-4 col-md-4">
                                  <input type="text" class="form-control" id="p1_area" name="p1_area">
                               </td> 
                               <td class="fondo-celda col-xs-5 col-sm-2 col-md-2"> 
                                  <b class="fondo-celda form-control">Lugar:</b>                               
                               </td>
                               <td class="col-xs-7 col-sm-4 col-md-4">
                                  <input type="text" class="form-control" id="p1_lugar" name="p1_lugar">
                               </td>
                           </tr>
                           <tr class="visible-xs">
                             <td class="fondo-celda col-xs-5"> 
                             <b class="fondo-celda form-control ">Área :</b>
                               </td>
                               <td class="col-xs-7">
                               <input type="text" class="form-control" id="p1_area" name="p1_area">
                               </td> 
                           </tr>
                           <tr class="visible-xs">
                             <td class="fondo-celda col-xs-5"> 
                             <b class="fondo-celda form-control">Lugar:</b>                               
                               </td>
                               <td class="col-xs-7">
                               <input type="text" class="form-control" id="p1_lugar" name="p1_lugar">
                               </td>
                           </tr>              
                       </tbody>
                       </table>           
                       <table class="table table-responsive table-bordered">
                         <tr class="hidden-xs">
                          
                           <td class="fondo-celda col-md-3">
                             <b class="fondo-celda form-control text-center">Fecha:</b>                                                               
                           </td>
                           <td class="fondo-celda col-md-3">
                             <b class="fondo-celda form-control text-center">Hora Art:</b>                                                                                          
                           </td>
                           <td class="fondo-celda col-md-3">
                             <b class="fondo-celda form-control text-center">Hora Inicio:</b>                                                               
                           </td>
                           <td class="fondo-celda col-md-3">
                             <b class="fondo-celda form-control text-center">Hora termino:</b>                                                                                  
                           </td>
                         </tr>
                         <tr class="hidden-xs">
                          
                           <td class="col-md-3">                             
                                 <input type="text" class="form-control" id="p1_fecha" name="p1_fecha">                               
                           </td>
                           <td class="col-md-3">                             
                                 <input type="text" class="form-control" id="p1_hart" name="p1_hart">                               
                           </td>
                           <td class="col-md-3">                             
                                 <input type="text" class="form-control col-md-12" id="p1_hinicio" name="p1_hinicio">                               
                           </td>
                           <td class="col-md-3">                             
                                 <input type="text" class="form-control" id="p1_htermino" name="p1_htermino">                               
                           </td>
                         </tr>

                         <tr class="visible-xs">
                           <td class="fondo-celda col-md-5">
                            <b class="fondo-celda form-control">Fecha:</b>
                           </td>
                           <td class="col-md-7">
                           <input type="text" class="form-control" id="p1_fecha" name="p1_fecha">                               
                           </td>
                         </tr>

                         <tr class="visible-xs">
                          <td class="fondo-celda col-md-5">
                            <b class="fondo-celda form-control">Hora Art:</b>                              
                          </td>
                          <td class="col-md-7">
                            <input type="text" class="form-control" id="p1_hart" name="p1_hart">                               
                          </td>
                         </tr>

                         <tr class="visible-xs">
                            <td class="fondo-celda col-md-5">
                                <b class="fondo-celda form-control col-md-12">Hora Inicio:</b>                              
                            </td>
                            <td class="col-md-7">
                                <input type="text" class="form-control col-md-12" id="p1_hinicio" name="p1_hinicio">                               
                            </td>
                         </tr>

                         <tr class="visible-xs">
                            <td class="fondo-celda col-md-5">
                                <b class="fondo-celda form-control">Hora termino:</b>                              
                            </td>
                            <td class="col-md-7">
                                <input type="text" class="form-control" id="p1_htermino" name="p1_htermino">                               
                            </td>
                         </tr>
                       </table>
                  </div>          
                </div> 
                
                <!-- PASO 2-->

                <div class="box box-default">
                  <div class="box-header">
                    <h3 class="box-title">PASO 2</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">                    
                       <table class="table table-responsive table-bordered">
                         <thead>
                           <tr class="superior">
                             <td class="text-left">DETERMINACION SI SE REQUIERE O NO EL DESARROLLO DE UN ART</td>                            
                           </tr>
                         </thead>               
                       </table>  
                       <table class="table table-responsive table-bordered">
                        <tbody>
                          <tr class="centrar">
                            <td class="fondo-celda col-md-1 col-sm-1"><b>N°</b></td>
                            <td class="fondo-celda col-md-5 col-sm-5"><b>ÍTEM</b></td>
                            <td class="fondo-celda col-md-1 col-sm-1"><b>SI</b></td>
                            <td class="fondo-celda col-md-1 col-sm-1"><b>NO</b></td>
                            <td colspan="3" class="fondo-celda col-md-4 col-sm-4"><b>RESPONSABLE DE LA ACTIVIDAD</b></td>
                            
                          </tr>
                        </tbody>
                         <tbody>
                           <tr>
                             <td class="fondo-celda text-center">1</td>
                             <td class="defecto">¿Existe procedimiento o instructivo asociado a la actividad a ser realizada?</td>
                             <td class="text-center"><input type="checkbox"  name="p2[]" id="p2_1_si" class="square-blue" value="p2_1_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p2[]" id="p2_1_no" class="square-blue" value="p2_1_no"></td>
                             <td colspan="1" class="col-md-1 col-sm-1">
                               <b>NOMBRE</b>
                             </td>
                             <td colspan="2">
                                <input type="text" class="form-control" id="p2_1" name="p2_1">
                             </td>
                           </tr> 
                           <tr>
                             <td class="fondo-celda text-center">2</td>
                             <td class="defecto">¿Los trabajadores involucrados en la actividad, se encuentran capacitados en el procedimiento o instructivo asociado a la actividad?</td>
                             <td class="text-center"><input type="checkbox"  name="p2[]" id="p2_2_si" class="square-blue" value="p2_2_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p2[]" id="p2_2_no" class="square-blue" value="p2_2_no"></td>
                             <td colspan="1">
                               <b>CARGO</b>
                             </td>
                             <td colspan="2">
                             <input type="text" class="form-control" id="p2_2" name="p2_2">
                             </td>
                           </tr> 
                           <tr>
                             <td class="fondo-celda text-center">3</td>
                             <td class="defecto">Lo indicado en el procedimiento o instructivo de la actividad a realizar;¿Coincide con las condiciones actuales del lugar de trabajo, estándo el grupo en condiciones de realizar el trabajo?</td>
                             <td class="text-center"><input type="checkbox"  name="p2[]" id="p2_3_si" class="square-blue" value="p2_3_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p2[]" id="p2_3_no" class="square-blue" value="p2_3_no"></td>
                             <td colspan="1">
                               <b>FIRMA</b>
                             </td>
                             <td colspan="2">
                             <input type="text" class="form-control" id="p2_3" name="p2_3">
                             </td>
                           </tr>                              
                           <tr class="fondo-alerta">
                             <td colspan="7" class="fondo-alerta text-center" style="height:50px; margin-top: 0; padding-top: 1%;"> <b>Si una o mas de las respuestas a las preguntas anteriores, tuvo como respuesta un "NO", se debe desarrollar el ART previo al inicio del trabajo.</b></td>
                           </tr>                               
                         </tbody>
                       </table>                            
                  </div>          
                </div>
                
                <!-- PASO 3-->

                <div class="box box-default">
                  <div class="box-header">
                    <h3 class="box-title">PASO 3</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">                    
                       <table class="table table-responsive table-bordered">
                         <thead>
                           <tr class="superior">
                             <td class="text-left">VERIFICACIÓN Y CONTROL INICIAL DE PARTE DEL RESPONSABLE DE LA ACTIVIDAD</td>                            
                           </tr>
                         </thead>               
                       </table>  
                       <table class="table table-responsive table-bordered">
                        <tbody>
                          <tr class="centrar">
                            <td class="fondo-celda col-md-1 col-sm-1"><b>N°</b></td>
                            <td class="fondo-celda col-md-5 col-sm-5"><b>ÍTEM</b></td>
                            <td class="fondo-celda col-md-1 col-sm-1"><b>SI</b></td>
                            <td class="fondo-celda col-md-1 col-sm-1"><b>NO</b></td>
                            <td class="fondo-celda col-md-4 col-sm-4"><b>identifique la accion tomada para resolver una respuesta "NO"</b></td>
                            
                          </tr>
                        </tbody>
                         <tbody>
                           <tr>
                             <td class="fondo-celda text-center">1</td>
                             <td class="defecto">¿Los trabajadores, se encuentran en optimas condiciones físicas y psicológicas, para realizar la actividad?</td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_1_si" class="square-blue" value="p3_1_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_1_no" class="square-blue" value="p3_1_no"></td>                             
                             <td>
                                <input type="text" class="form-control" id="p3_1" name="p3_1">
                             </td>
                           </tr> 
                           <tr>
                             <td class="fondo-celda text-center">2</td>
                             <td class="defecto">¿Todos los trabajadores cuentan con sus Equipos de Protección Personal, adecuados parael trabajo?</td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_2_si" class="square-blue" value="p3_2_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_2_no" class="square-blue" value="p3_2_no"></td>                             
                             <td>
                             <input type="text" class="form-control" id="p3_2" name="p3_2">
                             </td>
                           </tr> 
                           <tr>
                             <td class="fondo-celda text-center">3</td>
                             <td class="defecto">¿Se evaluó la interacción con otros trabajos que se realizarán en forma simultanea y se tienen considerados los controles?</td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_3_si" class="square-blue" value="p3_3_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_3_no" class="square-blue" value="p3_3_no"></td>                             
                             <td>
                             <input type="text" class="form-control" id="p3_3" name="p3_3">
                             </td>
                           </tr>
                           <tr>
                             <td class="fondo-celda text-center">4</td>
                             <td class="defecto">¿El o los trabajadores cuentan con las herramientas y accesorios necesarios en óptimas condiciones para realizar el trabajo?</td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_4_si" class="square-blue" value="p3_4_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_4_no" class="square-blue" value="p3_4_no"></td>                             
                             <td>
                             <input type="text" class="form-control" id="p3_4" name="p3_4">
                             </td>
                           </tr>
                           <tr>
                             <td class="fondo-celda text-center">5</td>
                             <td class="defecto">¿Se cuenta con los Permisos Especiales, asociados al trabajo a realizar?</td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_5_si" class="square-blue" value="p3_5_si" ></td>
                             <td class="text-center"><input type="checkbox"  name="p3[]" id="p3_5_no" class="square-blue" value="p3_5_no"></td>                             
                             <td>
                             <input type="text" class="form-control" id="p3_5" name="p3_5">
                             </td>
                           </tr>                              
                           <tr class="fondo-alerta">
                             <td colspan="5" class="fondo-alerta text-center" style="height:50px; margin-top: 0; padding-top: 1%;"> <b>Si una o mas de las respuestas a las preguntas anteriores, tuvo como respuesta un "NO", se debe resolver el tema antes de iniciar el trabajo</b></td>
                           </tr>                               
                         </tbody>
                       </table>                            
                  </div>          
                </div>
                
                <!-- PASO 4-->

                <div class="box box-default">
                  <div class="box-header">
                    <h3 class="box-title">PASO 4</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">                    
                       <table class="table table-responsive table-bordered">
                         <thead>
                           <tr class="superior">                             
                             <td>IDENTIFICACION DE LOS TRABAJADORES PARTICIPANTES DEL ART Y LA EJECUCIÓN DEL TRABAJO</td>
                           </tr>
                         </thead>               
                       </table>  
                       <table class="table table-responsive table-bordered">
                        <tbody>
                          <tr class="centrar">
                            <td ><b>NOMBRE</b></td>
                            <td ><b>RUT</b></td>
                            <td ><b>CARGO</b></td>
                            <td ><b>FIRMA</b></td>
                            <td ><b>HORA</b></td>                                                  
                          </tr>
                          <tr>
                            <td><input type="text" name="nombre_1"   class="form-control"></td>
                            <td><input type="text" name="rut_1"  class="form-control"></td>
                            <td><input type="text" name="cargo_1" class="form-control"></td>
                            <td><input type="text" name="firma_1" class="form-control"></td>
                            <td><input type="text" name="hora_1" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_2"   class="form-control"></td>
                            <td><input type="text" name="rut_2"  class="form-control"></td>
                            <td><input type="text" name="cargo_2" class="form-control"></td>
                            <td><input type="text" name="firma_2" class="form-control"></td>
                            <td><input type="text" name="hora_2" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_3"   class="form-control"></td>
                            <td><input type="text" name="rut_3"  class="form-control"></td>
                            <td><input type="text" name="cargo_3" class="form-control"></td>
                            <td><input type="text" name="firma_3" class="form-control"></td>
                            <td><input type="text" name="hora_3" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_4"   class="form-control"></td>
                            <td><input type="text" name="rut_4"  class="form-control"></td>
                            <td><input type="text" name="cargo_4" class="form-control"></td>
                            <td><input type="text" name="firma_4" class="form-control"></td>
                            <td><input type="text" name="hora_4" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_5"   class="form-control"></td>
                            <td><input type="text" name="rut_5"  class="form-control"></td>
                            <td><input type="text" name="cargo_5" class="form-control"></td>
                            <td><input type="text" name="firma_5" class="form-control"></td>
                            <td><input type="text" name="hora_5" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_6"   class="form-control"></td>
                            <td><input type="text" name="rut_6"  class="form-control"></td>
                            <td><input type="text" name="cargo_6" class="form-control"></td>
                            <td><input type="text" name="firma_6" class="form-control"></td>
                            <td><input type="text" name="hora_6" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_7"   class="form-control"></td>
                            <td><input type="text" name="rut_7"  class="form-control"></td>
                            <td><input type="text" name="cargo_7" class="form-control"></td>
                            <td><input type="text" name="firma_7" class="form-control"></td>
                            <td><input type="text" name="hora_7" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_8"   class="form-control"></td>
                            <td><input type="text" name="rut_8"  class="form-control"></td>
                            <td><input type="text" name="cargo_8" class="form-control"></td>
                            <td><input type="text" name="firma_8" class="form-control"></td>
                            <td><input type="text" name="hora_8" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_9"   class="form-control"></td>
                            <td><input type="text" name="rut_9"  class="form-control"></td>
                            <td><input type="text" name="cargo_9" class="form-control"></td>
                            <td><input type="text" name="firma_9" class="form-control"></td>
                            <td><input type="text" name="hora_9" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_10"   class="form-control"></td>
                            <td><input type="text" name="rut_10"  class="form-control"></td>
                            <td><input type="text" name="cargo_10" class="form-control"></td>
                            <td><input type="text" name="firma_10" class="form-control"></td>
                            <td><input type="text" name="hora_10" class="form-control"></td>
                          </tr> 
                          <tr>
                            <td><input type="text" name="nombre_11"   class="form-control"></td>
                            <td><input type="text" name="rut_11"  class="form-control"></td>
                            <td><input type="text" name="cargo_11" class="form-control"></td>
                            <td><input type="text" name="firma_11" class="form-control"></td>
                            <td><input type="text" name="hora_11" class="form-control"></td>
                          </tr>                                                                                                                                                  
                        </tbody>
                       </table>                            
                  </div>          
                </div>
                
                <!-- PASO 5-->
                <div class="box box-default">
                  <div class="box-header">
                    <h3 class="box-title">PASO 5</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">                    
                       <table class="table table-responsive table-bordered">
                         <thead>
                           <tr class="superior">                             
                             <td>ANALISIS DE RIESGO DEL TRABAJO</td>
                           </tr>
                         </thead>               
                       </table>  
                     <table class="table table-responsive table-bordered">  
                     <tbody>                      
                            <tr>
                                <td><b>DESCRIPCION DEL PASO A PASO DEL TRABAJO</b></td>
                                <td><b>RIESGOS ASOCIADOS A CADA PASO (¿Qué puede Ocurrir?)</b></td>
                                <td><b>ACCIONES PREVENTIVAS PARA EL CONTROL DEL RIESGO</b></td>
                            </tr>                        
                        
                            <tr>
                                <td><input type="text" class="form-control" name="p5_desc_1" id="p5_desc_1"></td>
                                <td><input type="text" class="form-control" name="p5_ries_1" id="p5_ries_1"></td>
                                <td><input type="text" class="form-control" name="p5_acci_1" id="p5_acci_1"></td>
                            </tr>
                           <tr>
                             <td><input type="text" name="p5_desc_2" id="p5_desc_2" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="p5_desc_3" id="p5_desc_3" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="p5_desc_4" id="p5_desc_4" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="p5_desc_5" id="p5_desc_5" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="p5_desc_6" id="p5_desc_6" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="p5_desc_7" id="p5_desc_7" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>
                           <tr>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                             <td><input type="text" name="" id="" class="form-control"></td>
                           </tr>               
                        </tbody>
                     </table>                             
                  </div>          
                </div><!-- PASO 4-->
                <div class="box box-default">
                  <div class="box-header">
                    <h3 class="box-title">PASO 5</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">
                    <!-- PASO 5 -->
                       <table width="100%">
                       <thead>
                         <tr class="superior">
                           <td>PASO 5</td>
                           <td>PERMISOS ESPECIALES DE TRABAJO</td>
                         </tr>
                       </thead>               
                       </table>  
                       <table width="100%">
                         <tbody>
                         <tr class="defecto">
                           <td colspan="8">Indique los permisos aplicables a su actividad:</td>                
                         </tr>
                        <tr class="defecto">
                           <td><input type="checkbox"  name="p5[]" id="p5_1" class="square-blue" value="p5_1" ></td>
                           <td>Ingreso al área</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_2" class="square-blue" value="p5_2" ></td>
                           <td>Trabajo en altura</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_3" class="square-blue" value="p5_3" ></td>
                           <td>Líneas energizadas</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_4" class="square-blue" value="p5_4" ></td>
                           <td>Pruebas hidrostáticas</td>
                         </tr>
                         <tr class="defecto">
                           <td><input type="checkbox"  name="p5[]" id="p5_5" class="square-blue" value="p5_5" ></td>
                           <td>Trabajo en caliente</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_6" class="square-blue" value="p5_6" ></td>
                           <td>Excavaciones</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_7" class="square-blue" value="p5_7" ></td>
                           <td>Trabajos simultáneos</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_8" class="square-blue" value="p5_8" ></td>
                           <td>Tronaduras</td>
                         </tr>
                         <tr class="defecto">
                           <td><input type="checkbox"  name="p5[]" id="p5_9" class="square-blue" value="p5_9" ></td>
                           <td>Bloqueo de energías</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_10" class="square-blue" value="p5_10" ></td>
                           <td>Izaje crítico</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_11" class="square-blue" value="p5_11" ></td>
                           <td>Cierre de caminos</td>
                           <td><input type="checkbox"  name="p5[]" id="p5_12" class="square-blue" value="p5_12" ></td>
                           <td>Espacio confinado</td>
                         </tr>                                
                       </tbody>
                       </table>                            
                  </div>          
                </div> <!-- PASO 5--> 
                <div class="box box-default" id="paso6">
                  <div class="box-header">
                    <h3 class="box-title">PASO 6</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">
                    <!-- PASO 6 -->
                       <table width="100%">
                       <thead>
                         <tr class="superior">
                           <td>PASO 6</td>
                           <td>REGISTRO DE TRABAJADORES</td>
                         </tr>
                       </thead>               
                       </table>  
                       <table width="100%">
                         <tbody>
                           <tr class="centrar">
                             <td width="4%">N°</td>
                             <td width="70%">NOMBRE</td>
                             <td width="20%">FIRMA</td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">1</td>
                             <td><input type="text" name="nombre_1" class="centrar form-control"></td>
                             <td id="p6_1_firma"></td>
                           </tr>  
                           <tr class="centrar">
                             <td height="50">2</td>
                             <td><input type="text" name="nombre_2" class="centrar form-control"></td>
                             <td id="p6_2_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">3</td>
                             <td><input type="text" name="nombre_3" class="centrar form-control"></td>
                             <td id="p6_3_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">4</td>
                             <td><input type="text" name="nombre_4" class="centrar form-control"></td>
                             <td id="p6_4_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">5</td>
                             <td><input type="text" name="nombre_5" class="centrar form-control"></td>
                             <td id="p6_5_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">6</td>
                             <td><input type="text" name="nombre_6" class="centrar form-control"></td>
                             <td id="p6_6_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">7</td>
                             <td><input type="text" name="nombre_7" class="centrar form-control"></td>
                             <td id="p6_7_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">8</td>
                             <td><input type="text" name="nombre_8" class="centrar form-control"></td>
                             <td id="p6_8_firma"></td>
                           </tr> 
                           <tr class="centrar">
                             <td height="50">9</td>
                             <td><input type="text" name="nombre_9" class="centrar form-control"></td>
                             <td id="p6_9_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">10</td>
                             <td><input type="text" name="nombre_10" class="centrar form-control"></td>
                             <td id="p6_10_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">11</td>
                             <td><input type="text" name="nombre_11" class="centrar form-control"></td>
                             <td id="p6_11_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">12</td>
                             <td><input type="text" name="nombre_12" class="centrar form-control"></td>
                             <td id="p6_12_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">13</td>
                             <td><input type="text" name="nombre_13" class="centrar form-control"></td>
                             <td id="p6_13_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">14</td>
                             <td><input type="text" name="nombre_14" class="centrar form-control"></td>
                             <td id="p6_14_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">15</td>
                             <td><input type="text" name="nombre_15" class="centrar form-control"></td>
                             <td id="p6_15_firma"></td>
                           </tr>                  
                         </tbody>
                       </table>                            
                  </div>          
                </div> <!-- PASO 6-->
                <div class="box box-default" id="paso7">
                  <div class="box-header">
                    <h3 class="box-title">PASO 7</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">
                    <!-- PASO 7 -->
                       <table width="100%">
                       <thead>
                         <tr class="superior">
                           <td>PASO 7</td>
                           <td>REVISIÓN Y APROBACIÓN</td>
                         </tr>
                       </thead>               
                       </table>  
                       <table width="100%">
                         <tbody>
                          <tr class="centrar">
                            <td rowspan="2" width="25%" >Supervisor o responsable a cargo del trabajo</td>
                            <td height="30">NOMBRE</td>
                            <td width="20%">FIRMA</td>
                          </tr> 
                          <tr class="centrar">
                            <td height="100" ><input type="text" class="form-control text-center" name="p7_nombre" id="p7_nombre"></td>
                            <td id="p7_firma"></td>
                          </tr>  
                         </tbody>
                       </table>           
                       
                  </div>          
                </div> <!-- PASO 8-->
                <div class="box box-default" id="paso8">
                  <div class="box-header">
                    <h3 class="box-title">PASO 8</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>           
                    </div>
                  </div>
                  <div class="box-body">
                    <!-- PASO 7 -->
                       <table width="100%">
                       <thead>
                         <tr class="superior">
                           <td>PASO 8</td>
                           <td>VALIDACIÓN DE ART</td>
                         </tr>
                       </thead>               
                       </table>  
                       <table width="100%">
                         <tbody>
                          <tr class="centrar">
                            <td colspan="4" style="padding-left: 10px; padding-right: 10px;">En caso de que se realice una actividad rutinaria y que no requiera cambios o modificaciones del ART, se puede revalidar este
                             documento por el Supervisor a cargo del trabajo</td>
                          </tr>
                          <tr class="centrar">
                            <td>N°</td>
                            <td>ÍTEM</td>
                            <td>SI</td>
                            <td>NO</td>
                          </tr>
                          <tr>
                            <td class="text-center">1</td>
                            <td style="padding-left: 10px;">¿Se revisó y analizó el ART actual?</td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_1_si" class="square-blue" value="p8_1_si" ></td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_1_no" class="square-blue" value="p8_1_no" ></td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">2</td>
                            <td style="padding-left: 10px;">¿Se revisó y analizó los PET?</td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_2_si" class="square-blue" value="p8_2_si" ></td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_2_no" class="square-blue" value="p8_2_no" ></td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">3</td>
                            <td style="padding-left: 10px;">¿Las condiciones presentes han sufrido cambios?</td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_3_si" class="square-blue" value="p8_3_si" ></td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_3_no" class="square-blue" value="p8_3_no" ></td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">4</td>
                            <td style="padding-left: 10px;">¿Requiere realizar un nuevo ART?</td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_4_si" class="square-blue" value="p8_4_si" ></td>
                            <td class="text-center"><input type="checkbox"  name="p8[]" id="p8_4_no" class="square-blue" value="p8_4_no" ></td>
                          </tr>
                         </tbody>
                       </table>           
                       <table width="100%" style="border-top: 0;">
                         <tr class="centrar">
                           <td style="border-top: 0;">Día 1</td>
                           <td style="border-top: 0;">Día 2</td>
                           <td style="border-top: 0;">Día 3</td>
                           <td style="border-top: 0;">Día 4</td>
                           <td style="border-top: 0;">Día 5</td>
                           <td style="border-top: 0;">Día 6</td>
                           <td style="border-top: 0;">Día 7</td>
                         </tr>
                         <tr class="centrar">
                           <td height="100" width="14%" id="p8_1_firma">Firma / Fecha</td>
                           <td height="100" width="14%" id="p8_2_firma">Firma / Fecha</td>
                           <td height="100" width="14%" id="p8_3_firma">Firma / Fecha</td>
                           <td height="100" width="14%" id="p8_4_firma">Firma / Fecha</td>
                           <td height="100" width="14%" id="p8_5_firma">Firma / Fecha</td>
                           <td height="100" width="14%" id="p8_6_firma">Firma / Fecha</td>
                           <td height="100" width="14%" id="p8_7_firma">Firma / Fecha</td>
                         </tr>
                       </table>
                  </div>          
                </div> <!-- PASO 8-->           
          </div><!-- /.col-sm-11 -->
          
        </form>
        <div class="col-sm-3 col-sm-offset-4"> 
            <button class="btn btn-primary btn-md form-control" id="enviar_art"> <i class="fa fa-send"></i>  Enviar</button>
          </div>
        <div id="mostrar"></div>

        <!-- Modales -->
    
         <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Envio de ART</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Enviar por correo a :</label>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                    <?php
                   $conexion = new Conect();
                   $conexion->consulta("SELECT * FROM user WHERE ESTADO_USER = 1");
                    while($user = $conexion->extraer_registro())
                    {
                      echo '<option value="'.$user['ID_USER'].'">'.$user['NOM_USER'].' '.$user['AP_USER'].'</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="enviar">Enviar ART</button>
              </div>
            </div>
          </div>
        </div>


          <div id="signature-pad-p7" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p7">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_1" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_1">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_2" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_2">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_3" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_3">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_4" class="signature-pad m-signature-pad">
                      <div class="popup-contenedor">
                        <div class="m-signature-pad--body">
                          <canvas></canvas>
                        </div>
                          <div class="m-signature-pad--footer">
                            <!-- <div class="description">Sign above</div> -->
                            <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                            <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                          </div>
                         <button class="popup-cerrar" id="cerrar-p6_4">X</button>
                      </div>            
          </div>
          <div id="signature-pad-p6_5" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_5">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_6" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_6">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_7" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_7">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_8" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_8">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_9" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_9">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_10" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_10">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_11" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_11">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_12" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_12">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_13" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_13">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_14" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_14">X</button>
            </div>            
          </div>
          <div id="signature-pad-p6_15" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p6_15">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_1" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_1">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_2" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_2">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_3" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_3">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_4" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_4">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_5" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_5">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_6" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_6">X</button>
            </div>            
          </div>
          <div id="signature-pad-p8_7" class="signature-pad m-signature-pad">
            <div class="popup-contenedor">
              <div class="m-signature-pad--body">
                <canvas></canvas>
              </div>
                <div class="m-signature-pad--footer">
                  <!-- <div class="description">Sign above</div> -->
                  <button type="button" class="btn btn-warning btn-icon pull-left" data-action="clear">Limpiar</button>
                  <button type="button" class="btn btn-primary btn-icon pull-right" data-action="save">Guardar</button>
                </div>
               <button class="popup-cerrar" id="cerrar-p8_7">X</button>
            </div>            
          </div>

      </div><!-- /.row -->
    </section>
</div>
