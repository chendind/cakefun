<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN" ng-app="cakefun">
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
     <!-- <link rel="stylesheet" type="text/css" href="/cakefox/Public/css/cakepublic.css"> -->
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/mall.less">

     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
  </head>
  <body ng-controller="homeCtrl">
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

  <div class="fullbox" style="border-bottom:1px solid #eee;">
     <div class="centerbox">
       <div class="catagory" style="float:left;">
         <div class="item" style="text-align:left;"><span id="itemall" ng-click="goodshow='all'">返回商城</span></div>
       </div>
       <!-- <div class="catagory" style="float:right;">
         <div class="item"><span id="item3" ng-click="goodshow='drink'">商品名</span></div>
       </div> -->
     </div>
   </div>
    <div class="fullbox">
      <div class="centerbox">
        <div class="column two-third" style="height:500px;display:table;">
          <div class="goodtumb">
            <img ng-show="tumbimg == 0" src="/cakefox/Public/img/main-musi.png" class="tumbimg fadeout">
            <img ng-show="tumbimg == 1" src="/cakefox/Public/img/main-zhishi.png" class="tumbimg fadeout">
            <img ng-show="tumbimg == 2" src="/cakefox/Public/img/top-hetao.png" class="tumbimg fadeout">
            <img ng-show="tumbimg == 3" src="/cakefox/Public/img/top-lirong1.png" class="tumbimg fadeout">
            <img ng-show="tumbimg == 4" src="/cakefox/Public/img/top-lirong2.png" class="tumbimg fadeout">
          </div>
          <div class="tumbctrl">
              <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
              <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
          </div>
          <div class="thumbnailbox">
            <div ng-class="{addborder:tumbimg==0}" ng-click="tumbimg=0" class="thumbnail"><img src="/cakefox/Public/img/main-musi.png" /></div>
            <div ng-class="{addborder:tumbimg==1}" ng-click="tumbimg=1" class="thumbnail"><img src="/cakefox/Public/img/main-zhishi.png" /></div>
            <div ng-class="{addborder:tumbimg==2}" ng-click="tumbimg=2" class="thumbnail"><img src="/cakefox/Public/img/top-hetao.png" /></div>
            <div ng-class="{addborder:tumbimg==3}" ng-click="tumbimg=3" class="thumbnail"><img src="/cakefox/Public/img/top-lirong1.png" /></div>
            <div ng-class="{addborder:tumbimg==4}" ng-click="tumbimg=4" class="thumbnail"><img src="/cakefox/Public/img/top-lirong2.png" /></div>
          </div>
        </div>
        <div class="column one-third goodinfo" style="height:500px;">
          <h3>商品名</h3>
          <span>RMB 100</span>
          <p>/自然成熟的泰国金枕头/<br /> /在曼谷，官兵后代庭院中，生长着一百年至一百五十年的榴莲树/</br>/Cakewith.Me遴选新鲜的芒果、榴莲/<br /> /每一口，都是自然的榴莲香/</p>
          <span style="font-size:13px;color:#d0021b;">*请提前24小时订购</span>
            <div class="selectbox" ng-init="chicun=9">
              <span>尺寸：<a ng-bind="chicun">--</a>寸<i style="float:right;font-size:30px;line-height:30px;" class="fa fa-fw fa-angle-down"></i></span>
              <select name="" id="" ng-model="chicun">
                <option value="6">6寸（约3-4人食用）</option>
                <option value="9">9寸（约5-8人食用）</option>
                <option value="13">13寸（约9-12人食用）</option>
                <option value="18">18寸（约13-18人食用）</option>
              </select>
            </div>
          <label>数量：<input type="number" value="1" min="1" max="100" /><a class="greenbtn btn addtocartbtn">加入购物车</a></label>
          <!-- <div class="clear"></div> -->
          <div class="sharebox" ng-init="shareshow=0" ng-mouseleave="shareshow=0">
            <a style="width:25%;" ng-mouseenter="shareshow=1">分享<i class="fa fa-fw fa-share-alt"></i></a>
              <a class="shareicon" ng-hide="shareshow==0" style="width:25%;"><i class="fa fa-fw fa-weibo"></i></a>
              <a class="shareicon" ng-hide="shareshow==0" style="width:25%;"><i class="fa fa-fw fa-weixin"></i></a>
              <a class="shareicon" ng-hide="shareshow==0" style="width:25%;border:0;"><i class="fa fa-fw fa-qq"></i></a>
              <a ng-hide="shareshow==1" style="position:absolute;top:0;left:25%;width:38%;">详情<i class="fa fa-fw fa-angle-down"></i></a>
              <a ng-hide="shareshow==1" style="position:absolute;top:0;left:63%;width:37%;border:0;">图集<i class="fa fa-fw fa-angle-down"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="fullbox detail" style="border-top:1px solid #eee;margin-top:30px;">
        <h4>商品详情</h4>
        <p>蛋糕类别：奶油蛋糕</p>
        <p>保鲜条件：0－4℃保藏4小时，5℃最佳食用</p>
        <p>原材料：栗子（云南）、白巧克力（比利时）</p>
        <p>口味：微甜</p>
        <p>适宜人群：老少皆宜</p>
    </div>
    <div class="fullbox detail">
      <div class="centerbox">
        <h4>品牌故事</h4>
        <p style="text-align:justify;">公元一七八七年暹罗军进攻缅甸时，意图夺取他怀，但无法攻克。在围城期间，由于运输困难，军中粮草缺乏，将官只好命令士兵四处寻找野果充饥，士兵在林中找 到一种硕大而有刺的果实。当他们设法剖开尝试之后，出乎意料的香甜可口。后来回师曼谷时，官兵中不少人把榴莲果核随身带回，在自己房屋周围种植。追求更满 意的口感，21cake花时间改良了榴莲飘飘，更换重油坯为松软的戚风坯，使用纯榴莲果肉夹层每一口都是十足的榴莲味道，口齿生香。选择无催化剂，自然成熟的泰国金枕头榴莲。</p>
        <p style="text-align:justify;">Imagine if an object could bear the weight of all your sins, while you swan about ever beautiful. The durian fruit bears the weight of its sins on the outside, in the form of its malodorous stench. Within, the fruit stays ever creamy. 21cake uses only fresh durian from cake base to decoration, featuring a soft, whispered confession of a sponge. We also use more durian pulp to make the taste more tender.</p>
      </div>
      <div class="centerbox">
        <h4>图集</h4>
        <div>
          <img src="/cakefox/Public/img/liulian.png" alt="tuji" class="tuji" />
          <img src="/cakefox/Public/img/liulian2.png" alt="tuji" class="tuji" />
          <img src="/cakefox/Public/img/liulian2.png" alt="tuji" class="tuji" />
          <img src="/cakefox/Public/img/liulian.png" alt="tuji" class="tuji" />
        </div>
      </div>
    </div>
    
