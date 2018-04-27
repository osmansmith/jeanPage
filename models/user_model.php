<?php
class user_model extends Model
{
    public $idupdate;
    function __construct()
    {
           parent::__construct();
    }

    public function acceder($nombre,$pass)
    {


        $key = 0;
        $sql = "SELECT * FROM user WHERE EMAIL_USER = '".$nombre."' and PASS_USER = '".md5($pass)."' ";

        $this->base->consulta($sql);

        if($arr = $this->base->extraer_registro())
        {
            session::setValue('id_user',utf8_encode(ucwords($arr['ID_USER'])));
            session::setValue('nombre',utf8_encode(ucwords($arr['NOM_USER'])));
            session::setValue('apellido',utf8_encode(ucwords($arr['AP_USER']))." ".utf8_encode(ucwords($arr["AM_USER"])) );
            session::setValue('correo',$arr['EMAIL_USER']);

            $sql = "SELECT NOM_PERFIL FROM perfil WHERE ID_PERFIL = ".$arr["ID_PERFIL"]."";
            $this->base->consulta2($sql);
            if($arr2 = $this->base->extraer_registro2())
            {
              session::setValue('perfil',$arr2['NOM_PERFIL']);
              $key = 1;
            }

        }

        if($key == 1)
        {
           $jsondata['tipo'] = 1;
            echo json_encode($jsondata);

        }else{
            $jsondata['tipo'] = 'error';
            echo json_encode($jsondata);
        }
    }

    public function guardar($datos)
    {
        $this->base->ingreso('I','user',$datos);
    }
    public function actualizar($datos)
    {
        $this->base->ingreso('U','usuario',$datos);
    }
    public function borrar($datos)
    {
        $this->base->ingreso('D','user',$datos);
    }
    public function perfiles()
    {
      $sql = "SELECT * FROM perfil";
      $this->base->consulta($sql);
      $num = $this->base->total();
      $jsonarray = array();
      while($arr = $this->base->extraer_registro())
      {
           $jsondata = array("id_perfiles"=>$arr['ID_PERFIL'],"nom_perfiles"=>$arr['NOM_PERFIL']);
           $jsonarray[] = $jsondata;
      }
      echo json_encode($jsonarray);
    }
    public function listar()
    {

      $sql = "SELECT * FROM user WHERE ESTADO_USER = 1";

      $this->base->consulta($sql);
      $jsonarray = array();
      while($arr = $this->base->extraer_registro())
      {
           $sql2 = "SELECT NOM_PERFIL FROM perfil WHERE ID_PERFIL =".$arr["ID_PERFIL"]."";

           $this->base->consulta2($sql2);
           while($arr2 = $this->base->extraer_registro2()){
             $jsondata = array("id_user"=>utf8_encode($arr['ID_USER']),"nom_user"=>utf8_encode(ucwords($arr['NOM_USER'])),"ap_user"=>utf8_encode(ucwords($arr["AP_USER"])),"am_user"=>utf8_encode(ucwords($arr["AM_USER"])),"fono_user"=>utf8_encode($arr["PHONO_USER"]),"mail_user"=>utf8_encode($arr["EMAIL_USER"]),"nom_perfil"=>utf8_encode($arr2["NOM_PERFIL"]));
           $jsonarray[] = $jsondata;
         }
      }

      echo json_encode($jsonarray);
    }
    public function model_update_user($id)
    {
      session::setValue('idupdate',$id);
      $jsondata['tipo'] = 'almacenado';
      echo json_encode($jsondata);

    }
    public function model_datos_update_user()
    {
      $sql = "SELECT * FROM user WHERE ID_USER = ".session::getValue('idupdate');;
      $this->base->consulta($sql);
      $jsonarray = array();
      while($arr = $this->base->extraer_registro())
      {
           $jsondata = array("id_user"=>utf8_encode($arr['ID_USER']),"nom_user"=>utf8_encode(ucwords($arr['NOM_USER'])),"ap_user"=>utf8_encode(ucwords($arr["AP_USER"])),"am_user"=>utf8_encode(ucwords($arr["AM_USER"])),"fono_user"=>utf8_encode($arr["PHONO_USER"]),"mail_user"=>utf8_encode($arr["EMAIL_USER"]),"id_perfil"=>utf8_encode($arr["ID_PERFIL"]));
           $jsonarray[] = $jsondata;
      }
      echo json_encode($jsonarray);
    }
    public function set_datos_update($datos)
    {
      $campos = array(
        "1"=>"ID_PERFIL",
        "2"=>"NOM_USER",
        "3"=>"AP_USER",
        "4"=>"AM_USER",
        "5"=>"PHONO_USER",
        "6"=>"EMAIL_USER",
        "condicion"=>"ID_USER"
      );
      $this->base->update('user',$campos,$datos);
    }
}
?>
