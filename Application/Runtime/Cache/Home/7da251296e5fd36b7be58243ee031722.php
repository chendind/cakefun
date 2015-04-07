<?php if (!defined('THINK_PATH')) exit();?><div class="cust-choose-bar">
      <nav class="cust-choose">
        <a href="#/1pound">1磅蛋糕</a>
        <a href="#/2pounds">2磅蛋糕</a>
        <a href="#/3pounds">3磅蛋糕</a>
        <a href="#/5pounds">5磅蛋糕</a>
        <a href="#/selected" class="nav-selected">精选蛋糕</a>
      </nav>
      </div>
 <div class="cust-content-bar">
        <div class="cust-content">
 <div class="floatleft cake-view" ng-init="position1='-10px -40px'">
 <!-- <div position1="-100px -100px" ng-cakeimg></div>-->
  <div class="cust-img-box" id="step1" style="background-position:{{position1}}"></div>
  <div class="cust-img-box" data-step="step2"></div>
  <div class="cust-img-box" data-step="step3">
  
  </div>
  <div class="cust-img-box" data-step="step4">
  
  </div>
  <div class="cust-img-box" data-step="step5">
  
  </div>
</div>
<div class="floatleft controll-bar">
  <div class="controll-bar-select-unit">
    <div class="controll-bar-select-title" data>主要材料</div>
    <div class="floatleft controll-bar-select-option" ng-click="position1='-10px -40px'" ng-class="{optSelected:position1=='-10px -40px'}">慕斯</div>
  </div>
  <div class="controll-bar-select-unit">
    <div class="controll-bar-select-title">夹心材料</div>
    <div class="floatleft controll-bar-select-option" data-material="0">无</div>
    <div class="floatleft controll-bar-select-option" data-material="1">圆形</div>
  </div>
  <div class="controll-bar-select-unit">
    <div class="controll-bar-select-title">顶层材料</div>
    <div class="floatleft controll-bar-select-option" data-material="1">草莓</div>
    <div class="floatleft controll-bar-select-option" data-material="1">猕猴桃</div>
  </div>
  <div class="controll-bar-select-unit">
    <div class="controll-bar-select-title">裱花样式</div>
    <div class="floatleft controll-bar-select-option" data-material="1">冰淇淋</div>
  </div>
</div>
</div>
    </div>