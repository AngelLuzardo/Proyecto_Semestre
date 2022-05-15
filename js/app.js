window.addEventListener("load", function(){
    new Glider(document.querySelector(".slideshow__lista"),{
        
            slidesToShow: 4,
            slidesToScroll: 4,
            dots: '.slideshow__indicadores',
            arrows: {
              prev: '.slideshow__anterior',
              next: '.slideshow__siguiente'
            }
    });



})