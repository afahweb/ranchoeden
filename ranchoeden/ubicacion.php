    <!--Contenido Header-->
    <?php include('header.php') ?>
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style_ubicacion.css">
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
               <div class="col-md-12">
               <h2 class="tit_ubicacion">Ubicanos Fácilmente</h2>
            </div>
               <div class="col-md-8">
                 <div class="mapa float-left">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.678541379826!2d-75.76590898591016!3d4.470711444855304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e385902e2dc40e7%3A0x9a6046b908f472b!2sRestaurante+Rancho+Eden!5e0!3m2!1sen!2sco!4v1563386791292!5m2!1sen!2sco" frameborder="0" style="border:0" allowfullscreen>
                    </iframe>
                 </div>
               </div>

               <div class="col-md-4">
                    <div class="float-right">
                            <div class="card">
                                    <img src="./img/ubicacionrestaurante.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                      <h5 class="card-title">| HORARIO DE ATENCIÓN |</h5>
                                      <p class="card-text">Lunes - Domingo</p>
                                      <p>Hora: 07:00am -- 09:00pm</p>
                                      <p>Desayunos Hora: 07:00am -- 11:00am</p>
                                      
                                      <a href="./contacto.php" class="btn btn-primary">Reservar</a>
                                    </div>
                                  </div>
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

</body>
</html>