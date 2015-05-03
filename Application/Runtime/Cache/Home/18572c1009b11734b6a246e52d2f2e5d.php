<?php if (!defined('THINK_PATH')) exit();?><h3 class="title" style="margin-top:20px;">
	<span>2015-04-15</span>
	<span style="font-weight:normal;font-size:14px;margin-left:20px;">订单号：1005677886</span>
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
							<a>申请售后</a>
							<a>取消订单</a>
						</div>
					</div>
					<div class="orderstate">
						<ul>
							<li>下单</li>
							<li>付款</li>
							<li>配送</li>
							<li>签收</li>
						</ul>
					</div>
					<div class="orderinfo">
						<h4>配送信息</h4>
						<table id="orderinfotable">
							<tr>
								<td style="width:20%;">姓名</td>
								<td>陈世雷</td>
							</tr>
							<tr>
								<td>配送地址</td>
								<td>浙江省杭州市西湖区西溪路525号</td>
							</tr>
							<tr>
								<td>联系电话</td>
								<td>15267069653</td>
							</tr>
							<tr>
								<td>支付方式</td>
								<td>在线支付</td>
							</tr>
						</table>
						<h4>发票信息</h4>
						<table id="orderinfotable">
							<tr>
								<td style="width:20%;">发票类型</td>
								<td>单位</td>
							</tr>
							<tr>
								<td>发票抬头</td>
								<td>浙江大学</td>
							</tr>
							<tr>
								<td>发票内容</td>
								<td>食品</td>
							</tr>
						</table>
						<h4>优惠信息</h4>
						<table id="orderinfotable">
							<tr>
								<td style="width:20%;">优惠券</td>
								<td>新人满150-20</td>
							</tr>
						</table>
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