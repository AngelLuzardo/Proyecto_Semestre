window.addEventListener("load", function(){
    new Glider(document.querySelector(".slideshow__lista"),{
        
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: '.slideshow__indicadores',
            arrows: {
              prev: '.slideshow__anterior',
              next: '.slideshow__siguiente'
            }, 
    });
})

window.addEventListener("load", function(){
  new Glider(document.querySelector(".slider__lista"),{
      
          slidesToShow: 1,
          dots: '.slider__indicadores',
          arrows: {
            prev: '.slider__anterior',
            next: '.slider__siguiente'
          }, 
  });



})


// let productos_contenedores = document.querySelectorAll(".producto__contenedor");

// productos_contenedores.forEach(element => {
//   element.addEventListener("click",function(e){

//   e.preventDefault();
//   console.log(element);
//   idProducto=element.getAttribute("idProducto");
//   console.log(idProducto);
  
//   var datos ={
//     "idProducto": idProducto
//   } 


//   fetch("views/producto/index.php",{
//     method : "POST",
//     data : datos

//   })
//     .then(window.location = "views/producto/index.php")

//   })
  
// });

