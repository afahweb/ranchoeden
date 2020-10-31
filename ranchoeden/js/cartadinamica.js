console.log("Script cargado ok");

if (screen.width <= 768){
    $("#menu_almuerzo").hide();// ocultamos la carta  almuerzo 3d.
    $("#menu_desayuno").hide();// ocultamos la carta desayuno 3d.
    $("#carta_almuerzo_movil").show();
    $("#carta_desayuno_movil").show();
}else{
    $("#menu_almuerzo").show();
    $("#menu_desayuno").show();
    $("#carta_almuerzo_movil").hide();
    $("#carta_desayuno_movil").hide();

}

