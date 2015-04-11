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
  <body>
  <div class="header">
    <div class="centerbox">

      <div class="logo-sm"><img src="/cakefox/Public/img/logo@2x.png" /></div>
      <ul class="header-nav">
        <li><a href="/cakefox/index.php/Home/Index/index.html">主页</a></li>
        <li><a href="/cakefox/index.php/Home/Index/customize.html">定制</a></li>
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
  <div class="fullbox" style="margin-top:20px;">
     <div class="centerbox">
       <div class="column one-fourth">
         <div class="researchbox">
          <input type="text" class="research" placeholder="搜索">
        </div>
        <ul class="category">
          <span><a>全部商品</a></span>
          <li>
            <ul class="category">
              <span><a>蛋糕</a></span>
              <li><a>慕斯蛋糕</a></li>
              <li><a>戚风蛋糕</a></li>
              <li><a>芝士蛋糕</a></li>
              <li><a>冰淇淋蛋糕</a></li>
            </ul>
          </li>
          <li><a>甜点</a></li>
          <li><a>零食</a></li>
          <li>
            <ul class="category">
              <span><a>酒水</a></span>
              <li><a>葡萄酒</a></li>
              <li><a>果汁</a></li>
              <li><a>鲜奶</a></li>
              <li><a>茶</a></li>
              <li><a>咖啡</a></li>
            </ul>
          </li>
        </ul>
       </div>
       <div class="column three-fourth">
         <ul class="goodlist">
           <li>
             <img src="/cakefox/Public/img/top-lirong1.png" alt="商品图片">
             <div class="describe">
               <h2>粒蓉暗香</h2>
               <p>慕斯、板栗、巧克力、爱尔兰咖啡豆、杏仁</p>
               <p>口感：味香、微甜</p>
               <p>现货供应，2磅、4磅可选</p>
             </div>
             <div class="control">
               <div><a class="btn">加入收藏</a></div>
               <div><a class="btn">加入购物车</a></div>
               <div><a class="btn greenbtn">立即购买</a></div>
             </div>
           </li>
           <li></li>
         </ul>
       </div>
     </div>
   </div> 
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
<!--<script src="/cakefox/Public/js/slide.js"></script>-->
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/angular-route.min.js"></script>
 <script src="/cakefox/Public/js/mall.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>
<!--  -->

<script>

</script>

  </body>
  </html>