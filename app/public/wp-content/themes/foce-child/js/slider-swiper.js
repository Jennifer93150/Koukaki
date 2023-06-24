  var swiper = new Swiper(".mySwiper", {
   
    effect: "coverflow",
      grabCursor: true,
      centeredSlides: false,
      slidesPerView: 2,
      spaceBetween: 30,
      loop: true,
      loopedSlides: 2,
      coverflowEffect: {
        rotate: 65,
        stretch: 0,
        depth: 10,
        modifier: 1,
        slideShadows: false,
      },
      breakpoints:{
        768:{
          slidesPerView: 3,
        }
      }
  });
  
  var appendNumber = 4;
  var prependNumber = 4;