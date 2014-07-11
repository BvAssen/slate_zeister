jQuery(document).ready(function($) {

  alert('test')

  $('.Slider-slider.bxslider').bxSlider({
    mode: 'fade',
    minSlides: 1,
    maxSlides: 1,
    startSlide: 1,
    //slideWidth: 1200,
    slideMargin: 0,
    // captions: true,
    pause: 4000,
    auto: false,
    speed: 1500,
    infiniteLoop: true,
    hideControlOnEnd: true,
    touchEnabled: false,
    pager: false
  });
});
