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

var body = document.body;
var imageLoad = imagesLoaded(body);
var imageCount = imageLoad.images.length;
var loadedImageCount = 0;
imageLoad.on('progress',function(instance,image){
  loadedImageCount++;
  let percentage = parseInt((loadedImageCount / imageCount) * 100);
  $("#loaded-percentage").text(percentage);
});
imageLoad.on("done",function(instance){
    $(".loader").fadeOut(500);
});

$(".event").on('click',function(e){
  $(this).find('.event-mask').toggleClass('is-open');
  $(this).find('.event-name').toggleClass('is-open');
});

new WOW().init();
