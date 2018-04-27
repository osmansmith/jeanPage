<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>AdminPro | Iniciar Sesión</title>
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <link rel="stylesheet" href="<?php echo URL?>public/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?php echo URL?>public/font-awesome-4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="<?php echo URL?>public/ionicons-2.0.1/css/ionicons.min.css">
      <link rel="stylesheet" href="<?php echo URL?>public/dist/css/AdminLTE.min.css">
      <link rel="stylesheet" href="<?php echo URL?>public/plugins/iCheck/square/blue.css">
      <link rel="stylesheet" href="<?php echo URL?>public/plugins/sweetalert/sweetalert.css">
      <link rel="stylesheet" href="<?php echo URL?>public/dist/css/animate.css">
      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style type="text/css">
        .css-form input.ng-invalid.ng-touched {
          border:1px solid #FA787E;
        }

        .css-form input.ng-valid.ng-touched {
           border:1px solid rgb(90,197,148);
        }
        .login-logo a i{
          /*margin-top: 15px;*/
          font-size: 25px;
        }
      </style>
  </head>
  <body class="hold-transition login-page">
      <div class="login-box">
        <div class="login-logo">
          <a href="#"><i class="fa fa-check-square-o logo"></i><b>Checklist</b>Pro</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
          <p class="login-box-msg">Iniciar Sesión</p>

          <form id="form" class="css-form" >
            <div class="form-group has-feedback">
              <input type="text" class="form-control"  id="nom" name="nom" placeholder="Usuario" required>
              <span class="glyphicon glyphicon-user form-control-feedback"></span>        
      			<!--  <div ng-show="form.$submitted || form.nom.$touched">
      				<div ng-show="form.nom.$error.required" class="text-red">Escriba su nombre.</div> -->
      			 <!-- </div> -->
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" id="pass" name="pass" placeholder="Contraseña" required>
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>        
      			 <!-- <div ng-show="form.$submitted || form.pass.$touched">
      				<span ng-show="form.pass.$error.required" class="text-red">Escriba su contraseña.</span>			 -->	
      			 <!-- </div> -->
            </div>
            <div class="row">       
              <div class="col-xs-6 col-xs-offset-3">
                <!-- <button id="acceder" class="btn btn-primary btn-block btn-flat">Acceder</button>           -->
                <button type="submit" class="btn btn-primary btn-block btn-flat" id="login">Acceder</button>
              </div>
              <!-- /.col -->
            </div>
          </form>   
                <!-- area de mensajes-->
               <!--  <div class="{{estilo}} callout" ng-show="mess" ng-click="sinmensaje()" style="margin-top: 20px;"><h4>{{tipo}}!</h4>{{mess}}</div> -->
                         
        </div>
        <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->      
      <script src="<?php echo URL?>public/plugins/jQuery/jquery-2.2.3.min.js"></script>            
      <script src="<?php echo URL?>public/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo URL?>public/plugins/sweetalert/sweetalert.js"></script>
      <script src="<?php echo URL?>public/plugins/iCheck/icheck.min.js"></script>
       <script>
        // $("#mensaje").css('display','none');
        $("#login").click(function(){
          var str = $("#form").serialize();
          $.ajax({
            type : 'post',
            url : '<?php echo URL?>user/entrar',
            data : str,
            datatype : 'json',
            success: function(data){

                window.location = '<?php echo URL?>acceso/index';
              
            }            
          });
          return false;
        });

      </script>
  </body>
</html>
