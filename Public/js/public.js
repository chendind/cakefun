
   if(typeof window.localStorage === 'undefined'){}
   else{
        window.localStorage.setItem("isnotfirstvisit","1");
//     if(window.localStorage.islogin=="1"&&islogin=="0"){
//         var phone = window.localStorage.phone,
//             password = window.localStorage.password;
//         $.ajax({ 
//            type: "post", 
//            url: "./loginapi", 
//            dataType: "json",
//            data:{phone:phone,password:password},
//            success: function (data) { 
//                switch(data.state) {
//                   case "1":window.location.reload(); break ;                     
//                   default:;
//                }
//            }, 
//            error: function (XMLHttpRequest, textStatus, errorThrown) {} 
//         });
//     }
//     else{
//         console.log("本地存储的数据是"+window.localStorage.islogin);
//     }
   }

var cartdialogtimeout;
$("#cart,#userinfo").on({"mouseenter":function(){
    cartdialogshow($(this));
},"mouseleave":function(){
    cartdialoghide($(this));
}
});
$(".addtocartbtn").click(function(){
    cartdialogshow();
    cartdialogtimeout = setTimeout(function(){
        cartdialoghide();
    },2000);
})
function cartdialogshow(obj){
    var idname ="#" + obj.attr("id")+"dialogbox";
    if(typeof cartdialogtimeout){clearTimeout(cartdialogtimeout);}
    $(idname).stop(true).show().animate({"opacity":"1"}, 600);
    if(obj.attr("id") == "cart"){
        $(".cartdialog").load("/index.php/Home/Index/cartdialog.html",function(){
            $(".loadingbox").hide();
        });
    }
    
}
function cartdialoghide(obj){
    var idname ="#" + obj.attr("id")+"dialogbox";
    if(typeof cartdialogtimeout){clearTimeout(cartdialogtimeout);}
    $(idname).stop(true).animate({"opacity":"0"}, 600,function(){
        $(this).hide();
        if(obj.attr("id") == "cart"){
            $(".loadingbox").show();
            $(".cartdialog").empty();
        }
    });
    
}

function fleshVerify(){
var time = new Date().getTime();
document.getElementById('yzm').src= '/index.php/Home/Index/verify/'+time;
} ;
