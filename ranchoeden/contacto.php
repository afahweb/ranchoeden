     <!--Contenido Header-->
     <?php include('header.php') ?>
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style_contacto.css">
</head>
<body>
     
<!--Contenedor de carga-->
<div id="contenedor_carga">
  <div id="carga"></div>
</div>
   
   <!--Navigation-->
   <?php include('navigation.php') ?>


<!--Contenido Principal-->
<header class="pt-4">
<div class="container bg-white"> 
    <div class="row">
        <div class="col-md-4 text-contacto">
            <div class="bg-white ">
             <h4>Contactenos</h4>
             <p>Para todo tipo de preguntas, comentarios e inquietudes, por favor llamar o escribir.</p>
             <p>- Reservar y/o solicitar información de nuestro RESTAURANTE Y HOTEL por este medio.</p>
             <p>- Por favor llenar el formulario a continuación.</p> 
             <p>- Podrá abrir el Chat en línea tocando el icono de Whatsapp.</p> 
             <p>- Cel. 315 548 48 30.</p>
             </div>

        </div>
        <div class="col-md-4 float-left text-contacto">
           <div class=" bg-white">
              <h4>Formulario de Contacto</h4>
              
              <form class="formulario-contacto" method="POST" action="./sistema/contacto.php">
                    <div class="form-group">
                    <input type="text" name="nombre" class="form-control" id="campo_nombre" aria-describedby="emailHelp" placeholder="Ingresar su nombre" required>
                    </div>
                    <div class="form-group">
                    <input type="number" name="telefono" class="form-control" id="campo_tel" placeholder="Teléfono contacto" required>
                    </div>
                    <input type="text" name="asunto" class="form-control" id="campo_asunto" aria-describedby="emailHelp" placeholder="Asunto del mensaje" required>
                    </div>
                    <br>
                    <div class="form-group">
                    <textarea class="form-control" name="mensaje" id="campo_mensaje" rows="3" placeholder="Comentar..." required></textarea>
                    <small id="emailHelp" class="form-text text-muted" >¡No compatiremos tu información!</small>
                    </div>
                      <div class="form-group">
                    <button id="Enviar" type="submit" class="btn btn-primary form-control">Enviar</button>
                      </div>
                      <div id="alerta" class="alert d-none">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>¡ Gracias, en breve será contactado !</strong>    
                      </div>
                  </form>
                  
           </div>
                  
                 <div class="col-md-4 float-right text-contacto">
                   <div class="img_contacto">
                   <h4>Vista desde arriba</h4>
                   <a href="./galeria.html"><img src="./img/ranchoeden11.png" alt="Vista desde arriba"></a> 
                  </div>
                 </div>
        </div>
        
    </div>
</header>
<br>

  
<!--Api de Whatsapp-->
<a class="appWhatsapp " target="_blanck" href="https://api.whatsapp.com/send?phone=573155484830&text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
  <img src="./img/whatsapp.png" alt="Chat Whatsapp">
</a>

<!--Contenido Footer-->
<?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="./js/envio.js" type="text/javaScript"></script>

</body>
</html>    

