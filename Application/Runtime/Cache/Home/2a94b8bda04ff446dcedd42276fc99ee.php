<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="cakefun">
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <meta name="description" content="在线蛋糕DIY，现做蛋糕送上门">
     <title>cakefox</title>
     <link href="" rel="icon">
     <link rel="stylesheet" href="/cakefox/Public/css/fakeloader.css">
     <link href="/cakefox/Public/css/public.css" rel="stylesheet">
     <link href="/cakefox/Public/css/font-awesome.min.css" rel="stylesheet">
     <!--[if lt IE 9]><link href="/cakefox/Public/css/font-awesome-ie7.min.css" rel="stylesheet"><![endif]-->
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/public.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
     <script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
     <script src="/cakefox/Public/js/fakeloader.js"></script>
  </head>
  <body ng-controller="homeCtrl">
    <!-- <div class="loading"></div> -->
    <div id="fakeloader"></div>
    <script>
        $("#fakeloader").fakeLoader({
            zIndex:"9999",//
            bgColor:"#000", //加载时的背景颜色
          });
     </script>
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

    <div class="fullbox tumbbox" style="z-index:10;">
      <div class="tumb">
        <img ng-hide="tumbimg != 0" src="/cakefox/Public/tumb/tumb-pic-2.jpg" alt="" class="tumbimg fadeout">
        <img ng-hide="tumbimg != 1" src="/cakefox/Public/tumb/tumb-pic-6.jpg" alt="" class="tumbimg fadeout">
        <img ng-hide="tumbimg != 2" src="/cakefox/Public/tumb/tumb-pic-7.jpg" alt="" class="tumbimg fadeout">
        <div class="tumbctrl">
          <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
          <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
        </div>
      </div>
      <!-- <div class="p-centerbox">
        <div class="navbox">
          <table class="nav">
            <tr>
              <td><a href="/cakefox/index.php/Home/Index/index.html">主页</a></td>
              <td><a href="/cakefox/index.php/Home/Index/customize.html">定制</a></td>
              <td><a href=""><img class="logo" src="/cakefox/Public/img/logo@2x.png" alt="logo"></a></td>
              <td><a href="">商城</a></td>
              <td><a href="">关于我们</a></td>
            </tr>
          </table>
        </div>
      </div> -->
    </div> 
    


    <div class="fullbox goodpadbox">
      <div class="centerbox">

        <?php if(is_array($goods)): $i = 0; $__LIST__ = $goods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vogoods): $mod = ($i % 2 );++$i;?><div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Uploads/<?php echo ($vogoods["img"]); ?>" alt=""></div>
            <span><?php echo ($vogoods["detail"]["good_name"]); ?></span>
            <span>￥<?php echo ($vogoods["detail"]["good_price"]); ?></span>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
    </div>
    <div class="fullbox goodpadbox">
      <div class="centerbox">
        <div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Public/img/gaodian1.jpg" alt="核桃心酥"></div>
          <span>果酪</span>
          <span>￥12</span>
        </div>
        <div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Public/img/gaodian2.jpg" alt="核桃心酥"></div>
          <span>柠檬片</span>
          <span>￥12</span>
        </div>
        <div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Public/img/gaodian3.jpg" alt="核桃心酥"></div>
          <span>老婆饼</span>
          <span>￥15</span>
        </div>
      </div>
    </div>
<div class="fullbox foot" style="margin-top:20px;">
	<div class="centerbox" style="border-top:1px solid #eee;">
			<ul class="footleft">
				<li><a>回到顶部</a></li>
				<li><a href="/cakefox/index.php/Home/Index/about.html" target="_blank">关于我们</a></li>
				<li><a href="/cakefox/index.php/Home/Index/buy&delivery.html" target="_blank">购买&配送</a></li>
				<li><a href="/cakefox/index.php/Home/Index/complain&right.html" target="_blank">投诉&维权</a></li>
				<li><a href="/cakefox/index.php/Home/Index/agreement.html" target="_blank">条款协议</a></li>
				<li><a href="/cakefox/index.php/Home/Index/serviceforbusiness.html" target="_blank">企业服务</a></li>
				<li><a href="/cakefox/index.php/Home/Index/job.html" target="_blank">招贤纳士</a></li>
			</ul>
			<ul class="footright">
				<li><a href="">浙ICP备12036459号-2</a></li>
				<li><a href="">© 2015 Cakewith.ME, Inc.</a></li>

			</ul>
	</div>
</div>

<!--<script src="/cakefox/Public/js/slide.js"></script>-->
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
<script>
var h = $(window).height();
$(".tumbbox").css("height",h);
$(".angle-left,.angle-right").css("top",h/2-40)
$(".header").css({"position":"fixed","border":"0"});
$(window).scroll(function(){
  var t = parseInt($(this).scrollTop());
  if(t>parseInt(h)){
    $(".header").css({"background":"rgba(255,255,255,0.8)"});
  }
  if(t<parseInt(h)){
    $(".header").css({"background":"rgba(255,255,255,0.2)"});
  }
})
var islogin = <?php echo ($islogin); ?>;
</script>

 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/tumbflash.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>

<!--  -->



  </body>

  </html>