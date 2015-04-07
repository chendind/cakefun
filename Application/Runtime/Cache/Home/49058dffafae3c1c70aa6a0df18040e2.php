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
  <body>
  <div class="user-content">
     <div class="user-head">
         <h1 class="webLogo">cake<span>fun</span></h1>
         <p>欢迎来到最美味的蛋糕定制平台</p>
     </div>
     <div class="col-sm-6 col-sm-push-3 col-md-4 col-md-push-4 user-com-box">
       <h4 class="logIn-form-title user-title">
         找回密码
       </h4>
       <form name="form" novalidate>
       
         <div class="form-group">
         <label>手机号码</label>
         <input type="text" class="form-input" id="phone" name="phone" ng-model="signup.phone" placeholder="手机号码" required ng-minlength="11" ng-maxlength="11" ng-pattern="/^\d*$/" ng-focus />
         <div class="error" ng-class="{errorshow:form.phone.$dirty && form.phone.$invalid && !form.phone.$focused}">
              <span>手机号码应为11位数字</span>
           </div>
         </div>
         <div class="form-group">
<label>验证码</label>
        <div class="clear"></div>
        <input type="text" id="verifyCode" class="form-input" name="verifyCode" ng-model="signup.verifyCode" placeholder="验证码" ng-minlength="4" ng-maxlength="4" required ng-focus />
        <div class="verifyCode"><img src="/cakefox/index.php/Home/Index/verify" /></div>
        <div class="clear"></div>
        <div class="error" ng-class="{errorshow:form.verifyCode.$dirty && form.verifyCode.$invalid && !form.verifyCode.$focused}">
              <span>验证码应为4位字符</span>
           </div>
      </div>
         

         <div class="form-group">
         <div class="clear"></div>
         <button class="form-btn" id="form-btn" ng-disabled="form.$invalid">下一步</button>
         <div class="clear"></div>
       </div>
       </form>
     </div>
     <div class="clear"></div>
     <div class="form-foot">
       <a href="/cakefox/index.php/Home/Index/register.html">注册账号</a>
       |
       <a href="/cakefox/index.php/Home/Index/index.html">首页</a>
       |
       <a href="/cakefox/index.php/Home/Index/login.html">用户登录</a>
     </div>
  </div>
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
<script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
<script>
 $("#form-btn").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/sendcodetophone", 
           dataType: "json",
           data:{phone:$("#phone").val(),verifycode:$("#verifyCode").val()},
           success: function (data) { 
                switch(data.state){
                  case "1":alert("发送成功");window.location='/cakefox/index.php/Home/Index/forget_verify';break;
                  case "2":alert("您发送的次数过多，请明天再试");break;
                  case "3":alert("该手机号码未注册");break;
                  case "4":alert("验证码不正确");break;
                }                       
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });
});
</script>
</body>
</html>