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
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/cust.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
  </head>
  <body>
  <div class="header" style="">
  <div class="centerbox" style="height:28px;overflow:visible;">
    <div class="logo-sm"><img src="/cakefox/Public/img/cakewithme2.png" /></div>
    <ul class="header-nav" style="margin-left:200px;">
      <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
      <li><a href="/cakefox/index.php/Home/Index/customize.html">定制蛋糕</a></li>
      <li><a href="/cakefox/index.php/Home/Index/mall.html">商城</a></li>
      <li><a href="/cakefox/index.php/Home/Index/about.html">关于我们</a></li>
    </ul>
    <ul class="header-nav" style="float:right;">
     <?php if($islogin == 0 ): ?><!-- 未登录 -->
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

      <?php else: ?> 
      <!-- 已登录 -->
      <li>
        <a href="/cakefox/index.php/Home/Index/user.html">
          <img class="headuserimg" id="user_img" src="/cakefox/Uploads/<?php echo ($userimg); ?>" />
          <span class="headusername"><?php echo ($username); ?></span>
          <div class="clear"></div>
        </a>
      </li>
      <li id="userinfo">
        <a href="/cakefox/index.php/Home/Index/userinfo.html" style="padding:4px;">
          <i class="fa fa-fw fa-cog"></i>
        </a>
        <div class="headdialogbox" id="userinfodialogbox" style="display:none;">
          <ul>
            <li><a href="/cakefox/index.php/Home/Index/baseinfo.html">个人资料</a></li>
            <li><a href="/cakefox/index.php/Home/Index/account.html">账户设置</a></li>
            <li><a href="/cakefox/index.php/Home/Index/address.html">送货地址</a></li>
            <li><a href="/cakefox/index.php/Home/Index/myorder.html">我的订单</a></li>
            <li><a href="/cakefox/index.php/Home/Index/coupon.html">优惠码</a></li>
          </ul>
        </div> 
      </li>
      <li id="cart">
        <a href="/cakefox/index.php/Home/Index/cart.html" style="padding:4px;"><i class="fa fa-fw fa-shopping-cart"></i></a>
        <div class="headdialogbox" id="cartdialogbox" style="display:none;">
          <div class="loadingbox">
            <i class="fa fa-spinner fa-spin"></i>
          </div>
          <div class="cartdialog"></div>
        </div> 
      </li>
      <!-- 已登录 --><?php endif; ?>   
  </ul>
</div>
</div>
</div>

<div>
<div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li><a>初始化</a></li>
        <li><a>第一步</a></li>
        <li><a>第二步</a></li>
        <li><a>第三步</a></li>
        <li><a>第四步</a></li>
        <li class="stephere"><a>完成！</a></li>
      </ul>
  </div>
</div>

<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>您已成功定制蛋糕！</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="rightbox" id="rightbox">
          
          <div class="canvas">
            <img src="/cakefox/001.jpg" alt="定制蛋糕图片" />
          </div>
      </div>
      <div class="leftbox">
        
          <div class="controllbox">
            <div class="dashedbox">
              <p>我们已经将您定制的蛋糕放入您的购物车中，您可以在<a href="/cakefox/index.php/Home/Index/cart.html">购物车</a>中结算</p>
              <p>我们的商城里还有美味可口的小糕点和酒水，去<a href="/cakefox/index.php/Home/Index/mall.html">商城</a>逛逛</p>
            </div>
          </div>
          
        <div class="controllbox">
          
        </div>
      </div>
    </div>
</div>
</div>
 <div style="margin-bottom:100px"></div>
  <div class="fullbox foot" style="margin-top:30px;">
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
				<li>浙ICP备12036459号-2</li>
				<li>© 2015 Cakewith.ME, Inc.</li>

			</ul>
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