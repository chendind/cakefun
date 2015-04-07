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
							<th style="width:25%">地区</th>
							<th style="width:35%">街道地址</th>
							<th style="width:15%">操作</th>
						</tr>
						<tr>
							<td>张三</td>
							<td>13000000000</td>
							<td>浙江省 杭州市 西湖区</td>
							<td>白马湖大道388号</td>
							<td><a>设为默认</a> | <a>删除</a></td>
						</tr>
						<tr style="background:#f5f5f5">
							<td>张三老婆</td>
							<td>13000000001</td>
							<td>浙江省 杭州市 西湖区</td>
							<td>白马湖大道388号星源文化广场星缘大厦B幢6楼623</td>
							<td><a>设为默认</a> | <a>删除</a></td>
						</tr>
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
						<option value="">杭州市</option>
						<option value="">杭州市</option>
						<option value="">杭州市</option>
						<option value="">杭州市</option>
					</select>
					<select>
						<option value="">西湖区</option>
						<option value="">西湖区</option>
						<option value="">西湖区</option>
						<option value="">西湖区</option>
						<option value="">西湖区</option>
					</select>
				</dd>
			</dl>
			<dl class="dlitem">
				<dt><span>街道地址</span></dt>
				<dd>
					<input class="pinput" type="text" />
					<div class="clear"></div>
					<a class="btn" style="margin-top:10px;">增加</a>
					<a style="display:block;float:left;margin-top:10px;height:34px;line-height:34px;margin-left:10px;">忘记密码</a>
				</dd>
			</dl>
		</div>
	</div>
</h3>