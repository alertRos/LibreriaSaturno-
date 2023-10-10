<?php
    $inc = include("../cx_bd.php");
    $pdo = getConexion();
    
    if($pdo){
        $cmd = $pdo->prepare("SELECT id_autor,nombre,apellido,telefono,direccion,ciudad,estado,pais,cod_postal FROM autores;");
        $cmd->execute();

        $results = $cmd -> fetchAll(PDO::FETCH_OBJ); 

        foreach($results as $result) { 
        $id = $result -> id_autor;
        $nombre = $result ->nombre." ".$result -> apellido;
        $telefono = $result -> telefono;
        $direccion= $result -> direccion.", ".$result -> ciudad.". ".$result -> estado.", ".$result -> pais;
        $cod_postal = $result -> cod_postal;
        ?>

        <div>
            <div class="card">
        <div class="card__container">
            <div class="card__image" style="background-image: url(images/pencil.jpg); filter: blur(1.5px)"></div>
            <div class="card__title-container">
                <p class="title"><?php echo $nombre ?></p><span class="subtitle">Contacto: <?php echo $telefono ?></span></div>
        </div>
        <div class="content m-2">
            <div>
            <p style="color: grey;"><i><b>Dirección:</b> <?php echo $direccion ?></i></p>
            <p style="color: grey;"><i><b>Código postal:</b> <?php echo $cod_postal ?></i></p>
                    <div class="ltr">
            <div>
            </div>
            </div>
        </div>
        <div class="card__action-bar mr-2" style="text-align: right;">
            <button class="btn-warning outline" style="color: black;" onclick="location.href ='editar.php?id=<?php echo $id ?>'">Editar</button>
            <button class="btn-warning outline" style="color: black;" onclick="location.href ='delete.php?id=<?php echo $id ?>'">Eliminar</button>
        </div>
                </div>
            </div>
        </div>
                <?php
        }
    }
?>
