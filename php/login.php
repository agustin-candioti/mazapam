<?php 

session_start();
require_once("../functions/validar.php");
include("../layout/header.php"); 

$perUsuario = "";
?>

    <h5>Ingresá a tu cuenta</h5>

    <div class="container">

    <form class="" action="../functions/validar.php" method="post">
      <div class="formularios">
      <label for="usuario" class="nombre_formularios">Usuario</label>
      <input type="text" name="usuario-login" id="usuario" value="<?php echo $perUsuario ?>">
      </div>

      <div class="formularios">
      <label for="contrasenia-login" class="nombre_formularios"><?php echo $contra; echo $errorContra; ?></label>
      <input type="password" name="contrasenia-login" id="contrasenia-login">
      </div>
      <div class="recordarme">
      <input type="checkbox" id="recordarme"><span id="recordarme">Recordarme</span>
      </div>
      <input id="boton_ingresar" type="submit" name="ingresar" value="Ingresar">
      </form>

      <div id="olvide">
      <span id="olvide"><a href="" target="_blank">Olvidé mi contraseña</a></span>
      </div>
      </div>

      
      <?php include("../layout/footer.php"); ?>
    </body>
  </html>
