<?php
    $inc = include("../cx_bd.php");
    $pdo = getConexion();
    
    if($pdo){
        $cmd = $pdo->prepare("SELECT id_titulo,titulo,tipo,precio,notas,total_ventas,fecha_pub FROM titulos;");
        $cmd->execute();

        $results = $cmd -> fetchAll(PDO::FETCH_OBJ); 

        foreach($results as $result) { 
        $id = $result -> id_titulo;
        $titulo = $result ->titulo;
        $genero = $result -> tipo;
        $precio = $result -> precio;
        $pub = $result -> fecha_pub;
        $descripcion = $result -> notas;
        ?>

        <div>
            <div class="card">
        <div class="card__container">
            <div class="card__image" style="background-image:url(images/book_w.jpg)"></div>
            <div class="card__title-container">
                <p class="title"><?php echo $titulo ?></p><span class="subtitle">Genero: <?php echo $genero ?></span></div>
        </div>
        <div class="content m-2">
            <div>
            <p style="color: grey;"><i>Año de publicación: <?php echo $pub ?></i></p>
                <?php
                if($descripcion == null){
                    echo "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>";
                }else{
                    echo "<p>$descripcion</p>";
                }
            ?>
            <p class='moreText'></p>
                    <div class="ltr">
            <div>
            </div>
            <?php
                if($precio == null){
                    echo "<div class='card__footer content'>Precio: UNDECIDED </div>";
                }else{
                    echo "<div class='card__footer content'>Precio: $$precio </div>";
                }
            ?>
            </div>
        </div>
        <div class="card__action-bar mr-2" style="text-align: right;">
            <button class="btn-link outline" onclick="location.href ='editar.php?id=<?php echo $id ?>'">Editar</button>
            <button class="btn-link outline" onclick="location.href ='delete_libros.php?id=<?php echo $id ?>'">Eliminar</button>
        </div>
           
    </div>
            </div>
        </div>
          <?php
                    
        }
    }
?>