$(document).on('ready', function() {
  // Efecto de fullPageSlider
  $('#fullpage').fullpage();
  $('#banner').animate({ height:"0px", width:"850px" })
  

  setTimeout(function(){
    $('#img')
    .animate({ height:"0px", borderRadius:"50%" }, 3000, function() {
      $('#animacion').hide()
      $('#header-menu').show();
      setTimeout(function(){
        $('#banner')
        .css({width: "850px"})
        .animate({
          height:"400px"}, 1000, function() {
        });
      }, 0);
    });
  }, 5000);


});
