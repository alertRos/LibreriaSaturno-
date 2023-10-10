<?php
include("../cx_bd.php");
$pdo = getConexion();

$id = $_POST['id'];

if($pdo){
    $cmd = $pdo->prepare("UPDATE autores set id_autor=:id, nombre=:nombre, apellido=:apellido, telefono=:telefono, 
    direccion=:direccion, ciudad=:ciudad, estado=:estado, pais=:pais, cod_postal=:cod_postal WHERE id_autor = :id");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $ciudad = $_POST['ciudad'];
    $estado = $_POST['estado'];
    $cod_postal= $_POST['cod-postal'];
    $pais = $_POST['pais'];

    $cmd->bindParam(':id', $id);
    $cmd->bindParam(':nombre', $nombre);
    $cmd->bindParam(':estado', $estado);
    $cmd->bindParam(':apellido', $apellido);
    $cmd->bindParam(':telefono', $telefono);
    $cmd->bindParam(':direccion', $direccion);
    $cmd->bindParam(':cod_postal', $cod_postal);
    $cmd->bindParam(':ciudad', $ciudad);
    $cmd->bindParam(':pais', $pais);

    $cmd->execute();
}
?>
<script>location.href ='index.php';</script>