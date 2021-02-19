<?php
    require "header.php";

    if(isset($_POST['ingresar'])){
        $email = $_POST['email'];
    }
?>

<h2>Bienvenido Sr. <?= $email ?></h2>

<?php
    require "footer.php";
?>