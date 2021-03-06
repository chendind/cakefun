<?php if (!defined('THINK_PATH')) exit();?>
<h3 class="title" style="margin-top:20px;">个人资料</h3>
	<div class="cont">
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>头像</span></dt>
				<dd>
					<img id="user_img" src="/cakefox/Uploads/<?php echo ($detail["user_img"]); ?>" />
					<a id="trigger" class="btn">上传新头像</a><input name="photo" id="photo" type="file" />
					<span>头像尺寸请小于10M，支持jpg、jpeg、png、gif格式</span>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>账号</span></dt>
				<dd>
					<input class="pinput" type="text" disabled value="<?php echo ($detail["user_phone"]); ?>" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>姓名</span></dt>
				<dd>
					<input id="name" class="pinput" type="text" value="<?php echo ($detail["user_name"]); ?>" />
				</dd>
			</dl>
			<dl id="sexbox" class="dlitem" ng-init="sex=<?php echo ($detail["user_gender"]); ?>" data-gender="{{sex}}">
				<dt><span>性别</span></dt>
				<dd>
					<label for="answer-man"><input type="radio" name="sex" id="answer-man" value="0" ng-model="sex"  />男</label>
					<label for="answer-woman"><input type="radio" name="sex" id="answer-women" value="1" ng-model="sex"  />女</label>
					<label for="answer-secret"><input type="radio" name="sex" id="answer-secret" value="2" ng-model="sex"  />保密</label>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>我的生日</span></dt>
				<dd>
					<input id="date" class="pinput start data" type="text" value="<?php echo ($detail["user_birth"]); ?>" placeholder="点击此处设置生日">
				</dd>
			</dl>
			
			<dl class="dlitem">
				<dt><span>心愿清单</span></dt>
				<dd>
					<input id="wish1" class="pinput hope" type="text" value="<?php echo ($detail["user_wish1"]); ?>" placeholder="心愿1" />
					<input id="wish2" class="pinput hope" type="text" value="<?php echo ($detail["user_wish2"]); ?>" placeholder="心愿2" />
					<input id="wish3" class="pinput hope" type="text" value="<?php echo ($detail["user_wish3"]); ?>" placeholder="心愿3" style="margin-bottom:0;" />
					<div class="clear"></div>
					<span>请填写几种您偏爱的食材，以便我们更好地为您服务</span>
				</dd>
				
			</dl>
			<dl class="dlitem">
				<dd>
					<a id="bcbtn" class="btn greenbtn">保存</a>
				</dd>
			</dl>
		</div>
	</div>
</h3>

<script src="/cakefox/Public/js/bootstrap-datepicker.min.js"></script>
<script>
$("#trigger").click(function(){
    $("#photo").trigger('click');
})
  $("#photo").on("change",function(){
    var file = this.files[0];
    if(file){
    	jQuery.ajaxFileUpload({ 
			url : "/cakefox/index.php/Home/Index/uploadmyimg", 
			secureuri : false, 
			fileElementId : "photo", 
			dataType : 'json',
			success : function(data){ 
					switch(data.state){
			           			case "2":alert("上传失败");break;
			           			case "1":alert("上传成功！");break;
			           			case "3":alert("数据库失败");break;
			           			case "0":alert("您还未登录");break;
			           		}
			           		$("#dialogbox").load("/cakefox/index.php/Home/Index/protraitdialog.html").show();
			}, 
			error : function(data, status, e){ 
			console.log(data);
			console.log(status);
			console.log(e);
			} 
		}) 
    }

  })
var startdate = new Date();
startdate.setDate(startdate.getDate());
$('#date').datepicker({
        'format': 'yyyy年m月d日',
        'autoclose': true,
        'endDate':startdate,
    });
$("#bcbtn").click(function(){
	$.ajax({
		type: "post", 
           url: "/cakefox/index.php/Home/Index/editmydetail", 
           dataType: "json",
           data:{gender:$("#sexbox").attr("data-gender"),birth:$("#date").val(),name:$("#name").val(),wish1:$("#wish1").val(),wish2:$("#wish2").val(),wish3:$("#wish3").val()},
           success: function (data) { 
                switch(data.state){
                  case "1":alert("修改成功");window.location.reload();break;
                  case "2":alert("修改失败");break;
                  case "0":alert("您未登录");break;
                }   
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
	})
})
</script>