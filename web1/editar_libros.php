<?php
include("../cx_bd.php");
$pdo = getConexion();

$id = $_POST['id'];

if($pdo){
    $cmd = $pdo->prepare("update titulos set id_titulo=:id, titulo=:titulo, tipo=:tipo, id_pub=:id_pub, precio=:precio, avance=:avance, total_ventas=:total_ventas, notas=:desc, fecha_pub=:fecha_pub, contrato=:contrato where id_titulo = :id");

    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $avance = $_POST['avance'];
    $total_v = $_POST['totalVentas'];
    $fecha = $_POST['fecha'];
    $id_pub = $_POST['id_pub'];
    $desc= $_POST['desc'];
    $contrato = $_POST['contrato'];

    $cmd->bindParam(':id', $id);
    $cmd->bindParam(':titulo', $titulo);
    $cmd->bindParam(':tipo', $tipo);
    $cmd->bindParam(':id_pub', $id_pub);
    $cmd->bindParam(':precio', $precio);
    $cmd->bindParam(':avance', $avance);
    $cmd->bindParam(':total_ventas', $total_v);
    $cmd->bindParam(':desc', $desc);
    $cmd->bindParam(':fecha_pub', $fecha);
    $cmd->bindParam(':contrato', $contrato);

    $cmd->execute();
}
?>
<script>location.href ='index.php';</script>