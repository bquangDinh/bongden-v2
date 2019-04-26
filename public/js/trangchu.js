$(".picture-info").on('click',function(e){
  $(this).toggleClass("is-open");
});

function slideFunfact(){
  this.currentFunfactIndex = "2";
  this.funfactPanelID = "#fun-fact-";
  this.funfact_num = 3;
  this.autoSlideTime = 3000;
  this.autoSlideIndex = 2;
  this.isUserClicked = false;

  this.clearAllEffect = function(){
    for(var i = 1; i <= 3;i++){
      $(this.funfactPanelID + i).removeClass("slideInUp");
      $(this.funfactPanelID + i).removeClass("slideOutUp");
      $(this.funfactPanelID + i).removeClass("slideInDown");
      $(this.funfactPanelID + i).removeClass("slideOutDown");
    }
  }
}

slideFunfact.prototype.slide = function(panelIndex){
  slider.isUserClicked = true;

  if(this.currentFunfactIndex == panelIndex) return;

  let that = this;

  this.clearAllEffect();

  if(parseInt(panelIndex) < parseInt(this.currentFunfactIndex)){
    $(this.funfactPanelID + panelIndex).addClass("slideInUp");
    $(this.funfactPanelID + this.currentFunfactIndex).addClass("slideOutUp");
  }

  if(parseInt(panelIndex) > parseInt(this.currentFunfactIndex)){
    $(this.funfactPanelID + panelIndex).addClass("slideInDown");
    $(this.funfactPanelID + this.currentFunfactIndex).addClass("slideOutDown");
  }

  $(this.funfactPanelID + panelIndex).addClass("is-active");

  setTimeout(function(){
    $(that.funfactPanelID + that.currentFunfactIndex).removeClass("is-active");
    that.currentFunfactIndex = panelIndex;
    console.log(that.currentFunfactIndex);
  },800);

  $(".slider-item:nth-child(" + panelIndex + ")").addClass("is-active");
  $(".slider-item:nth-child(" + this.currentFunfactIndex + ")").removeClass("is-active");
}

var slider = new slideFunfact();

/*
setInterval(function(){
  if(slider.isUserClicked){
    setTimeout(function(){
      slider.isUserClicked = false;
    },slider.autoSlideTime);
  }else{
    slider.autoSlideIndex++;
    if(slider.autoSlideIndex > 3) slider.autoSlideIndex = 1;
    slider.slide(slider.autoSlideIndex);
  }
},slider.autoSlideTime);
*/

$(".slider-item").on('click',function(e){
  let panelIndex = $(this).data("for-ff");

  slider.slide(panelIndex);
});
