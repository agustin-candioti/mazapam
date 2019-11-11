<?php include("../layout/header.php"); 


?>

    <h5>Ingresá a tu cuenta</h5>

    <div class="container">

    <form class="" action="login.html" method="post">
      <div class="formularios">
      <label for="usuario" class="nombre_formularios">Usuario</label>
      <input type="text" name="usuario-login" id="usuario">
      </div>

      <div class="formularios">
      <label for="contrasenia-login" class="nombre_formularios">Contraseña</label>
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
