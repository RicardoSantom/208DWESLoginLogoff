<header>
    <h1>Aplicación LoginLogoff</h1>
    <h2>login</h2>
</header>
<article>
    <h3>Iniciar Sesión</h3>
    <form  method="post">
        <fieldset>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" class="entradadatos"/>
            <label for="password">Password:</label>
            <input type="password" name="password" class="entradadatos" />
            <div class="inicarSesionLogin"><input type="submit" id="login" value="Login" name="login"></div>
            <div class="inicarSesionLogin"><input type="submit" id="volver" value="Volver" name="volver"></div>
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
        </fieldset>
    </form>
</article>