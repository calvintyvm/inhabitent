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