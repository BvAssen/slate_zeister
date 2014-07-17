jQuery(document).ready(function($) {

  $('.Slider-slider.bxslider').bxSlider({
    mode: 'fade',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 1,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 4000,
    auto: true,
    speed: 1500,
    pager: false,
    infiniteLoop: true,
    hideControlOnEnd: true,
    randomStart: true,
    touchEnabled: false,
    controls: false
  });
});
