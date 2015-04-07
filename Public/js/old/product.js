$(".viewbox img").eq(0).show();
var l = $(".viewbox img").length;
var N = 0;
var I = null;
H();
function H(){
 I = setInterval(function(){
    N = parseInt($(".addborder").index())+1;
    G(N%l);
},5000);
}

$(".thumbnail").hover(function(){
   if(I){ clearInterval(I) }
   var M = parseInt($(this).index());
   G(M);
},function(){
  H();
});


function G(n){
    $(".viewbox img").hide().eq(n).show();
    $(".thumbnail").removeClass("addborder").eq(n).addClass("addborder");
}

