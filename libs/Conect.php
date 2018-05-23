  <?php

class Conect{

    public $my,$sql,$sql2,$sql3;
    function __construct()
    {
		$this->servidor = DB_HOST;
		$this->usuario = DB_USER;
		$this->pass = DB_PASS;
		$this->base_datos = DB_NAME;
    $this->charset = 'utf8';
		$this->conectar();
	}
    function conectar()
    {          
    
        try {
              // $dsn = "mysql:host=$this->servidor;dbname=$this->base_datos;charset=$this->charset";
              $dsn = "mysql:host=$this->servidor;charset=$this->charset;dbname=$this->base_datos";
              $this->my = new PDO($dsn, $this->usuario, $this->pass);              
              //creamos la base de datos si no existe
                                         
          } catch (PDOException $e) {
              print "¡Error!: " . $e->getMessage() . "<br/>";
              die();
          }
    }
    // -------EJECUTA UNA CONSULTA A LA BASE DE DATOS
	public function consulta($query,$datos)
    {
      try{
        $this->sql = $this->my->prepare($query);
        if (!empty($datos)) {
          $this->sql->execute($datos); 
        }else{
          $this->sql->execute(); 
        }
        
        $this->my = null;
      }
      catch(PDOException $e){
         $jsondata['tipo'] = $e->getMessage();
         echo json_encode($jsondata); 
         die();       
      }  		  		
	}
  public function consulta2($query)
    {
     try{
          $this->sql2 = $this->my->prepare($query);
          $this->sql2->execute($datos); 
          $this->my = null;
        }
        catch(PDOException $e){
           $jsondata['tipo'] = $e->getMessage();
           echo json_encode($jsondata); 
           die();       
        } 
  }
	public function extraer_registro()
    {
      try{
        $fila = $this->sql->fetch();
        return $fila;
      }
      catch(PDOException $e)
      {
         $jsondata['tipo'] = $e->getMessage();
         echo json_encode($jsondata); 
         die();
      }

	}
  public function extraer_registro2()
    {
      try{
        $fila = $this->sql2->fetch();
        return $fila;
      }
      catch(PDOException $e)
      {
         $jsondata['tipo'] = $e->getMessage();
         echo json_encode($jsondata); 
         die();
      }
    }
    public function total()
    {
      try{
        $cantidad= $this->sql->rowCount();
        return $cantidad;
      }
      catch(PDOException $e)
      {
         $jsondata['tipo'] = $e->getMessage();
         echo json_encode($jsondata); 
         die();
      }
  		
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
      $this->consulta($result,'');
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
             $con .= ') VALUES (';
                   if(isset($datos))
                   {
                      foreach($datos as $key => $value)
                        {
                          // if($key == 'pass'){
                          // $valores[] = md5($value);
                          // }else{
                          $valores[] = $value;
                          // }
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
                      $jsondata['msj'] = 'Registro guardado con exito';
			                echo json_encode($jsondata);
                   }else{
                      $jsondata['msj'] = 'sin_datos';
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
           $jsondata['msj'] = 'Registro eliminado con éxito';
         echo json_encode($jsondata);
         }else{
              $jsondata['msj'] = 'fallo_con';
         echo json_encode($jsondata);
         }

    }
}
