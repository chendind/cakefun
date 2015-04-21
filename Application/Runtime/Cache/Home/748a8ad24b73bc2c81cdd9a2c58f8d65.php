<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
<html lang="zh-CN" ng-app>
  <head>
    <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
     <title>css3-transform</title>
     <script src="/cakefox/Public/js/jquery-1.11.1.min.js"></script>
     <script src="/cakefox/Public/js/angular-1.3.min.js"></script>
     
     <style>
     .wt{
         perspective: 0px;
         width:500px;
         height:auto;
         border:1px solid #999;
         float:left;
         margin-top:200px;
     }
     .imgbox{
        transform-style: preserve-3d;
        margin:0 auto;
        width:200px;
     }
      img{
        display: block;
        width:80%;
        margin-top:10%;
        margin-bottom:10%;
        transform:translate3d(0px,0px,0px) scaleZ(1) rotateX(0) rotateY(0) rotateZ(0) skew(0deg,0deg);
      }
      .console{
        width:500px;
        float:left;
        margin-left:20px;
      }
        .unit{
            margin-bottom:20px;
            border:1px solid #999;
        }
        input[type="text"]{
            width:30px;
        }
     </style>
  </head>
  <body ng-controller="transform">
    <div class="wt" style="perspective: {{p}}px;">
        <div class="imgbox">
          <img src="/cakefox/Public/img/k.png" style="transform:translate3d({{tx}}px,{{ty}}px,{{tz}}px)  scale3d({{sx}},{{sy}},{{sz}}) rotateX({{rx}}deg) rotateY({{ry}}deg) rotateZ({{rz}}deg) skew({{skx}}deg,{{sky}}deg) " alt="方块K" />
      </div>
    </div>
    <div class="console">
      <div class="unit" ng-init="tx=0;ty=0;tz=0;">
        三个方向的位移
        translate3d(tx,ty,tz):<br />
        tx:<input type="range" min="-500" max="500" value="0" ng-model="tx" /><input type="text" ng-model="tx">px<br />
        ty:<input type="range" min="-500" max="500" value="0" ng-model="ty" /><input type="text" ng-model="ty">px<br />
        tz:<input type="range" min="-500" max="500" value="0" ng-model="tz" /><input type="text" ng-model="tz">px<br />
      </div>
      <div class="unit" ng-init="sx=1;sy=1;sz=5;">
        在三个方向上的缩放
        scale3d(sx,sy,sz):<br />
        sx:<input type="range" min="0" max="5" step="0.1" ng-model="sx" /><input type="text" ng-model="sx" /><br />
        sy:<input type="range" min="0" max="5" step="0.1" ng-model="sy" /><input type="text" ng-model="sy" /><br />
        sz:<input type="range" min="0" max="5" step="0.1" ng-model="sz" /><input type="text" ng-model="sz" /><br />
      </div>
      <div class="unit" ng-init="rx=0;ry=0;rz=0;">
        三个方向的旋转<br />
        rotateX:<input type="range" min="0" max="360" value="0" ng-model="rx" /><input type="text" ng-model="rx" />deg<br />
        rotateY:<input type="range" min="0" max="360" value="0" ng-model="ry" /><input type="text" ng-model="ry" />deg<br />
        rotateZ:<input type="range" min="0" max="360" value="0" ng-model="rz" /><input type="text" ng-model="rz" />deg<br />
      </div>
      <div class="unit" ng-init="skx=0;sky=0">
        x和y方向上的倾斜
        skew(skx,sky):<br />
        skx:<input type="range" min="0" max="360" value="0" ng-model="skx" /><input type="text" ng-model="skx" />deg<br />
        sky:<input type="range" min="0" max="360" value="0" ng-model="sky" /><input type="text" ng-model="sky" />deg<br />
      </div>
      
      <div class="unit" ng-init="p=800;">
        透视距离
        perspective(p):<br />
        p:<input type="range" min="0" max="20000" step="100" ng-model="p" /><input type="text" ng-model="p" />px
      </div>
   </div>
   <script>
     function transform($scope){

     }
   </script>
  </body>
  </html>