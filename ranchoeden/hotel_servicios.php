     <!--Contenido Header-->
     <?php include('header.php') ?>
     <!--Slider-->
    <script src="./js/jquery.excoloSlider.min.js" type="text/javaScript"></script>
    <script src="./js/jquery.min.js" type="text/javaScript"></script>
    <!--animate css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <!--Slider -->
    <link rel="stylesheet" href="./css/jquery.excoloSlider.css">
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style_hotel_servicios.css">

</head>
<body>
   <!--Contenedor de carga-->
   <div id="contenedor_carga">
    <div id="carga"></div>
   </div>
   

 <!--Navigation-->
 <?php include('navigation.php') ?>


<!--Contenido Página -->
  <header id="header" class="pt-4">
      <div class="container">
          <div class="row">
              <div class="col-md-5 bg-white">
               <div class="header-content-left">
                <div id="slider">
                  <img src="./img/hotel/HotelRanchoeden16.jpg" alt="Slider 1">
                  <img src="./img/hotel/HotelRanchoeden17.jpg" alt="Slider 2">
                  <img src="./img/hotel/HotelRanchoeden18.jpg" alt="Slider 3">
                  <img src="./img/hotel/HotelRanchoeden19.jpg" alt="Slider 4">
                </div>
           
                <script>
                  $(function () {
                       $("#slider").excoloSlider({
                         
                         autoSize:true,	
                         height:450,
                         width: 442, 
                         mouseNav: true,
                         touchnav: true,
                         interval: 8000, // = 8 seconds
                         playReverse: true
                       });
                     });
                </script> <!-- Cierra scritp Slider-->
              </div>
            </div> 
            
              <div class="col-md-7 ml-auto  ">
                      <div class="header-content-rigth">
                       <div class="bg-white">
                          <div class="card">
                              <h4 class="card-header tit-hotel">Bienvenidos</h4>
                              <div>
                              <p class="parrafo_hotel">Junto a nuestro restaurante se encuentra el hotel Rancho Edén rodeado de inmensos prados y naturaleza que  integran armónicamente todas las comodidades en un típico ambiente campestre para un descanso tranquilo y silencioso.</p>
                              <hr>
                              <p class="parrafo_hotel">*El hotel no acepta ingreso de mascotas.</p>
                              <p class="parrafo_hotel">*Cuenta con parqueadero.</p>
                              <h5 class="tit_hotel">****** SERVICIOS CON CARGO ADICIONAL ******</h5>
                              <p class="parrafo_hotel">*Lavandería, con horario de atención de 7:00 a.m. a 4:00 p.m.</p>
                              <a href="./habitaciones.php" class="btn btn-outline-success btn-lg m-3 header-btn">Habitaciones</a>
                              </div>
                            </div>     
                       </div>  
                      </div>
              </div>
                 
              </div>
            </div>
           
    </header>
<br>

 

<div class="container">

    <div class="row">
        
        <div class="col-md-12 bg-white">
            <div class="header-content-left">
            <h5 class="tit-info">¡Información Importante!</h5>
            <p class="mt-5 parrafo_video">EN EL HOTEL RANCHO EDEN estamos comprometidos con:   Ley 1336 de 2009. Contra la explotación, la pornografía, el turismo sexual y otras formas de abuso a menores.  - Ley 397 de 1997. Contra el tráfico del Patrimonio Cultural. - Ley 599 de 2000 y Decreto 1608 de 1978. Contra el tráfico de especies como flora y fauna silvestre. - Ley 1335 de 2009. Anti tabaco, por un espacio libre de humo.</p>
             
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

  
   <!--tarjeta
  
    <div class="container">
       <div class="row">
          <div class="col-md-12 mt-4">
              <div class="card animated fadeInDown">
                <div class="card-body">
                     
                </div>
              </div>
          </div>
       </div>
  </div>
  
  -->
  
  <!--Slider-->
  <script src="./js/jquery.excoloSlider.min.js" type="text/javaScript"></script>
  </body>
  </html>