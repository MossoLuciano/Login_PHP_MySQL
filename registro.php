<?php
    require "header.php";
?>

<div class="registro">
    <h1 class="tituloRegistro">Registro de usuario: </h1><br>
    <form action="#" method="POST" class="formularioRegistro">
        <input type="email" name="email" class="email" placeholder="Email"><br><br>
        <input type="password" name="clave" class="clave" placeholder="Password"><br><br>
        <input type="submit" value="Guardar" name="guardar" class="btn_GuardarUsuario"><br><br>
    </form>
</div>

<?php
    require "footer.php";
?>