<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" ng-app="myapp">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="蛋糕狐在线蛋糕DIY，现做蛋糕送货上门">
     <title>找回密码-cakefox</title>
     <link href="/cakefox/Public/css/mediaQuery.css" rel="stylesheet">
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/user-comprehensive.css" rel="stylesheet">
  </head>
  <body ng-controller="fromCtrl">
  <div class="user-content">
     <div class="user-head">
         <h1 class="webLogo">cake<span>fun</span></h1>
         <p>欢迎来到最美味的蛋糕定制平台</p>
     </div>
     <div class="col-sm-6 col-sm-push-3 col-md-4 col-md-push-4 user-com-box">
       <h4 class="logIn-form-title user-title">
         验证注册手机
       </h4>
       <form name="form" novalidate>
                  <div class="form-group">
         <label>短信验证码</label>
         <input type="text" class="form-input" id="phoneCode" name="phoneCode" ng-model="signup.phoneCode" placeholder="短信验证码" required ng-minlength="6" ng-maxlength="6" ng-pattern="/^\d*$/" ng-focus />
         <div class="error" ng-class="{errorshow:form.submit}">
              <span ng-show="form.phoneCode.$invalid">验证码应为6位数字</span>
              <span ng-show="form.phoneCode.$error.error1">验证码错误或已被使用</span>
              <span ng-show="form.phoneCode.$error.error2">验证码已过期</span>
           </div>
         </div>
        <div class="form-group">
         <div class="clear"></div>
         <button class="form-btn" ng-click="submit()">验证</button>
         <div class="clear"></div>
       </div>
       </form>
     </div>
     <div class="clear"></div>
     <div class="form-foot">
       <a href="/cakefox/index.php/Home/Index/forget.html">找回密码</a>
       |
       <a href="/cakefox/index.php/Home/Index/index.html">首页</a>
       |
       <a href="/cakefox/index.php/Home/Index/login.html">用户登录</a>
     </div>
  </div>
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
 <script src="/cakefox/Public/js/md5.js"></script>
<script>
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
                    scope.form.submit = false;
                    scope.form.phone.$error.error1=false;//1
                    scope.form.phone.$error.error2=false;//2
                    scope.form.verifyCode.$error.error1=false;//3
                    scope.form.phone.$error.error3=false;//4
                    scope.form.verifyCode.$error.error2=false;//5
                    scope.form.phoneCode.$error.error1=false;//6
                    scope.form.phoneCode.$error.error2=false;//7
                    scope.form.phone.$error.error4=false;//8
                    scope.form.password.$error.error1=false;//9
                });
            }).bind('blur', function(evt) {
                element.removeClass(FOCUS_CLASS);
                scope.$apply(function() {
                    ctrl.$focused = false;
                });
            });
        }
    }
}]).controller('formCtrl',function($http,$scope){
    $scope.submit = function(){
        if($scope.form.$valid){
         $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/setcount", 
           dataType: "json",
           data:{phone:$("#phone").val(),password:hex_md5($("#password").val()),verifycode:$("#verifyCode").val()},
           success: function (data) { 
               switch(data.state) {
                  case "1":alert("注册成功");window.location='/cakefox/index.php/Home/Index/index';break;                     
                  case "2":$scope.$apply(function(){
                              $scope.form.submit = true;
                              $scope.form.phone.$error.error2=true;
                              });break;
                  case "3":$scope.$apply(function(){
                               $scope.form.submit = true;
                               $scope.form.phoneCode.$error.error1=true;
                               });break;
                  case "4":$scope.$apply(function(){
                               $scope.form.submit = true;
                               $scope.form.phone.$error.error3=true;
                               });break;
                  case "5":alert("注册失败");break;   
               }
                fleshVerify();  
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常"); fleshVerify();  } 
        });
        }
        else{
          $scope.form.submit = true;
        }
        
    };
});
/*
 $("#form-btn").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/setcount", 
           dataType: "json",
           data:{phone:<?php echo ($phone); ?>,verifycode:$("#phoneCode").val()},
           success: function (data) { 
                switch(data.state){
                  case "1":alert("注册成功");window.location='/cakefox/index.php/Home/Index/index';break;
                  case "2":alert("手机号不合法");break;
                  case "3":alert("验证码错误");break;
                  case "4":alert("验证码时间过期");break;
                  case "5":alert("注册失败");break;
                }   
                fleshVerify();                    
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");fleshVerify();} 
    });
});
*/
</script>
</body>
</html>