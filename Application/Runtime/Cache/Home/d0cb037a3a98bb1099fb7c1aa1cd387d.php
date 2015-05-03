<?php if (!defined('THINK_PATH')) exit();?><h3 class="title" style="margin-top:20px;">关联邮箱</h3>
	<div class="cont">
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>请输入您要绑定的邮箱账号</span></dt>
				<dd>
					<input id="email" class="pinput" type="email" /><a id="sendemailbtn" class="btn greenbtn" style="float:right;">发送验证邮件</a>
				</dd>
			</dl>
		</div>
		<div class="clear"></div>
		<div class="clear line"></div>
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>绑定邮箱后，您可以：</span></dt>
				<dd>
					<p>1.完成购买后收到来自cakefun的电子账单</p>
					<p>2.密码被修改和获得优惠券时收到邮件提醒</p>
					<p>3.若您需要，可订阅我们的邮件以获取最新的cakefun动态</p>
				</dd>
			</dl>
		</div>
	</div>
</h3>
<h3 class="title" style="margin-top:20px;">修改密码</h3>
	<div class="cont">
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>旧密码</span></dt>
				<dd>
					<input class="pinput" type="password" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>新密码</span></dt>
				<dd>
					<input class="pinput" type="password" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>确认新密码</span></dt>
				<dd>
					<input class="pinput" type="password" />
					<div class="clear"></div>
					<a class="btn" style="margin-top:10px;">确定修改</a>
					<a style="display:block;float:left;margin-top:10px;height:34px;line-height:34px;margin-left:10px;">忘记密码</a>
				</dd>
			</dl>
		</div>
	</div>
</h3>
<script>
	$("#sendemailbtn").click(function(){
		if($("#email").val()==""){
			alert("您还未填写邮箱")
		}
		else{
			$.ajax({ 
	           type: "post", 
	           url: "/cakefox/index.php/Home/Index/setemail", 
	           dataType: "json",
	           data:{email:$("#email").val()},
	           success: function (data) { 
	               switch(data.state) {
	                  case "1":alert("邮件发送成功，请检查您的邮箱"); break ;                     
	                  case "2":alert("您已经设置过邮箱了");break;
	                  case "3":alert("您今天请求次数过多，请明天再试");break;
	                  case "4":alert("网络异常，请重试");break;
	                  case "5":alert("邮件发送失败");break;
	                  case "0":alert("登录超时");window.location.reload();break;
	               }
	           }, 
	           error: function (XMLHttpRequest, textStatus, errorThrown) {alert("网络异常");} 
	        });
		}
	})
</script>