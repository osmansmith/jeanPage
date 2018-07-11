<?php  
  class rutas extends Controller
  {
      
      function __construct()
      {
          parent::__construct();
      }                  

      
      function index()      
      {                      
        $this->view->render('index');                                              
      }  

      public function clase($nombre)
      {
        $this->view->renderClass($nombre);        
      }

      public function pagina($ruta)
      {
          $this->view->render($ruta);
      }

      function salir()
      {
          session::destroy();
          $this->login();
      }    
     
         

  }
?>