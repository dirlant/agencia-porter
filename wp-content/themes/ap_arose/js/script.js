$(document).on('ready', function() {
  // Efecto del CSS de los servicios
  $(".regular").slick({
    dots: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 1
  });

  // Efecto de fullPageSlider
  $('#fullpage').fullpage({
    sectionsColor: ['#000', '#000', '#000', '#000'],
    fadingEffect: true,
    verticalCentered: true,
    ScrollBar: true,
  });
});
