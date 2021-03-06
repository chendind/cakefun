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
        
        <li><a href="/cakefox/index.php/Home/Index/user.html">个人中心</a></li>
        <li id="cartli" ng-init="cartdialogshow=0;" ng-mouseenter="cartdialogshow=1;" ng-mouseleave="cartdialogshow=0;">
          <a href="/cakefox/index.php/Home/Index/cart.html">购物车</a>
           <div id="cartdialogbox" style="display:none;">
            <div class="loadingbox">
              <i class="fa fa-spinner fa-spin"></i>
            </div>
            <div class="cartdialog"></div>
            <script>
              //   if(typeof jQuery == "function"){
              //     $("#cartdialogbox").show();
              //      if($(".cartdialog").children().length==0){
              //         $(".cartdialog").load("cartdialog.html",function(){
              //             $(".loadingbox").hide();
              //          });
              //      }
              // }
            </script>
          </div> 
        </li>
      </ul>
      </div>
    </div>
</div>

  <div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li class="stephere"><a>购物车</a></li>
        <li><a>确定订单</a></li>
        <li><a>在线支付</a></li>
        <li><a>交易完成</a></li>
      </ul>
  </div>
</div>  
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>您的购物车中共有3件商品</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="clear line" style="margin:0;border-bottom-color:#daae6c"></div>
      <div class="cont2" style="border-bottom:1px solid #daae6c;margin-bottom:20px;">
        <table class="ptable" style="border-bottom:1px dashed #daae6c">
          <tr>
            <th>项目</th>
            <th>规格</th>
            <th>单价/元</th>
            <th>数量</th>
            <th>小计/元</th>
            <th>操作</th>
          </tr>
          <tr>
            <td class="imgtd">
              <img src="/cakefox/Public/img/top-lirong1.png" alt="商品图">
              <a class="goodtitle">丽蓉暗香</a>
            </td>
            <td>8磅</td>
            <td>288</td>
            <td><i class="fa fa-minus-square-o fa-fw"></i><span style="padding:0 5px;">1</span><i class="fa fa-plus-square-o fa-fw"></1i></td>
            <td>288</td>
            <td>删除</td>
          </tr>
          <tr>
            <td class="imgtd">
              <img src="/cakefox/Public/img/redwire.png" alt="商品图">
              <a class="goodtitle">达菲尼亚红葡萄酒1986</a>
            </td>
            <td>520ml</td>
            <td>628</td>
            <td><i class="fa fa-minus-square-o fa-fw"></i><span style="padding:0 5px;">1</span><i class="fa fa-plus-square-o fa-fw"></td>
            <td>628</td>
            <td>删除</td>
          </tr>
          <tr>
            <td class="imgtd">
              <img src="/cakefox/Public/img/snake.png" alt="商品图">
              <a class="goodtitle">张君雅小妹妹零食大礼包</a>
            </td>
            <td>8磅</td>
            <td>18</td>
            <td><i class="fa fa-minus-square-o fa-fw"></i><span style="padding:0 5px;">1</span><i class="fa fa-plus-square-o fa-fw"></td>
            <td>18</td>
            <td>删除</td>
          </tr>
        </table>
        <div class="column one-third couponblock">
          <span>可使用的优惠券</span>
          <label><input type="radio" id="couponid0" name="coupon" />不使用优惠</label>
          <label><input type="radio" id="couponid1" name="coupon" checked />定制蛋糕满200-25</label>
          <label><input type="radio" id="couponid2" name="coupon" />新人满100-10</label>
        </div>
        <div class="column two-third price">
            <label style="border-bottom:1px dashed #daae6c;font-size:12px;">免配送费<span>￥ 0</span></label>
            <div class="clear"></div>
            <label>优惠<span>￥ 0</span></label>
            <div class="clear"></div>
            <label class="total">合计<span>￥ 557</span></label>
        </div>
        <div class="clear"></div>
      </div>
      <a href="/cakefox/index.php/Home/Index/order.html" class="btn greenbtn" style="float:right;margin-left:20px;">确定订单</a>
      <a class="btn" style="float:right;">继续购物</a>
      
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