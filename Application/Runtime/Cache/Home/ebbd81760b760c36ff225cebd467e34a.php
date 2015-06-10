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
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/cart.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
     <style>
        .nav-step li{
            width:25%;
        }
     </style>
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

  <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li><a>购物车</a></li>
        <li><a>确定订单</a></li>
        <li class="stephere"><a>在线支付</a></li>
        <li><a>交易完成</a></li>
      </ul>
  </div>
</div>  
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>请选择适合您的支付方式</span>
      </div>
    </div>
    <div class="centerbox">
      <div class="column" style="padding-bottom:20px;">
        <div class="brand" style="border-right:1px solid #d8d8d8;">
          <label for="zhifubaoradio">
            <span>支付宝</span>
            <div>
              <img src="/cakefox/Public/img/zhifubao.png" alt="支付宝logo">
            </div>
            <div class="describe">
              使用支付宝支付，请确定您拥有支付宝账号；<br />
              我们会为您跳转到支付宝付款页面。
            </div>
            <div  class="paytyperadio"><input type="radio" name="paytype" id="zhifubaoradio" value="zhifubao" checked /></div>
          </label>
        </div>
        <div class="brand">
          <label for="weixinradio">
            <span>微信支付</span><div><img src="/cakefox/Public/img/weixinzhifu.png" alt="微信支付logo"></div>
            <div class="describe">
              使用微信支付，请确定您已开通微信钱包；<br />
              您需要通过手机微信扫描付款二维码完成支付；<br />
              现在通过微信钱包付款，能够获得5%的返现。
            </div>
            <div class="paytyperadio"><input type="radio" name="paytype" id="weixinradio" value="weixin" /></div>
          </label>
        </div>
        
      </div>
      <div class="clear"></div>
      <div class="quzhifu">
          <div class="paymenttip">您需支付<span>298元</span><a class="btn greenbtn">去支付</a></div>
          
      </div>
    </div>
    
    <div class="centerbox">
      <!-- <table class="introtable">
        <tr>
          <td class="introimg" style="padding:20px;"><img src="/cakefox/Public/img/erweima.png" alt="二维码" /></td>
          <td><span>关注cakefun官方微信公众平台，查询订单状态、获取最新优惠都有噢～</span></td>
          <td class="introimg"><img src="/cakefox/Public/img/weibo.jpg" alt="新浪微博" /></td>
          <td><span>我们的新浪微博账号是：cakefun我们的蛋糕坊，欢迎关注噢</span></td>
        </tr>
      </table> -->
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