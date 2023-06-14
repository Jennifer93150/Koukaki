  var swiper = new Swiper(".mySwiper", {
    // effect: "coverflow",
    // grabCursor: true,
    // centeredSlides: true,
    // slidesPerView: 3,
    // spaceBetween: 30,
    // //initialSlide: 1,
    // //loop: true,
    // //loopedSlides: 1,
    // coverflowEffect: {
    //   rotate: 0,
    //   stretch: 0,
    //   slideShadows: false,
    // },
    effect: "coverflow",
      grabCursor: true,
      centeredSlides: false,
      slidesPerView: 3,
      spaceBetween: 30,
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 10,
        modifier: 1,
        slideShadows: false,
      },
      
  });
  
  var appendNumber = 4;
  var prependNumber = 4;

const mySwiper = document.querySelector('.mySwiper');
const swiperWrapper = document.querySelector('#swiper-wrapper');
const swiperSlide = document.querySelectorAll('.story #characters #swiper-wrapper div');
const swiperImg = document.querySelectorAll('.story #characters #swiper-wrapper div img');

// mySwiper.style="overflow: hidden";
// swiperSlide.forEach(element => {
//   element.style="height:440px; width:440px; min-height:440px; min-width:440px; font-size:20px";
// });
// swiperImg.forEach(element => {
//   element.style="max-height:440px";
// });
// swiperWrapper.style= "min-height: 440px; ";
