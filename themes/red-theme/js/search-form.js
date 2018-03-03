// (function($){

  $(document).ready(function () {
    $('.main-navigation .search-field').hide();
 
    $('.main-navigation .search-submit').on('click', function (event) {
        event.preventDefault();
        $('.main-navigation .search-field').show({duration:300});
        $('.main-navigation .search-field').focus();
    });
 
    $('.main-navigation .search-field').on('blur', function(){
        $(this).hide({duration:300});
    });
 });
  // })(jQuery);