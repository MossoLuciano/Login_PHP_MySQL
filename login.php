<?php
    require "header.php";
?>

<div class="login">
    <h1 class="tituloLogin">Login</h1><br>
    <form action="#" method="POST" class="formularioLogin">
        <input type="email" name="email" class="email" placeholder="Email"><br><br>
        <input type="password" name="clave" class="clave" placeholder="Password"><br><br>
        <input type="submit" value="Ingresar" name="ingresar" class="botonIngresar"><br><br>
        <a href="registro.php">Registrarme</a>
    </form>
</div>

<?php
    require "footer.php";
?>
