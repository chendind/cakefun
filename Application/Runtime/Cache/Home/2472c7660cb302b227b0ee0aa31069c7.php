<?php if (!defined('THINK_PATH')) exit();?><ul id="orderul" class="nav-step" style="border-bottom:1px solid #d8d8d8;">
        <li style="width:25%;" class="stephere"><a data-url="allorder">全部订单</a></li>
        <li style="width:25%;"><a data-url="dfkorder">待付款</a></li>
        <li style="width:25%;"><a data-url="pszorder">配送中</a></li>
        <li style="width:25%;"><a data-url="yqsorder">已签收</a></li>
      </ul>

<div id="orderajax"></div>
<script>
	$("#orderul a").click(function(){
		var url = "./"+$(this).attr("data-url")+".html";
		$("#orderajax").load(url);
		$("#orderul li").removeClass('stephere');
		$(this).parent().addClass('stephere');
	})
	$("#orderajax").load("./allorder.html");
</script>