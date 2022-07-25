window.addEventListener("load", function () {
  var slider_productos = new Glider(document.querySelector(".slideshow__lista"), {

    slidesToShow: 4,
    slidesToScroll: 4,
    dots: '.slideshow__indicadores',
    arrows: {
      prev: '.slideshow__anterior',
      next: '.slideshow__siguiente'
    },
  });

  slideAutoPaly(slider_productos, '.slideshow__lista',5000, 3);

})

window.addEventListener("load", function () {
  var slider_principal = new Glider(document.querySelector(".slider__lista"), {

    slidesToShow: 1,
    dots: '.slider__indicadores',
    arrows: {
      prev: '.slider__anterior',
      next: '.slider__siguiente'
    },
  });

  slideAutoPaly(slider_principal, '.slider__lista',4000, 1);

})

function slideAutoPaly(glider, selector, delay, nextIndexE, repeat = true) {
  let autoplay = null;
  const slidesCount = glider.track.childElementCount;
  let nextIndex = nextIndexE;
  let pause = true;

  function slide() {
      autoplay = setInterval(() => {
          if (nextIndex >= slidesCount) {
              if (!repeat) {
                  clearInterval(autoplay);
              } else {
                  nextIndex = 0;
              }
          }
          glider.scrollItem(nextIndex++);
      }, delay);
  }

  slide();

  var element = document.querySelector(selector);
  element.addEventListener('mouseover', (event) => {
      if (pause) {
          clearInterval(autoplay);
          pause = false;
      }
  }, 300);

  element.addEventListener('mouseout', (event) => {
      if (!pause) {
          slide();
          pause = true;
      }
  }, 300);
}





