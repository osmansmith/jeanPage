<?php  
  class index extends Controller
  {
      
      function __construct()
      {
          parent::__construct();
      }                  

      function login()      
      {    
          if(session::exist())
          {
            header('location:'.URL.'acceso/index');
          }else{
            $this->view->render('login');
          }                       
          
      }
      function index()      
      {                      
        $this->view->render('index');                                              
      }  

      public function clase($nombre)
      {
        $this->view->renderClass($nombre);        
      }

      

      public function Header()
      {
        $this->page->Header();
      }

      function salir()
      {
          session::destroy();
          $this->login();
      }    
      function prueba()
      {
          $this->view->render('modulos/art/add/prueba');
      } 
      function pdf()
      {
          $this->view->renderpdf();
          $this->view->render('modulos/art/add/pdf');
      }      

  }
?>