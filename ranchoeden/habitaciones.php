    <!--Contenido Header-->
    <?php include('header.php') ?>
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style_habitaciones.css">
</head>

<body>
     <!--Contenedor de carga-->
  <div id="contenedor_carga">
        <div id="carga"></div>
    </div>


   <!--Navigation-->
   <?php include('navigation.php') ?>

<!--Contenido Página Inicial-->
<header class="pt-4">
<div class="container">
<div class="card-group card_habitaciones">
    <div class="card">
      <img src="./img/hotel/HabitacionRanchoeden1.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Dobles</h5>
        
      </div>
    </div>
    <div class="card">
      <img src="./img/hotel/HabitacionRanchoeden2.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Sencillas</h5>
        <a href="./galeria.php" class="btn btn-outline-success btn-sm mt-2 header-btn">Ver más</a>
        
      </div>
    </div>
    
    <div class="card">
    <img src="./img/hotel/HabitacionRanchoeden3.jpg" class="card-img-top" alt="Familiar">
    <div class="card-body">
    <h5 class="card-title">Familiar</h5>
    
       
        
      </div>
    </div>
  </div>
</div>  
</header>
<br>

  <!--Contenido Página-->
 <div class="container">
   <div class="row">
       <div class="col-md-12">
            <div class="card">
                    <h4 class="card-header tit-hotel">Habitaciones</h4>
                    <div>
                    <p class="parrafo_hotel">El hotel rancho eden  cuenta con 16 cabañas de categoría estándar, divididas en 4 módulos, con arquitectura colonial de techos altos en material de guadua y arquitectura típica cafetera con balcón para descansar en una confortable hamaca.</p>
                    <hr>
                    
                    <h5 class="tit_hotel">Cabañas con capacidad máxima 4 personas, acondicionadas  asi:</h5>
                    <ul class="list-group list-group-horizontal-xl">
                            <li class="list-group-item"><i class="fas fa-tv"></i> Televisión por cable</li>
                            <li class="list-group-item"><i class="fas fa-phone"></i> Teléfono</li>
                            <li class="list-group-item"><i class="fas fa-archive"></i> Cajilla Seguridad</li>
                            <li class="list-group-item"><i class="fas fa-shower"></i> Baño con ducha caliente</li>
                            <li class="list-group-item"><i class="fas fa-wind"></i> Secador</li>
                            <li class="list-group-item"><i class="fas fa-hands"></i> Amenidades</li>
                            <li class="list-group-item"><i class="fas fa-stopwatch"></i> Despertador</li>
                            <li class="list-group-item"><i class="fas fa-asterisk"></i> Aire acondicionado</li>
                            <li class="list-group-item"><i class="fas fa-wifi"></i> Wifi</li>
                    </ul>
                    <a href="./contacto.php" class="btn btn-outline-success btn-lg m-3 header-btn">Reservar</a>
                    </div>
                  </div> 
       </div>

   </div>
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