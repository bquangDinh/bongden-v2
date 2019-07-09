$(document).ready(function(){
    $(".event.is-open").each(function(index){
      $(this).find('.event-mask').addClass("is-open");
      $(this).find('.event-name').addClass('is-open');
    });

    var currentLeadIndex = 1;

    $(".leader-previous-btn").on('click',function(e){
      $("#l-" + currentLeadIndex).hide();
      currentLeadIndex--;
      if(currentLeadIndex <= 0) currentLeadIndex = 6;
      $("#l-" + currentLeadIndex).fadeIn(800);
    });

    $(".leader-next-btn").on('click',function(e){
      $("#l-" + currentLeadIndex).hide();
      currentLeadIndex++;
      if(currentLeadIndex >= 6) currentLeadIndex = 1;
      $("#l-" + currentLeadIndex).fadeIn(800);
    });
});

$(window).on("load",function(e){
  $(".loader").fadeOut(500);
});

$(".event").on('click',function(e){
  $(this).find('.event-mask').toggleClass('is-open');
  $(this).find('.event-name').toggleClass('is-open');
});

new WOW().init();
