  <?php 
   URL.'index/clase/Pagina';
   $pag = new Pagina();
  //  parametros de Head() titulo,css externo, css interno
   $pag->Head('Inicio | Jean Page','','
   .presentacion{
    margin: 10% 0;
  }
  .contenido{
    padding: 10% 0;
  }
  .productos{
    padding: 5% 0;
    /* margin: 10% 0 10% 0; */
  }
  .presentacion .card{
    border:none;
  }
  .productos .card{
    margin: 3% 0;
  }
  .logos, .menu2{
    padding: 3% 0;
  }
   ');
  $pag->Header();?>    
  
    <div class="slider">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo URL?>public/img/img2.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>public/img/img6.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo URL?>public/img/img5-2.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
            </div>
    </div>

    <section class="presentacion">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                  
                  <h2 class="card-title" style="color:#007bff">
                      <span class="fa-stack fa-2x">
                          <i class="fas fa-circle fa-stack-2x"></i>
                          <i class="fas fa-calculator fa-stack-1x fa-inverse"></i>
                      </span>                     
                    </h2>
                    <h2 class="card-title">Lorem ipsum</h2>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat, fugiat!</p>
                  <a href="#" class="btn btn-outline-primary btn-lg">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title" style="color:#007bff">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-truck-moving fa-stack-1x fa-inverse"></i>
                          </span>
                      </h2>
                      <h2 class="card-title">Lorem ipsum</h2>
                  <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, velit.</p>
                  <a href="#" class="btn btn-outline-primary btn-lg">Ver Más</a>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="card text-center">
                <div class="card-body">
                    <h2 class="card-title" style="color:#007bff">
                        <span class="fa-stack fa-2x">
                            <i class="fas fa-circle fa-stack-2x"></i>
                            <i class="fas fa-paint-brush fa-stack-1x fa-inverse"></i>
                          </span>
                      </h2>
                      <h2 class="card-title">Lorem ipsum</h2>
                  <p class="card-text text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident, neque!</p>
                  <a href="#" class="btn btn-outline-primary btn-lg">Ver Más</a>
                </div>
              </div>
            </div>
          </div>      
        </div>
    </section>

    <section class="productos bg-light">
       <div class="container">
        <h2 class="display-4 text-center text-success mb-5">Productos Destacados</h2>
        <div class="row">
          <div class="col-3">
              <div class="card">
                  <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Lorem, ipsum.</h5>                                        
                    </div>
                </div>
          </div>
          <div class="col-3">
              <div class="card">
                  <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                  <div class="card-body">
                      <h5 class="card-title text-center">Lorem, ipsum.</h5>
                  </div>
                </div>
          </div>
          <div class="col-3">
              <div class="card">
                  <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Lorem, ipsum.</h5>
                  </div>
                </div>
          </div>
          <div class="col-3">
              <div class="card">
                  <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Lorem, ipsum.</h5>
                  </div>
                </div>
          </div>       
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Lorem, ipsum.</h5>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Lorem, ipsum.</h5>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Lorem, ipsum.</h5>
                    </div>
                  </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Lorem, ipsum.</h5>
                    </div>
                  </div>
            </div>
          </div>
       </div>
    </section>
<?php $pag->Seccion();
      $pag->footer('');?>      
        
    
    
 