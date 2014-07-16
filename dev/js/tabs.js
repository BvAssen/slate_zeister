jQuery(document).ready(function($) {
  $('.tab').click(function(evt) {
    evt.preventDefault();
    $('.tabtarget').hide();
    var clicked = $(evt.currentTarget);
    var toShow = clicked.attr('data-target');
    $('.Italiaans-intro').hide();

    $('.' + toShow).show();

  });
});
