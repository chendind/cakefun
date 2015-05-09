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
            </a>
          </li>
          <li id="userinfo">
            <a href="/cakefox/index.php/Home/Index/userinfo.html" style="padding:4px;">
              <i class="fa fa-fw fa-cog"></i>
            </a>
            <div class="headdialogbox" id="userinfodialogbox" style="display:none;">
              <ul>
                <li><a href="/cakefox/index.php/Home/Index/userinfo.html#/baseinfo">个人资料</a></li>
                <li><a href="/cakefox/index.php/Home/Index/userinfo.html#/account">账户设置</a></li>
                <li><a href="/cakefox/index.php/Home/Index/userinfo.html#/address">送货地址</a></li>
                <li><a href="/cakefox/index.php/Home/Index/userinfo.html#/myorder">我的订单</a></li>
                <li><a href="/cakefox/index.php/Home/Index/userinfo.html#/coupon">优惠码</a></li>
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

    <div class="fullbox" style="height:300px;overflow:hidden;">
      <img class="aboutheader" src="/cakefox/Public/img/aboutheader.jpg" alt="aboutheader" />
    </div> 
    <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
      <div class="centerbox">
        <ul class="nav-step">
        <li style="width:17.5%;" class="stephere"><a href="/cakefox/index.php/Home/Index/about.html">Cakewith.ME</a></li>
        <li><a href="/cakefox/index.php/Home/Index/buy&delivery.html">购买&配送</a></li>
        <li><a href="/cakefox/index.php/Home/Index/complain&right.html">投诉&维权</a></li>
        <li><a href="/cakefox/index.php/Home/Index/agreement.html">条款协议</a></li>
        <li><a href="/cakefox/index.php/Home/Index/serviceforbusiness.html">企业服务</a></li>
        <li><a href="/cakefox/index.php/Home/Index/job.html">招贤纳士</a></li>
      </ul>
      </div>
    </div>
    <div class="fullbox">
      <div class="centerbox">
        <p class="aboutlead">
            Cakewith.ME 专注于烘焙与分享美味的蛋糕。同所有纯正的蛋糕一样，Cakewith.ME使用真正的乳脂奶油，杜绝任何色素、香精和添加剂一次次的旅行，一次次的寻找，一次次的尝试，挑剔近50种国外的地道原料
        </p>
          <div class="column one-half" style="padding:0 50px 0 0;">
            <h1>定制蛋糕</h1>
            <p>
              源自于热爱制作美味又漂亮的蛋糕并希望每个人都能享受制作蛋糕的乐趣，Cakewith.ME首推蛋糕在线定制服务。
              我们精选56种优质原材料，拣选当季成熟的水果，记录裱花师绘制出的斑驳多姿的裱花样式以及各种巧克力饰品，
              只为提供您更优雅的网上定制服务。您现在就可以开始<a>定制</a>一款蛋糕了！
            </p>
          </div>
          <div class="column one-half" style="padding:0 0 0 50px;">
            <h1>下午茶</h1>
            <p>
              一罐刚刚出烤箱的杏仁酥，一壶香醇微烫的洛神红茶，Cakewith.ME为您提供优雅、便捷的下午茶服务。
              我们为您提供32种精致可口的小糕点，还有我们精心准备的零食大礼包，让您的下午时光更加美妙。
              您需要做的只是进入我们的<a>商城</a>在线选购，快来和我们一起分享吧！
            </p>
          </div>
      </div>
    </div>
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
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>

<!--  -->

<script>
var h = $(window).height();

</script>

  </body>

  </html>