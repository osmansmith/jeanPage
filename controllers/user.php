<?php
class user extends Controller
{

    function __construct()
      {
           parent::__construct();
      }
            
    function entrar()
    {


        if(  $_POST['nom'] <> '' && $_POST['pass'] <> '')
        {
            $nombre = $_POST['nom'];
            $pass = $_POST['pass'];
            $this->model->acceder($nombre,$pass);
        }else{
             $jsondata['error'] = 'true';
			       echo json_encode($jsondata);
        }
    }

    function insert()
    {
        if(isset($_POST))
        {

            $this->model->guardar($_POST);
        }else{
            $jsondata['tipo'] = 'sin_datos';
			echo json_encode($jsondata);
        }
    }
    function delete()
    {
        if(isset($_POST))
        {
            $this->model->borrar($_POST);
        }else{
            $jsondata['tipo'] = 'sin_datos';
			echo json_encode($jsondata);
        }
    }
    function update()
    {
        if(isset($_POST))
        {
            $this->model->actualizar($_POST);
        }else{
            $jsondata['tipo'] = 'sin_datos';
			echo json_encode($jsondata);
        }
    }

    function salir()
    {
        session::destroy();
        header('location:'.URL.'index');
    }
    function login()
      {
         session::destroy();
        header('location:'.URL.'index');
      }
    function perfiles()
    {
        $this->model->perfiles();
    }
    function listar()
    {
        $this->model->listar();
    }
    function update_user()
    {
      $idupdate = $_POST['id'];
      if(isset($idupdate))
      {
          $this->model->model_update_user($idupdate);
      }else{
          $jsondata['tipo'] = 'sin_datos';
          echo json_encode($jsondata);
      }
    }
    function datos_update_user()
    {
        $this->model->model_datos_update_user();
    }
    function update_datos_user()
    {
      if(isset($_POST))
      {
          $this->model->set_datos_update($_POST);
      }else{
          $jsondata['tipo'] = 'sin_datos';
    echo json_encode($jsondata);
      }
    }
}










?>
