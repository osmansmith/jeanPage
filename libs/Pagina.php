<?php
Class Pagina{

    public function __construct(){

    }

    public function Head($titulo, $externo, $interno)
    {
      ?>
      <!DOCTYPE html>
      <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title><?php echo $titulo;?></title>
            <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
            <link rel="stylesheet" href="<?php echo URL?>public/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?php echo URL?>public/fontawesome/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="<?php echo URL?>public/css/home.css">    
            <?php echo $externo;?>            
            <?php echo '<style>'.$interno.'</style>';?>            
        </head>
        <body>
      <?php
    }

    public function Header()
    {
        ?>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light  bg-light">                        
                <div class="collapse navbar-collapse navbarText" id="navbarText">
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item active px-3">
                          <a class="nav-link text-primary" href="#"><i class="fas fa-mobile-alt fa-lg"></i><strong> +569 666 666 666</strong> </a>
                        </li>
                    <li class="nav-item active px-3">
                      <a class="nav-link" href="<?php echo URL?>rutas/pagina/maestra"><small>Ayuda y soporte</small></a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#"><small>Despacho</small></a>
                    </li>
                    <li class="nav-item px-3">
                      <a class="nav-link" href="#"><small>Contacto y ubicación</small></a>
                    </li>
                    <li class="nav-item pl-3">
                      <a class="nav-link" href="#" style="color:blue;"><small>Ingresar</small></a>
                    </li>
                    <li class="nav-item active px-2">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart fa-lg"></i></a>
                      </li>
                      <li class="nav-item active">
                          <a class="nav-link text-info" href="#"><i class="fab fa-twitter fa-lg" ></i></a>
                      </li>
                      <li class="nav-item active pr-2">
                          <a class="nav-link text-primary" href="#"><i class="fab fa-facebook-square fa-lg"></i></a>
                        </li>
                      <li class="nav-item my-auto mx-auto">
                          <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder=" Buscar .." aria-label=" Buscar .." aria-describedby="basic-addon2">
                              <div class="input-group-append">
                                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                              </div>
                            </div>
                      </li>
                  </ul>                          
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light  bg-light">                        
                        <div class="collapse navbar-collapse navbarText" id="navbarText">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item active px-3">
                              <a class="nav-link" href="#"><strong>Diseño Profesional <span class="sr-only">(current)</span></strong></a>
                            </li>
                            <li class="nav-item px-3">
                              <a class="nav-link" href="#"><strong>Quienes Somos</strong></a>
                            </li>
                            <li class="nav-item px-3">
                              <a class="nav-link" href="#"><strong>Plataforma empresa</strong></a>
                            </li>
                            <li class="nav-item px-3">
                              <a class="nav-link" href="#"><strong>Diseños Gratuitos</strong></a>
                            </li>
                            <li class="nav-item px-3">
                              <a class="nav-link" href="#"><strong>Cotiza Aquí</strong></a>
                            </li>
                          </ul>                          
                        </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary principal">
                <a class="navbar-brand icono" href="#"><i class="fas fa-calculator fa-lg"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbarText" id="navbarText">
                  <ul class="navbar-nav mx-auto">
                    <li class="dropdown mega-dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Tarjeta de visita <span class="glyphicon glyphicon-chevron-down float-right"></span></a>
                     <div class="">
                      <ul class="dropdown-menu mega-dropdown-menu">
                        <div class="row">
                        <li class="col-sm-3">
                          <ul>
                            <li class="dropdown-header text-left">Nuevos Productos</li>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <a href="#"><img src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 1"></a>
                                  <h4 class="text-muted"><small>Gigantografia</small></h4>
                                  <button class="btn btn-primary" type="button">25.000 $</button>
                                  <button href="#" class="btn btn-default" type="button"><i class="fas fa-heart"></i> Agregar a la lista</button>
                                </div>
                                <!-- End Item -->
                                <div class="carousel-item">
                                  <a href="#"><img src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 2"></a>
                                  <h4 class="text-muted"><small>Esquelas</small></h4>
                                  <button class="btn btn-primary" type="button">48.500 $</button>
                                  <button href="#" class="btn btn-default" type="button"><i class="fas fa-heart"></i> Agregar a la lista</button>
                                </div>
                                <!-- End Item -->
                                <div class="carousel-item">
                                  <a href="#"><img src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection" class="img-responsive" alt="product 3"></a>
                                  <h4 class="text-muted"><small>Estampado</small></h4>
                                  <button class="btn btn-primary" type="button">17.999 $</button>
                                  <button href="#" class="btn btn-default" type="button"><i class="fas fa-heart"></i> Agregar a la lista</button>
                                </div>
                                <!-- End Item -->
                              </div>
                              <!-- End Carousel Inner -->
                            </div>
                            <!-- /.carousel -->
                            <li class="dropdown-divider "></li>
                            <li><a href="#">Ver todos los productos <i class="fas fa-chevron-right float-right"></i></a></li>
                          </ul>
                        </li>                        
                        <li class="col-sm-3">
                          <ul>
                            <li class="dropdown-header">Dresses</li>
                            <li><a href="#">Unique Features</a></li>
                            <li><a href="#">Image Responsive</a></li>
                            <li><a href="#">Auto Carousel</a></li>
                            <li><a href="#">Newsletter Form</a></li>
                            <li><a href="#">Four columns</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Tops</li>
                            <li><a href="#">Good Typography</a></li>
                          </ul>
                        </li>
                        <li class="col-sm-3">
                          <ul>
                            <li class="dropdown-header">Jackets</li>
                            <li><a href="#">Easy to customize</a></li>
                            <li><a href="#">Glyphicons</a></li>
                            <li><a href="#">Pull Right Elements</a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Pants</li>
                            <li><a href="#">Coloured Headers</a></li>
                            <li><a href="#">Primary Buttons & Default</a></li>
                            <li><a href="#">Calls to action</a></li>
                          </ul>
                        </li>
                        <li class="col-sm-3">
                          <ul>
                            <li class="dropdown-header">Accessories</li>
                            <li><a href="#">Default Navbar</a></li>
                            <li><a href="#">Lovely Fonts</a></li>
                            <li><a href="#">Responsive Dropdown </a></li>
                            <li class="divider"></li>
                            <li class="dropdown-header">Newsletter</li>
                            <form class="form" role="form">
                              <div class="form-group">
                                <label class="sr-only" for="email">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email">
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                            </form>
                          </ul>
                        </li>
                      </div>
                      </ul>
                    </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Materiales de marketing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Gráfica publicitaria</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Servicios y Terminaciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Impresión y piloteo</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Regalos</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="#">Todos los Productos</a>
                    </li>
                  </ul>                  
                </div>
            </nav>
        </header>
        <?php
    }

    public function Seccion()
    {
     ?>
      <section class="testimonio">        			
          <div class="container">
            <div class="row">
              <div class="col-md-8 offset-md-2">
                        <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>                
                  <div id="fade-quote-carousel" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                        <li data-target="#fade-quote-carousel" data-slide-to="5"></li>                        
                      </ol>
                  
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <h3 class="title text-center text-muted">Lorem, ipsum.</h3>                     
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                      </blockquote>	
                    </div>
                    <div class="carousel-item">                                
                                <h3 class="title text-center text-muted">Lorem, ipsum.</h3>
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                      </blockquote>
                    </div>
                    <div class="carousel-item">
                        <h3 class="title text-center text-muted">Lorem, ipsum.</h3>
                      <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                      </blockquote>
                    </div>
                            <div class="carousel-item">
                                <h3 class="title text-center text-muted">Lorem, ipsum.</h3>
                        <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                      </blockquote>
                    </div>
                            <div class="carousel-item">
                                <h3 class="title text-center text-muted">Lorem, ipsum.</h3>
                        <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                      </blockquote>
                    </div>
                            <div class="carousel-item">
                                <h3 class="title text-center text-muted">Lorem, ipsum.</h3>
                        <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                      </blockquote>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#fade-quote-carousel" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#fade-quote-carousel" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
              </div>							
            </div>
          </div>
        </section>
        <div class="container">            
           <div class="dropdown-divider"></div>        
      </div>
      <section class="logos text-center">
      <!-- <div class="row justify-content-center">
      <div class="col-4"> -->
      <img src="<?php echo URL?>public/img/logos_pago.jpg" alt="" class="img-responsive d-line px-3" >
      <img src="<?php echo URL?>public/img/logo_chilexpress.jpg" alt="" class=" img-responsive d-line px-3">
      <!-- </div>
      </div> -->
      </section>
        <div class="container">            
            <div class="dropdown-divider"></div>        
        </div>

      <section class="menu2">
        <nav class="navbar navbar-expand-lg navbar-light  bg-light">                        
            <div class="collapse navbar-collapse navbarText" id="navbarText">
              <ul class="navbar-nav mx-auto">
                  <li class="nav-item active px-3">
                      <a class="nav-link text-primary" href="#"><i class="fas fa-mobile-alt fa-lg"></i><strong> +569 666 666 666</strong> </a>
                    </li>
                <li class="nav-item active px-3">
                  <a class="nav-link" href="#"><small>Contacto y ubicación</small></a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="#"><small>Ayuda y soporte</small></a>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="#"><small>Quienes Somos</small></a>
                </li>
                <li class="nav-item active px-3">
                    <a class="nav-link" href="#"><small>Arma Online</small></a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#"><small>Plataforma Empresa</small></a>
                  </li>
                  <li class="nav-item px-3">
                    <a class="nav-link" href="#"><small>Política de cambio y devoluciones</small></a>
                  </li>
              </ul>                          
            </div>
        </nav>
       </section>
        <?php
    }

    public function footer($script)
    {
        ?>            
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
     <script src="<?php echo URL?>public/js/jquery-3.2.1.slim.min.js" ></script>
     <script>
       jQuery(document).on('click', '.mega-dropdown', function(e) {
        e.stopPropagation()
        })
      
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
        $(".productos .card").hover(function(){
        var aidi = $( this ).attr("id");
        // $("#"+aidi+"").addClass("shadow-lg");
        $("#"+aidi+"").addClass( "sombras" );
        $("#"+aidi+" .mascara").css( "display","block" );
        
        }, function() {
            var aidi = $( this ).attr("id");
            $("#"+aidi+"").removeClass( "sombras" );
            $("#"+aidi+" .mascara").css( "display","none" );
        
        });
     </script>
        <script src="<?php echo URL?>public/js/popper.min.js" ></script>
        <script src="<?php echo URL?>public/js/bootstrap.min.js" ></script>
        <?php echo $script?>
        <?php
    }









}




?>