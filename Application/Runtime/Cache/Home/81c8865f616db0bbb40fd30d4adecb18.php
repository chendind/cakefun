<?php if (!defined('THINK_PATH')) exit();?><div class="cust-choose-bar xs-hide">
      <nav class="cust-choose">
        <a href="#/1pound" class="nav-selected" style="margin-left:0;">1磅蛋糕</a>
        <a href="#/2pounds">2磅蛋糕</a>
        <a href="#/3pounds">3磅蛋糕</a>
        <a href="#/5pounds">5磅蛋糕</a>
        <a href="#/selected" style="margin-right:0;">精选蛋糕</a>
      </nav>
</div>
<div class="clear"></div>
 <div class="cust-content-bar" ng-controller="size_1_controller">
    <div class="center">
      <div class="cake-view-box">
          <div class="cust-img-box" id="main" style="background-position:{{main_value.position}}"></div>
          <div class="cust-img-box"></div>
          <div class="cust-img-box"></div>
          <div class="cust-img-box"></div>
          <div class="cust-img-box" id="decoration" style="background-position:{{decoration_value.position}}"></div>
      </div>
       <div class="controll-bar">
         <div class="controll-bar-select-unit">
           <div class="controll-bar-select-title">主要材料</div>
           <div class="selectbox floatleft">
              <select ng-model="main_value" ng-options="option.name for option in main_material">
                <option value="">--请选择--</option>
              </select>
           </div>
        </div>
   <div class="controll-bar-select-unit">
      <div class="controll-bar-select-title">夹心材料</div>
      <div class="selectbox floatleft">
        <select ng-model="fill_value_1" ng-options="option.name for option in fill_material_1">
           <option value="">--请选择--</option>
        </select>
      </div>
      <div class="selectbox floatleft">
        <select ng-model="fill_value_2" ng-options="option.name for option in fill_material_2">
           <option value="">--请选择--</option>
        </select>
      </div>
   </div>
  <div class="controll-bar-select-unit">
      <div class="controll-bar-select-title">顶层材料</div>
      <div class="selectbox floatleft">
        <select ng-model="top_value" ng-options="option.name for option in top_material">
           <option value="">--请选择--</option>
        </select>
      </div>
   </div>
   <div class="controll-bar-select-unit">
      <div class="controll-bar-select-title">选择A</div>
      <div class="selectbox floatleft">
        <select ng-model="exp_value" ng-options="option.name for option in exp_material">
           <option value="">--请选择--</option>
        </select>
      </div>
   </div>
  <div class="controll-bar-select-unit">
      <div class="controll-bar-select-title">裱花样式</div>
      <div class="selectbox floatleft">
        <select ng-model="decoration_value" ng-options="option.name for option in decoration_material">
           <option value="">--请选择--</option>
        </select>
      </div>
   </div>
   </div>
       <div class="clear"></div>
     </div>
</div>