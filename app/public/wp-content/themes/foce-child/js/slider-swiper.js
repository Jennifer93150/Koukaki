window.addEventListener('load', (event) => {
  
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop:true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

const mySwiper = document.querySelector('.mySwiper');
const swiperWrapper = document.querySelector('#swiper-wrapper');
const swiperSlide = document.querySelectorAll('.story #characters #swiper-wrapper div');
const swiperImg = document.querySelectorAll('.story #characters #swiper-wrapper div img');

mySwiper.style="overflow: hidden";
swiperSlide.forEach(element => {
  element.style="height:400px; width:400px; min-height:400px; min-width:400px; display:flex; flex-direction:column; font-size:20px";
});
swiperImg.forEach(element => {
  element.style="max-height:400px";
});
swiperWrapper.style= "min-height: 400px; transform: translate3d(400px, 0px, 0px)";
console.log(swiper)
});
  