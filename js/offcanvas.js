$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });

  $('#desplega-comentarios').click(function() {
    $('.comentarios-desplegados').slideToggle('slow');
  });
});