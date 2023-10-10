<!DOCTYPE html>
<html id="page">
   <head>
      <title>Libreria Saturno - Autores</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge;"/>
      <link rel="icon" type="image/x-icon" href="../saturn.ico">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
            <button class="btn-transparent"><a href="../web1/index.php">Libros</a></button>
               <button class="btn-transparent"><a href="../web2/index.php">Autores</a></button>
               <button class="btn-transparent"><a href="index.php">Contacto</a></button>
            </div>    
         </div>
            </div>
         </div>
      </div>
</div>

<div class="mt-12">
    <h1 class="uppercase text-xl ml-4" style="color:rebeccapurple">Contactanos</h1>
<div class="ml-4 mt-2 mr-4">
    <section >
    <form action="contactos.php" method="POST">
  <div class="form">
    <label for="email">Correo electronico</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo electronico" required>
  </div>
  <div class="form">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu nombre" required>
  </div>
  <div class="form">
    <label for="asunto">Asunto</label>
    <input type="text" name="asunto" class="form-control" id="exampleInputPassword1" placeholder="Escriba el asunto" required>
  </div>
  <div class="form">
    <label for="comentario">Comentario</label>
    <textarea class="form-control" name="comentario" id="exampleFormControlTextarea1" rows="3" placeholder="Escriba un comentario"></textarea>
  </div>
  <button type="submit" class="btn-black mt-2 " >Enviar</button>
</form>
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
                    <a href="../web1/index.php">
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
                    <a href="index.php">
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