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

  <div class="fullbox" style="border-bottom:1px solid #eee;">
   <div class="centerbox">
     <div class="catagory" style="float:left;">
       <div class="item" style="text-align:left;"><span id="itemall" ng-click="goodshow='all'">显示全部</span></div>
     </div>
     <div class="catagory" style="float:right;">
       <div class="item"><span id="item1" ng-click="goodshow='cake'">生日蛋糕</span></div>
       <div class="item"><span id="item2" ng-click="goodshow='desert'">甜点</span></div>
       <div class="item"><span id="item3" ng-click="goodshow='drink'">酒水</span></div>
       <div class="item"><span id="item4" ng-click="goodshow='others'">其他</span></div>
     </div>
   </div>
 </div>
 <div class="fullbox" ng-init="goodshow='all'" style="min-height:500px;">
   <div class="centerbox">

    <div class="goodbox" ng-hide="goodshow!='cake'">
     <?php if(is_array($cakes)): $i = 0; $__LIST__ = $cakes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vocake): $mod = ($i % 2 );++$i;?><a class="goodpad"  href="/cakefox/index.php/Home/Index/gooddetail/id/<?php echo ($vocake["good_id"]); ?>" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Uploads/<?php echo ($vocake["img"]); ?>" alt="<?php echo ($vocake["good_name"]); ?>" /></div>
      <div class="goodms">
        <span><?php echo ($vocake["good_name"]); ?></span>
        <span><?php echo ($vocake["good_price"]); ?></span>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

  <div class="goodbox" ng-hide="goodshow!='desert'">
     <?php if(is_array($xidian)): $i = 0; $__LIST__ = $xidian;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voxd): $mod = ($i % 2 );++$i;?><a class="goodpad"  href="/cakefox/index.php/Home/Index/gooddetail/id/<?php echo ($voxd["good_id"]); ?>" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Uploads/<?php echo ($voxd["img"]); ?>" alt="<?php echo ($voxd["good_name"]); ?>" /></div>
      <div class="goodms">
        <span><?php echo ($voxd["good_name"]); ?></span>
        <span><?php echo ($voxd["good_price"]); ?></span>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

  <div class="goodbox" ng-hide="goodshow!='drink'">
    <?php if(is_array($jiushui)): $i = 0; $__LIST__ = $jiushui;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vojs): $mod = ($i % 2 );++$i;?><a class="goodpad"  href="/cakefox/index.php/Home/Index/gooddetail/id/<?php echo ($vojs["good_id"]); ?>" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Uploads/<?php echo ($vojs["img"]); ?>" alt="<?php echo ($vojs["good_name"]); ?>" /></div>
      <div class="goodms">
        <span><?php echo ($vojs["good_name"]); ?></span>
        <span><?php echo ($vojs["good_price"]); ?></span>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

  <div class="goodbox" ng-hide="goodshow!='all'">

<?php if(is_array($allgoods)): $i = 0; $__LIST__ = $allgoods;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voall): $mod = ($i % 2 );++$i;?><a class="goodpad"  href="/cakefox/index.php/Home/Index/gooddetail/id/<?php echo ($voall["good_id"]); ?>" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
      <div class="goodimgbox"><img ng-src="/cakefox/Uploads/<?php echo ($voall["img"]); ?>" alt="<?php echo ($voall["good_name"]); ?>" /></div>
      <div class="goodms">
        <span><?php echo ($voall["good_name"]); ?></span>
        <span><?php echo ($voall["good_price"]); ?></span>
      </div>
    </a><?php endforeach; endif; else: echo "" ;endif; ?>



    
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