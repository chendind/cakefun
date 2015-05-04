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

    <div class="fullbox" style="height:300px;overflow:hidden;">
      <img class="aboutheader" src="/cakefox/Public/img/aboutheader.jpg" alt="aboutheader" />
    </div> 
    <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
      <div class="centerbox">
        <ul class="nav-step">
        <li style="width:17.5%;"><a href="/cakefox/index.php/Home/Index/about.html">Cakewith.ME</a></li>
        <li class="stephere"><a href="/cakefox/index.php/Home/Index/buy&delivery.html">购买&配送</a></li>
        <li><a href="/cakefox/index.php/Home/Index/complain&right.html">投诉&维权</a></li>
        <li><a href="/cakefox/index.php/Home/Index/agreement.html">条款协议</a></li>
        <li><a href="/cakefox/index.php/Home/Index/cooperation.html">商务合作</a></li>
        <li><a href="/cakefox/index.php/Home/Index/job.html">招贤纳士</a></li>
      </ul>
      </div>
    </div>
    <div class="fullbox">
      <div class="centerbox">
        <p class="aboutlead">
          Cakewith.ME 致力于提高您的购物体验，您在Cakewith.ME的任何一次购买都会产生电子账单，并且将由配送专员送货上门。我们会认真对待每一份订单，保质、保量、准时地为您提供服务。
            
        </p>
          <div class="column three-fourth" style="padding-right:30px;">
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
            <p>
              回答1：有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字有很多很多的字。
            </p>
            <h1 class="aboutquestion">问题1</h1>
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
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>

<!--  -->

<script>
var h = $(window).height();

</script>

  </body>

  </html>