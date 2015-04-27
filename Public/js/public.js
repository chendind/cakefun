$(".controllIcon").click(function(){
 //  function openmenu(it){
    var obj = "#"+$(this).attr("id")+"-menu";
    $(".controllIcon ul").not(obj).hide();
    if($(obj).css("display")=="none"){
        $(obj).show();
    }
    else{
        $(obj).hide();
    }
    
})

$(".chooseBar").click(function(){
   $(".controllIcon ul").hide();
});
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
$("#cartli").on({"mouseenter":function(){
    cartdialogshow();
},"mouseleave":function(){
    cartdialoghide();
}
});
$(".addtocartbtn").click(function(){
    cartdialogshow();
    cartdialogtimeout = setTimeout(function(){
        cartdialoghide();
    },2000);
})
function cartdialogshow(){
    if(typeof cartdialogtimeout){clearTimeout(cartdialogtimeout);}
    $("#cartdialogbox").stop(true).show().animate({"opacity":"1"}, 600);
    $(".cartdialog").load("__ROOT__/index.php/Home/Index/cartdialog.html",function(){
        $(".loadingbox").hide();
    });
}
function cartdialoghide(){
    if(typeof cartdialogtimeout){clearTimeout(cartdialogtimeout);}
    $("#cartdialogbox").stop(true).animate({"opacity":"0"}, 600,function(){
        $(this).hide();
        $(".loadingbox").show();
    $(".cartdialog").empty();
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