var tabs = document.querySelectorAll("[data-tab-target]");
var tabContent = document.querySelectorAll("[data-tab-content]");

tabs.forEach(tab =>{
    tab.addEventListener("click", () =>{
      const target = document.querySelector(tab.dataset.tabTarget)
      tabContent.forEach(tabContent => {
        tabContent.classList.remove("active")
      })
      tabs.forEach(tab => {
        tab.classList.remove("active")
      })

      target.classList.add("active")
      tab.classList.add("active")
    })

})




var restarBoton = document.getElementsByClassName("restar-producto");
var sumarBoton = document.getElementsByClassName("agregar-producto");


for(var i = 0; i < sumarBoton.length; i++){
    var boton = sumarBoton[i];
    boton.addEventListener('click',function(event){

      var botonClicked = event.target;

      var stock = parseInt(botonClicked.parentElement.parentElement.children[3].innerText);
      
      var input = botonClicked.parentElement.parentElement.children[1];
      var cantidad = input.innerText;
      if(cantidad < stock){
        var nuevaCantidad = parseInt(cantidad) + 1;

        input.innerText = nuevaCantidad;

        if(document.getElementById("cantidadProductos")!= null){
          document.getElementById("cantidadProductos").setAttribute('value',nuevaCantidad);
        }
      }
      
    })
}

for(var i = 0; i < restarBoton.length; i++){
  var boton = restarBoton[i];
  boton.addEventListener('click',function(event){


    var botonClicked = event.target;
 
    var input = botonClicked.parentElement.parentElement.children[1];
    var cantidad = input.innerText;

    if(cantidad > 1){
      var nuevaCantidad = parseInt(cantidad) - 1;
      input.innerText = nuevaCantidad;

      if(document.getElementById("cantidadProductos")!= null){
        document.getElementById("cantidadProductos").setAttribute('value',nuevaCantidad);
      }
    }
  })
}

var restarBoton = document.getElementsByClassName("producto__restar-producto");
var sumarBoton = document.getElementsByClassName("producto__agregar-producto");


for(var i = 0; i < sumarBoton.length; i++){
  var boton = sumarBoton[i];
  boton.addEventListener('click',function(event){

    var botonClicked = event.target;

    var stock = parseInt(botonClicked.parentElement.parentElement.children[3].innerText);
    
    var input = botonClicked.parentElement.parentElement.children[1];
    var cantidad = input.innerText;
    if(cantidad < stock){
      var nuevaCantidad = parseInt(cantidad) + 1;

      input.innerText = nuevaCantidad;

      if(document.getElementById("cantidadProductos")!= null){
        document.getElementById("cantidadProductos").setAttribute('value',nuevaCantidad);
      }
    }
    
  })
}

for(var i = 0; i < restarBoton.length; i++){
var boton = restarBoton[i];
boton.addEventListener('click',function(event){


  var botonClicked = event.target;

  var input = botonClicked.parentElement.parentElement.children[1];
  var cantidad = input.innerText;

  if(cantidad > 1){
    var nuevaCantidad = parseInt(cantidad) - 1;
    input.innerText = nuevaCantidad;

    if(document.getElementById("cantidadProductos")!= null){
      document.getElementById("cantidadProductos").setAttribute('value',nuevaCantidad);
    }
  }
})
}


// document.getElementsByName('inisesion').style.display='none';

// var btn_inicio = document.getElementById("btnSesion");
// btn_inicio.classList.add("hidden");

// var inp_correo = document.getElementById("CorreoElec");
// var inp_pass = document.getElementById("Contrasena");
// var btn_registro = document.getElementById("btn-registrar");
// var label_ini = document.getElementById("inisesion");

// inp_correo.classList.add("hidden");
// inp_pass.classList.add("hidden");
// btn_registro.classList.add("hidden");
// label_ini.hidden();

var btn_perfil = document.getElementById("btnMicuenta");
btn_perfil.removeAttribute("data-bs-toggle");




