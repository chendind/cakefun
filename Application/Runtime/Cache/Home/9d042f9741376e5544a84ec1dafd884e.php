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
     <script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/jquery.Jcrop.css">
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/public.less">
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/userinfo.less">
     <link rel="stylesheet" type="text/css" href="/cakefox/Public/css/bootstrap-datepicker.css">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
     
  </head>
  <body>
  <div class="header" style="" controller="HeaderController">
    <div class="centerbox" style="height:28px;overflow:visible;">
      <div class="logo-sm"><img src="/cakefox/Public/img/cakewithme2.png" /></div>
      <ul class="header-nav" style="margin-left:200px;">
        <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
        <li><a href="/cakefox/index.php/Home/Index/customize.html">定制蛋糕</a></li>
        <li><a href="/cakefox/index.php/Home/Index/mall.html">商城</a></li>
        <li><a>关于我们</a></li>
      </ul>
      <ul class="header-nav" style="float:right;">
        
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
      </ul>
      </div>
    </div>
</div>

  <div class="fullbox" style="margin-top:20px;">
    <div class="centerbox">
      <div class="column one-fourth">
        <h3 class="title" style="margin-top:20px;">账户设置</h3>
        <div class="cont" style="padding:0;">
          <a class="menuitem" href="#/baseinfo">个人资料</a>
          <a class="menuitem" href="#/account">账户设置</a>
          <a class="menuitem" href="#/address">送货地址</a>
          <a class="menuitem" href="#/myorder">我的订单</a>
          <a class="menuitem" href="#/coupon">优惠码信息</a>
        </div>
      </div>
      <div class="column three-fourth" ng-view></div>
    </div>
  </div>
  <div id="dialogbox" class="dialogbox" style="display:none;">
    
  </div>
  <div class="fullbox foot" style="margin-top:20px;">
	<div class="centerbox">
			<ul class="footleft">
				<li><a>回到顶部</a></li>
				<li><a href="/cakefox/index.php/Home/Index/about.html" target="_blank">关于我们</a></li>
				<li><a href="/cakefox/index.php/Home/Index/buy&delivery.html" target="_blank">购买&配送</a></li>
				<li><a href="/cakefox/index.php/Home/Index/complain&right.html" target="_blank">投诉&维权</a></li>
				<li><a href="/cakefox/index.php/Home/Index/agreement.html" target="_blank">条款协议</a></li>
				<li><a href="/cakefox/index.php/Home/Index/serviceforbusiness.html" target="_blank">企业服务</a></li>
				<li><a href="/cakefox/index.php/Home/Index/job.html" target="_blank">招贤纳士</a></li>
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
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/angular-route.min.js"></script>
 <script src="/cakefox/Public/js/userinfo.js"></script>
 
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/ajaxfileupload.js"></script>
  </body>
  </html>