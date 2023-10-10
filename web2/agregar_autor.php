<?php
include("../cx_bd.php");
$pdo = getConexion();

$random1 = rand(100,999);
$random2 = rand(10,99);
$random3 = rand(100,999);

$id = $random1."-".$random2."-".$random3;

if($pdo){
    $cmd = $pdo->prepare("INSERT INTO autores(id_autor,nombre,apellido,telefono,direccion,ciudad,estado,pais,cod_postal) VALUES(:id,:nombre,:apellido,:telefono,:direccion,:ciudad,:estado,:pais,:cod_postal)");

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