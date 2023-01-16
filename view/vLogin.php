<header id="headerId">
    <h1>Aplicación LoginLogoff</h1>
</header>
<form  method="post">
    <fieldset>
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" class="entradadatos"/>
        <label for="password">Password:</label>
        <input type="password" name="password" class="entradadatos" />
        <div class="inicarSesionLogin"><input type="submit" id="login" value="Login" name="login"></div>
        <div class="inicarSesionInicioPublico"><input type="submit" id="registrarse" value="Registrarse" name="registrarse"></div>
        <div class="inicarSesionLogin"><input type="submit" id="cancelar" value="Cancelar" name="cancelar"></div>
    </fieldset>
</form>
<!--<select name="listaDesplegable" value="<?php
/* if (isset($_REQUEST['listaDesplegable'])) {
  echo $_REQUEST['listaDesplegable'];
  } */
?>"
 <option value="null">Elija una opcion :</option>
 <option value="es">Español</option>
 <option value="pt">Portugués</option>
 <option value="en">Inglés</option>
</select>>-->