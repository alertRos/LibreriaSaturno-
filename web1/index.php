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
<div >
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
               <button class="btn-transparent"><a href="../web2/index.php">Autores</a></button>
               <button class="btn-transparent"><a href="../web3/index.php">Contacto</a></button>
            </div>    
         </div>
            </div>
         </div>
      </div>
</div>

<div class="mt-10">
<div class="divider text-xl " data-content="Libros disponibles"></div>
<a href="agregar.php" class="utb utb-OLR text-lg ml-4 border-warning " style="color:rebeccapurple;">+ Agregar libro</a>
<div class="m-4">
    <section >
        <div class="grid grid-cols-3 u-gap-2" >
            <?php
                include("enviar_libros.php");
            ?>
            </div>
    </section>
    </div>
</div>
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
                    <a href="../web2/index.php">
                        <li class="footer__list-item">Autores</li>
                    </a>
                    <ul>
                    </ul>
                </ul>
            </div>
            <div class="col-4">
                <ul class="no-bullets">
                    <a href="../web3/index.php">
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