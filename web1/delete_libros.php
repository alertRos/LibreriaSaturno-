<?php
include("../cx_bd.php");
$pdo = getConexion();

$id = $_GET['id'];
if($pdo){
    $cmd = $pdo->prepare("DELETE FROM titulos WHERE id_titulo = :id");

    $cmd->bindParam(':id', $id);
    $cmd->execute();
}
?>
<script>location.href ='index.php';</script>