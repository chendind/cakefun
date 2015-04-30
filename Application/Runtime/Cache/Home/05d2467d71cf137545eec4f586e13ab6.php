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
      <div class="rightbox" id="rightbox">
        <div id="upload" style="width:500px;height:500px;">
          <!-- <img id="bgimg" class="bgimg" src="/cakefox/Public/img/top-hetao.png" alt=""> -->
          
          <div class="canvas" style="border:1px solid #eee;">
            <canvas id="canvas" width="500" height="500"></canvas>
            <div data-d="{{d[0]}}" class="canvastable">
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
      </div>
      <div class="leftbox">
        
          <div class="controllbox">
            <h3 class="title" ng-click="test()">水果</h3>
            <div class="cont">
              <div class="checkbox">
                <div class="checkimg" ng-click="setd(0,1)">
                  <img src="/cakefox/Public/img/caomei.png" />
                </div>
                <div class="text">草莓<i class="fa fa-check" ng-show="d[0]==1"></i></div>
              </div>
              <div class="checkbox" ng-click="setd(0,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/lanmei.png" />
                </div>
                <div class="text">蓝莓<i class="fa fa-check" ng-show="d[0]==2"></i></div>
              </div>
              <div class="checkbox" ng-click="setd(0,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/yingtao.png" />
                </div>
                <div class="text">樱桃<i class="fa fa-check" ng-show="d[0]==3"></i></div>
              </div>
              <div id="s4" data-imgsrc="/cakefox/Public/img/naiyouqiu.png" class="checkbox" ng-click="setd(0,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/naiyouqiu.png" />
                </div>
                <div class="text">奶油球<i class="fa fa-check" ng-show="d[0]==4"></i></div>
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
            // $(".td").click(function(){
            //     if($(this).children().length){
            //        $(this).empty();
            //        console.log("if");
            //     }
            //   else{
            //     $(this).append(function(){
            //          var obj = $(s4i).clone().css({"width":"50px","position":"static"});
            //          return obj;
            //        });
            //     }
            //   // var top = $(this).offset().top,
            //   //     left = $(this).offset().left;

            //   // console.log("top = "+top+" , left = "+left);
            //    });
          </script>
          
        <div class="controllbox">
          <div class="button leftbtn" ng-click="tostep3()">上一步</div>
          <div id="laststep" class="button rightbtn">下一步</div>
        </div>
      </div>
    </div>
</div>
<!-- 页面截图插件 -->
<script src="/cakefox/Public/js/html2canvas.min.js"></script>
<script>
$("#laststep").click(function(){
  html2canvas(document.getElementById("rightbox")).then(function(canvas) {
        // document.body.appendChild(canvas);
          var pic = canvas.toDataURL("image/png");
          pic = pic.replace(/^data:image\/(png|jpg);base64,/, "");
          $.ajax({
            type: 'POST',
            url: '/cakefox/index.php/Home/Index/savebase64img',
            data: {diyimg:pic},
            dataType: 'json',
            success: function (msg) {
            }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
        });
      });
});
</script>
<script>
var     canvas = document.getElementById("canvas"),
        ctx = canvas.getContext('2d');
        var bgimg = new Image();
        bgimg.src="/cakefox/Public/img/top-hetao.png";
        bgimg.onload = function(){
          ctx.drawImage(bgimg,0,0,500,500);
        }
  $(".canvastable .td").click(function(){
    var position = $(this).position(),
        src = $(".canvastable").attr("data-d");
        img = new Image();

        switch(src){
          case "1": src="/cakefox/Public/img/caomei.png";break;
          case "2": src="/cakefox/Public/img/lanmei.png";break;
          case "3": src="/cakefox/Public/img/yingtao.png";break;
          case "4": src="/cakefox/Public/img/naiyouqiu.png";break;
        }
        img.src = src;
        img.onload = function(){
          ctx.drawImage(img,position.left+40,position.top+100,30,30);
          console.log(position.top);
        }

        
  })
</script>