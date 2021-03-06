<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>jQuery头像裁剪插件cropbox</title>
<style>
	  @charset "utf-8";
	.container {
	    font-family: 微软雅黑;
	    font-size: 12px;
	    margin: 40px auto 0;
	    position: relative;
	    width: 400px;
	}
	.container p {
	    color: #bbb;
	    height: 0;
	    line-height: 0;
	    margin: 10px;
	}
	.action {
	    height: 30px;
	    margin: 10px 0;
	    width: 400px;
	}
	.cropped {
	    border: 1px solid #ddd;
	    box-shadow: 0 0 12px #ddd;
	    height: 460px;
	    padding: 4px;
	    position: absolute;
	    right: -230px;
	    text-align: center;
	    top: 0;
	    width: 200px;
	}
	.imageBox {
	    background: none no-repeat scroll 0 0 #fff;
	    border: 1px solid #aaa;
	    box-shadow: 4px 4px 12px #b0b0b0;
	    cursor: move;
	    height: 400px;
	    overflow: hidden;
	    position: relative;
	    width: 400px;
	}
	.imageBox .thumbBox {
	    background: none repeat scroll 0 0 transparent;
	    border: 1px solid rgb(102, 102, 102);
	    border-radius: 200px;
	    box-shadow: 0 0 0 1000px rgba(0, 0, 0, 0.5);
	    box-sizing: border-box;
	    height: 200px;
	    left: 50%;
	    margin-left: -100px;
	    margin-top: -100px;
	    position: absolute;
	    top: 50%;
	    width: 200px;
	}
	.imageBox .spinner {
	    background: none repeat scroll 0 0 rgba(213, 211, 211, 0.7);
	    bottom: 0;
	    color: #2f2a2a;
	    left: 0;
	    line-height: 400px;
	    position: absolute;
	    right: 0;
	    text-align: center;
	    top: 0;
	}
	.Btnsty_peyton {
	    background-color: #f38e81;
	    border: 0 solid #fff;
	    border-radius: 3px;
	    box-shadow: 0 0 5px #b0b0b0;
	    color: #ffffff;
	    cursor: pointer;
	    display: inline-block;
	    float: right;
	    font-size: 20px;
	    height: 57px;
	    line-height: 57px;
	    margin: 0 2px;
	    text-decoration: none;
	    width: 66px;
	}
	.new-contentarea {
	    float: left;
	    margin: 0 auto;
	    overflow: hidden;
	    position: relative;
	    width: 165px;
	}
	.new-contentarea label {
	    display: block;
	    height: 100%;
	    width: 100%;
	}
	.new-contentarea input[type="file"] {
	    background: none repeat scroll 0 0 #333;
	    height: 60px;
	    margin: 0 -94px 0 auto;
	    opacity: 0;
	    position: absolute;
	    right: 50%;
	    top: 0;
	    width: 188px;
	    z-index: 2;
	}
	a.upload-img {
	    background-color: #f38e81;
	    border: 0 solid #fff;
	    border-radius: 3px;
	    box-shadow: 0 0 5px #b0b0b0;
	    color: #ffffff;
	    cursor: pointer;
	    display: inline-block;
	    font-size: 20px;
	    height: 57px;
	    line-height: 57px;
	    margin-bottom: 10px;
	    text-decoration: none;
	    width: 165px;
	}
	a.upload-img:hover {
	    background-color: #ec7e70;
	}
	.tc {
	    text-align: center;
	}
</style>
</head>
<body>
<script src="/cakefox/Public/js/jquery-1.11.1.min.js" type="text/javascript"></script> 
<script src="/cakefox/Public/js/cropbox.js" type="text/javascript"></script>

<div class="container">
  <div class="imageBox">
    <div class="thumbBox"></div>
    <div style="" class="spinner"></div>
  </div>
  <div class="action"> 
    <!-- <input type="file" id="file" style=" width: 200px">-->
    <div class="new-contentarea tc"> <a class="upload-img" href="javascript:void(0)">
      <label for="upload-file">请先选择图片...</label>
      </a>
      <input type="file" id="upload-file" name="upload-file" class="">
    </div>
    <input type="button" value="OK" class="Btnsty_peyton">
    <input type="button" value="+" class="Btnsty_peyton" id="btnZoomIn">
    <input type="button" value="-" class="Btnsty_peyton" id="btnZoomOut">
  </div>
  <div class="cropped"></div>
</div>
<script type="text/javascript">
 
$(window).load(function() {
	//$('#btnCrop').click();$("#idName").css("cssText","background-color:red!important");
	
	//$(".imageBox").css("cssText","background-position:88px 88px!important");$(".imageBox").css("cssText","background-size:222px 222px!important");
	var options =
	{
		thumbBox: '.thumbBox',
		spinner: '.spinner',
		imgSrc: ''
	}
	var cropper = $('.imageBox').cropbox(options);
	var img="";
	$('#upload-file').on('change', function(){
		var reader = new FileReader();
		reader.onload = function(e) {
			options.imgSrc = e.target.result;
			cropper = $('.imageBox').cropbox(options);
			getImg();
		}
		reader.readAsDataURL(this.files[0]);
		this.files = [];
		//getImg();
	})
	$('#btnCrop').on('click', function(){
		alert("图片上传喽");
	})
	function getImg(){
		img = cropper.getDataURL();
		$('.cropped').html('');
		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p>');
		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>');
		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;" ><p>64px*64px</p>');
		}
		
	$(".imageBox").on("mouseup",function(){
 		getImg();
  		});
		
		
	$('#btnZoomIn').on('click', function(){
		cropper.zoomIn();
	})
	$('#btnZoomOut').on('click', function(){
		cropper.zoomOut();
	})
});
</script>

<div id="xunlei_com_thunder_helper_plugin_d462f475-c18e-46be-bd10-327458d045bd"></div></body></html>