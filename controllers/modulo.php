<?php
class modulo extends Controller
{

    function __construct()
      {
           parent::__construct();
      }

    public function user($token)
    {
        $perfil = Session::getValue('perfil');
      	if(Session::exist())
      	{

              switch ($token)
              {
                case 'lista':
                  $this->view->render('perfil/'.$perfil.'/add/head_');
                  $this->view->render('perfil/'.$perfil.'/add/header_');
                  $this->view->render('modulos/usuario/listar');
                  $this->view->render('perfil/'.$perfil.'/add/js_');
                  $this->view->render('modulos/usuario/add/js_usuario');
                  $this->view->render('perfil/'.$perfil.'/add/footer_');
                  break;
                case 'registra':
                  $this->view->render('perfil/'.$perfil.'/add/head_');
                  $this->view->render('perfil/'.$perfil.'/add/header_');
                  $this->view->render('modulos/usuario/registrar');
                  $this->view->render('perfil/'.$perfil.'/add/js_');
                  $this->view->render('modulos/usuario/add/js_usuario');
                  $this->view->render('modulos/usuario/add/js_validacion_registro');
                  $this->view->render('perfil/'.$perfil.'/add/footer_');
                  break;
                  case 'actualiza':
                  $this->view->render('perfil/'.$perfil.'/add/head_');
                  $this->view->render('perfil/'.$perfil.'/add/header_');
                  $this->view->render('modulos/usuario/actualizar_usuario');
                  $this->view->render('perfil/'.$perfil.'/add/js_');
                  $this->view->render('modulos/usuario/add/js_usuario');
                  $this->view->render('modulos/usuario/add/js_validacion_actualizar');
                  $this->view->render('perfil/'.$perfil.'/add/footer_');
                  break;
                default:
                  $this->salir();
                  break;
              }

         }else{
         	$this->salir();
         }
    }

    public function art($token)
    {
       $perfil = session::getValue('perfil');
      if (session::exist())
      {
      	switch ($token) {
                	case 'registrar':
                	$this->view->render('perfil/'.$perfil.'/add/head_');
				          $this->view->render('perfil/'.$perfil.'/add/header_');
				          $this->view->render('modulos/art/registrar');
                  $this->view->render('perfil/'.$perfil.'/add/js_');
                  $this->view->render('modulos/art/add/js_art');
                  $this->view->render('modulos/art/add/signature');				          
				          $this->view->render('perfil/'.$perfil.'/add/footer_');
                		break;
                    case 'registrarv2':
                  $this->view->render('perfil/'.$perfil.'/add/head_');
                  $this->view->render('perfil/'.$perfil.'/add/header_');
                  $this->view->render('modulos/art/registrar2');
                  $this->view->render('perfil/'.$perfil.'/add/js_');
                  //$this->view->render('modulos/art/add/js_art');
                  //$this->view->render('modulos/art/add/signature');                 
                  $this->view->render('perfil/'.$perfil.'/add/footer_');
                    break;
                  case 'listar':
                  $this->view->render('perfil/'.$perfil.'/add/head_');
                  $this->view->render('perfil/'.$perfil.'/add/header_');
                  $this->view->render('modulos/art/listar');
                  $this->view->render('perfil/'.$perfil.'/add/js_');
                  $this->view->render('modulos/art/add/js_art');                              
                  $this->view->render('perfil/'.$perfil.'/add/footer_');
                    break;

                	default:
                		$this->salir();
                		break;
                }
      }else{
         	$this->salir();
            }



    }



    public function salir()
    {
        session::destroy();
        header('location:'.URL.'index');
    }
     public function login()
      {
        header('location:'.URL.'index');
      }

}










?>
