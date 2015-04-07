var len = parseInt($(".banner-img").length);//图片数量
var  width = parseInt($(".publicbox").css("width"));//父元素宽度   
for(i=1;i<len;i++){
      $(".list").append('<div class="listpoint"></div>');
    }
var lp = ".listpoint", s = ".slidebox", l=".list", o=".bannerbox",slidefn,j=null;
var listw = 2*parseInt($(lp).css("marginLeft"))+parseInt($(lp).css("width"));
    t1 = 6000,//延迟时间
    t2 = 300;//动画时间
    

function slidebanner(){
    $(lp).removeClass("cur").eq(0).addClass("cur");
    $(".list").css({"width":len*listw,"left":(width-listw)/2});
    $(".banner-img").css("width",width+"px");
    $(s).css("width",len*width);
    
  function Q(){ 
     if(slidefn){
       clearInterval(slidefn);
     }
      slidefn = setInterval(function(){
             var R = parseInt($(l+" .cur").index());
             if(R==0){
               $(s).css("left",0);
             }
             N((R+1)%len);
           },t1)
  }
  function N(R){
  
    var V = R*width*-1;
    $(s).stop().animate({"left":V},t2);
    if(R==(len-1)){
      R=0;
    }
    $(lp).removeClass("cur").eq(R).addClass("cur");
  }

  $(o).hover(
    function(){
      if(slidefn){
        clearInterval(slidefn);
      }
    },
    function(){
      Q();
    }
    );

  $(lp).hover(function(){
      var R = $(this).index();
      if(slidefn){
        clearInterval(slidefn);
      }
      j=setTimeout(function(){
        N(R);
      },100)
  },function(){
    if(j){
      clearTimeout(j);
    }
    Q();
  });
Q();
}
slidebanner();
$(window).resize(function(){
  width = parseInt($(".publicbox").css("width"));//父元素宽度  
  if(slidefn){
    clearInterval(slidefn);
  }
  slidebanner();
});