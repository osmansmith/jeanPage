<footer class="bg-primary w-100 h-100 text-center " style="padding:3% 0; height: 120px;">
       <div class="container ">
          <div class="row text-light">
              <div class="col-4"><small>DIRECCIÓN: Las Urbinas #53 Local 69 / Coquimbo, Chile.</small></div>
              <div class="col-4"><small>EMAIL: ventas@lorem.cl</small></div>
              <div class="col-4"><small>TELÉFONO: +56 666 66 66</small></div>
            </div>
            <div class="row text-light pt-3">
              <div class="col-12"><small>HORARIO DE ATENCIÓN: Lunes a viernes de 9:00 a 19:00 hrs. continuado, excepto festivos.</small></div>
            </div>
       </div>
       
     </footer>
<script src="js/jquery-3.2.1.slim.min.js" ></script>
    <script>
      jQuery(document).on('click', '.mega-dropdown', function(e) {
  e.stopPropagation()
})
      // $(document).ready(function() {      
      //  $(window).scroll(function(event) {
      //      var scroll = $(window).scrollTop();          
      //      if(scroll > 45){           
      //         $(".navbar").addClass("fixed-top")
      //                     .fadeIn(1000)
      //                     ;
      //      }else{
      //       $(".navbar").removeClass("fixed-top");              
      //      }
      //  });
      //  });
      var cbpAnimatedHeader = (function() {
        $(".icono").css("display","none");
var docElem = document.documentElement,
  header = document.querySelector( '.navbar' ),
  didScroll = false,
  changeHeaderOn = 47;

function init() {
  window.addEventListener( 'scroll', function( event ) {
    if( !didScroll ) {
      didScroll = true;
      setTimeout( scrollPage, 250 );
    }
  }, false );
}

function scrollPage() {
  var sy = scrollY();
  if ( sy >= changeHeaderOn ) {
    $(".principal").addClass("fixed-top");
    // $(".navbar-nav").removeClass("mx-auto");
    // $(".navbar-nav").addClass("ml-auto");
    // $(".icono").css("display","block");
  }
  else {
    // $(".icono").css("display","none");
    $(".principal").removeClass("fixed-top");
    // $(".navbar-nav").removeClass("ml-auto");
    // $(".navbar-nav").addClass("mx-auto");
  }
  didScroll = false;
}
function scrollY() {
  return window.pageYOffset || docElem.scrollTop;
}
init();
})();
     </script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js" ></script>
<!-- <script>
 $(".select2").select2();
	   $('input[type="checkbox"].flat-green').iCheck({
      checkboxClass: 'icheckbox_flat-green'      
    });
      $('input[type="checkbox"].flat-blue').iCheck({
      checkboxClass: 'icheckbox_flat-blue'      
    });
      $('input[type="checkbox"].square-blue').iCheck({
      checkboxClass: 'icheckbox_square-blue'      
    });


 var actual=window.location.href;
 var base="<?php echo URL?>";
 var url = ["acceso/index","modulo/user/registra","modulo/user/lista","modulo/art/registrar"];
 var id = ["escritorio","user","user","art-registrar"];

  
 for (var i = 0; i <url.length ; i++) {
      if(actual == base+url[i])
    {
      $('.sidebar-menu li').removeClass('active');
      $('#'+ id[i] +'').addClass('active');   
    }
    if (actual == base+"modulo/user/registra") {
      $('.sidebar-menu li').removeClass('active');
      $('#user').addClass('active'); 
      $('#user-registrar').addClass('active');      
    }else if(actual == base+"modulo/user/lista")
    {
      $('.sidebar-menu li').removeClass('active');
       $('#user').addClass('active'); 
      $('#user-listar').addClass('active'); 
    }else  if (actual == base+"modulo/art/registrar") {
      $('.sidebar-menu li').removeClass('active');
      $('#art').addClass('active'); 
      $('#art-registrar').addClass('active');      
    } 
  }
    
</script> -->
