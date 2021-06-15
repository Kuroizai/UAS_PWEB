$(function(){
  $('#sidebarCollapse').on('click',function(){
    $('#sidebar,#content-page').toggleClass('active');
  });
});


var yourNavigation = $(".navbar");

$(window).scroll(function() {
  if( $(this).scrollTop() > 20 ) {
    yourNavigation.addClass("bg-danger");
  } else {
    yourNavigation.removeClass("bg-danger");
  }
});