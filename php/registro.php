<?php
session_start();

$nombre = "Nombre";
$errorNombre = "";
$apellido = "Apellido";
$errorApellido = "";
$email = "Email";
$errorEmail = "";
$usuario = "Usuario";
$errorUsuario = "";
$contraseña = "Contraseña";
$errorContraseña = "";
$confirmarContraseña = "Confimar contraseña";
$errorConfirmar = "";
$foto = "Elegí tu foto de perfil (opcional)";
$errorFoto = "";
$per_nombre = "";
$per_apellido = "";
$per_mail = "";
$per_usuario = "";



if($_POST){

    if(strlen($_POST["nombre-usuario"]) < 3 ){
       $errorNombre = "Por favor, ingrese un nombre válido";
       $nombre = "";
       $per_nombre = $_POST["nombre-usuario"];
    }
     if(strlen($_POST["apellido-usuario"])  < 3){
      $errorApellido = "Por favor, ingrese un apellido válido";
      $apellido = "";
      $per_apellido = $_POST["apellido-usuario"];
  }
    if(!filter_var($_POST["email-usuario"], FILTER_VALIDATE_EMAIL)){
      $errorEmail = "Por favor, ingrese un email válido";
      $email = "";
      $per_email = $_POST["email-usuario"];
  }
    if(strlen($_POST["usuario-usuario"])  < 6){
      $errorUsuario = "Por favor, elija un usuario más largo";
      $usuario = "";
      $per_usuario = $_POST["usuario-usuario"];
  }
    if(!preg_match('/^[a-zA-Z]+[a-zA-Z0-9._]+$/', $_POST["contrasenia-usuario"])) {
      $errorContraseña = "La contraseña debe contener al menos un número y una letra";
      $contraseña = "";
    }
    
    if(strlen($_POST["contrasenia-usuario"]) < 6){
      $errorContraseña = "La contraseña debe contener al menos 6 caracteres";
      $contraseña = "";
      } 
     
      if($_POST["validar-contrasenia"] != $_POST["contrasenia-usuario"]){
      $errorConfirmar = "Las contraseñas no coinciden";
      $confirmarContraseña = "";
    }

    if($_FILES){
      $ext = pathinfo($_FILES["foto-usuario"]["name"], PATHINFO_EXTENSION);
      if($ext != "jpg" && $ext != "jpeg" && $ext != "png"){
        $errorFoto = "La imagen debe ser de tipo '.jpg', '.jpeg' o 'png'";
      }
    }

    //Trae el archivo .json

    $usuariosJson = file_get_contents("../bdd/json/usuarios.json");

    //Convierte el .json en array

    $usuariosPHP = json_decode($usuariosJson, true);

    //Crea un nuevo usuario con lo que llega por POST

    $usuario_registrado = [
     "nombre_del_usuario" => $_POST["nombre-usuario"],
     "apellido_usuario" => $_POST["apellido-usuario"],
     "email_usuario" => $_POST["email-usuario"],
     "nombre_usuario" => $_POST["usuario-usuario"],
     "contraseña_usuario" => $_POST["contrasenia-usuario"]
    ];

    //Suma ese nuevo usuario al array

    $usuariosPHP[] = $usuario_registrado;

    //Toma ese array y lo convierte en un .json

    $usuariosJson = json_encode($usuariosPHP);

    //Agrega los nuevos datos al archivo .json original

    file_put_contents("../bdd/json/usuarios.json", $usuariosJson);

    $ext = pathinfo($_FILES["foto-usuario"]["name"], PATHINFO_EXTENSION);

    move_uploaded_file($_FILES["foto-usuario"]["tmp-name"], "../bdd/images/foto".$ext);

    $_SESSION["email_usuario"] = $_POST["email-usuario"];
    header("Location:login.php");
  }
  ?>

<?php include("../layout/header.php"); ?>

    <h5>Datos De Registro</h5>

    <div class="container">

    <form class="" action="registro.php" method="post" enctype="multipart/form-data">

      <div class="formularios">
      <label for="nombre" class="nombre_formularios"><?php echo $nombre; echo $errorNombre; ?></label>
      <input type="text" name="nombre-usuario" id="nombre" value="<?php echo $per_nombre; ?>">
      </div>

      <div class="formularios">
      <label for="apellido" class="nombre_formularios"><?php echo $apellido; echo $errorApellido; ?></label>
      <input type="text" name="apellido-usuario" id="apellido" value="<?php echo $per_apellido; ?>">
      </div>

      <div class="formularios">
      <label for="email-usuario" class="nombre_formularios"><?php echo $email; echo $errorEmail; ?></label>
      <input type="email" name="email-usuario" id="email" value="<?php echo $per_mail; ?>">
      </div>

      <div class="formularios">
        <label for="usuario-usuario" class="nombre_formularios"><?php echo $usuario; echo $errorUsuario; ?></label>
      <input type="text" name="usuario-usuario" id="usuario" value="<?php echo $per_usuario; ?>">
      </div>

      <div class="formularios">
      <label for="contrasenia-usuario" class="nombre_formularios"><?php echo $contraseña; echo $errorContraseña; ?></label>
      <input type="password" name="contrasenia-usuario" id="contrasenia">
      </div>

      <div class="formularios">
      <label for="validar-contrasenia" class="nombre_formularios"><?php echo $confirmarContraseña; echo $errorConfirmar; ?></label>
      <input type="password" name="validar-contrasenia" id="contrasenia">
      </div>

      <div class="foto">
      <label for="usuario" class="nombre_formularios"><?php echo $foto; echo $errorFoto; ?></label>
      <input type="file" name="foto-usuario" id="foto-usuario">
      </div>

      <input id="boton_enviar" type="submit" name="enviar" value="Enviar">

    </form>
    </div>

<?php include("../layout/footer.php"); ?>
  </body>
</html>
