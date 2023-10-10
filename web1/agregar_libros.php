<?php
include("../cx_bd.php");
$pdo = getConexion();

$iniciales = array("PS", "PC", "BU", "TC","MC" );
$random = rand(0, count($iniciales));
$id = $iniciales[$random].rand(1000,9999);

if($pdo){
    $cmd = $pdo->prepare("INSERT INTO titulos (id_titulo, titulo, tipo, id_pub, precio, avance, total_ventas, notas, fecha_pub, contrato) VALUES(:id, :titulo, :tipo, :id_pub, :precio, :avance, :total_ventas, :notas, :fecha_pub, :contrato);");

    $titulo = $_POST['titulo'];
    $tipo = $_POST['tipo'];
    $precio = $_POST['precio'];
    $avance = $_POST['avance'];
    $total_v = $_POST['totalVentas'];
    $fecha = $_POST['fecha'];
    $id_pub = rand(1000, 9999);
    $desc= $_POST['desc'];
    $contrato = 1;

    $cmd->bindParam(':id', $id);
    $cmd->bindParam(':titulo', $titulo);
    $cmd->bindParam(':tipo', $tipo);
    $cmd->bindParam(':id_pub', $id_pub);
    $cmd->bindParam(':precio', $precio);
    $cmd->bindParam(':avance', $avance);
    $cmd->bindParam(':total_ventas', $total_v);
    $cmd->bindParam(':notas', $desc);
    $cmd->bindParam(':fecha_pub', $fecha);
    $cmd->bindParam(':contrato', $contrato);

    $cmd->execute();
}
?>
<script>location.href ='index.php';</script>