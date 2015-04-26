<?php if (!defined('THINK_PATH')) exit();?><h3 class="title" style="margin-top:20px;">送货地址管理</h3>
	<div class="cont">
		<div class="column">
			<dl class="dlitem">
				<dt><span>已有送货地址</span></dt>
				<dd>
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
							<td><?php echo ($voaddress["address_area"]); ?></td>
							<td><?php echo ($voaddress["address_detail"]); ?></td>
							<td><a class="swmrbtn" data-addressid="<?php echo ($voaddress["address_id"]); ?>">设为默认</a> | <a class="bjbtn">编辑</a> | <a class="scbtn">删除</a></td>
                              </tr><?php endforeach; endif; else: echo "" ;endif; ?>

						
					</table>
				</dd>
			</dl>
		</div>
	</div>
</h3>
<h3 class="title" style="margin-top:20px;">新增收货地址</h3>
	<div class="cont">
		<div class="two-third column">
			<dl class="dlitem">
				<dt><span>收货人姓名</span></dt>
				<dd>
					<input class="pinput" type="text" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>手机号码</span></dt>
				<dd>
					<input class="pinput" type="text" />
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>地区</span></dt>
				<dd>
					<select>
						<option value="">杭州市</option>
					</select>
					<select>
						<option value="">西湖区</option>
						<option value="">拱墅区</option>
						<option value="">江干区</option>
						<option value="">上城区</option>
						<option value="">下城区</option>
					</select>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>详细地址</span></dt>
				<dd>
					<input class="pinput" type="text" />
					<div class="clear"></div>
					<a class="btn" style="margin-top:10px;">增加</a>
	
				</dd>
			</dl>
		</div>
	</div>
</h3>
<script>
	$("scbtn").click(function(){
 $.ajax({ 
           type: "post", 
           url: "/cakefox/index.php/Home/Index/deladdress", 
           dataType: "json",
           data:{address_id:$(this).attr("data-addressid")},
           success: function (data) { 
                switch(data.state){
                  case "1":alert("删除成功");window.reload();break;
                  case "2":alert("删除失败");break;
                  case "0":alert("您未登录");break;
                }   
           }, 
           error: function (XMLHttpRequest, textStatus, errorThrown) {console.log(textStatus);} 
    });
});
</script>