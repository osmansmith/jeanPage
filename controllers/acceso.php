<?php  
  class acceso extends Controller
  {
      
      function __construct()
      {
           parent::__construct();
      }            
      
      function index()
      {
          if(session::exist())
          {
            $perfil = session::getValue('perfil');
            $this->view->render('perfil/'.$perfil.'/add/head_');
            $this->view->render('perfil/'.$perfil.'/add/header_');
            $this->view->render('perfil/'.$perfil.'/index');
            $this->view->render('perfil/'.$perfil.'/add/js_');
            $this->view->render('perfil/'.$perfil.'/add/footer_');
          }else{
            $this->salir();
          }
      }

      function login()
      {            
        header('location:'.URL.'index');
      }  
      function salir(){
        session::destroy();
        $this->login();
      }
      
  }
?>