<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" ng-app="myapp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="蛋糕狐在线蛋糕DIY，现做蛋糕送货上门">
  <title>创建新账号-cakefun</title>
  <link href="/cakefox/Public/css/public.css" rel="stylesheet">
  <link href="/cakefox/Public/css/public.less" rel="stylesheet/less">
  <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
</head>
<body ng-controller="formCtrl">
  <div class="header" style="" controller="HeaderController">
    <div class="centerbox" style="height:28px;overflow:visible;">
      <div class="logo-sm"><img src="/cakefox/Public/img/cakewithme2.png" /></div>
      <ul class="header-nav" style="margin-left:200px;">
        <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
        <li><a href="/cakefox/index.php/Home/Index/customize.html">定制蛋糕</a></li>
        <li><a href="/cakefox/index.php/Home/Index/mall.html">商城</a></li>
        <li><a href="/cakefox/index.php/Home/Index/about.html">关于我们</a></li>
      </ul>
      <ul class="header-nav" style="float:right;">
          
      <!-- 未登录 -->
          <li>
            <a href="/cakefox/index.php/Home/Index/login.html" style="padding:4px;">
              <span class="headusername">登录</span>
            </a>
          </li>
          <li>
            <a href="/cakefox/index.php/Home/Index/register.html" style="padding:4px;">
              <span class="headusername">注册</span>
            </a>
          </li>
      <!-- 未登录 -->


       <!-- 已登录 -->
          <li>
            <a href="/cakefox/index.php/Home/Index/user.html">
              <img class="headuserimg" id="user_img" src="/cakefox/Uploads/<?php echo ($userimg); ?>" />
              <span class="headusername"><?php echo ($username); ?></span>
            </a>
          </li>
          <li>
            <a href="/cakefox/index.php/Home/Index/userinfo.html" style="padding:4px;">
              <i class="fa fa-fw fa-cog"></i>
            </a>
          </li>
          <li id="cartli">
            <a href="/cakefox/index.php/Home/Index/cart.html" style="padding:4px;"><i class="fa fa-fw fa-shopping-cart"></i></a>
             <div id="cartdialogbox" style="display:none;">
              <div class="loadingbox">
                <i class="fa fa-spinner fa-spin"></i>
              </div>
              <div class="cartdialog"></div>
            </div> 
          </li>
        <!-- 已登录 -->
      </ul>
      </div>
    </div>
</div>

  <div class="fullbox">
   <div class="centerbox">
    <div class="one-third" style="margin:50px auto;">
     <h3 class="title">
       验证注册手机
     </h3>
     <form class="cont" name="form"  style="padding:10px;" novalidate>
                <div class="form-group">
         <label>短信验证码</label>
         <input type="text" class="form-input" id="phoneCode" name="phoneCode" ng-model="signup.phoneCode" placeholder="短信验证码" required ng-minlength="6" ng-maxlength="6" ng-pattern="/^\d*$/" ng-focus />
         <div class="error" ng-class="{errorshow:form.submit}">
              <span ng-show="form.phoneCode.$invalid">验证码应为6位数字</span>
              <span ng-show="form.phoneCode.$error.error1">验证码错误或已被使用</span>
              <span ng-show="form.phoneCode.$error.error2">验证码已过期</span>
              <span ng-show="form.phoneCode.$error.error3">该手机号码未注册</span>
           </div>
         </div>
       <div class="form-group">
         <div class="clear"></div>
         <a class="btn" ng-click="submit()">验证</a>
         <div class="clear"></div>
       </div>
     </form>
     <div class="clear"></div>
     <div class="form-foot">
       <a href="/cakefox/index.php/Home/Index/forget.html">找回密码</a>
       |
       <a href="/cakefox/index.php/Home/Index/index.html">首页</a>
       |
       <a href="/cakefox/index.php/Home/Index/login.html">用户登录</a>
     </div>
   </div>
   
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
                    scope.form.phone.$error.error2=false;//4
                    scope.form.phoneCode.$error.error1=false;//6
                    scope.form.phoneCode.$error.error2=false;//6
                  });
      }).bind('blur', function(evt) {
        element.removeClass(FOCUS_CLASS);
        scope.$apply(function() {
          ctrl.$focused = false;
        });
      });
    }
  }
}]).controller('formCtrl',function($scope){
  $scope.submit = function(){
    if($scope.form.$valid){
     $.ajax({ 
       type: "post", 
       url: "/cakefox/index.php/Home/Index/setcount", 
       dataType: "json",
       data:{phone:<?php echo ($phone); ?>,verifycode:$("#phoneCode").val()},
       success: function (data) { 
         switch(data.state) {
          case "1":alert("注册成功");
          window.localStorage.setItem("islogin","1");
          window.localStorage.setItem("phone",<?php echo ($phone); ?>);
          window.localStorage.setItem("password",window.localStorage.getItem("passwordmb"));
          window.location='/cakefox/index.php/Home/Index/index';break;                     
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
           $scope.form.phoneCode.$error.error2=true;
         });break;
          case "5":alert("注册失败");break;   
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
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });
});
*/
</script>
</body>
</html>