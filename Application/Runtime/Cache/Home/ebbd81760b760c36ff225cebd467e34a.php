<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="cust">
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
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/cart.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="header" style="">
    <div class="centerbox">
      <div class="logo-sm"><img src="/cakefox/Public/img/cakewithme2.png" /></div>
      <ul class="header-nav" style="margin-left:200px;">
        <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
        <li><a href="/cakefox/index.php/Home/Index/customize.html">定制蛋糕</a></li>
        <li><a href="/cakefox/index.php/Home/Index/mall.html">商城</a></li>
        <li><a>关于我们</a></li>
      </ul>
      <ul class="header-nav" style="float:right;">
        
        <li><a href="/cakefox/index.php/Home/Index/user.html">个人中心</a></li>
        <li><a href="/cakefox/index.php/Home/Index/cart.html">购物车</a></li>
      </ul>
      </div>
    </div>
</div>
  <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li><a>购物车</a></li>
        <li><a>确定订单</a></li>
        <li class="stephere"><a>在线支付</a></li>
        <li><a>交易完成</a></li>
      </ul>
  </div>
</div>  
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>请选择适合您的支付方式</span>
      </div>
    </div>
    <div class="centerbox" style="border-bottom:1px solid #e5e5e5;padding-bottom:20px;">
      <div class="column three-fourth">
        <div class="brand"><div><img src="/cakefox/Public/img/zhifubao.png" alt="支付宝logo"></div><span>支付宝</span></div>
        <div class="brand"><div><img src="/cakefox/Public/img/weixinzhifu.png" alt="微信支付logo"></div><span>微信支付</span></div>
        <div class="brand"><div><img src="/cakefox/Public/img/caifutong.jpg" alt="财付通logo"></div><span>财付通</span></div>
        <div class="brand"><div><img src="/cakefox/Public/img/zhongguoyinlian.png" alt="中国银联logo"></div><span>中国银联</span></div>
        <div class="clear"></div>
      </div>
      <div class="column one-fourth">
        <div class="paymenttip">您需支付<span>298元<span></div>
        <a class="btn greenbtn" style="margin-bottom:10px;">去支付</a>
        <div class="clear"></div>
        <a href="/cakefox/index.php/Home/Index/order.html" class="btn">返回订单</a>
      </div>
    </div>
    <div class="centerbox">
      <table class="introtable">
        <tr>
          <td class="introimg" style="padding:20px;"><img src="/cakefox/Public/img/erweima.png" alt="二维码" /></td>
          <td><span>关注cakefun官方微信公众平台，查询订单状态、获取最新优惠都有噢～</span></td>
          <td class="introimg"><img src="/cakefox/Public/img/weibo.jpg" alt="新浪微博" /></td>
          <td><span>我们的新浪微博账号是：cakefun我们的蛋糕坊，欢迎关注噢</span></td>
        </tr>
    </div>
  </div>
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
<!--<script src="/cakefox/Public/js/slide.js"></script>-->
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/angular-route.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/cust.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>
<!--  -->

<script>

</script>

  </body>
  </html>