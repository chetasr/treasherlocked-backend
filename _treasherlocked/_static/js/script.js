$(document).ready(function(){
  $(window).on("scroll",function(){
    var wn = $(window).scrollTop();
    if(wn > 100){
      $(".navbar").css("background","rgba(0,0,0,0.9)");
    }
    else{
      $(".navbar").css("background","rgba(0,0,0,0)");
    }
  });
});