<div class="fullbox detail" style="border-top:1px solid #eee;">
       <div class="centerbox">
        <h4 style="text-align:left;">为您推荐</h4>
        <div class="goodbox" style="position:relative;">
        <a class="goodpad" ng-href="/cakefox/index.php/Home/Index/itemdetail" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
          <div class="goodimgbox"><img ng-src="/cakefox/Public/img/top-hetao.png" alt="核桃" /></div>
          <div class="goodms">
            <span>核桃心语</span>
          </div>
        </a>
        <a class="goodpad" ng-href="/cakefox/index.php/Home/Index/itemdetail" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
          <div class="goodimgbox"><img ng-src="/cakefox/Public/img/redwire.png" alt="核桃" /></div>
          <div class="goodms">
            <span>拉菲干红1988</span>
          </div>
        </a>
        <a class="goodpad" ng-href="/cakefox/index.php/Home/Index/itemdetail" onmouseenter="$(this).children('.goodms').css('opacity','1');" onmouseleave="$(this).children('.goodms').css('opacity','0');">
          <div class="goodimgbox"><img ng-src="/cakefox/Public/img/snake.png" alt="核桃" /></div>
          <div class="goodms">
            <span>零食大礼包</span>
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
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/angular-route.min.js"></script>
 <script src="/cakefox/Public/js/tumbflash.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>

<script>
 
</script>

  </body>
  </html>