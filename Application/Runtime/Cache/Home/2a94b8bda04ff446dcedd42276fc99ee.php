<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="cakefun">
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
     <link rel="stylesheet" type="text/css" href="/cakefox/Public/css/cakepublic.css">
     <script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
     <script>
     $(window).load(function(){
      $(".loading").hide();
      $("body").css({"height":"","overflow":""});
     })
     </script>
     <style>
      .loading{
        width:100%;
        height:100%;
        background:red;
        position: fixed;
        top:0;
        z-index:999;
      }
     </style>
  </head>
  <body ng-controller="homeCtrl">
    <div class="loading">

    </div>
    <script>
    var h = $(window).height();
        $(".loading").css("height",h);
        $("body").css({"height":h,"overflow":"hidden"});
    </script>
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
    
    <div class="fullbox tumbbox" style="z-index:10;">
      <div class="tumb">
        <img ng-hide="tumbimg != 0" src="/cakefox/Public/tumb/tumb-pic-2.jpg" alt="" class="tumbimg fadeout">
        <img ng-hide="tumbimg != 1" src="/cakefox/Public/tumb/tumb-pic-2.jpg" alt="" class="tumbimg fadeout">
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
      <div class="tumbctrl">
          <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
          <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
        </div>
      <div class="centerbox">
        <div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Public/img/top-hetao.png" alt="核桃心酥"></div>
          <div class="goodms">
            <span>核桃心酥</span>
            <span>2磅·￥179</span>
          </div>
        </div>
        <div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Public/img/top-lirong1.png" alt="核桃心酥"></div>
          <span>开心棉花糖</span>
          <span>hobby de'happy</span>
          <span>2磅·￥179</span>
        </div>
        <div class="goodpad">
          <div class="goodimgbox"><img src="/cakefox/Public/img/main-ice.png" alt="核桃心酥"></div>
          <span>曼城果心</span>
          <span>man dur' hotheart</span>
          <span>2磅·￥179</span>
        </div>
      </div>
    </div>
    <div class="fullbox goodpadbox">
      <div class="tumbctrl">
          <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
          <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
        </div>
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
<div class="fullbox foot">
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

<!--<script src="/cakefox/Public/js/slide.js"></script>-->
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/tumbflash.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>
<!--  -->

<script>

/*
$("#sendPhoneCode").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/sendcodetoregisterphone", 
           dataType: "json",
           data:{phone:$("#registerPhone").val()},
           success: function (data) { 
               switch(data.state) {
                  case "1":window.location.reload(); break; 
                  case "2":alert("注册失败");break;
                  case "3":alert("非法手机号");break;
                  case "4":alert("该号码已被注册");break;
               }
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });
  });
$("#registerBtn").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/registerapi", 
           dataType: "json",
           data:{phone:$("#registerPhone").val(),password:hex_md5($("#registerPassword").val()),verifycode:$("#registerCode").val()},
           success: function (data) { 
               switch(data.state){
                  case "1":window.location.reload();break;
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

$(".tumbbox").css("height",h);
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
</script>

  </body>

  </html>