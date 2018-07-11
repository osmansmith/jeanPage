<?php

  class view
  {      
    # metodo render() que acepta un parametro  
    public function render($view)
    {      
        # inclusion require para mostrar la pagina que se especifique en el parametro
        require './views/'.$view.'.php';        
    }

    public function renderClass($class)
    {
      require './libs/'.$view.'.php';
    }

    public function renderpdf()
    {
    	require './libs/mpdf/mpdf.php';
    }

                              
  }

?>