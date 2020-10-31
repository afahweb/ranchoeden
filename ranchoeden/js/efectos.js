'use strict'

// Indicador de carga pagina principal
window.onload = function(){
    var contenedor = document.getElementById('contenedor_carga');
    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
}

//Slider
/* $('.carousel').carousel({
   interval: 2000,
   touch:true  
 }) */


 /* //navbar superior
window.sr = ScrollReveal();
sr.reveal('.navbar',{
   duration : 1000,
   origin: 'bottom'
   
}); */

//----------Efectos página inicio--------//
//Foto principal

window.sr = ScrollReveal();
sr.reveal('.header',{
   duration : 2000,
   origin: 'bottom'
   
});

//logotipo
window.sr = ScrollReveal();
sr.reveal('.logotipo',{
   duration : 2000,
   origin: 'bottom'
   
});
// titulo serevicios
window.sr = ScrollReveal();
sr.reveal('.color-menu',{
   duration : 2000,
   origin: 'bottom'
   
});

// navbar inferior
window.sr = ScrollReveal();
sr.reveal('.menu-vertical',{
   duration : 2000,
   origin: 'bottom'
   
});

//Efectos Slider
window.sr = ScrollReveal();
sr.reveal('.carousel',{
   duration : 2000,
   origin: 'bottom'
});

//Efectos linea
window.sr = ScrollReveal();
sr.reveal('.linea-div',{
   duration : 2000,
   origin: 'bottom'
});

//Efecto video
window.sr = ScrollReveal();
sr.reveal('.video',{
   duration : 2000,
   origin: 'bottom'
});

//efectos titulo video
window.sr = ScrollReveal();
sr.reveal('.tit-video',{
   duration : 2000,
   origin: 'bottom'
});

//Efectos parrafo video
window.sr = ScrollReveal();
sr.reveal('.parrafo_video',{
   duration : 2000,
   origin: 'bottom'
});


//---------Efectos Pagina Carta-----------//

window.sr = ScrollReveal();
sr.reveal('.container',{
   duration : 2000,
   origin: 'bottom',
});


$('#btn-ver-menu').on('click', function(){
   $('.pagina-izquierda').addClass("pagina-izquierda2");
   setTimeout(function(){
     $('.pagina-derecha').addClass("pagina-derecha2");
   },400);
   
 });
 
 
 $('.btn-cerrar').on('click', function(){
     $('.pagina-derecha').removeClass("pagina-derecha2");
     setTimeout(function(){
         $('.pagina-izquierda').removeClass("pagina-izquierda2");
     },400);
     
   });
 
   //Efecto sobre carta desayuno
   $('#btn-ver-menud').on('click', function(){
     $('.pagina-izquierdad').addClass("pagina-izquierda2d");
     setTimeout(function(){
       $('.pagina-derechad').addClass("pagina-derecha2d");
     },400);
     
   });
   
   
   $('.btn-cerrard').on('click', function(){
       $('.pagina-derechad').removeClass("pagina-derecha2d");
       setTimeout(function(){
           $('.pagina-izquierdad').removeClass("pagina-izquierda2d");
       },400);
       
     });

//Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
   anchor.addEventListener('click', function (e) {
       e.preventDefault();

       document.querySelector(this.getAttribute('href')).scrollIntoView({
           behavior: 'smooth'
       });
   });
});


//---------Efectos Hotel-----------//
//Carrusel página características

//Hacia partede del carrusel como componente de bootstrap, el cual no se esta utilizando.
/* $('.carousel-caracteri').carousel({
   interval: 8000,
   touch:true  
 }); */

 window.sr = ScrollReveal();
 sr.reveal('.tit_caract1',{
    duration : 2000,
    origin: 'bottom'
 }); 

 window.sr = ScrollReveal();
 sr.reveal('.parrafo_caracte1',{
    duration : 2000,
    origin: 'bottom'
 }); 




/*

window.sr = ScrollReveal();
sr.reveal('.tr',{
   duration : 3000,
   origin: 'top',
   distance: '300px'
});

window.sr = ScrollReveal();
sr.reveal('.bd-example',{
   duration : 3000,
   origin: 'bottom'
});

window.sr = ScrollReveal();
sr.reveal('.header-content-right',{
   duration : 3000,
   origin: 'left',
   distance:'300px'
});

window.sr = ScrollReveal();
sr.reveal('.header-content-left',{
   duration : 2000,
   origin: 'right',
   distance:'300px'
});
window.sr = ScrollReveal();
sr.reveal('.footer',{
   duration : 5000,
   origin: 'bottom',
   distance:'300px'
});

window.sr = ScrollReveal();
sr.reveal('.header-btn',{
   duration : 4000,
   origin: 'bottom',
   delay:2000
});

//Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
}); */