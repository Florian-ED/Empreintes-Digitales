// open mobile menu
$('.js-toggle-menu').click(function(e){
    e.preventDefault();
    $('.mobile-header-nav').slideToggle();
    $(this).toggleClass('open');
    if($(this).hasClass("open")){
      $("main").css('filter', 'blur(7px)');
    }
    else{
      $("main").css('filter', 'none');
    }
  });