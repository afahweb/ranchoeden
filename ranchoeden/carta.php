    <!--Contenido Header-->
    <?php include('header.php') ?>
    
    <!--Custom CSS-->
    <link rel="stylesheet" href="./css/style_carta.css">
</head>
<body>
  
  <!--Contenedor de carga-->
  <div id="contenedor_carga">
    <div id="carga"></div>
  </div>

 <!--Navigation-->
 <?php include('navigation.php') ?>

 <!--Línea divisora-->  

<!-- <div class="container bg-white">
  <div class="row">
       <div class="col-md-12">
         <hr class="linea-div">
         <br>
       </div>
  </div> -->
 
 <!-- Button trigger modal -->
<div class="container">

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-dog"></i> ¿Mascotas?.
</button> 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Estimado Cliente!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Su mascota es bienvenida al restaurante rancho edén, tenga en cuenta que debe ubicarse en los sitios asignados por el restaurante y permanecer a su lado con correa, recuerde que es su responsabilidad mantener el lugar limpio. <i class="fas fa-dog fa-lg"></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</div>
<!--Contenedor Menú-->
<div class="container">
<hr>

    <div class="contenedor-menu ml-auto" id="menu_almuerzo"> 
         
     <div class="pagina-izquierda">
         <div class="delante lado">
                 <img src="./img/ranchoeden13.jpg" alt="Nuestro Menú de Almuerzo">
                 <h1>Almuerzo y Cena</h1>
                 <hr>
                 <h3>Rancho Edén, Tú mejor opción</h3>
                 
                 <a id="btn-ver-menu" class="btn btn-outline-success btn-lg mt-2 header-btn">Abrir Carta</a>
                 <h3>Top de los más vendidos</h3>
                 <ul class="list-group-item">
                   <li class="list-group">Costillas BBQ</li>
                   <li class="list-group">Cazuela Cuyabra</li>
                   <li class="list-group">Bandeja Paisa</li>
                   <li class="list-group">Baby Beef</li>
                   <li class="list-group">Punta de Anca</li>
                 </ul>
         </div>
         <div class="atras lado">

              <div class="contenedor-lista">
                  <div class="lista-uno">
                          <h1>Sopas y más</h1>
                          <img src="./img/menuizquierdanew.jpg" alt="Sopas y más">
                          <hr>
                          <p>Gran variedad</p>
                  </div>
                 
              </div>
              
         </div>
    </div>
    <div class="pagina-central">
            <div class="contenedor-lista">
                    <div class="lista-centro">
                            <h1>Asados al Carbón</h1>
                            <img src="./img/menucentronew.jpg" alt="Asados al Carbón">
                            <hr>
                            <p style="text-align: center">Plato para llevar sin costo adicional</p>
                    </div>
                   
                </div>
    </div>

        <div class="pagina-derecha">
            <div class="contenedor-lista lado-pagina-derecha">
                    <div class="lista-uno">
                            <h1>Típicos y Postres</h1>
                            <img src="./img/menuderechanew.png" alt="Típicos">
                            <hr>
                            <p>Únicos de la casa</p>
                    </div>
                   
                </div>
              <div class="pagina-derecha-atras lado-pagina-derecha">
                
              </div>
              <div class="btn-cerrar lado-pagina-derecha">
                    x
              </div>
        </div>

     </div>
    
    <!--Carta Desayuno-->

     <div class="contenedor-menud" id="menu_desayuno"> 
         
        <div class="pagina-izquierdad">
            <div class="delante ladod">
                    <img src="./img/cartadesayuno.JPG" alt="Desayunos">
                    <h1>Desayunos</h1>
                    <hr>
                    <h3>Rancho Edén, Tú mejor opción</h3>
                    
                    <a id="btn-ver-menud" class="btn btn-outline-success btn-lg mt-2 header-btn">Abrir Carta</a>
                    <br>
                    <br>
                    <hr>
                    <br>
                    <hr>
                    <h3>Típicos y postres...</h3>
            </div>
            <div class="atrasd ladod">
   
                 <div class="contenedor-listad">
                     <div class="lista-unod">
                             <h1></h1>
                             <img src="./img/desayunoizquierdanew.jpg" alt="Sopas y más">
                             <hr>
                             
                     </div>
                    
                 </div>
                 
            </div>
       </div>
       <div class="pagina-centrald">
               <div class="contenedor-listad">
                       <div class="lista-centrod">
                               <h1></h1>
                               <img src="./img/desayunocentronew.jpg" alt="Asados al Carbón">
                               <hr>
                               
                       </div>
                      
                   </div>
       </div>
   
           <div class="pagina-derechad">
               <div class="contenedor-listad lado-pagina-derechad">
                       <div class="lista-uno">
                               <h1></h1>
                               <img src="./img/desayunoderechonew.jpg" alt="Típicos">
                               <hr>
                               
                       </div>
                      
                   </div>
                 <div class="pagina-derecha-atrasd lado-pagina-derechad">
                   
                 </div>
                 <div class="btn-cerrard lado-pagina-derechad">
                       x
                 </div>
           </div>
   
        </div>
  
