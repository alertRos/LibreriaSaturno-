<?php
    $inc = include("../cx_bd.php");

    $pdo = getConexion();

    if($pdo){
        $cmd = $pdo->prepare("insert into contacto (fecha,correo,nombre,asunto,comentario) values(:fecha,:correo,:nombre,:asunto,:comentario)");
        
        date_default_timezone_set('UTC');

        $nombre = $_POST['nombre'];
        $correo = $_POST['email'];
        $asunto = $_POST['asunto'];
        $comentario = $_POST['comentario'];
        $fecha = date("Y-m-d H:i:s"); 

        $cmd->bindParam(':fecha', $fecha);
        $cmd->bindParam(':correo', $correo);
        $cmd->bindParam(':nombre', $nombre);
        $cmd->bindParam(':asunto', $asunto);
        $cmd->bindParam(':comentario', $comentario);

        $cmd->execute();
        echo "<script>alert('Mensaje enviado con exito.');location.href ='index.php';</script>";
    }
?>
