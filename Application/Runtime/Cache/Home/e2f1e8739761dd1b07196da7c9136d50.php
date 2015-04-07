<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" ng-app="myapp">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="蛋糕狐在线蛋糕DIY，现做蛋糕送货上门">
     <title>创建新账号-cakefox</title>
     <link href="/cakefox/Public/css/mediaQuery.css" rel="stylesheet">
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/user-comprehensive.css" rel="stylesheet">
  </head>
  <body ng-controller="formCtrl">
  <div class="user-content">
     <div class="user-head">
         <h1 class="webLogo">cake<span>fun</span></h1>
         <p>欢迎来到最美味的蛋糕定制平台</p>
     </div>
     <div class="user-com-box">
       <h4 class="logIn-form-title user-title">
         创建新账户
       </h4>
       <form name="form" novalidate>
         <div class="form-group">
         <label>手机号码</label>
         <input type="text" class="form-input" id="phone" name="phone" ng-model="signup.phone" placeholder="手机号码" required ng-minlength="11" ng-maxlength="11" ng-pattern="/^\d*$/" ng-focus />
         <div class="error" ng-class="{errorshow:form.submit}">
              <span ng-show="form.phone.$invalid">手机号码应为11位数字</span>
              <span ng-show="form.phone.$error.error1">账号或密码错误</span>
              <span ng-show="form.phone.$error.error2">手机号码不合法</span>
              <span ng-show="form.phone.$error.error3">手机号码已被使用</span>
           </div>
             
         </div>
                 <div class="form-group">
           <label>密码</label>
           <div class="clear"></div>
           <input type="password" id="password" class="form-input" name="password" ng-model="signup.password" placeholder="6~18位密码" ng-minlength="6" ng-maxlength="18" required ng-focus />
           <div class="clear"></div>
           <div class="error" ng-class="{errorshow: form.submit}">
              <span ng-show="form.password.$invalid&&form.phone.$valid">密码应为6~18位字符</span>
           </div>
        </div>
         <div class="form-group">
<label>验证码</label>
        <div class="clear"></div>
        <input type="text" id="verifyCode" class="form-input" name="verifyCode" ng-model="signup.verifyCode" placeholder="验证码" ng-minlength="4" ng-maxlength="4" required ng-focus />
        <div class="verifyCode"><img id="yzm" onclick="fleshVerify()" src="/cakefox/index.php/Home/Index/verify" /></div>
        <div class="clear"></div>
        <div class="error" ng-class="{errorshow: !form.verifyCode.$focused && form.submit}">
              <span ng-show="form.verifyCode.$invalid">验证码应为4位字符</span>
             <span ng-show="form.verifyCode.$error.error1">验证码不正确</span>
             <span ng-show="form.verifyCode.$error.error2">24小时内发送次数不能大于5</span>
           </div>
           
      </div>
         <div class="form-group">
           <div class="clear"></div>
           <div class="form-checkbox" style="float:left;"><label for="clause"><input type="checkbox" id="clause" ng-init="checkbox=true" ng-model="checkbox" />同意并接受<a href="#" style="color:#efb06b">服务条款</a></label></div>
           <button class="form-btn"  ng-click="submit()">下一步</button>
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
                    scope.form.phone.$error.error2=false;//2
                    scope.form.verifyCode.$error.error1=false;//3
                    scope.form.phone.$error.error3=false;//4
                    scope.form.verifyCode.$error.error2=false;//5
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
           url: "/cakefox/index.php/Home/Index/registerapi", 
           dataType: "json",
           data:{phone:$("#phone").val(),password:hex_md5($("#password").val()),verifycode:$("#verifyCode").val()},
           success: function (data) { 
               switch(data.state) {
                  case "1":window.location=("register_verify/phone/"+$("#phone").val()); break ;                     
                  case "2":$scope.$apply(function(){
                              $scope.form.submit = true;
                              $scope.form.phone.$error.error2=true;
                              });break;
                  case "3":$scope.$apply(function(){
                               $scope.form.submit = true;
                               $scope.form.verifyCode.$error.error1=true;
                               });break;
                  case "4":$scope.$apply(function(){
                               $scope.form.submit = true;
                               $scope.form.phone.$error.error3=true;
                               });break;
                  case "5":$scope.$apply(function(){
                               $scope.form.submit = true;
                               $scope.form.verifyCode.$error.error2=true;
                               });break;   
               }
               fleshVerify();  
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");fleshVerify();  } 
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
           url: "/cakefox/index.php/Home/Index/registerapi", 
           dataType: "json",
           data:{phone:$("#phone").val(),password:hex_md5($("#password").val()),verifycode:$("#verifyCode").val()},
           success: function (data) { 
               switch(data.state){
                  case "1":window.location=("register_verify/phone/"+$("#phone").val());break;
                  case "2":alert("手机号不合法");break;
                  case "3":alert("验证码错误");break;
                  case "4":alert("手机号码已被使用");break;
                  case "5":alert("24小时内发送次数不能大于5");break;                   
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