$(".hamburger").on('click',function(){
  $(this).toggleClass('is-active');
  $(".navbar-mobile").toggleClass("is-open");
});

$("#search-btn").on('click',function(){
  $("#search-field").toggleClass("is-open");
});

$("#search-field-close-btn").on('click',function(){
  $("#search-field").removeClass("is-open");
});
