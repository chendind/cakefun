<?php if (!defined('THINK_PATH')) exit();?><div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li><a>初始化</a></li>
        <li><a>第一步</a></li>
        <li class="stephere"><a>第二步</a></li>
        <li><a>第三步</a></li>
        <li><a>第四步</a></li>
        <li><a>完成！</a></li>
      </ul>
  </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>第二步:选择夹心材料</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="rightbox">
        <div class="canvas">
          <img ng-show="a[0]==1" src="/cakefox/Public/img/down-zhishi.png" />
          <img ng-show="a[0]==1" src="/cakefox/Public/img/up-musi.png" ng-class="{fly:onscroll}" />
        </div>
      </div>
      <div class="leftbox">
        
          <div class="controllbox">
            <h3 class="title" ng-click="test()">水果</h3>
            <div class="cont">
              <div class="checkbox">
                <div class="checkimg" ng-click="setb(0,1)">
                  <img src="/cakefox/Public/img/mangguo.png" />
                </div>
                <div class="text">芒果<i class="fa fa-check" ng-show="b[0]==1"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(1,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/caomei.png" />
                </div>
                <div class="text">草莓<i class="fa fa-check" ng-show="b[0]==2"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(1,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/apple.png" />
                </div>
                <div class="text">苹果<i class="fa fa-check" ng-show="b[0]==3"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(1,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/mangguo.png" />
                </div>
                <div class="text">哈密瓜<i class="fa fa-check" ng-show="b[0]==4"></i></div>
              </div>
            </div>
          </div>
          <div class="controllbox">
            <h3 class="title">要来点冰淇淋吗，喜欢什么口味？</h3>
            <div class="cont">
              <div class="checkbox" ng-click="setb(1,1)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/iceball2.jpg" />
                </div>
                <div class="text">香草<i class="fa fa-check" ng-show="b[1]==1"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(2,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/iceball3.jpg" />
                </div>
                <div class="text">巧克力<i class="fa fa-check" ng-show="b[1]==2"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(2,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/iceball1.jpg" />
                </div>
                <div class="text">牛奶<i class="fa fa-check" ng-show="b[1]==3"></i></div>
              </div>
            </div>
          </div>
          <div class="controllbox">
            <h3 class="title">层间夹心</h3>
            <div class="cont">
              <div class="checkbox" ng-click="setb(2,1)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-ice-xs.png" />
                </div>
                <div class="text">冰淇淋<i class="fa fa-check" ng-show="b[2]==1"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(2,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-musi-xs.png" />
                </div>
                <div class="text">慕斯<i class="fa fa-check" ng-show="b[2]==2"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(2,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-zhishi-xs.png" />
                </div>
                <div class="text">芝士<i class="fa fa-check" ng-show="b[2]==3"></i></div>
              </div>
              <div class="checkbox" ng-click="setb(2,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-naiyou-xs.png" />
                </div>
                <div class="text">海绵面包<i class="fa fa-check" ng-show="b[2]==4"></i></div>
              </div>
            </div>
          </div>

        <div class="controllbox">
          <div class="button leftbtn" ng-click="tostep1()">上一步</div>
          <div class="button rightbtn" ng-click="tostep3()">下一步</div>
        </div>
      </div>
    </div>
</div>