<?php if (!defined('THINK_PATH')) exit();?><h3 class="title" style="margin-top:20px;">
	<span style="font-weight:normal;font-size:14px;">订单号：1005677886</span>
	<span style="float:right;">配送时间：2015-05-07 14:00-16:00</span>
</h3>
	<div class="cont" style="padding:0;">
		<div class="column" style="padding:0;">
			<dl class="dlitem">
				<dd style="padding:0;">
					<div class="ordergroup">
						<div class="orderlist">
							<table>
								<tr>
									<td style="width:15%;"><img style="margin:0;" src="/cakefox/Public/img/top-lirong1.png" alt="商品图"></td>
									<td style="width:20%;">丽蓉暗香</td>
									<td style="width:10%;">8磅</td>
									<td style="width:10%;">￥168</td>
									<td style="width:10%;">×1</td>
								</tr>
								<tr>
									<td><img src="/cakefox/Public/img/top-lirong1.png" alt="商品图"></td>
									<td>丽蓉暗香</td>
									<td>8磅</td>
									<td>￥168</td>
									<td>×1</td>
								</tr>
							</table>
						</div>
						<div class="orderblock" style="right:20%;top:0;">
							<span id="price">418.00</span>
							<span>（已优惠：18元）</span>
						</div>
						<div class="orderblock" style="right:0;top:0;">
							<a href="#/myorderinfo">订单详情</a>
							<a>申请售后</a>
							<a>取消订单</a>
						</div>
					</div>
				</dd>
			</dl>
		</div>
	</div>
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

</script>