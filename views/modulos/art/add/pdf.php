<?php
date_default_timezone_set("Chile/Continental");
 
$html = '
    <style>
    textarea {
	resize: none;
	}
	.superior{
	color:white;
	background: black;
	text-align: center;
	height: 25px;
	}
	.superior td:nth-child(1){
	  width: 30%;
	}
	.area{
	background: #fff;
	height: 80px;
	}
	.defecto{
	background: #fff;
	height: 25px;
	text-align: left;
	padding-left: 2%;
	padding-top: 0;
	} 
	.defecto td{
	background: #fff;
	height: 25px;
	text-align: left;
	padding-left: 2%;
	padding-top: 0;
	} 
	.defecto2 td{
	background: #fff;
	height: 80px;
	text-align: center;
	padding-left: 2%;
	padding-top: 0;
	}
	.centrar {
	text-align: center;
	}  
	.centrar td{
	text-align: center;
	}         
	table, th, td {
	border: 1px solid black;
	border-collapse: collapse;
	}
	.form-control {
	border-color: transparent;          
	}
    </style>	  
	<section class="content">
       <div class="row">
       <div class="col-sm-12">
         <section class="content-header">
              <h1>
                ANÁLISIS DE RIESGOS DEL TRABAJO
                <small>- ART </small>
              </h1>           
         </section>
         	 <h1 style="text-align:center;"> </h1>
       </div>
      <div class="form-horizontal">
        <div class="col-sm-10 col-sm-offset-1">                           
                       <table width="100%">
                       <thead>
                         <tr >
                           <td class="superior">PASO 1</td>
                           <td class="superior">DESCRIPCIÓN DE LA ACTIVIDAD</td>
                         </tr>
                       </thead>               
                       </table>  
                       <table width="100%">
                         <tbody>
                         <tr>
                           <td colspan="2" width="40%"> 
                              <label class="control-label col-sm-2">Gerencia:</label>
                               <div class="col-sm-10">
                                 <div id="p1_gerencia" name="p1_gerencia">'.$_POST['p1_gerencia'].'</div>
                               </div>
                           </td>
                           <td width="25%">
                              <label class="control-label col-sm-2">Área:</label>
                              <div class="col-sm-10">
                                 <div id="p1_area" name="p1_area">'.$_POST['p1_area'].'</div>
                               </div>
                           </td>
                           <td width="35%">
                             <label class="control-label col-sm-2">Empresa:</label>
                              <div class="col-sm-10">
                                 <div id="p1_empresa" name="p1_empresa">'.$_POST['p1_empresa'].'</div>
                               </div>
                           </td>                 
                         </tr>
                         <tr >
                           <td colspan="4" >
                              <label class="control-label col-sm-2">Nombre Actividad:</label>
                              <div class="col-sm-10" >
                                 <div id="p1_actividad" name="p1_actividad">'.$_POST['p1_actividad'].'</div>
                               </div>
                           </td>
                         </tr>
                         <tr class="defecto">
                           <td colspan="4">
                              <label class="control-label col-sm-1">Lugar:</label>
                              <div class="col-sm-10">
                                 <div id="p1_lugar" name="p1_lugar">'.$_POST['p1_lugar'].'</div>
                               </div>
                           </td>
                         </tr>               
                       </tbody>
                       </table>           
                       <table width="100%" style="border-top: none;">
                         <tr>
                           <td style="border-top: none; ">
                             <label class="control-label col-sm-4" style="padding: 10px 25px 5px 0;">Tipo Actividad:</label>
                             <div class="col-sm-8" style="padding: 10px 0 5px 10px;">
                                <label id="p1_rut_si">
                                RUTINARIA
                                <img src="'. URL .'public/dist/img/chek.PNG" width="15">

                              </label>
                              <label id="p1_rut_no">
                                NO RUTINARIA
                                <input type="checkbox"  name="p1" class="square-blue icheckbox_square-blue" value="p1_norutina">
                              </label>
                             </div>
                             
                           </td>
                           <td width="20%" style="border-top: none;">
                             <label class="control-label col-sm-2">Turno:</label>
                              <div class="col-sm-10" style="padding-left: 30px;">
                                 <div id="p1_turno" name="p1_turno"></div>
                               </div>
                           </td>
                           <td width="20%" style="border-top: none;">
                           <label class="control-label col-sm-2">Fecha:</label>
                              <div class="col-sm-10" style="text-align:center;">
                                 <span  style="text-align:center;" > '. date('d-m-Y') .'</span>
                               </div></td>
                           <td width="20%" style="border-top: none;">
                           <label class="control-label col-sm-2">Hora:</label>
                              <div class="col-sm-10" style="text-align:center;">
                                 <span  style="text-align:center;" > '. date("H:i:s") .'</span>
                               </div></td>
                         </tr>
                </table>                              
                <table width="100%">
                         <thead>
                           <tr >
                             <td class="superior">PASO 2</td>
                             <td class="superior">EVALUACIÓN INICIAL DEL TRABAJO</td>
                           </tr>
                         </thead>               
                       </table>  
                       <table width="100%">
                        <tbody>
                          <tr >
                            <td width="5%" style="text-align:center;">N°</td>
                            <td width="75%">ÍTEM</td>
                            <td>SI</td>
                            <td>NO</td>
                          </tr>
                        </tbody>
                         <tbody>
                           <tr>
                             <td style="text-align:center;">1</td>
                             <td class="defecto">¿Me encuentro en condiciones físicas y psicológicas aptas para realizar la tarea?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_1_si" class="square-blue" value="p2_1_si" ></td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_1_no" class="square-blue" value="p2_1_no"></td>
                           </tr> 
                           <tr>
                             <td style="text-align:center;">2</td>
                             <td class="defecto">¿Cuento con las autorizaciones de ingreso al área de trabajo?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_2_si" class="square-blue" value="p2_2_si" ></td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_2_no" class="square-blue" value="p2_2_no"></td>
                           </tr> 
                           <tr>
                             <td style="text-align:center;">3</td>
                             <td class="defecto">¿Se realizó charla de 5 minutos (Planificación, riesgos y medidas de control)?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_3_si" class="square-blue" value="p2_3_si" ></td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_3_no" class="square-blue" value="p2_3_no"></td>
                           </tr> 
                           <tr>
                             <td style="text-align:center;">4</td>
                             <td class="defecto">¿Existe algún procedimiento o instructivo para realizar la tarea?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_4_si" class="square-blue" value="p2_4_si" ></td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_4_no" class="square-blue" value="p2_4_no"></td>
                           </tr> 
                           <tr>
                             <td style="text-align:center;">5</td>
                             <td class="defecto">¿El área de trabajo y su entorno se encuentra limpia, ordenada e iluminada?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_5_si" class="square-blue" value="p2_5_si" ></td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_5_no" class="square-blue" value="p2_5_no"></td>
                           </tr> 
                           <tr>
                             <td style="text-align:center;">6</td>
                             <td class="defecto">¿Existen trabajos simultáneos o cruzados en el área?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_6_si" class="square-blue" value="p2_6_si" ></td>
                             <td style="text-align:center;"><input type="checkbox"  name="p2[]" id="p2_6_no" class="square-blue" value="p2_6_no" ></td>
                           </tr>   
                           <tr class="defecto">
                             <td colspan="4" style="height:50px; margin-top: 0; padding-top: 0;">En caso de responder NO, indicar acciones implementadas antes de iniciar el trabajo:</td>
                           </tr>                               
                         </tbody>
                </table>                                                             
                <table width="100%">
                         <thead>
                           <tr>
                             <td class="superior">PASO 3</td>
                             <td class="superior">ANÁLISIS DE RIESGOS</td>
                           </tr>
                         </thead>               
                       </table>  
                       <table width="100%">
                        <tbody>
                          <tr class="centrar">
                            <td width="35%" height="60">Describa el paso a paso</td>
                            <td width="35%" height="60">Identificación de peligro (fuente, acto o condición con potencial de daño, lesión o enfermedad)</td>
                            <td>Medidas de Control Efectiva</td>                      
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_1"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_1"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_1"  class="form-control"></textarea></td>
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_2"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_2"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_2"  class="form-control"></textarea></td>
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_3"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_3"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_3"  class="form-control"></textarea></td>
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_4"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_4"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_4"  class="form-control"></textarea></td>
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_5"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_5"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_5"  class="form-control"></textarea></td>
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_6"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_6"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_6"  class="form-control"></textarea></td>
                          </tr>
                          <tr>
                            <td class="area"><textarea placeholder="Describa el paso a paso ..." name="describa_7"   class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Identifique el Peligro ..." name="identifique_7"  class="form-control"></textarea></td>
                            <td class="area"><textarea placeholder="Medidas de Control ..." name="medida_7"  class="form-control"></textarea></td>
                          </tr>  
                           <tr class="centrar">
                              <td colspan="3" height="30">Si no se ha implementado una medida de control, utilice la tarjeta PARE, reanude el trabajo cuando se implemente la medida de control faltante.</td>
                          </tr>                  
                        </tbody>                   
                        <tbody>
                         
                        </tbody>
                </table>                                             
                <table width="100%">
                         <thead>
                           <tr>
                             <td class="superior">PASO 4</td>
                             <td class="superior">VERIFICACIÓN CONTROLES CRÍTICOS</td>
                           </tr>
                         </thead>               
                       </table>  
                       <table width="100%">
                        <tbody>
                          <tr class="centrar">
                            <td rowspan="2" width="4%">N°</td>
                            <td rowspan="2" colspan="2">Peligro</td>
                            <td colspan="2" width="5%">Aplica</td>  
                            <td rowspan="2">Controles Críticos</td>                
                            <td colspan="2">Trabajador</td>
                            <td colspan="2">Supervisor</td>
                          </tr>
                          <tr class="centrar">                      
                            <td width="4%">SI</td>
                            <td width="4%">NO</td>                      
                            <td width="4%">SI</td>
                            <td width="4%">NO</td>
                            <td width="4%">SI</td>
                            <td width="4%">NO</td>
                          </tr>
                          <tr class="centrar">
                            <td rowspan="3">1</td>
                            <td rowspan="3" width="20%">CONDUCCIÓN</td>
                            <td rowspan="3" width="10%"><img src="'. URL .'public/dist/img/conduccion.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_1_si" class="square-blue" value="aplica_1_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_1_no" class="square-blue" value="aplica_1_no"></td>                   
                            <td>¿Se cuenta con licencia interna y municipal vigentes?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_1_1_si" class="square-blue" value="tra_1_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_1_1_no" class="square-blue" value="tra_1_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_1_1_si" class="square-blue" value="sup_1_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_1_1_no" class="square-blue" value="sup_1_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se realizó la lista de verificación del equipo antes de su uso ?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_1_2_si" class="square-blue" value="tra_1_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_1_2_no" class="square-blue" value="tra_1_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_1_2_si" class="square-blue" value="sup_1_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_1_2_no" class="square-blue" value="sup_1_2_no"></td>
                          </tr>
                          <tr class="centrar">
                             <td>¿Se cumple pauta de mantenimiento?</td>
                             <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_1_3_si" class="square-blue" value="tra_1_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_1_3_no" class="square-blue" value="tra_1_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_1_3_si" class="square-blue" value="sup_1_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_1_3_no" class="square-blue" value="sup_1_3_no"></td>
                          </tr>         
                          <tr class="centrar">
                            <td rowspan="4">2</td>
                            <td rowspan="4">TRABAJO EN ALTURA FÍSICA</td>
                            <td rowspan="4"><img src="'. URL .'public/dist/img/trabajo-altura.png" width="80"></td>
                            <td rowspan="4" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_2_si" class="square-blue" value="aplica_2_si" ></td>
                            <td rowspan="4" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_2_no" class="square-blue" value="aplica_2_no"></td>                 
                            <td>¿Se aisla área de trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_1_si" class="square-blue" value="tra_2_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_1_no" class="square-blue" value="tra_2_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_1_si" class="square-blue" value="sup_2_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_1_no" class="square-blue" value="sup_2_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con SPDC (Arnés, Línea de Vida, etc) revisado?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_2_si" class="square-blue" value="tra_2_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_2_no" class="square-blue" value="tra_2_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_2_si" class="square-blue" value="sup_2_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_2_no" class="square-blue" value="sup_2_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con grating, barandas en buen estado?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_3_si" class="square-blue" value="tra_2_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_3_no" class="square-blue" value="tra_2_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_3_si" class="square-blue" value="sup_2_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_3_no" class="square-blue" value="sup_2_3_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿El andamio presenta tarjeta verde?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_4_si" class="square-blue" value="tra_2_4_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_2_4_no" class="square-blue" value="tra_2_4_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_4_si" class="square-blue" value="sup_2_4_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_2_4_no" class="square-blue" value="sup_2_4_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td rowspan="3">3</td>
                            <td rowspan="3">TRABAJO EN ESPACIO CONFINADO</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/espacio-confinado.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_3_si" class="square-blue" value="aplica_3_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_3_no" class="square-blue" value="aplica_3_no"></td>                     
                            <td>¿Se aisla área de trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_3_1_si" class="square-blue" value="tra_3_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_3_1_no" class="square-blue" value="tra_3_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_3_1_si" class="square-blue" value="sup_3_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_3_1_no" class="square-blue" value="sup_3_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Permiso Especial de Trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_3_2_si" class="square-blue" value="tra_3_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_3_2_no" class="square-blue" value="tra_3_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_3_2_si" class="square-blue" value="sup_3_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_3_2_no" class="square-blue" value="sup_3_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se realiza medición de gases antes y dutrante la actividad?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_3_3_si" class="square-blue" value="tra_3_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_3_3_no" class="square-blue" value="tra_3_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_3_3_si" class="square-blue" value="sup_3_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_3_3_no" class="square-blue" value="sup_3_3_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td rowspan="3">4</td>
                            <td rowspan="3">ENERGÍAS</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/energias.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_4_si" class="square-blue" value="aplica_4_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_4_no" class="square-blue" value="aplica_4_no"></td>                       
                            <td>¿Se asegura estado de energía cero antes de la actividad?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_4_1_si" class="square-blue" value="tra_4_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_4_1_no" class="square-blue" value="tra_4_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_4_1_si" class="square-blue" value="sup_4_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_4_1_no" class="square-blue" value="sup_4_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con dispositivo personal de bloqueo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_4_2_si" class="square-blue" value="tra_4_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_4_2_no" class="square-blue" value="tra_4_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_4_2_si" class="square-blue" value="sup_4_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_4_2_no" class="square-blue" value="sup_4_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Permiso Especial de Trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_4_3_si" class="square-blue" value="tra_4_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_4_3_no" class="square-blue" value="tra_4_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_4_3_si" class="square-blue" value="sup_4_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_4_3_no" class="square-blue" value="sup_4_3_no"></td>
                          </tr>
                           <tr class="centrar">
                            <td rowspan="3">5</td>
                            <td rowspan="3">PARTES MÓVILES</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/partes-moviles.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_5_si" class="square-blue" value="aplica_5_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_5_no" class="square-blue" value="aplica_5_no"></td>                     
                            <td>¿Se cuenta con protecciones en partes móviles?</td>
                           <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_5_1_si" class="square-blue" value="tra_5_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_5_1_no" class="square-blue" value="tra_5_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_5_1_si" class="square-blue" value="sup_5_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_5_1_no" class="square-blue" value="sup_5_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se limita el acceso a personas?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_5_2_si" class="square-blue" value="tra_5_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_5_2_no" class="square-blue" value="tra_5_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_5_2_si" class="square-blue" value="sup_5_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_5_2_no" class="square-blue" value="sup_5_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se encuentran operativas las paradas de emergencia?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_5_3_si" class="square-blue" value="tra_5_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_5_3_no" class="square-blue" value="tra_5_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_5_3_si" class="square-blue" value="sup_5_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_5_3_no" class="square-blue" value="sup_5_3_no"></td>
                          </tr>
                           <tr class="centrar">
                            <td rowspan="3">6</td>
                            <td rowspan="3">TRABAJOS SIMULTÁNEOS</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/trabajo-simultaneo.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_6_si" class="square-blue" value="aplica_6_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_6_no" class="square-blue" value="aplica_6_no"></td>                      
                            <td>¿Se identifican las actividades simultaneas que se realizarán?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_6_1_si" class="square-blue" value="tra_6_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_6_1_no" class="square-blue" value="tra_6_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_6_1_si" class="square-blue" value="sup_6_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_6_1_no" class="square-blue" value="sup_6_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Líder de Coordinación?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_6_2_si" class="square-blue" value="tra_6_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_6_2_no" class="square-blue" value="tra_6_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_6_2_si" class="square-blue" value="sup_6_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_6_2_no" class="square-blue" value="sup_6_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Permiso Especial de Trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_6_3_si" class="square-blue" value="tra_6_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_6_3_no" class="square-blue" value="tra_6_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_6_3_si" class="square-blue" value="sup_6_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_6_3_no" class="square-blue" value="sup_6_3_no"></td>
                          </tr>
                           <tr class="centrar">
                            <td rowspan="3">7</td>
                            <td rowspan="3">EMERGENCIAS</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/emergencias.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_7_si" class="square-blue" value="aplica_7_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_7_no" class="square-blue" value="aplica_7_no"></td>                     
                            <td>¿Se conoce plan de emergencias del área?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_7_1_si" class="square-blue" value="tra_7_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_7_1_no" class="square-blue" value="tra_7_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_7_1_si" class="square-blue" value="sup_7_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_7_1_no" class="square-blue" value="sup_7_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con equipos para el control de emergencias?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_7_2_si" class="square-blue" value="tra_7_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_7_2_no" class="square-blue" value="tra_7_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_7_2_si" class="square-blue" value="sup_7_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_7_2_no" class="square-blue" value="sup_7_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿El equipo de control posee mantenimiento?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_7_3_si" class="square-blue" value="tra_7_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_7_3_no" class="square-blue" value="tra_7_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_7_3_si" class="square-blue" value="sup_7_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_7_3_no" class="square-blue" value="sup_7_3_no"></td>
                          </tr>
                           <tr class="centrar">
                            <td rowspan="3">8</td>
                            <td rowspan="3">SUSTANCIAS PELIGROSAS</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/sustancias-peligrosas.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_8_si" class="square-blue" value="aplica_8_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_8_no" class="square-blue" value="aplica_8_no"></td>                     
                            <td>¿Se cuenta con Hoja de Datos de Seguridad (HDS) ?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_8_1_si" class="square-blue" value="tra_8_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_8_1_no" class="square-blue" value="tra_8_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_8_1_si" class="square-blue" value="sup_8_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_8_1_no" class="square-blue" value="sup_8_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con equipos para el control de emergencias?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_8_2_si" class="square-blue" value="tra_8_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_8_2_no" class="square-blue" value="tra_8_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_8_2_si" class="square-blue" value="sup_8_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_8_2_no" class="square-blue" value="sup_8_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿El equipo de control posee mantenimiento?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_8_3_si" class="square-blue" value="tra_8_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_8_3_no" class="square-blue" value="tra_8_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_8_3_si" class="square-blue" value="sup_8_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_8_3_no" class="square-blue" value="sup_8_3_no"></td>
                          </tr>
                           <tr class="centrar">
                            <td rowspan="3">9</td>
                            <td rowspan="3">CARGA SUSPENDIDA</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/carga-suspendida.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_9_si" class="square-blue" value="aplica_9_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_9_no" class="square-blue" value="aplica_9_no"></td>                    
                            <td>¿Se aisla área de trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_9_1_si" class="square-blue" value="tra_9_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_9_1_no" class="square-blue" value="tra_9_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_9_1_si" class="square-blue" value="sup_9_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_9_1_no" class="square-blue" value="sup_9_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con revisión de elementos de izaje?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_9_2_si" class="square-blue" value="tra_9_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_9_2_no" class="square-blue" value="tra_9_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_9_2_si" class="square-blue" value="sup_9_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_9_2_no" class="square-blue" value="sup_9_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con procedimiento específico para la maniobra?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_9_3_si" class="square-blue" value="tra_9_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_9_3_no" class="square-blue" value="tra_9_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_9_3_si" class="square-blue" value="sup_9_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_9_3_no" class="square-blue" value="sup_9_3_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td rowspan="3">10</td>
                            <td rowspan="3">TRABAJO EN CALIENTE</td>
                            <td rowspan="3"><img src="'. URL .'public/dist/img/trabajo-caliente.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_10_si" class="square-blue" value="aplica_10_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_10_no" class="square-blue" value="aplica_10_no"></td>                      
                            <td>¿Se aisla área de trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_10_1_si" class="square-blue" value="tra_10_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_10_1_no" class="square-blue" value="tra_10_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_10_1_si" class="square-blue" value="sup_10_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_10_1_no" class="square-blue" value="sup_10_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con equipos inspeccionados y en buen estado?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_10_2_si" class="square-blue" value="tra_10_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_10_2_no" class="square-blue" value="tra_10_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_10_2_si" class="square-blue" value="sup_10_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_10_2_no" class="square-blue" value="sup_10_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Permiso Especial de Trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_10_3_si" class="square-blue" value="tra_10_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_10_3_no" class="square-blue" value="tra_10_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_10_3_si" class="square-blue" value="sup_10_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_10_3_no" class="square-blue" value="sup_10_3_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td rowspan="3">11</td>
                            <td rowspan="3">EXCAVACIONES</td>
                            <td rowspan="3"><img src="'. URL.'public/dist/img/excavaciones.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_11_si" class="square-blue" value="aplica_11_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_11_no" class="square-blue" value="aplica_11_no"></td>                     
                            <td>¿Se aisla área de trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_11_1_si" class="square-blue" value="tra_11_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_11_1_no" class="square-blue" value="tra_11_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_11_1_si" class="square-blue" value="sup_11_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_11_1_no" class="square-blue" value="sup_11_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con procedimiento específico para la actividad?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_11_2_si" class="square-blue" value="tra_11_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_11_2_no" class="square-blue" value="tra_11_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_11_2_si" class="square-blue" value="sup_11_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_11_2_no" class="square-blue" value="sup_11_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Permiso Especial de Trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_11_3_si" class="square-blue" value="tra_11_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_11_3_no" class="square-blue" value="tra_11_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_11_3_si" class="square-blue" value="sup_11_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_11_3_no" class="square-blue" value="sup_11_3_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td rowspan="3">12</td>
                            <td rowspan="3">LINEAS ENERGIZADAS</td>
                            <td rowspan="3"><img src="'.URL.'public/dist/img/linea-energizada.png" width="80"></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_12_si" class="square-blue" value="aplica_12_si" ></td>
                            <td rowspan="3" style="text-align:center;"><input type="checkbox"  name="p4[]" id="aplica_12_no" class="square-blue" value="aplica_12_no"></td>                     
                            <td>¿Se identifica en terreno la línea energizada?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_12_1_si" class="square-blue" value="tra_12_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_12_1_no" class="square-blue" value="tra_12_1_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_12_1_si" class="square-blue" value="sup_12_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_12_1_no" class="square-blue" value="sup_12_1_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con procedimiento específico para la actividad?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_12_2_si" class="square-blue" value="tra_12_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_12_2_no" class="square-blue" value="tra_12_2_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_12_2_si" class="square-blue" value="sup_12_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_12_2_no" class="square-blue" value="sup_12_2_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td>¿Se cuenta con Permiso Especial de Trabajo?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_12_3_si" class="square-blue" value="tra_12_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="tra_12_3_no" class="square-blue" value="tra_12_3_no"></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_12_3_si" class="square-blue" value="sup_12_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p4[]" id="sup_12_3_no" class="square-blue" value="sup_12_3_no"></td>
                          </tr>
                          <tr class="centrar">
                            <td colspan="10" height="30">Si alguna respuesta es NO, utilice la tarjeta <b>PARE</b>, reanude el trabajo cuando se implemente la medida de control faltante.</td>
                          </tr>
                        </tbody>                                     
                </table>                                                          
                <table width="100%">
                       <thead>
                         <tr>
                           <td class="superior">PASO 5</td>
                           <td class="superior">PERMISOS ESPECIALES DE TRABAJO</td>
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
                <table width="100%">
                       <thead>
                         <tr>
                           <td class="superior">PASO 6</td>
                           <td class="superior">REGISTRO DE TRABAJADORES</td>
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
                             <td><div name="nombre_1"></div></td>
                             <td id="p6_1_firma"></td>
                           </tr>  
                           <tr class="centrar">
                             <td height="50">2</td>
                             <td><div name="nombre_2"></div></td>
                             <td id="p6_2_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">3</td>
                             <td><div name="nombre_3"></div></td>
                             <td id="p6_3_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">4</td>
                             <td><div name="nombre_4"></div></td>
                             <td id="p6_4_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">5</td>
                             <td><div name="nombre_5"></div></td>
                             <td id="p6_5_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">6</td>
                             <td><div name="nombre_6"></div></td>
                             <td id="p6_6_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">7</td>
                             <td><div name="nombre_7"></div></td>
                             <td id="p6_7_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">8</td>
                             <td><div name="nombre_8"></div></td>
                             <td id="p6_8_firma"></td>
                           </tr> 
                           <tr class="centrar">
                             <td height="50">9</td>
                             <td><div name="nombre_9"></div></td>
                             <td id="p6_9_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">10</td>
                             <td><div name="nombre_10"></div></td>
                             <td id="p6_10_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">11</td>
                             <td><div name="nombre_11"></div></td>
                             <td id="p6_11_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">12</td>
                             <td><div name="nombre_12"></div></td>
                             <td id="p6_12_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">13</td>
                             <td><div name="nombre_13"></div></td>
                             <td id="p6_13_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">14</td>
                             <td><div name="nombre_14"></div></td>
                             <td id="p6_14_firma"></td>
                           </tr>
                           <tr class="centrar">
                             <td height="50">15</td>
                             <td><div name="nombre_15"></div></td>
                             <td id="p6_15_firma"></td>
                           </tr>                  
                         </tbody>
                </table>                                                           
                <table width="100%">
                       <thead>
                         <tr>
                           <td class="superior">PASO 7</td>
                           <td class="superior">REVISIÓN Y APROBACIÓN</td>
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
                            <td height="100" ><div name="p7_nombre" id="p7_nombre"></div></td>
                            <td id="p7_firma"></td>
                          </tr>  
                         </tbody>
                </table>                                                                   
                <table width="100%">
                       <thead>
                         <tr>
                           <td class="superior">PASO 8</td>
                           <td class="superior">VALIDACIÓN DE ART</td>
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
                            <td style="text-align:center;">1</td>
                            <td style="padding-left: 10px;">¿Se revisó y analizó el ART actual?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_1_si" class="square-blue" value="p8_1_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_1_no" class="square-blue" value="p8_1_no" ></td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">2</td>
                            <td style="padding-left: 10px;">¿Se revisó y analizó los PET?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_2_si" class="square-blue" value="p8_2_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_2_no" class="square-blue" value="p8_2_no" ></td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">3</td>
                            <td style="padding-left: 10px;">¿Las condiciones presentes han sufrido cambios?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_3_si" class="square-blue" value="p8_3_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_3_no" class="square-blue" value="p8_3_no" ></td>
                          </tr>
                          <tr>
                            <td style="text-align: center;">4</td>
                            <td style="padding-left: 10px;">¿Requiere realizar un nuevo ART?</td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_4_si" class="square-blue" value="p8_4_si" ></td>
                            <td style="text-align:center;"><input type="checkbox"  name="p8[]" id="p8_4_no" class="square-blue" value="p8_4_no" ></td>
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
          <div class="col-sm-3 col-sm-offset-4">            
          </div>
        </div>        
      </div>
         </section>		
         ';


$mpdf = new mPDF('c','A4'); 
$mpdf->writeHTML($html);
$nombre = 'documentos/art/art-'.date('dmYHi').'.pdf';
$fecha = date('Y-m-d H:i:s');
$pdf = $mpdf->output($nombre ,'F');
$id = $_SESSION['id_user'];
 $conexion = new Conect();
 $conexion->consulta("INSERT INTO form(ID_USER,PATH_FORM,FECHA_FORM)VALUES(".$id.",'".$nombre."','".$fecha."')");

?>