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
          <!-- <img id="bgimg" class="bgimg" src="/cakefox/Public/img/top-hetao.png" alt=""> -->
          
          <div id="upload" class="canvas" style="border:1px solid #eee;">
            <div id="canvasbox">
              <canvas id="bgcanvas" width="500" height="500"></canvas>
            </div>
            
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
      <div class="leftbox">
        
          <div class="controllbox">
            <h3 class="title" ng-click="test()">水果</h3>
            <div class="cont">
              <div data-imgsrc="/cakefox/Public/img/caomei.png" class="checkbox puticon">
                <div class="checkimg" ng-click="setd(0,1)">
                  <img src="/cakefox/Public/img/caomei.png" />
                </div>
                <div class="text">草莓<i class="fa fa-check" ng-show="d[0]==1"></i></div>
              </div>
              <div data-imgsrc="/cakefox/Public/img/lanmei.png" class="checkbox puticon" ng-click="setd(0,2)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/lanmei.png" />
                </div>
                <div class="text">蓝莓<i class="fa fa-check" ng-show="d[0]==2"></i></div>
              </div>
              <div data-imgsrc="/cakefox/Public/img/yingtao.png" class="checkbox puticon" ng-click="setd(0,3)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/yingtao.png" />
                </div>
                <div class="text">樱桃<i class="fa fa-check" ng-show="d[0]==3"></i></div>
              </div>
              <div data-imgsrc="/cakefox/Public/img/naiyouqiu.png" class="checkbox puticon" ng-click="setd(0,4)">
                <div class="checkimg">
                  <img src="/cakefox/Public/img/naiyouqiu.png" />
                </div>
                <div class="text">奶油球<i class="fa fa-check" ng-show="d[0]==4"></i></div>
              </div>
            </div>
          </div>
          <script>
          var mouseicon = document.createElement("img");
            $(".puticon").click(function(e){
              var x = e.pageX,
                  y = e.pageY;
              
              $(mouseicon).attr("src",$(this).attr("data-imgsrc"));
              $(mouseicon).css({"position":"absolute","left":x,"top":y,"display":"block","width":"20px","z-index":"999"});
              $("body").append($(mouseicon));
              $(document).mousemove(function(ev){
                var x = ev.pageX,
                  y = ev.pageY;
                $(mouseicon).css({"left":x+10,"top":y});
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
<!-- <script src="/cakefox/Public/js/html2canvas.min.js"></script> -->
<script>
var     bgcanvas = document.getElementById("bgcanvas"),
        ctx = bgcanvas.getContext('2d');
        var bgimg = new Image();
        bgimg.src="/cakefox/Public/img/top-hetao.png";
        bgimg.onload = function(){
           ctx.drawImage(bgimg,0,0,500,500);
        }
  $(".canvastable .td").click(function(){
    
    var position = $(this).position(),
        src = $(".canvastable").attr("data-d");
        img = new Image(),  
        cox = $(this).index(),
        coy = $(this).parent().index(),
        coordinate = "x"+cox+"y"+coy,
        size = 30;
    if($("#"+coordinate).length){
      $("#"+coordinate).remove();
    }
    else{
      var newcanvas = "<canvas id="+coordinate+" width="+500+" height="+500+"></canvas>";
      $("#canvasbox").append(newcanvas);
      var newctx = document.getElementById(coordinate).getContext('2d');
        switch(src){
          case "1": src="/cakefox/Public/img/caomei.png";break;
          case "2": src="/cakefox/Public/img/lanmei.png";break;
          case "3": src="/cakefox/Public/img/yingtao.png";break;
          case "4": src="/cakefox/Public/img/naiyouqiu.png";break;
        }
        img.src = src;
        var addnum = 5;
        switch(parseInt(cox)+parseInt(coy)){
          case 0:size = 22+addnum;break;
          case 1:size = 22.4+addnum;break;
          case 2:size = 23+addnum;break;
          case 3:size = 23.7+addnum;break;
          case 4:size = 24.5+addnum;break;
          case 5:size = 25.4+addnum;break;
          case 6:size = 26.4+addnum;break;
          case 7:size = 27.3+addnum;break;
          case 8:size = 28.2+addnum;break;
          case 9:size = 29.1+addnum;break;
          case 10:size = 30+addnum;break;
          case 11:size = 30.7+addnum;break;
          case 12:size = 31.1+addnum;break;
          case 13:size = 31.5+addnum;break;
          case 14:size = 32+addnum;break;
        }
        img.onload = function(){
          newctx.drawImage(img,position.left+40,position.top+100,size,size);
        }
    } 
  })
var hccanvas = document.createElement("canvas");
  $("#laststep").click(function(){
        var hcctx = hccanvas.getContext("2d");
        hccanvas.height = 500;
        hccanvas.width = 500;
        var canvasnum = parseInt($("#canvasbox").children().length)-1;
       $("#canvasbox").children().each(function(index){
          var img = new Image(),
              ctx = this.getContext("2d");
          img.src = this.toDataURL("image/png");
          img.onload = function(){
            hcctx.drawImage(img,0,0);
            if(index == canvasnum){
              var pic = hccanvas.toDataURL("image/png");
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
            }
          }
          
      })
      
  })
</script>