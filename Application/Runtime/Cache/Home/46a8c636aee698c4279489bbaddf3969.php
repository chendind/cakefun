<?php if (!defined('THINK_PATH')) exit();?>
<h3 class="title" style="margin-top:20px;">个人资料</h3>
	<div class="cont">
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>头像</span></dt>
				<dd>
					<img src="/cakefox/Public/img/portrait.jpg" />
					<a id="trigger" class="btn">上传新头像</a><input name="photo" id="photo" type="file" />
					<span>头像尺寸请小于10M，支持jpg、jpeg、png、gif格式</span>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>账号</span></dt>
				<dd>
					<input class="pinput" type="text" disabled value="152****9653" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>昵称</span></dt>
				<dd>
					<input class="pinput" type="text" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>性别</span></dt>
				<dd>
					<label for="answer-man"><input type="radio" name="sex" id="answer-man" />男</label>
					<label for="answer-woman"><input type="radio" name="sex" id="answer-women" />女</label>
					<label for="answer-secret"><input type="radio" name="sex" id="answer-secret" checked />保密</label>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>我的生日</span></dt>
				<dd>
					您还未设置生日，点击这里<a style="color:#4183c4;">设置</a>
					<div style="display:none;">
						<select>
							<option>1970</option>
							<option>1971</option>
							<option>1972</option>
							<option>1973</option>
							<option>1974</option>
							<option>1975</option>
						</select>年
						<select>
							<option>1月</option>
							<option>1月</option>
							<option>1月</option>
							<option>1月</option>
							<option>1月</option>
							<option>1月</option>
						</select>月
						<select>
							<option>1日</option>
							<option>1日</option>
							<option>1日</option>
							<option>1日</option>
							<option>1日</option>
							<option>1日</option>
						</select>日
						<!-- <span>生日设置后不能修改。</span> -->
					</div>
				</dd>
			</dl>
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

</script>
			<dl class="dlitem">
				<dt><span>心愿清单</span></dt>
				<dd>
					<input class="pinput hope" type="text" placeholder="心愿1" />
					<input class="pinput hope" type="text" placeholder="心愿2" />
					<input class="pinput hope" type="text" placeholder="心愿3" style="margin-bottom:0;" />
					<div class="clear"></div>
					<span>请填写几种您偏爱的食材，以便我们更好地为您服务</span>
				</dd>
				
			</dl>
			<dl class="dlitem">
				<dd>
					<a class="btn greenbtn">保存</a>
				</dd>
			</dl>
		</div>
	</div>
</h3>