<?php
    include "conexion.php";

    function GuardarUsuario($email, $clave){
        try{
            global $conexion;

            $clave = password_hash($clave, PASSWORD_DEFAULT);
            $sql = "INSERT INTO usuario (Email, Clave) VALUES (?,?)";
            $resultado = $conexion->prepare($sql);
            $resultado->bindParam(1, $email, PDO::PARAM_STR);
            $resultado->bindParam(2, $clave, PDO::PARAM_STR);

            if($resultado->execute()){
                echo "<strong>Usuario registrado correctamente</strong>";
            }else{
                echo "<strong>No se pudo regitrar el usuario. Vuelva a intentarlo</strong>";
            }
            
        }catch(PDOException $ex){
            throw new PDOException($ex->getMessage());
        }
    }