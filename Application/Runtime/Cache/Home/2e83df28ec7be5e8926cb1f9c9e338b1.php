<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="cakefun">
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
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/mall.less">

     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
  </head>
  <body ng-controller="homeCtrl">
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
  <div class="fullbox" style="border-bottom:1px solid #eee;">
     <div class="centerbox">
       <div class="catagory" style="float:left;">
         <div class="item" style="text-align:left;"><span id="itemall" ng-click="goodshow='all'">返回商城</span></div>
       </div>
       <div class="catagory" style="float:right;">
         <div class="item"><span id="item3" ng-click="goodshow='drink'">商品名</span></div>
       </div>
     </div>
   </div>
    <div class="fullbox">
      <div class="centerbox">
        <div class="column two-third" style="height:400px;display:table;">
          <div class="goodtumb">
            <img ng-hide="tumbimg != 0" src="/cakefox/Public/img/top-lirong1.png" alt="" class="tumbimg fadeout">
            <img ng-hide="tumbimg != 1" src="/cakefox/Public/img/main-ice.png" alt="" class="tumbimg fadeout">
          </div>
          <div class="tumbctrl">
              <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
              <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
            </div>
        </div>
        <div class="column one-third goodinfo" style="height:400px;">
          <h3>商品名</h3>
          <span>RMB 100</span>
          <p>一段商品描述一段商品描述一段商品描述一段商品描述一段商品描述一段商品描述一段商品描述一段商品描述一段商品描述</p>
          <span style="font-size:13px;color:#d0021b;">*请提前24小时订购</span>
          <div class="selectbox" ng-init="chicun=9">
            <span>尺寸：<a ng-bind="chicun">--</a>寸</span>
            <select name="" id="" ng-model="chicun">
              <option value="6">6寸</option>
              <option value="9">9寸</option>
              <option value="13">13寸</option>
              <option value="18">18寸</option>
            </select>
          </div>
          <label>数量：<input type="number" value="1" /><a class="btn greenbtn">加入购物车</a></label>
        </div>
      </div>
    </div>
    <div class="fullbox foot" style="margin-top:20px;">
	<div class="centerbox">
			<ul class="footleft">
				<li>回到顶部</li>
				<li>关于购买</li>
				<li>关于配送</li>
				<li>商业合作</li>
				<li>条款协议</li>
				<li>招贤纳士</li>
				<li></li>
				<li></li>
				<li>浙ICP备12036459号-2</li>
			</ul>
			<div class="shareiconbox">
				<div><i class="fa fa-weibo"></i></div>
				<div><i class="fa fa-weixin"></i></div>
				<div><i class="fa fa-tencent-weibo"></i></div>
				<div><i class="fa fa-tumblr"></i></div>
			</div>
	</div>
</div>
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
<script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/angular-route.min.js"></script>
 <script src="/cakefox/Public/js/tumbflash.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>

<script>
 
</script>

  </body>
  </html>