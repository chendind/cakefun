
if(typeof window.localStorage === 'undefined'){}
else{
    if(window.localStorage.islogin=="1"&&islogin=="0"){
        var phone = window.localStorage.phone,
            password = window.localStorage.password;
        $.ajax({ 
           type: "post", 
           url: "./loginapi", 
           dataType: "json",
           data:{phone:phone,password:password},
           success: function (data) { 
               switch(data.state) {
                  case "1":window.location.reload(); break ;                     
                  default:;
               }
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {} 
        });
    }
    else{
        console.log("本地存储的数据是"+window.localStorage.islogin);
    }
}

// $(".controllIcon").click(function(){
//  //  function openmenu(it){
//     var obj = "#"+$(this).attr("id")+"-menu";
//     $(".controllIcon ul").not(obj).hide();
//     if($(obj).css("display")=="none"){
//         $(obj).show();
//     }
//     else{
//         $(obj).hide();
//     }
    
// })

// $(".chooseBar").click(function(){
//    $(".controllIcon ul").hide();
// });
/*
var myapp = angular.module('myapp',[]);
myapp.directive('ngFocus', [function() {
    var FOCUS_CLASS = "ng-focused";
    return {
        restrict: 'A',
        require: 'ngModel',
        link: function(scope, element, attrs, ctrl) {
            ctrl.$focused = false;
            element.bind('focus', function(evt) {
                element.addClass(FOCUS_CLASS);
                scope.$apply(function() {
                    ctrl.$focused = true;
                });
            }).bind('blur', function(evt) {
                element.removeClass(FOCUS_CLASS);
                scope.$apply(function() {
                    ctrl.$focused = false;
                });
            });
        }
    }
}]);
*/
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
// if(app){
//     app.controller("HeaderController",function($scope){
//         $scope.cartshow = function(){
//             $scope.cartdialogshow = 1;
//         }
//     })
// }