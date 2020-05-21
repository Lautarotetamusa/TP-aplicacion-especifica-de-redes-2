function verDropdown(){
  var dropdown = document.getElementById("dropdown");
  var botonera = document.getElementById("botonera_chica");

  dropdown.style.removeProperty('display');
  botonera.style.height = "300px";

  botonera.addEventListener("mouseleave", ocultarDropDown);
}

function ocultarDropDown(){
  var dropdown = document.getElementById("dropdown");
  var botonera = document.getElementById("botonera_chica");

  botonera.style.height = "inherit";

  dropdown.style.display = "none";
}

function resize(){
  if(window.innerWidth > 720){ //Desktop
    botonera_grande();
  }
  else{
    botonera_chica();

    var boton = document.getElementById("boton");

    boton.addEventListener("mouseenter", verDropdown);
  }
}

var estado = 3;
var stop = false;
var imagen;


function init(id){
  imagen = document.getElementById(id);
  stop = false;
}

function vibracion(){

  if(!stop){
    imagen.style.transform = 'rotate('+estado+'deg)';
    estado = -estado;
    setTimeout("vibracion()", 50);
  }
}

function novibracion(imagen){
  imagen.style.transform = 'none';
  stop = true;
}


function botonera_chica(){
  var botoneraG = document.getElementById("botonera_grande");
  var botoneraC = document.getElementById("botonera_chica");


  botoneraG.style.display = "none";
  botoneraC.style.display = "inline-block";
}

function botonera_grande(){
  var botoneraG = document.getElementById("botonera_grande");
  var botoneraC = document.getElementById("botonera_chica");


  botoneraG.style.display = "flex";
  botoneraC.style.display = "none";
}
