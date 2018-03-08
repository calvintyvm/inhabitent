(function($){

  $(document).ready(function () {
    $('.main-navigation .search-field').hide();
 
    $('.main-navigation .icon-search').on('click', function (event) {
        event.preventDefault();
        $('.main-navigation .search-field').show({duration:300}, {direction:'left'});
        $('.main-navigation .search-field').focus();
    });

  
 
    $('.main-navigation .search-field').on('blur', function(){
        $(this).hide({duration:300});
    });
 });
})(jQuery);
$(window).scroll(function(){
    var currentScreenPosition  = $(document).scrollTop();
    if (currentScreenPosition < $('.site-header').height() || currentScreenPosition < $('.page-template-about .entry-header').height()) {
      $( '.top-menu' ).addClass( 'hero-top-menu' );
    } else {
      $( '.top-menu' ).removeClass( 'hero-top-menu' );
    }
  });
  