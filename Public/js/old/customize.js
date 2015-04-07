var footTop = parseInt($("#foot").offset().top),
    viewHeight = parseInt($(".cake-view-box").css("height")),
    custbarTop = parseInt($(".cust-content-bar").offset().top);
    console.log(footTop);
$(".selectbox").click(function(){
  footTop = parseInt($("#foot").offset().top);
  console.log(footTop);
});
$(window).resize(function(){
     viewHeight = parseInt($(".cake-view-box").css("height"));
});
$(window).scroll(function(){
 /* 
  if(parseInt($(".cake-view").scrollTop())<0){
     $(".cake-view").scrollTop()="0";
  }
  */
  
  var Top = parseInt($(window).scrollTop()),
      scroll = Top-custbarTop,
      scrollLeft = -parseInt($(window).scrollLeft()),
      footLimit = footTop-Top-viewHeight;
  if(scroll>=0&&footLimit>0){
    $(".cake-view-box").css({"position":"fixed","top":"0"});
    if(scrollLeft!=0){
      $(".cake-view-box").css({"left":scrollLeft});
    }
  }
  else if(scroll>=0&&footLimit<=0){
    $(".cake-view-box").css({"position":"fixed","top":footLimit});
  }
  else{
    $(".cake-view-box").css({"position":"absolute","top":"","left":""});
  }

}) 


