
<?php 
session_start();
  if (isset($_SESSION['nombre']) && $_SESSION['ingreso']=='YES') 
  {?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplicacion Web</title>

    <link rel="stylesheet" href="../../Resources/css/bootstrap.css">

</head>
 
<body>
    <!--Barra de Navegacion-->


<?php include('../html/nav.php') ?>

    <div class="container">


        <!-- Encabezado de página / Breadcrumb -->
       <br>
       <br>
       <br>

        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Perfil de usuario
                    <small>editando datos</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="#">Perfil de usuario</a></li>
                    <li class="active">Editando datos</li>
                </ol>
            </div>
        </div>

        <!-- Fin Encabezado de página / Breadcrumb -->
               
        <!-- Contact Form -->
        <!-- Campos del formulario de contacto con validación de campos-->
        <div class="row">
            <!-- Columna de la izquierda -->
            <div class="col-md-3">
                <div class="col-md-12" align="center">
<?php

echo "<img class='img-responsive img-portfolio img-hover' src=\"ver.php?id=".$_SESSION['id']."\">";
   // echo $datos;

?>


                    <!-- <img class="img-responsive img-portfolio img-hover" src="profile.jpg"> -->
                </div>
                <div class="col-md-12">
                    <p class="text-center"><strong>Nombre Apellido</strong></p>
                    <p class="text-center"><em>Título del perfil de usuario</em></p>
                </div>

                <div class="col-md-12 text-center">
                   <!-- Redes sociales-->
                   <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="#"><i class="editIcons icon-facebook-square editSizeIcons"></i></a>
                        </li>
                       
                        <li>
                            <a href="#"><i class="editIcons icon-google-plus-square editSizeIcons"></i></a>
                        </li>
                    </ul>
                    <!-- Fin redes sociales -->
                </div>

                <div class="col-md-12">
                <!-- Barra vertical de opciones del perfil de usuairo -->
                    <br >
                    <ul class="list-group list-primary">
                        <a href="#" class="list-group-item">Ver perfil público</a>
                        <a href="#" class="list-group-item">Mi perfil</a>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#responsive" type="button" class="list-group-item">Fotografia</a>
                        <a href="#" class="list-group-item">Cuenta</a>
                        <a href="#" class="list-group-item">Preferencias</a>
                        <a href="#" class="list-group-item">Configurar Github</a>
                    </ul>
                </div>
                <!-- Fin Barra vertical de opciones del perfil de usuario -->
            </div>
            <!-- Fin de Columna de la izquierda -->

            <!-- Parte central -->
            <div class="col-md-9">
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey;">
                    <img src="FMUNIFERCOM2.png" class="img-responsive img-rounded">
                    <h3 style="text-align: center">Mi perfil <p><small>Añade información personal para compartir tu perfil</small></p></h3>
                </div>
                <!-- Se inicia el form (ojo todos los elementos de formulario deben ir dentro de esta etiqueta-->
                <form name="modifyProfile" id="profileForm" novalidate>
                <!-- Inicio del div central parte de formulario información básica -->
                <div class="col-md-12" style="border-width: 1px 1px 0px 1px; border-style: solid; border-color: lightgrey; background: #f1f3f6;">
                    <div class="col-md-8 col-md-offset-2">
                        
                            <div class="control-group form-group">
                                <div class="controls">
                                    <br >
                                    <label>Información básica</label>
                                    <span id="alertName" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Introduzca su nombre" required data-validation-required-message="Por favor introduzca su nombre.">
                                    </span>
                                    <br>
                                     <span  <div class="form-group">
                                     <label>Sexo: </label>
                                     <input type="radio" name="sexo" value="h"> Hombre
                                     <input type="radio" name="sexo" value="m"> Mujer 
                                    </span>
                                    <br >
                                     <br >

                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="text" class="form-control" id="ocupacion" name="ocupacion" placeholder="Introduzca su ocupación" required data-validation-required-message="Por favor introduzca su ocupación.">
                                    </span>
                                    <br >
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su especificación de ocupación" required data-validation-required-message="Por favor introduzca su especificación de ocupación.">
                                    </span>
                                    <br >
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca su carrera" required data-validation-required-message="Por favor introduzca su Carrera.">
                                    </span>
                                    <br >
                                    <span div class="control-group">
                                      <label class="control-label" for="edad">Edad</label>
                                      <div class="controls">
                                        <input id="edad" name="edad" type="text" placeholder="DD/MM/YYY/" class="input-xlarge">
                                        
                                      </div>
                                    </div>
                                 </span>
                                    <br >
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca sus interes " required data-validation-required-message="Por favor introduzca sus interes.">
                                    </span>
                                    <br >
                                    <span id="alertQualification" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="email" class="form-control" id="txtEmail" placeholder="Introduzca sus habilidades" required data-validation-required-message="Por favor introduzca sus habilidades.">
                                        <br >
                                    <div class="controls">
                                    <label>Auto descripción:</label>
                                    <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                        <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
                                        data-validation-required-message="Por favor introduzca su auto descrpción."></textarea>
                                    </span>
                                    <br >
                                     <div class="controls">
                                    <label>Introduzca Meta de vida:</label>
                                    <span id="alertBiography" data-toggle="popover" data-trigger="hover" data-placement="auto" title="" data-content="">
                                        <textarea rows="6" cols="30" class="form-control" id="txtBiography" required maxlength="999" style="resize:none" 
                                        data-validation-required-message="Por favor introduzca su meta de vida."></textarea>
                                        <br>
                                    </span>
                                    <span id="alertNumber" data-toggle="popover" data-trigger="hover" data-placement="right" title="" data-content="">
                                        <input type="Number" class="form-control" id="txtNumber" placeholder="Introduzca su telefono" required data-validation-required-message="Por favor introduzca su Telefono.">
                                    </span>
                                    
                                    <p class="help-block"></p>
                                </div>
                            </div>
                           
                                            
                                        </select>
                                    </span>
                                    <br >
                                </div>
                            </div>
                    </div>
                </div>
                <!-- Fin del div central parte de formulario información básica -->

                <!-- Parte central - enlaces -->
                <div class="col-md-12" style="border: 1px solid lightgrey; background: #e5eaf2;">
                    <!-- Parte de redes sociales en el alta de perfil -->
                    <div class="col-md-8 col-md-offset-2">
                        <div class="control-group form-group">
                            <div class="controls">
                                <br >
                                <label>Enlaces:</label>
                                <input type="text" class="form-control" id="txtMyWeb" placeholder="Introduzca su web personal o profesional">
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">https://plus.google.com</span><input type="text" class="form-control" id="txtPlus" placeholder="Introduzca su usuario de Google+">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">https://www.facebook.com</span><input type="text" class="form-control" id="txtFacebook" placeholder="Introduzca su usuario de Facebook">
                                </div>
                                <br>

                                <br >
                            </div>
                        </div>
                    </div>
                    <!-- Fin Parte de redes sociales en el alta de perfil -->
                    
                    <!-- Botones formulario -->
                    <div class="col-md-12 container allFormButtons">
                        <br >
                        <div class="col-md-2 col-md-offset-2">
                            <div class="form-group">
                              <button type="button" id="btnCancel" class="btn btn-danger">Cancelar</button>
                            </div>
                        </div>
                        <div class="col-md-5 col-md-offset-3">
                            <div class="form-group">
                                <button type="button" id="btnClean" class="btn btn-warning">Limpiar</button>
                                <button type="submit" id="btnEnviar" class="btn btn-primary">Actualizar</button>
                            </div>
                        </div>
                        &nbsp;
                    </div>
                    <!-- Fin botones formulario -->
                </div>
                <!-- Fin Parte central - enlaces -->
            </form>
            <!-- Fin del form -->
            </div>  
            <!-- Fin del div de parte central -->
        </div>
        <!-- Fin Campos del formulario de contacto con validación de campos -->
        &nbsp;
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12 footer-align">
                    <p>Universidad Politecnica de Amozoc</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

        <div class="modal fade" id="responsive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="location.reload();"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h2 class="modal-title">Imagen</h2>
              </div>
              <div class="modal-body">
                <!-- <form enctype="multipart/form-data" class="form-horizontal" method="post" id="formCliente" > -->
                    <FORM enctype="multipart/form-data" method="post" action="insertar.php">
Archivo: <INPUT type="file" name="foto" size="30">
<input type="text" name="user" id="user" value="<?php echo $_SESSION['id']?>" hidden>

<button  type="button" class="btn btn-danger right" data-dismiss="modal" onclick="location.reload();">Cerrar</button>
                <!-- <button onclick="registrar();" type="button" class="btn btn-success">Guardar</button> -->
                <button type="submit" class="btn btn-success right">Guardar</button>
                </form>
              </div>
              <div class="modal-footer">  
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
 <!-- <button onclick="guardar();" class="btn btn-success right">Guardar</button> -->
    <script src="../../Resources/js/jquery.js"></script>
    <script src="../../Resources/js/bootstrap.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {

   //Código para que la web muestre el popover
    $('[data-toggle="popover"]').popover();
}

        // function guardarImg(){
        //     // alert("eso");
        //     var foto = $('#foto').val();
        //     var user = $('#user').val();

        //     $.ajax({
        //         url:'../../Controllers/perfil.php',
        //         type:'POST',
        //         data:'user='+user+'&foto='+foto+"&boton=img"
        //         // alert(foto);
        //     }).done(function(resp){
        //         if(resp=='exito'){
        //             location.reload();
        //         }else{
        //             alert(resp);
        //         }
        //     });
        // }


        function cerrar()
        {
            $.ajax({
                url:'../../Controllers/perfil.php',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
                alert(resp);

            });
        }
    </script>
</body>
</html>

<?php

  }
  else
  {
    header("location: ./");
  }
 ?>
    