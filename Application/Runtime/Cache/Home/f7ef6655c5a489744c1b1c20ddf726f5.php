<?php if (!defined('THINK_PATH')) exit();?><div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li><a>第一步</a></li>
        <li><a>第二步</a></li>
        <li class="stephere"><a>第三步</a></li>
        <li><a>第四步</a></li>
        <li><a>完成！</a></li>
      </ul>
  </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>第三步:裱花</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="rightbox">
        <div class="canvas">
          <img ng-show="a[0]==1" src="/cakefox/Public/img/down-zhishi.png" />
          <img ng-show="a[0]==1" src="/cakefox/Public/img/up-musi.png" />
        </div>
      </div>
      <div class="leftbox">
        
          <div class="controllbox">
            <h3 class="title" ng-click="test()">你想给你的蛋糕覆层什么呢？</h3>
            <div class="cont">
              <div class="checkbox">
                <div class="checkimg" ng-click="setc(1,1)">
                  <img src="/cakefox/Public/img/main-ice-xs.png" />
                </div>
                <div class="text">巧克力<i class="fa fa-check" ng-show="b[1]==1"></i></div>
              </div>
              <div class="checkbox" ng-click="setc(1,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-musi-xs.png" />
                </div>
                <div class="text">奶油</div>
              </div>
              <div class="checkbox" ng-click="setc(1,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-zhishi-xs.png" />
                </div>
                <div class="text">布丁</div>
              </div>
              <div class="checkbox" ng-click="setc(1,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-naiyou-xs.png" />
                </div>
                <div class="text">芝士</div>
              </div>
            </div>
          </div>
          <div class="controllbox" ng-show="c[0]==1">
            <h3 class="title">您喜欢哪种颜色的巧克力？</h3>
            <div class="cont">
              <div class="checkbox" ng-click="setc(2,1)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/iceball2.jpg" />
                </div>
                <div class="text">黑</div>
              </div>
              <div class="checkbox" ng-click="setc(2,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/iceball3.jpg" />
                </div>
                <div class="text">白</div>
              </div>
            </div>
          </div>
          <div class="controllbox" ng-show="c[0]==2">
            <h3 class="title">您想要哪种颜色的奶油？</h3>
            <div class="cont">
              <div class="checkbox" ng-click="setc(2,1)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-ice-xs.png" />
                </div>
                <div class="text">经典白</div>
              </div>
              <div class="checkbox" ng-click="setc(2,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-musi-xs.png" />
                </div>
                <div class="text">绅士黑</div>
              </div>
              <div class="checkbox" ng-click="setc(2,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-zhishi-xs.png" />
                </div>
                <div class="text">草莓粉</div>
              </div>
              <div class="checkbox" ng-click="setc(2,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-naiyou-xs.png" />
                </div>
                <div class="text">抹茶绿</div>
              </div>
            </div>
          </div>
          <div class="controllbox" ng-show="c[0]==3">
            <h3 class="title">您想要哪种口味的布丁？</h3>
            <div class="cont">
              <div class="checkbox" ng-click="setc(2,1)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-ice-xs.png" />
                </div>
                <div class="text">青苹果</div>
              </div>
              <div class="checkbox" ng-click="setc(2,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-musi-xs.png" />
                </div>
                <div class="text">柠檬</div>
              </div>
              <div class="checkbox" ng-click="setc(2,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-zhishi-xs.png" />
                </div>
                <div class="text">抹茶</div>
              </div>
              <div class="checkbox" ng-click="setc(2,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/main-naiyou-xs.png" />
                </div>
                <div class="text">椰果</div>
              </div>
            </div>
          </div>
          
        <div class="controllbox">
          <div class="button leftbtn" ng-click="tostep2()">上一步</div>
          <div class="button rightbtn" ng-click="tostep4()">下一步</div>
        </div>
      </div>
    </div>
</div>