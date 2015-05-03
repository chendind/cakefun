<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="zh-CN" ng-app="mall">
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
<body ng-controller="MallController">
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
            <img class="headuserimg" id="user_img" src="/cakefox/Uploads/<?php echo ($detail["user_img"]); ?>" />
            <span class="headusername">陈世雷</span>
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

  <div class="fullbox" style="border-bottom:1px solid #eee;">
   <div class="centerbox">
     <div class="catagory" style="float:left;">
       <div class="item" style="text-align:left;"><span id="itemall" ng-click="goodshow='all'">显示全部</span></div>
     </div>
     <div class="catagory" style="float:right;">
       <div class="item"><span id="item1" ng-click="goodshow='cake'">生日蛋糕</span></div>
       <div class="item"><span id="item2" ng-click="goodshow='desert'">甜点</span></div>
       <div class="item"><span id="item3" ng-click="goodshow='drink'">酒水</span></div>
     </div>
   </div>
 </div>
 <div class="fullbox" ng-init="goodshow='all'" style="min-height:500px;">
   <div class="centerbox">
    <div class="goodbox" ng-hide="goodshow!='cake'">
     <a class="goodpad" ng-repeat="good in goods | filter:{'kind' : 'cake'}" ng-href="/cakefox/index.php/Home/Index/{{good.link}}" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Public/img/{{good.src}}" alt="{{good.name}}" /></div>
      <div class="goodms">
        <span>{{good.name}}</span>
        <span>{{good.price}}</span>
      </div>
    </a>
  </div>
  <div class="goodbox" ng-hide="goodshow!='desert'">
    <a class="goodpad" ng-repeat="good in goods | filter:{'kind' : 'desert'}" ng-href="/cakefox/index.php/Home/Index/{{good.link}}" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Public/img/{{good.src}}" alt="{{good.name}}" /></div>
      <div class="goodms">
        <span>{{good.name}}</span>
        <span>{{good.price}}</span>
      </div>
    </a>
  </div>
  <div class="goodbox" ng-hide="goodshow!='drink'">
    <a class="goodpad" ng-repeat="good in goods | filter:{'kind' : 'drink'}" ng-href="/cakefox/index.php/Home/Index/{{good.link}}" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Public/img/{{good.src}}" alt="{{good.name}}" /></div>
      <div class="goodms">
        <span>{{good.name}}</span>
        <span>{{good.price}}</span>
      </div>
    </a>
  </div>
  <div class="goodbox" ng-hide="goodshow!='all'">
    <a class="goodpad" ng-repeat="good in goods" ng-href="/cakefox/index.php/Home/Index/{{good.link}}" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Public/img/{{good.src}}" alt="{{good.name}}" /></div>
      <div class="goodms">
        <span>{{good.name}}</span>
        <span>{{good.price}}</span>
      </div>
    </a>
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
<script src="/cakefox/Public/js/angular-animate.min.js"></script>
<script src="/cakefox/Public/js/angular-route.min.js"></script>
<script src="/cakefox/Public/js/mall.js"></script>
<script src="/cakefox/Public/js/public.js"></script>

<script>
 setTimeout(function(){
  $(".goodms").css("display","block");
  },600);
</script>

</body>
</html>