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
