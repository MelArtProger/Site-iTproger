// Всплывающее меню мобильной версии
$('#menuShow').click (function () {
  if ($('#mobileMenu').is(':visible'))
      $('#mobileMenu').hide();
  else
      $('#mobileMenu').show();
});

// Фиксированное меню
$(document).scroll (function () {
  if ($(document).width () > 785) {
    if ($(document).scrollTop () > $('header').height () + 10)
    $('nav').addClass ('fixed');
    else
    $('nav').removeClass ('fixed');
  }
});

//
window.onresize = function (event) {
  $('#mobileMenu').hide();
};
