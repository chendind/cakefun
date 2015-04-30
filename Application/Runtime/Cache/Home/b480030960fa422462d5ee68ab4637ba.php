<?php if (!defined('THINK_PATH')) exit();?><div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li class="stephere"><a>初始化</a></li>
        <li><a>第一步</a></li>
        <li><a>第二步</a></li>
        <li><a>第三步</a></li>
        <li><a>第四步</a></li>
        <li><a>完成！</a></li>
      </ul>
      
  </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>初始化：选择蛋糕的尺寸、形状</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="rightbox">
        <div class="canvas">
          <img ng-show="e[0]==0" src="/cakefox/Public/img/rect.png" />
          <img ng-show="e[0]==1" src="/cakefox/Public/img/circle.png" />
        </div>
      </div>
      <div class="leftbox">
            <div class="controllbox">
              <h3 class="title">蛋糕样式</h3>
              <div class="cont">
                <div class="selectbar">
                  <label for="shape-1"><input type="radio" name="shape" ng-model="e[0]" id="shape-1"  ng-value="0" />方形</label>
                </div>
                <div class="selectbar">
                  <label for="shape-2"><input type="radio" name="shape" ng-model="e[0]" id="shape-2" ng-value="1" />圆形</label>
                </div>
              </div>
              </div>
            <div class="controllbox">
              <h3 class="title" ng-click="test()">蛋糕尺寸选择</h3>
              <div class="cont">
                <div class="selectbar">
                  <label for="size-1"><input type="radio" name="size"  ng-model="e[1]" id="size-1" ng-value="0" />1磅，可供2-4人食用</label>
                </div>
                <div class="selectbar">
                  <label for="size-2"><input type="radio" name="size"  ng-model="e[1]" id="size-2" ng-value="1" />2磅，可供4-8人食用</label>
                </div>
                <div class="selectbar">
                  <label for="size-3"><input type="radio" name="size"  ng-model="e[1]" id="size-3" ng-value="2" />4磅，可供8-12人食用</label>
                </div>
                <div class="selectbar">
                  <label for="size-4"><input type="radio" name="size"  ng-model="e[1]" id="size-4" ng-value="3" />8磅，可供12-18人食用</label>
                </div>
              </div>
            </div>
            
            <div class="controllbox">
              <h3 class="title">给您的蛋糕取个名字？</h3>
              <div class="cont">
                <div class="selectbar">
                  <label for="name-1"><input type="radio" name="name"  ng-model="e[2]" id="name-1" ng-value="0" />不好</label>
                </div>
                <div class="selectbar">
                  <label for="name-2"><input type="radio" name="name"  ng-model="e[2]" id="name-2" ng-value="1" />好</label>
                  <input ng-model="e[3]" type="text" placeholder="请在此填写名字" style="border:0px solid #999;border-bottom-width:1px;" ng-disabled="e[2]==0" ng-show="e[2]==1" />
                </div>
              </div>
            </div>
            <div class="controllbox">
              <div class="button leftbtn">返回主页</div>
              <div class="button rightbtn" ng-click="tostep1()">下一步</div>
            </div>
        <div class="clear"></div>
        
      </div>
    </div>
</div>