<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="userinfo">
  <head> 
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="蛋糕狐在线蛋糕DIY，现做蛋糕送货上门">
     <title>cakefun</title>
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/font-awesome.min.css" rel="stylesheet">
     <!--[if lt IE 9]><link href="/cakefox/Public/css/font-awesome-ie7.min.css" rel="stylesheet"><![endif]-->
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/public.less">
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/userinfo.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="header">
    <div class="centerbox">

      <div class="logo-sm"><img src="/cakefox/Public/img/logo@2x.png" /></div>
      <ul class="header-nav">
        <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
        <li><a href="/cakefox/index.php/Home/Index/customize.html">定制</a></li>
        <li><a href="/cakefox/index.php/Home/Index/towndown.html">商城</a></li>
        <li><a>关于我们</a></li>
      </ul>
      <ul class="header-nav" style="float:right;">
        <li><a href="/cakefox/index.php/Home/Index/user.html">个人中心</a></li>
        <li><a href="/cakefox/index.php/Home/Index/cart.html">购物车</a></li>
      </ul>
      </div>
    </div>
</div>
  <div class="fullbox" style="margin-top:20px;">
    <div class="centerbox">
      <div class="column one-fourth">
        <h3 class="title" style="margin-top:20px;">账户设置</h3>
        <div class="cont" style="padding:0;">
          <a class="menuitem" href="#/baseinfo.html">个人资料</a>
          <a class="menuitem" href="#/account">账户设置</a>
          <a class="menuitem" href="#/address">送货地址</a>
          <a class="menuitem" href="#/myorder">我的订单</a>
          <a class="menuitem" href="#/coupon">优惠码信息</a>
        </div>
      </div>
      <div class="column three-fourth" ng-view></div>
    </div>
  </div>
  
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/angular-route.min.js"></script>
 <script src="/cakefox/Public/js/userinfo.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
 <!--<script src="/cakefox/Public/js/md5.js"></script> -->
<!--  -->

<script>

</script>

  </body>
  </html>