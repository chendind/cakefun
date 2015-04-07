<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="myapp">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="蛋糕狐在线蛋糕DIY，现做蛋糕送货上门">
     <title>cakefox</title>
     <link href="/cakefox/Public/css/mediaQuery.css" rel="stylesheet">
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/font-awesome.min.css" rel="stylesheet">
     <!--[if lt IE 9]><link href="/cakefox/Public/css/font-awesome-ie7.min.css" rel="stylesheet"><![endif]-->
     <link href="/cakefox/Public/css/about.css" rel="stylesheet">
  </head>
  <body>
      <div class="headBar">
  <div class="head">
    <div class="head-icon floatleft sm-hide controllIcon" id="head-ul-nav">
      <!--小 导航菜单-->
      <i class="fa fa-bars fa-2x"></i>
      <ul class="head-ul-nav" id="head-ul-nav-menu">
        <a href="/cakefox/index.php/Home/Index/index"><li><span>首页</span></li></a>
        <a href="/cakefox/index.php/Home/Index/selected"><li><span>蛋糕精选</span></li></a>
        <a href="/cakefox/index.php/Home/Index/about"><li><span>关于cakefox</span></li></a>
      </ul>
    </div>
    <?php if(empty($_SESSION['user_id'])): ?><div class="head-icon floatright sm-hide controllIcon" id="head-ul-login">
         <!--小 登陆按钮-->
         <i class="fa fa-sign-in fa-2x"></i>
         <ul class="head-ul-userbar" id="head-ul-login-menu">
           <a href="/cakefox/index.php/Home/Index/login"><li><span>登录</span></li></a>
           <a href="/cakefox/index.php/Home/Index/register"><li><span>注册</span></li></a>
         </ul>
    </div>
      <?php else: ?> 
     <div class="head-icon floatright sm-hide controllIcon" style="line-height:57px;" id="head-ul-user">
         <!--小 用户中心-->
         <i class="fa fa-birthday-cake" style="font-size:25px;"></i>
         <ul class="head-ul-userbar" id="head-ul-user-menu">
           <a href="/cakefox/index.php/Home/Index/user"><li><span>账户</span></li></a>
           <a href="/cakefox/index.php/Home/Index/order"><li><span>订单</span></li></a>
           <li id="logoutBtn-xs"><span>退出登录</span></li>
         </ul>
    </div><?php endif; ?>
    
        <h1 class="webLogo">cake<span>fun</span></h1>
    
    <!--大 导航-->
    <nav class="xs-hide head-nav floatleft">
      <a href="/cakefox/index.php/Home/Index/index">首页</a>
      <a href="/cakefox/index.php/Home/Index/selected">蛋糕精选</a>
      <a href="/cakefox/index.php/Home/Index/about">关于我们</a>
    </nav> 
    <div class="xs-hide head-login floatright">    
    <?php if(empty($_SESSION['user_id'])): ?><a class="head-login-btn" ng-init="logInClick=false;" ng-click="logInClick=true">登录</a>
       <a href="/cakefox/index.php/Home/Index/register" class="head-login-btn">注册</a>
    <?php else: ?> 
    <div class="user-bar floatright controllIcon" id="user-bar-order">
            <i class="fa fa-shopping-cart fa-fw"></i>订单<i class="fa fa-angle-down fa-fw"></i>
         <ul class="head-ul-userbar" id="user-bar-order-menu">
           <li onclick="window.location('/cakefox/index.php/Home/Index/order')"><span>订单A</span></li>
           <li onclick="window.location('/cakefox/index.php/Home/Index/order')"><span>历史订单</span></li>
         </ul>
     </div>
     <div class="user-bar floatright controllIcon" id="user-bar-user" ng-click="openmenu(this)">
            <i class="fa fa-user fa-fw"></i>用户中心<i class="fa fa-angle-down fa-fw"></i>
         <ul class="head-ul-userbar" id="user-bar-user-menu">
           <li onclick="window.location('/cakefox/index.php/Home/Index/user')"><span>账户</span></li>
           <li id="logoutBtn"><span>退出登录</span></li>
         </ul>
     </div><?php endif; ?>
    </div>
  </div>
</div>
<div class="clear"></div>
      <div class="content">
        <div class="publicbox title">关于我们</div>
        <div class="publicbox whitebg" ng-controller="questionCtrl">
           <div class="qaunit" ng-repeat="qa in qas">
            <div class="question">{{qa.q}}</div>
            <div class="answer">{{qa.a}}</div>
          </div>
        </div>
      </div>
      <div class="foot"></div>
      
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
 <script src="/cakefox/Public/js/aboutController.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>

<div class="logIn-box" ng-class="{show:logInClick}">
  <div class="logIn-head">
    <button class="logIn-close" ng-click="logInClick=false">
      <span>x</span>
    </button>
    <h4 class="logIn-title">登陆</h4>
  </div>
  <div class="logIn-body" ng-controller="formCtrl">
    <div class="col-md-10 col-sm-12 col-md-push-1">
      <p class="logIn-form-title">用户登陆</p>
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
         <div class="clear"></div>
         <div class="logIn-checkbox" style="float:left;"><label for="remember"><input type="checkbox" id="remember" ng-init="checkbox2=true" ng-model="checkbox2" />记住登陆状态</label></div>
         <button class="form-btn"  ng-click="submit()">登录</button>
         <div class="clear"></div>
       </div>
       </form>
    </div>
  </div>
  <div class="clear"></div>
  <div class="form-foot" style="padding-top:0;">
       <a href="/cakefox/index.php/Home/Index/register.html">注册账号</a>
       ·
       <a href="/cakefox/index.php/Home/Index/forget.html">找回密码</a>
     </div>
</div>
<div class="bg-dialog" ng-class="{show:logInClick}" ng-click="logInClick=false"></div>
<script>
if(myapp==undefined){
var myapp = angular.module('myapp',[]);
}
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
           url: "/cakefox/index.php/Home/Index/loginapi", 
           dataType: "json",
           data:{phone:$("#phone").val(),password:hex_md5($("#password").val())},
           success: function (data) { 
               switch(data.state) {
                  case "1":window.location.reload(); break ;                     
                  case "2":$scope.$apply(function(){
                              $scope.form.submit = true;
                              $scope.form.phone.$error.error1=true;
                              });break;
                  case "3":$scope.$apply(function(){
                               $scope.form.submit = true;
                               $scope.form.phone.$error.error2=true;
                               });break;
               }
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
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
           url: "/cakefox/index.php/Home/Index/loginapi", 
           dataType: "json",
           data:{phone:$("#phone").val(),password:hex_md5($("#password").val())},
           success: function (data) { 
               switch(data.state) {
                  case "1":window.location.reload(); break                      
                  case "2":alert("账号或密码错误");break;
                  case "3":alert("非法手机号");break;
               }
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });  
});
*/
$("#logoutBtn,#logoutBtn-xs").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/logoutapi", 
           dataType: "json",
           data:{phone:$("#phone").val()},
           success: function (data) { 
                     window.location.reload();                       
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });
});
</script>
  </body>
  </html>