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
        $this->view->render('perfil/administrador/add/head_');
        $this->view->render('perfil/administrador/add/header_');
        $this->view->render('perfil/administrador/index');
        $this->view->render('perfil/administrador/add/js_');
        $this->view->render('perfil/administrador/add/footer_');                                           
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
          $this->view->renderpdf('mpdf/mpdf');
          $this->view->render('modulos/art/add/pdf');
      } 
       

  }
?>