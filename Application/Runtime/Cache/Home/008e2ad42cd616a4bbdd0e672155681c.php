<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="user">
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
     <link rel="stylesheet/less" type="text/css" href="/cakefox/Public/css/user.less">
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>
  </head>
  <body ng-controller="UserCtrl">
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
        <a class="portrait" href=""><img src="/cakefox/Public/img/portrait.jpg" alt="portrait"></a>
        <h3 class="username">快乐佐伊</h3>
        <ul class="userdetail">
          <li><i class="fa fa-fw fa-map-marker"></i>杭州市</li>
          <li><i class="fa fa-fw fa-envelope-o"></i>511912708@qq.com</li>
          <li><i class="fa fa-fw fa-birthday-cake"></i>1994年05月02日</li>
        </ul>
        <div class="userstats">
          <a href="">
            <b>4</b>
            <span>收藏</span>
          </a>
          <a href="">
            <b>1</b>
            <span>定制</span>
          </a>
          <a href="">
            <b>0</b>
            <span>优惠码</span>
          </a>
        </div>
      </div>
      <div class="column three-fourth">
        <div class="ctrlicon">
          <a><i class="fa fa-angle-left"></i></a>
        </div>
        <div class="scrollbox">
          <div class="scrollbar">
            <a href="">
              <img src="/cakefox/Public/img/top-hetao.png" alt="蛋糕" />
              <span>核桃森林</span>
            </a>
            <a href="">
              <img src="/cakefox/Public/img/top-hetao.png" alt="蛋糕" />
              <span>核桃森林</span>
            </a>
            <a href="">
              <img src="/cakefox/Public/img/top-hetao.png" alt="蛋糕" />
              <span>核桃森林</span>
            </a>
            <a href="">
              <img src="/cakefox/Public/img/top-hetao.png" alt="蛋糕" />
              <span>核桃森林</span>
            </a>
            <a href="">
              <img src="/cakefox/Public/img/top-hetao.png" alt="蛋糕" />
              <span>核桃森林</span>
            </a>
          </div>
        </div>
        <div class="ctrlicon">
          <a><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="clear"></div>
        <div id="timeaxis">
          <div class="point"></div>
          <div class="point" style="left:230.5px"></div>
          <div class="point" style="left:353.5px"></div>
          <div class="point" style="left:476.5px"></div>
          <div class="point" style="left:599.5px"></div>
        </div>
        <h3 class="title" style="margin-top:20px;">我的优惠券</h3>
        <div class="cont">
          <ul id="coupon">
            <li>
              <a href="">
                <div>
                  <span class="amount">29</span>
                  <span class="pricesymbol">RMB</span>
                  <span class="scope">仅限购买蛋糕使用</span>
                  <span class="limittimetitle">使用期限</span>
                  <span class="limittime">2015.04.18至2015.04.25</span>
                </div>
            </a>
          </li>
            <li>
              <a href="">
                <div>
                  <span class="amount">29</span>
                  <span class="pricesymbol">RMB</span>
                  <span class="scope">仅限购买蛋糕使用</span>
                  <span class="limittimetitle">使用期限</span>
                  <span class="limittime">2015.04.18至2015.04.25</span>
                </div>
            </a>
          </li>
            <li>
              <a href="">
                <div>
                  <span class="amount">29</span>
                  <span class="pricesymbol">RMB</span>
                  <span class="scope">仅限购买蛋糕使用</span>
                  <span class="limittimetitle">使用期限</span>
                  <span class="limittime">2015.04.18至2015.04.25</span>
                </div>
            </a>
          </li>
          </ul>
        </div>
        <h3 class="title" style="margin-top:20px;">我的收货地址</h3>
        <div class="cont">
          <ul id="addressbox">
            <li>
              <div class="address" ng-hide="inedit">
                <a class="addblock" ng-click="inedit=!inedit">新增收货地址<i class="fa fa-plus fa-fw"></i></a>
              </div>
              <div class="address" ng-show="inedit">
                <div class="name" style="border-bottom:0;">
                  <input type="text" placeholder="收货人姓名" />
                </div>
                <div class="phone"><input type="text" placeholder="11位手机号" /></div>
                <div class="city">
                  您所在的城市<select>
                    <option>杭州</option>
                    <option>上海</option>
                  </select>
                </div>
                <div class="street">
                  <textarea placeholder="请输入您的街道地址"></textarea>
                </div>
                <button ng-click="inedit=!inedit">确定</button>
                <button ng-click="inedit=!inedit">取消</button>
              </div>
            </li>
            <li>
              <div class="address">
                <div class="name">
                  王克
                  <span>设为默认</span>
                </div>
                <div class="phone">13606531232</div>
                <div class="city">浙江 杭州市 西湖区</div>
                <div class="street">西城纪4幢225烦烦烦烦烦烦烦烦烦</div>
                <button>编辑</button>
                <button>删除</button>
              </div>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/user.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
 <!--<script src="/cakefox/Public/js/md5.js"></script> -->
<!--  -->

<script>

</script>

  </body>
  </html>