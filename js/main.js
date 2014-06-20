jQuery(document).ready(function($) {
  $('body').addClass('js');

  var sneakyNav = $('nav.primary ul');

  $('nav.primary .trigger').click(function(){
    $(sneakyNav).slideToggle();
    return false;
  });

  $('div.search-icon .trigger').click(function(){
    $('div.search').slideToggle();
    return false;
  });
  $(window).resize(function(){
    if ($(window).width() > 599 && $(sneakyNav).is(':hidden')) {
      $(sneakyNav).show();
    }
  });
});
