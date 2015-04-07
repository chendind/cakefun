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
function fleshVerify(){
var time = new Date().getTime();
document.getElementById('yzm').src= '/index.php/Home/Index/verify/'+time;
} ;
