jQuery(document).ready(function($) {
  $('body').addClass('js');

  $('nav.primary .trigger').click(function(){
    $('nav.primary ul').slideToggle();
    return false;
  });

  $('div.search-icon .trigger').click(function(){
    $('div.search').slideToggle();
    return false;
  });
});
