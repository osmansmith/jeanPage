  <?php

class Conect{

    public $my,$sql,$sql2,$sql3;
    function __construct()
    {
		$this->servidor = DB_HOST;
		$this->usuario = DB_USER;
		$this->pass = DB_PASS;
		$this->base_datos = DB_NAME;
		$this->conectar();
	}
    function conectar()
    {
        $this->my = new mysqli($this->servidor, $this->usuario, $this->pass, $this->base_datos);
    }
    // -------EJECUTA UNA CONSULTA A LA BASE DE DATOS
	public function consulta($query)
    {
		$this->sql = $this->my->query($query);
		if(!$this->sql){
			$jsondata['tipo'] = 3;
			echo json_encode($jsondata);
			exit();
		}
	}
  public function consulta2($query)
    {
    $this->sql2 = $this->my->query($query);
    if(!$this->sql2){
      $jsondata['tipo'] = 3;
      echo json_encode($jsondata);
      exit();
    }
  }
	public function extraer_registro()
    {
		if ($fila = $this->sql->fetch_array(MYSQLI_ASSOC)){
			return $fila;
		}
		else {
			return false;
		}
	}
  public function extraer_registro2()
    {
    if ($fila = $this->sql2->fetch_array(MYSQLI_ASSOC)){
      return $fila;
    }
    else {
      return false;
    }
  }
    public function total()
    {
		$cantidad= mysqli_num_rows($this->sql);
		return $cantidad;
	}

    // CONSULTAS DINAMICAS SIMPLES
    // CONSULTAS I = Insert , S = select , U = Update , D = delete ;
    public function ingreso($tipo , $tabla , $datos)
    {
        switch ($tipo)
        {
        case 'I':
            $this->insert($tabla , $datos);
            break;
        case 'S':
            $this->select($tabla);
            break;
        case 'U':
             $this->update();
            break;
        case 'D':
             $this->delete($tabla, $datos);
            break;
        }
    }
    public function insert($tabla, $datos)
    {
      $result= "SHOW COLUMNS FROM ".$tabla;
      $this->consulta($result);
            while($fila = $this->extraer_registro())
                 {
                    $campos[] = $fila['Field'];
                 }
             $con = 'INSERT INTO '.$tabla.' ( ' ;
                for($i = 0; $i<count($campos); $i++)
                {
                    if($i == count($campos) - 1)
                    {
                       $con .= $campos[$i];
                    }else{
                       $con .= $campos[$i].' , ';
                    }
                }
             $con .= ' ) VALUES (null,';
                   if(isset($datos))
                   {
                      foreach($datos as $key => $value)
                        {
                          if($key == 'pass'){
                          $valores[] = md5($value);
                          }else{
                          $valores[] = $value;
                          }
                        }
                       for($f = 0;$f<count($valores);$f++)
                          {
                            if($f == count($valores)-1)
                            {
                                if(is_numeric($valores[$f]))
                                {
                                    $con.= "".$valores[$f]."";
                                }else{
                                    $con.= "'".utf8_decode($valores[$f])."'";
                                }

                            }else{
                                if(is_numeric($valores[$f]))
                                  {
                                      $con.= "".$valores[$f].",";
                                  }else{
                                      $con.= "'".utf8_decode($valores[$f])."',";
                                  }
                            }
                          }
                      $con.= ')';
                      $this->consulta($con);
                      $jsondata['tipo'] = 'user_guardado';
			                echo json_encode($jsondata);
                   }else{
                      $jsondata['tipo'] = 'sin_datos';
			                echo json_encode($jsondata);
                   }
    }
    public function select($tabla)
    {
         $result= "SHOW COLUMNS FROM ".$tabla;
         $this->consulta($result);
            while($fila = $this->extraer_registro())
                 {
                    $campos[] = $fila['Field'];
                 }
         $con = "SELECT * FROM ".$tabla;
         $this->consulta($con);

            while($fila = $this->extraer_registro())
                 {

                 }


    }
    public function update($tabla, $campos, $datos)
    {
      if(isset($datos)){
        if(isset($campos)){
          foreach($datos as $key => $value)
            {
              $valores[] = $value;
            }
          foreach($campos as $key => $value)
            {
              $campo[] = $value;
            }
            $con = 'UPDATE '.$tabla.' SET ';
            for ($i=0; $i < (count($valores)-1) ; $i++) {
              $f = $i;
              if($i == count($valores)-2)
              {
                  if(is_numeric($valores[$i]))
                  {
                      $con.= $campo[$f]." = ".$valores[$i]." ";
                  }else{
                      $con.= $campo[$f]." = '".utf8_decode($valores[$i])."' ";
                  }
              }else{
                  if(is_numeric($valores[$i]))
                    {
                        $con.= $campo[$f]." = ".$valores[$i].", ";
                    }else{
                        $con.= $campo[$f]." = '".utf8_decode($valores[$i])."', ";
                    }
              }
            }
            $cont = count($valores);
            $con .= "WHERE ".$campo[$cont-1]." = ".$valores[$cont-1];
            $this->consulta($con);
            $jsondata['tipo'] = 'actualizado';
            echo json_encode($jsondata);
        }else{
          $jsondata['tipo'] = 'sin datos';
          echo json_encode($jsondata);
        }
      }else{
        $jsondata['tipo'] = 'sin datos';
        echo json_encode($jsondata);
      }
    }
    public function delete($tabla,$datos)
    {
         $result= "SHOW COLUMNS FROM ".$tabla;
         $this->consulta($result);
            while($fila = $this->extraer_registro())
            {
                $campos[] = $fila['Field'];
            }
         $con = 'DELETE FROM '.$tabla.' WHERE '.$campos[0].'='.$datos['id'];
         if($con)
         {
			  $this->consulta($con);
           $jsondata['tipo'] = 'user_eliminado';
         echo json_encode($jsondata);
         }else{
              $jsondata['tipo'] = 'fallo_con';
         echo json_encode($jsondata);
         }

    }
}
