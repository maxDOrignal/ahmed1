'use strict';
const Vvideo = document.querySelector('.v1');

$('.LimenuBar').on('click', () => {
    $('.b1').toggleClass('bR');
    $('.b2').toggleClass('bH');
    $('.b3').toggleClass('bL');

    $('.laptopUl').toggleClass('showLaptopUl');
    $('body').toggleClass('bodyOverFlowH');
});


$(window).on('load', () => {
  $('body').toggleClass('bodyOverFlowH');
  $('.containerAnimationPa').toggleClass('hide')

});


  var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    direction: 'vertical',
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  })
  