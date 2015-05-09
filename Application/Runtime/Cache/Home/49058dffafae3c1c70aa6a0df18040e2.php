<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" ng-app="myapp">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="蛋糕狐在线蛋糕DIY，现做蛋糕送货上门">
  <title>找回密码-cakefox</title>
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
         找回密码
       </h3>
       <form name="form" class="cont" style="padding:10px;"  novalidate>

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
           <a class="btn" ng-click="submit()">下一步</a>
           <div class="clear"></div>
         </div>
       </form>
       <div class="clear"></div>
       <div class="form-foot">
         <a href="/cakefox/index.php/Home/Index/register.html">注册账号</a>
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
                    scope.form.verifyCode.$error.error1=false;//3
                    scope.form.verifyCode.$error.error2=false;//5
                    scope.form.phone.$error.error4=false;//8
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
         url: "/cakefox/index.php/Home/Index/sendcodetoforgetphone", 
         dataType: "json",
         data:{phone:$("#phone").val(),verifycode:$("#verifyCode").val()},
         success: function (data) { 
           switch(data.state) {
            case "1":alert("发送成功");window.location=('/cakefox/index.php/Home/Index/forget_verify/phone/'+$("#phone").val()); break ;                     
            case "2":$scope.$apply(function(){
              $scope.form.submit = true;
              $scope.form.verifyCode.$error.error2=true;
            });break;
            case "3":$scope.$apply(function(){
             $scope.form.submit = true;
             $scope.form.phone.$error.error4=true;
           });break;
            case "4":$scope.$apply(function(){
             $scope.form.submit = true;
             $scope.form.verifyCode.$error.error1=true;
           });break;
          }
          fleshVerify(); 
        }, 
        error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");fleshVerify(); } 
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
           url: "/cakefox/index.php/Home/Index/sendcodetoforgetphone", 
           dataType: "json",
           data:{phone:$("#phone").val(),verifycode:$("#verifyCode").val()},
           success: function (data) { 
                switch(data.state){
                  case "1":alert("发送成功");window.location=('/cakefox/index.php/Home/Index/forget_verify/phone/'+$("#phone").val());break;
                  case "2":alert("24小时内发送次数不得大于5");break;
                  case "3":alert("该手机号码未注册");break;
                  case "4":alert("验证码不正确");break;
                }  
                fleshVerify();                       
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");fleshVerify();  } 
    });
});
*/
</script>
</body>
</html>