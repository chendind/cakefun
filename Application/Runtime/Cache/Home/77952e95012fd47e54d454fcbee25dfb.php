<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="在线蛋糕DIY，现做蛋糕送上门">
     <title>cakefox</title>
     <link href="" rel="icon">
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/font-awesome.min.css" rel="stylesheet">
     <!--[if lt IE 9]><link href="/cakefox/Public/css/font-awesome-ie7.min.css" rel="stylesheet"><![endif]-->
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/public.less">
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/about.less">
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

    <div class="fullbox" style="height:300px;overflow:hidden;">
      <img class="aboutheader" src="/cakefox/Public/img/aboutheader.jpg" alt="aboutheader" />
    </div> 
    <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
      <div class="centerbox">
        <ul class="nav-step">
        <li style="width:17.5%;"><a href="/cakefox/index.php/Home/Index/about.html">Cakewith.ME</a></li>
        <li><a href="/cakefox/index.php/Home/Index/buy&delivery.html">购买&配送</a></li>
        <li class="stephere"><a href="/cakefox/index.php/Home/Index/complain&right.html">投诉&维权</a></li>
        <li><a href="/cakefox/index.php/Home/Index/agreement.html">条款协议</a></li>
        <li><a href="/cakefox/index.php/Home/Index/serviceforbusiness.html">企业服务</a></li>
        <li><a href="/cakefox/index.php/Home/Index/job.html">招贤纳士</a></li>
      </ul>
      </div>
    </div>
    <div class="fullbox">
      <div class="centerbox">
        <p class="aboutlead">
            Cakewith.ME 努力地为您提供完美的服务，然而百密一疏，我们也有可能失误，如果耽误了您宝贵的时间，我们深感歉意。但我们愿意倾听您的批评，您可以通过以下方式与我们联系，我们的工作人员将竭诚为您服务。
        </p>
          <div class="column three-fourth" style="padding-right:30px;">
            <h1 class="aboutquestion">联系方式</h1>
            <p style="border-bottom:1px solid #d8d8d8;padding-bottom:20px;">
              客服电话：0571-62229388（周一至周五，上午9：00-下午5：00）<br />
              客服邮箱：hi@cakefun.me（3个工作日内给您回件）<br />
            </p>
            <h1 class="aboutquestion">常见问题解决方案</h1>
            <p>
              我们例举出了一些可能比较常见的问题以及解决方法，在投诉前您可以适当了解。
            </p>
            <h2 class="complaintitle">快递员配送不及时</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h2 class="complaintitle">问题1</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h2 class="complaintitle">问题1</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h2 class="complaintitle">问题1</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h2 class="complaintitle">问题1</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h2 class="complaintitle">问题1</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h2 class="complaintitle">问题1</h2>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
          </div>
          <div class="column one-fourth">
            <h3 class="title" style="margin-top:20px;">常见问题解答</h3>
            <div class="cont" style="padding:0;">
              <a class="menuitem" href="#/baseinfo">问题1</a>
              <a class="menuitem" href="#/account">问题2</a>
              <a class="menuitem" href="#/address">问题2</a>
              <a class="menuitem" href="#/myorder">问题2</a>
              <a class="menuitem" href="#/coupon">问题3</a>
              <a class="menuitem" href="#/baseinfo">问题1</a>
              <a class="menuitem" href="#/account">问题2</a>
              <a class="menuitem" href="#/address">问题2</a>
              <a class="menuitem" href="#/myorder">问题2</a>
              <a class="menuitem" href="#/coupon">问题3</a>
            </div>
          </div>
      </div>
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
				<li>© 2015 Cakewith.ME, Inc.</li>
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
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>

<!--  -->

<script>
var h = $(window).height();

</script>

  </body>

  </html>