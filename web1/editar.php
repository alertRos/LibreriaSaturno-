<?php
include("../cx_bd.php");
$pdo = getConexion();

$id = $_GET['id'];

if($pdo){
    $cmd = $pdo->prepare("SELECT * FROM titulos WHERE id_titulo = '$id';");
    $cmd->execute();

    $results = $cmd -> fetchAll(PDO::FETCH_OBJ); 

    foreach($results as $result) { 
    $titulo = $result ->titulo;
    $genero = $result -> tipo;
    $precio = $result -> precio;
    $avance = $result -> avance;
    $pub = $result -> fecha_pub;
    $id_pub = $result -> id_pub;
    $t_ventas = $result -> total_ventas;
    $fecha = $result -> fecha_pub;
    $contrato = $result -> contrato;
    $descripcion = $result -> notas;
    
    }
}
?>

<!DOCTYPE html>
<html id="page">
   <head>
      <title>Libreria Saturno - Libros</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge;"/>
      <link rel="icon" type="image/x-icon" href="../saturn.ico">
      <link href="https://unpkg.com/cirrus-ui" type="text/css" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous"/>
      <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous" ></script> 
   </head>
   <body>
<div class="mb-4">
<div class="header header-fixed unselectable header-animated">
         <div class="header-brand">
            <div class="nav-item no-hover">
               <h6 class="title">Libreria Saturno</h6>
            </div>
            <div class="nav-item nav-btn" id="header-btn"> <span></span> <span></span> <span></span> </div>
         </div>
         <div class="header-nav" id="header-menu">
            <div class="nav-right">
            <div class="nav-item has-sub">
               <button class="btn-transparent"><a href="index.php" >Libros</a></button>
               <button class="btn-transparent"><a href="../Página web 2/index.php">Autores</a></button>
               <button class="btn-transparent"><a href="../Página web 3/index.php">Contacto</a></button>
            </div>    
         </div>
            </div>
         </div>
      </div>
</div>

<div class="mt-12">
<h1 class="uppercase text-xl ml-2" style="color:rebeccapurple">Editar libro</h1>
<div class="m-2">
    <section >
        <div class="grid grid-cols-3 u-gap-2" >
            <form action="editar_libros.php" method="POST">
                <input type="hidden" class="form-control" name="id" value="<?php echo $id ?>">
                <input type="hidden" class="form-control" name="id_pub" value="<?php echo $id_pub ?>">
                <input type="hidden" class="form-control" name="contrato" value="<?php echo $contrato ?>">

                <div class="form">
                    <label for="titulo">Titulo</label>
                    <input type="text" name="titulo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $titulo ?>" required>
                </div>
                <div class="form">
                    <label for="tipo">Tipo</label>
                    <input type="tipo" name="tipo" class="form-control" id="exampleInputPassword1" value="<?php echo $genero ?>" required>
                </div>
                <div class="form">
                    <label for="precio">Precio</label>
                    <input type="number" min="0" name="precio" class="form-control" id="exampleInputPassword1" value="<?php echo $precio ?>" required>
                </div>
                <div class="form">
                    <label for="avance">Avance</label>
                    <input type="number" min="0" name="avance" class="form-control" id="exampleInputPassword1" value="<?php echo $avance ?>" required>
                </div>
                <div class="form">
                    <label for="avance">Total de ventas</label>
                    <input type="number" min="0" name="totalVentas" class="form-control" id="exampleInputPassword1" value="<?php echo $t_ventas ?>" required>
                </div>
                <div class="form">
                    <label for="fecha">Fecha</label>
                    <input type="datetime-local" name="fecha" class="form-control" id="exampleInputPassword1" value="<?php echo $fecha ?>" required>
                </div>
                <div class="form">
                    <label for="comentario">Descripción</label>
                    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3" required><?php echo $descripcion ?></textarea>
                </div>
                <button class="btn-link mt-2" onclick="location.href ='index.php'">Volver atrás</button>
                <button type="submit" class="btn-black mt-2 " >Guardar</button>
                </form>
            </div>
    </section>
    </div>
</div>
<script>
    var cont=1;
    function myModaleee(){
        const btn = document.querySelector(".btn-black");
        const text = document.querySelector(".moreText");

        if (cont == 1){
            btn.innerHTML= "Menos detalles";
            cont++;
            text.innerHTML = "Ananana";
            text.style.display = "block";
        }else if(cont == 2){
            btn.innerHTML= "Mas detalles";
            cont--;
            text.style.display = "none";
        }else{
            cont = 1;
        }
    }
    </script>
   </body>
   <footer class="footer">
    <h6 class="footer__title text-white uppercase">SATURNO</h6>
    <div class="content">
        <div class="divider"></div>

        <div class="row">
            <div class="col-4">
                <ul class="no-bullets">
                    <a href="index.php">
                        <li class="footer__list-item">Libros</li>
                    </a>
                    <ul>
                    </ul>
                </ul>
            </div>
            <div class="col-4">
                <ul class="no-bullets">
                    <a href="../Página web 2/index.php">
                        <li class="footer__list-item">Autores</li>
                    </a>
                    <ul>
                    </ul>
                </ul>
            </div>
            <div class="col-4">
                <ul class="no-bullets">
                    <a href="../Página web 3/index.php">
                        <li class="footer__list-item">Contacta con nosotros</li>
                    </a>
                    <ul>
                    </ul>
                </ul>
            </div>
        </div>
    </div>
    <p class="subtitle">Rosmel Beltrán 2022-0398 ©2023.</p>
</footer>
</html>