<?php if (!defined('THINK_PATH')) exit();?><h3 class="title" style="margin-top:20px;">我的送货地址</h3>
	<div class="cont" style="padding:0;">
		<div class="column" style="padding:0;">
			<dl class="dlitem">
				<dd style="padding:0;">
					<table>
						<tr>
							<th style="width:11%">收货人</th>
							<th style="width:14%">手机号码</th>
							<th style="width:22%">地区</th>
							<th style="width:32%">街道地址</th>
							<th style="width:21%">操作</th>
						</tr>
						
							<?php if(is_array($address)): $i = 0; $__LIST__ = $address;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$voaddress): $mod = ($i % 2 );++$i;?><tr 

<?php if($key%2 == 1 ): ?>style="background:#f5f5f5"
    <?php else: endif; ?>


                             >

                            <td><?php echo ($voaddress["address_name"]); ?></td>
							<td><?php echo ($voaddress["address_phone"]); ?></td>
							<td><?php echo ($voaddress["address_area1"]); ?> <?php echo ($voaddress["address_area2"]); ?> <?php echo ($voaddress["address_area3"]); ?></td>
							<td><?php echo ($voaddress["address_detail"]); ?></td>
							<td>
								 
<?php if($voaddress["address_main"] == 0 ): ?><a class="swmrbtn" data-addressid="<?php echo ($voaddress["address_id"]); ?>">设为默认</a> 
    <?php else: ?> <a>默认</a><?php endif; ?>


								| 
								<a class="bjbtn" data-name="<?php echo ($voaddress["address_name"]); ?>" data-phone="<?php echo ($voaddress["address_phone"]); ?>" data-area-a="<?php echo ($voaddress["address_area1"]); ?>" data-area-b="<?php echo ($voaddress["address_area2"]); ?>" data-area-c="<?php echo ($voaddress["address_area3"]); ?>" data-detail="<?php echo ($voaddress["address_detail"]); ?>" data-addressid="<?php echo ($voaddress["address_id"]); ?>">编辑</a> | 
								<a class="scbtn" data-addressid="<?php echo ($voaddress["address_id"]); ?>">删除</a>
							</td>
                              </tr><?php endforeach; endif; else: echo "" ;endif; ?>

						
					</table>
				</dd>
			</dl>
		</div>
	</div>
</h3>
<h3 id="xzdzbox" class="title" style="margin-top:20px;">新增/编辑收货地址</h3>
	<div class="cont">
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>收货人姓名</span></dt>
				<dd>
					<input id="name" class="pinput" type="text" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>手机号码</span></dt>
				<dd>
					<input id="phonenum" class="pinput" type="text" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>地区</span></dt>
				<dd>
					<select id="sheng">
						<option value="浙江省">浙江省</option>
					</select>
					<select id="shi">
						<option value="杭州市">杭州市</option>
					</select>
					<select id="qu">
						<option value="西湖区">西湖区</option>
						<option value="拱墅区">拱墅区</option>
						<option value="江干区">江干区</option>
						<option value="上城区">上城区</option>
						<option value="下城区">下城区</option>
					</select>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>详细地址</span></dt>
				<dd>
					<input id="detail" class="pinput" type="text" />
					<div class="clear"></div>
					<a id="zjbtn" class="btn" style="margin-top:10px;">增加</a>
					<a id="bcbtn" class="btn" style="margin-top:10px;display:none;">保存</a>
				</dd>
			</dl>
		</div>
	</div>
</h3>
<script>
//删除api
$(".scbtn").click(function(){
	if(confirm("确定删除该地址吗？")){
		$.ajax({ 
			type: "post", 
			url: "/cakefox/index.php/Home/Index/deladdress", 
			dataType: "json",
			data:{id:$(this).attr("data-addressid")},
			success: function (data) { 
				switch(data.state){
					case "1":window.location.reload();break;
					case "2":alert("删除失败");break;
					case "0":alert("您未登录");break;
				}   
			}, 
			error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
		});
	}
});
//增加api
$("#zjbtn").click(function(){
	if($("#name").val()==""){
		alert("您还未填写收货人姓名");
	}
	else if($("#phonenum").val()==""){
		alert("您还未填写手机号码");
	}
	else if($("#detail").val()==""){
		alert("您还未填写详细地址");
	}
	else{
		$.ajax({ 
			type: "post", 
			url: "/cakefox/index.php/Home/Index/addaddress", 
			dataType: "json",
			data:{phone:$("#phonenum").val(),name:$("#name").val(),area1:$("#sheng").val(),area2:$("#shi").val(),area3:$("#qu").val(),detail:$("#detail").val()},
			success: function (data) { 
				switch(data.state){
					case "1":alert("添加成功");window.location.reload();break;
					case "2":alert("手机号不合法");break;
					case "0":alert("您未登录");break;
					case "4":alert("添加失败");break;
				}   
			}, 
			error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
		});
	}
});
	//编辑api
$(".bjbtn").click(function(){
	$(window).scrollTop($("#xzdzbox").offset().top);
	var id = $(this).attr("data-addressid");
	$("#zjbtn").hide();
	$("#bcbtn").show();
	$("#name").val($(this).attr("data-name"));
	$("#phonenum").val($(this).attr("data-phone"));
	$("sheng").val($(this).attr("data-area-a"));
	$("shi").val($(this).attr("data-area-b"));
	$("qu").val($(this).attr("data-area-c"));
	$("#detail").val($(this).attr("data-detail"));
	$("#bcbtn").click(function(){
		if($("#name").val()==""){
			alert("您还未填写收货人姓名");
		}
		else if($("#phonenum").val()==""){
			alert("您还未填写手机号码");
		}
		else if($("#detail").val()==""){
			alert("您还未填写详细地址");
		}
		else{
			$.ajax({ 
	           type: "post", 
	           url: "/cakefox/index.php/Home/Index/editaddress", 
	           dataType: "json",
	           data:{phone:$("#phonenum").val(),name:$("#name").val(),area1:$("#sheng").val(),area2:$("#shi").val(),area3:$("#qu").val(),detail:$("#detail").val(),id:id},
	           success: function (data) { 
	                switch(data.state){
	                  case "1":alert("更新成功");window.location.reload();break;
	                  case "2":alert("更新失败");break;
	                  case "3":alert("手机号不合法");break;
	                  case "0":alert("您未登录");break;
	                }   
	           }, 
	           error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
	   		 });
		}
	})
});
//设为默认api
$(".swmrbtn").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/setmainaddress", 
           dataType: "json",
           data:{id:$(this).attr("data-addressid")},
           success: function (data) { 
                switch(data.state){
                  case "1":alert("成功");window.location.reload();break;
                  case "2":alert("网络异常");break;
                  case "0":alert("您未登录");break;
                }   
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
    });
});
</script>