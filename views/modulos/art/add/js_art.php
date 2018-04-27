<script>
$('textarea').each(function () {
  this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
}).on('input', function () {
  this.style.height = 'auto';
  this.style.height = (this.scrollHeight) + 'px';
});
function cheqs(id){
   $(id+'_si').on('ifToggled', function(){ 

     $(id+'_no').on('ifChecked', function(){ $(id+'_si').iCheck('uncheck'); });
     $(id+'_si').on('ifChecked', function(){ $(id+'_no').iCheck('uncheck'); });  
     $(id+'_si').on('ifUnchecked', function(){ $(id+'_no').iCheck('check'); });
     $(id+'_no').on('ifUnchecked', function(){ $(id+'_si').iCheck('check'); }); 
   });
   $(id+'_no').on('ifToggled', function(){ 
     $(id+'_no').on('ifChecked', function(){ $(id+'_si').iCheck('uncheck'); });
     $(id+'_si').on('ifChecked', function(){ $(id+'_no').iCheck('uncheck'); });  
     $(id+'_si').on('ifUnchecked', function(){ $(id+'_no').iCheck('check'); });
     $(id+'_no').on('ifUnchecked', function(){ $(id+'_si').iCheck('check'); }); 

   });     
}
// checkboks paso 1

    cheqs('#p1_rut');

// chechboxs paso 2 '#p2_1'

    cheqs('#p2_1');
    cheqs('#p2_2');
    cheqs('#p2_3');
    cheqs('#p2_4');
    cheqs('#p2_5');
    cheqs('#p2_6');

// checkboxs paso 4 aplica 

    cheqs('#aplica_1');
    cheqs('#aplica_2');
    cheqs('#aplica_3');
    cheqs('#aplica_4');
    cheqs('#aplica_5');
    cheqs('#aplica_6');
    cheqs('#aplica_7');
    cheqs('#aplica_8');
    cheqs('#aplica_9');
    cheqs('#aplica_10');
    cheqs('#aplica_11');
    cheqs('#aplica_12');

// checkboxs paso 4 tra Y sup

    cheqs('#tra_1_1'); cheqs('#sup_1_1');
    cheqs('#tra_1_2'); cheqs('#sup_1_2');
    cheqs('#tra_1_3'); cheqs('#sup_1_3');
    cheqs('#tra_2_1'); cheqs('#sup_2_1');
    cheqs('#tra_2_2'); cheqs('#sup_2_2');
    cheqs('#tra_2_3'); cheqs('#sup_2_3');
    cheqs('#tra_2_4'); cheqs('#sup_2_4');
    cheqs('#tra_3_1'); cheqs('#sup_3_1');
    cheqs('#tra_3_2'); cheqs('#sup_3_2'); 
    cheqs('#tra_3_3'); cheqs('#sup_3_3');
    cheqs('#tra_4_1'); cheqs('#sup_4_1');
    cheqs('#tra_4_2'); cheqs('#sup_4_2');
    cheqs('#tra_4_3'); cheqs('#sup_4_3');
    cheqs('#tra_5_1'); cheqs('#sup_5_1');
    cheqs('#tra_5_2'); cheqs('#sup_5_2');
    cheqs('#tra_5_3'); cheqs('#sup_5_3');
    cheqs('#tra_6_1'); cheqs('#sup_6_1');
    cheqs('#tra_6_2'); cheqs('#sup_6_2');
    cheqs('#tra_6_3'); cheqs('#sup_6_3');
    cheqs('#tra_7_1'); cheqs('#sup_7_1');
    cheqs('#tra_7_2'); cheqs('#sup_7_2');
    cheqs('#tra_7_3'); cheqs('#sup_7_3');
    cheqs('#tra_8_1'); cheqs('#sup_8_1');
    cheqs('#tra_8_2'); cheqs('#sup_8_2');
    cheqs('#tra_8_3'); cheqs('#sup_8_3');
    cheqs('#tra_9_1'); cheqs('#sup_9_1');
    cheqs('#tra_9_2'); cheqs('#sup_9_2');
    cheqs('#tra_9_3'); cheqs('#sup_9_3');
    cheqs('#tra_10_1'); cheqs('#sup_10_1');
    cheqs('#tra_10_2'); cheqs('#sup_10_2');
    cheqs('#tra_10_3'); cheqs('#sup_10_3');
    cheqs('#tra_11_1'); cheqs('#sup_11_1');
    cheqs('#tra_11_2'); cheqs('#sup_11_2');
    cheqs('#tra_11_3'); cheqs('#sup_11_3');
    cheqs('#tra_12_1'); cheqs('#sup_12_1');
    cheqs('#tra_12_2'); cheqs('#sup_12_2');
    cheqs('#tra_12_3'); cheqs('#sup_12_3');

// checkboxs paso 8 

    cheqs('#p8_1');
    cheqs('#p8_2');
    cheqs('#p8_3');
    cheqs('#p8_4');
  

function popup_firma(id,target)
{
    $("#" +id+ "_firma").click(function(){
    window.location="#signature-pad-"+id;     
    });
    $("#cerrar-"+id).click(function(){   
         window.location = target;
    });
}
 
popup_firma("p7","#paso7");
popup_firma("p6_1","#paso6");
popup_firma("p6_2","#paso6");
popup_firma("p6_3","#paso6");
popup_firma("p6_4","#paso6");
popup_firma("p6_5","#paso6");
popup_firma("p6_6","#paso6");
popup_firma("p6_7","#paso6");
popup_firma("p6_8","#paso6");
popup_firma("p6_9","#paso6");
popup_firma("p6_10","#paso6");
popup_firma("p6_11","#paso6");
popup_firma("p6_12","#paso6");
popup_firma("p6_13","#paso6");
popup_firma("p6_14","#paso6");
popup_firma("p6_15","#paso6");
popup_firma("p8_1","#paso8");
popup_firma("p8_2","#paso8");
popup_firma("p8_3","#paso8");
popup_firma("p8_4","#paso8");
popup_firma("p8_5","#paso8");
popup_firma("p8_6","#paso8");
popup_firma("p8_7","#paso8");


$("#enviar").click(function(e){
  e.preventDefault();
  var str = $( "#art" ).serialize();
     $.ajax({
           type : 'POST',
                  url  :  '<?php echo URL?>index/pdf',
                  data : str,                  
                  datatype : 'json',
                  success : function(data)
                 {              
                // $("body").html(data);         
                alert('art registrado con exito');
                 }
     });
    return false;
});
$("#enviar_art").click(function(){
    $('#myModal').modal('show');
});


</script>