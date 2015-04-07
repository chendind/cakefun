<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app="cakefun">
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
     <script src="/cakefox/Public/less/dist/less.js" type="text/javascript"></script>

     <script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
     <script>
     $(window).load(function(){
      $(".loading").hide();

     })
     </script>
     <style>
      .loading{
        width:1000px;
        height:1000px;
        background:red;
      }
     </style>
  </head>
  <body ng-controller="homeCtrl">
    <div class="loading"></div>
    <div class="fullbox homepageblock" style="z-index:10;">
      <div class="tumb">
        <img ng-hide="tumbimg != 0" src="/cakefox/Public/tumb/tumb-pic-1.jpg" alt="" class="tumbimg fadeout">
        <img ng-hide="tumbimg != 1" src="/cakefox/Public/tumb/tumb-pic-2.jpg" alt="" class="tumbimg fadeout">
        <img ng-hide="tumbimg != 2" src="/cakefox/Public/tumb/tumb-pic-3.jpg" alt="" class="tumbimg fadeout">
        <img ng-hide="tumbimg != 3" src="/cakefox/Public/tumb/tumb-pic-4.jpg" alt="" class="tumbimg fadeout">
        <div class="tumbctrl">
          <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
          <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
        </div>
      </div>
      <div class="p-centerbox">
        <div class="navbox">
          <table class="nav">
            <tr>
              <td><a href="/cakefox/index.php/Home/Index/index.html">主页</a></td>
              <td><a href="/cakefox/index.php/Home/Index/customize.html">定制</a></td>
              <td><a href=""><img class="logo" src="/cakefox/Public/img/logo@2x.png" alt="logo"></a></td>
              <td><a href="">商城</a></td>
              <td><a href="">关于我们</a></td>
            </tr>
          </table>
        </div>
      </div> 
    </div>
    <div class="fullbox homepageblock">
      <div class="tumbctrl">
          <div class="angle-left" ng-click="flashgoto(-1)"><i class="fa fa-angle-left"></i></div>
          <div class="angle-right" ng-click="flashgoto(1)"><i class="fa fa-angle-right"></i></div>
        </div>
      <div class="centerbox homepageblock">
        <table class="goodtable">
          <tr class="uprow">
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/top-hetao.png" />
              </div>
              <div class="goodimgtitle">
                核桃心酥
              </div>
            </td>
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/top-lirong1.png" />
              </div>
              <div class="goodimgtitle">
                融栗暗香
              </div>
            </td>
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/main-ice.png" />
              </div>
              <div class="goodimgtitle">
                红枣冰淇淋
              </div>
            </td>
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/main-zhishi.png" />
              </div>
              <div class="goodimgtitle">
                红枣冰淇淋
              </div>
            </td>
          </tr>
          <tr class="downrow">
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/redwire.png" />
              </div>
              <div class="goodimgtitle">
                索菲葡萄酒
              </div>
            </td>
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/main-musi.png" />
              </div>
              <div class="goodimgtitle">
                红枣冰淇淋
              </div>
            </td>
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/snake.png" />
              </div>
              <div class="goodimgtitle">
                红枣冰淇淋
              </div>
            </td>
            <td>
              <div class="goodimgbox">
                <img src="/cakefox/Public/img/top-lirong2.png" />
              </div>
              <div class="goodimgtitle">
                红枣冰淇淋
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <div class="fullbox homepageblock">
      <div class="centerbox">
        
      </div>
    </div>


<!--<script src="/cakefox/Public/js/slide.js"></script>-->
 <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
 <script src="/cakefox/Public/js/angular-animate.min.js"></script>
 <script src="/cakefox/Public/js/public.js"></script>
<script src="/cakefox/Public/js/tumbflash.js"></script>
<script src="/cakefox/Public/js/md5.js"></script>
<!--  -->

<script>

/*
$("#sendPhoneCode").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/sendcodetoregisterphone", 
           dataType: "json",
           data:{phone:$("#registerPhone").val()},
           success: function (data) { 
               switch(data.state) {
                  case "1":window.location.reload(); break; 
                  case "2":alert("注册失败");break;
                  case "3":alert("非法手机号");break;
                  case "4":alert("该号码已被注册");break;
               }
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });
  });
$("#registerBtn").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/registerapi", 
           dataType: "json",
           data:{phone:$("#registerPhone").val(),password:hex_md5($("#registerPassword").val()),verifycode:$("#registerCode").val()},
           success: function (data) { 
               switch(data.state){
                  case "1":window.location.reload();break;
                  case "2":alert("手机号不合法");break;
                  case "3":alert("验证码错误");break;
                  case "4":alert("验证码时间过期");break;
                  case "5":alert("注册失败");break;                   
               }
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
    });
});


*/

     

</script>

  </body>

  </html>