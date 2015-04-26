<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN">
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
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/bootstrap-datepicker.css">
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
          <div id="cartdialogbox" style="display:none;" ng-if="cartdialogshow==1">
            <div class="loadingbox">
              <i class="fa fa-spinner fa-spin"></i>
            </div>
            <div class="cartdialog"></div>
            <script>

                if(typeof jQuery == "function"){
                  $("#cartdialogbox").show();
                   if($(".cartdialog").children().length==0){
                      $(".cartdialog").load("cartdialog.html",function(){
                          $(".loadingbox").hide();
                       });
                   }
              }
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
        <li><a>购物车</a></li>
        <li class="stephere"><a>确定订单</a></li>
        <li><a>在线支付</a></li>
        <li><a>交易完成</a></li>
      </ul>
  </div>
</div>  
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>请填写必要的送货信息</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="cont2" style="border-bottom:1px solid #daae6c;margin-bottom:20px;">
        <h4>配送地址</h4>
        <table class="ptable" style="border-bottom:1px solid #daae6c;border-top:1px solid #daae6c;">
          <tr>
            <th></th>
            <th>收货人</th>
            <th>手机号码</th>
            <th>地区</th>
            <th>街道地址</th>
          </tr>
          <tr>
            <td><i class="fa fa-map-marker fa-fw"></i></td>
            <td>张三</td>
            <td>13909582299</td>
            <td>浙江 杭州市 西湖区</td>
            <td>白马湖大道388号</td>
          </tr>
          <tr>
            <td></td>
            <td>张三老婆</td>
            <td>13909582299</td>
            <td>浙江 杭州市 西湖区</td>
            <td>白马湖大道388号星源文化广场星缘大厦B幢6楼623</td>
          </tr>
        </table>
        <h4>配送日期</h4>
        <div>
          <input id="date" class="pinput date start" type="text">
        </div>
        <h4>配送时间</h4>
        <select>
            <option>10:00-12:00</option>
            <option>12:00-15:00</option>
            <option>15:00-17:00</option>
          </select>
        <h4>开具发票<input type="checkbox" style="margin-left:5px;" /></h4>
        <div>
          <input class="pinput" type="text" style="width:30%;" placeholder="请输入发票抬头" />
          发票内容
          <select>
            <option value="">食品</option>
            <option value="">糕点</option>
          </select>
        </div>
        <h4>确定商品及优惠券</h4>
        <div>
          <table class="ptable" style="border-bottom:1px dashed #daae6c;border-top:1px solid #daae6c">
          <tr>
            <th>项目</th>
            <th>规格</th>
            <th>单价/元</th>
            <th>数量</th>
            <th>小计/元</th>
            <th>操作</th>
          </tr>
          <tr>
            <td class="imgtd imgtdorder">
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
            <td class="imgtd imgtdorder">
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
            <td class="imgtd imgtdorder">
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
        </div>
        <div class="column one-third couponblock">
          <span>可以使用的优惠券</span>
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
      <a href="/cakefox/index.php/Home/Index/payment.html" class="btn greenbtn" style="float:right;margin-left:20px;">在线支付</a>
      <a href="/cakefox/index.php/Home/Index/cart.html" class="btn" style="float:right;">返回购物车</a>
      
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
 <script src="/cakefox/Public/js/public.js"></script>
  <script src="/cakefox/Public/js/bootstrap-datepicker.min.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>
<!--  -->

<script>
var startdate = new Date();
startdate.setDate(startdate.getDate()+1);
$('#date').datepicker({
        'format': 'yyyy年m月d日',
        'autoclose': true,
        'startDate':startdate,
    });
</script>

  </body>
  </html>