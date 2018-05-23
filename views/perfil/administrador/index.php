
    
 
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

   <style>
   /*Estilos Base*/
.mascara{
  display:none;
}
.productos #uno {
width: 300px;
height: 200px;
float: left;
overflow: hidden;
position: relative;
text-align: center;
cursor: default;
background: #fff;
}
.productos #uno .card-body .mascara:hover{
  display : block;
}
.productos #uno .card-body .mascara,.productos #uno .card-body{
width: 300px;
height: 200px;
position: absolute;
overflow: hidden;
top: 0;
left: 0
}
.productos #uno .card-body img {
display: block;
position: relative;

}
.productos #uno .card-body h2 {
text-transform: uppercase;
color: #fff;
text-align: center;
position: relative;
font-size: 17px;
padding: 10px;
background: rgba(0, 0, 0, 0.9);
margin: 20px 0 0 0
}
.productos #uno .card-body p {
font-size: 12px;
position: relative;
color: #fff;
padding: 10px 20px 10px;
text-align: center
}
.productos #uno .card-body a.link {
display: inline-block;
text-decoration: none;
padding: 7px 14px;
background: #222;
color: #fff;
text-transform: uppercase;
box-shadow: 0 0 1px #000
}
.productos #uno .card-body a.link:hover {

box-shadow: 0 0 5px #000
}
.sombras{
  box-shadow: 0 1rem 3rem rgba(0,0,0,.175)!important;
}
   </style>


      <section class="productos bg-light">
       <div class="container">
        <h2 class="display-4 text-center text-success mb-5">Productos Destacados</h2>
        <div class="row">
          <div class="col-3">
              <div class="card" id="uno">
                  <img class="card-img-top" src="<?php echo URL?>public/img/test.jpg" alt="Card image cap">
                  <div class="card-body">
                    <!-- <h5 class="card-title text-center">Lorem, ipsum.</h5> -->
                  
                      <div class="mascara">
                        <h2>Ejemplo</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae tortor diam in ullamcorper malesuada.</p>
                        <a class="link" href="#">Leer mas</a>
                      </div>
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
      
        
    
    
 