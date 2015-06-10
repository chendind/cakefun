 $(".goodpad").on({"mouseenter":function(){
    $(this).children('.goodms').fadeIn();
 },"mouseleave":function(){
    $(this).children('.goodms').fadeOut();
 }
})
 $(".catabtn").bind("click",function(){
    var id = $(this).attr("data-item");
    $(".goodbox").fadeOut().css("position","absolute");
    $("#"+id).css("position","relative").fadeIn();
 });