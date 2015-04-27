<?php if (!defined('THINK_PATH')) exit();?><div class="fullbox" style="border-bottom:1px solid #e5e5e5;">
    <div class="centerbox">
      <ul class="nav-step">
        <li><a>初始化</a></li>
        <li><a>第一步</a></li>
        <li><a>第二步</a></li>
        <li><a>第三步</a></li>
        <li class="stephere"><a>第四步</a></li>
        <li><a>完成！</a></li>
      </ul>
  </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="tips">
        <span><i class='fa fa-lightbulb-o fa-fw'></i>第四步:总想摆点什么</span>
      </div>
    </div>
</div>
<div class="fullbox">
    <div class="centerbox">
      <div class="rightbox">
        <div id="canvas" class="canvas" style="border:1px solid #eee;padding:20px;">
          <img src="/cakefox/Public/img/top-hetao.png" alt="">
          <div class="canvastable">
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
            <div class="tr">
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
              <div class="td"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="leftbox">
        
          <div class="controllbox">
            <h3 class="title" ng-click="test()">水果</h3>
            <div class="cont">
              <div class="checkbox">
                <div class="checkimg" ng-click="setc(1,1)">
                  <img src="/cakefox/Public/img/caomei.png" />
                </div>
                <div class="text">草莓<i class="fa fa-check" ng-show="b[1]==1"></i></div>
              </div>
              <div class="checkbox" ng-click="setc(1,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/lanmei.png" />
                </div>
                <div class="text">蓝莓</div>
              </div>
              <div class="checkbox" ng-click="setc(1,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/yingtao.png" />
                </div>
                <div class="text">樱桃</div>
              </div>
              <div id="s4" data-imgsrc="/cakefox/Public/img/naiyouqiu.png" class="checkbox">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/naiyouqiu.png" />
                </div>
                <div class="text">奶油球</div>
              </div>
            </div>
          </div>
          <script>
          var s4i = document.createElement("img");
            $("#s4").click(function(e){
              var x = e.pageX,
                  y = e.pageY;
              
              $(s4i).attr("src",$(this).attr("data-imgsrc"));
              $(s4i).css({"position":"absolute","left":x,"top":y,"display":"block","width":"20px","z-index":"999"});
              $("body").append($(s4i));
              $(document).mousemove(function(ev){
                var x = ev.pageX,
                  y = ev.pageY;
                $(s4i).css({"left":x+10,"top":y});
              });

            });
            $(".td").click(function(){
                if($(this).children().length){
                   $(this).empty();
                   console.log("if");
                }
              else{
                $(this).append(function(){
                     var obj = $(s4i).clone().css({"width":"50px","position":"static"});
                     return obj;
                   });
                }
              // var top = $(this).offset().top,
              //     left = $(this).offset().left;

              // console.log("top = "+top+" , left = "+left);
               });
          </script>
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
          <div id="laststep" class="button rightbtn">下一步</div>
        </div>
      </div>
    </div>
</div>
<!-- 页面截图插件 -->
<script src="/cakefox/Public/js/html2canvas.min.js"></script>
<script>
$("#laststep").click(function(){
  html2canvas(document.getElementById("canvas"), {
      onrendered: function(canvas) {
        // document.body.appendChild(canvas);
          var pic = canvas.toDataURL("image/png");
          pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
          console.log(pic);
        //   $.ajax({
        //     type: 'POST',
        //     url: 'Save_Picture.aspx/UploadPic',
        //     data: '{ "imageData" : "' + Pic + '" }',
        //     contentType: 'application/json; charset=utf-8',
        //     dataType: 'json',
        //     success: function (msg) {
        //         alert("Done, Picture Uploaded.");
        //     }
        // });
      }
  });
})
  
</script>