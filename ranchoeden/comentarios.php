    <!--Contenido Header-->
    <?php include('header.php') ?>
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style_comentarios.css">
</head>
<body>
     <!--Contenedor de carga-->
    <div id="contenedor_carga">
        <div id="carga"></div>
    </div>

        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.3"></script>

    <!--Navigation-->
    <?php include('navigation.php') ?>

<!--Contenido Principal-->
<div class="container">
    <div class="row">
        <div class="col-md-12 pt-4">
        <div class="card comentarios">
                <div class="card-header">
                  Comentarios de los visitantes
                </div>
                <div class="card-body">
                  <h5 class="card-title">Revisa lo que las personas piensan de nosotros y deja tu opinión. <i class="far fa-thumbs-up fa-2x"></i></h5>
                  <p class="card-text">Quindío, Sabor y Dencanso.</p>
                  <a href="./contacto.php" class="btn btn-primary">Contactar</a>
                </div>
              </div>
    </div>
</div>
    <div class="fb-comments bg-white" data-href="http://www.ranchoeden.com/comentarios.html" data-width="50%" data-numposts="5"></div>

 
</div>
<hr>

  
<!--Api de Whatsapp-->
<a class="appWhatsapp " target="_blanck" href="https://api.whatsapp.com/send?phone=573155484830&text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
    <img src="./img/whatsapp.png" alt="Chat Whatsapp">
  </a>
  
  <!--Contenido Footer-->
  <?php include('footer.php'); ?>

</body>
</html>