<!--Card para movil almuerzo-->
<div class="card" style="width: 18rem;" id="carta_almuerzo_movil">
  <img src="./img/ranchoeden13.jpg" class="card-img-top" alt="Carta Almuerzo">
  <div class="card-body">
    <h5 class="card-title">Almuerzo y Cena</h5>
    <p class="card-text">Rancho Eden tu mejor opción</p>
      <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#Modal_Sopas">
        Sopas. <i class="fas fa-utensils"></i>
      </button> 
      <button type="button" class="btn btn-danger form-control mt-2" data-toggle="modal" data-target="#Modal_Tipicos">
        Asados al Carbón. <i class="fas fa-drumstick-bite"></i>
      </button> 
      <button type="button" class="btn btn-info form-control mt-2" data-toggle="modal" data-target="#Modal_Postres">
        Típicos y Postres. <i class="fas fa-ice-cream"></i>
      </button>
      <!-- Modal Sopas -->
<div class="modal fade" id="Modal_Sopas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Sopas!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="./img/menuizquierdanew.jpg" alt="Sopas" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success " data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--Fin Modal-->

<!-- Modal Asados al Carbon -->
<div class="modal fade" id="Modal_Tipicos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Asados Al Carbón!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="./img/menucentronew.jpg" alt="Menu Asados al Carboón" width="100%">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger " data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<!--Fin Modal-->

<!-- Modal Postres -->
      <div class="modal fade" id="Modal_Postres" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">¡Típicos y Postres!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <img src="./img/menuderechanew.png" alt="Típicos y Postres" width="100%">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info " data-dismiss="modal">Cerrar</button>
              
            </div>
          </div>
        </div>
      </div>
      <!--Fin Modal-->

  </div>
</div>
<!--Fin Card para movil-->
<!--Card para movil desayuno-->
<div class="card mt-5" style="width: 18rem;" id="carta_desayuno_movil">
  <img src="./img/cartadesayuno.JPG" class="card-img-top" alt="Carta ">
  <div class="card-body">
    <h5 class="card-title">Desayunos</h5>
    <p class="card-text">Rancho Eden tu mejor opción</p>
    <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#Modal_Desayuno">
      Ver Menú. <i class="fas fa-bread-slice"></i>
    </button> 
    <button type="button" class="btn btn-dark form-control mt-2" data-toggle="modal" data-target="#Modal_Bebidas">
      Bebidas <i class="fas fa-coffee"></i>
    </button>
     
    <!-- Modal Desayuno -->
    <div class="modal fade" id="Modal_Desayuno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¡Desayunos!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="./img/desayuno1new.jpg" alt="Desayuno" width="100%">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success " data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    <!--Fin Modal-->
     
    <!-- Modal Bebidas -->
    <div class="modal fade" id="Modal_Bebidas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Bebidas!</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <img src="./img/bebidasnew.jpg" alt="Bebidas" width="100%">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-dark " data-dismiss="modal">Cerrar</button>
            
          </div>
        </div>
      </div>
    </div>
    <!--Fin Modal-->


  </div>
</div>

<!--Fin Card para movil-->

<div class="col-md-12 pb-4 btn-carta">
  <div class="header-content-right">
   <a href="#nav" class="btn btn-outline-light btn-lg mt-2"><i class="fas fa-arrow-up"></i></a>
  </div>
</div>  



</div>

<!--Api de Whatsapp-->
<a class="appWhatsapp " target="_blanck" href="https://api.whatsapp.com/send?phone=573155484830&text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
  <img src="./img/whatsapp.png" alt="Chat Whatsapp">
</a>

<!--Contenido Footer-->
<?php include('footer.php'); ?>  

<!--Scritp Carta Dinamica-->
<script src="./js/cartadinamica.js" type="text/javaScript"></script>

</body>
</html>