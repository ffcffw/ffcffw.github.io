<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta http-equiv="cache-control" content="no-siteapp">
<title><?php echo $mkcms_seoname;?></title>
<link rel="stylesheet" href="<?php echo $mkcms_domain;?>style/css/bootstrap.min.css" />
<link href="<?php echo $mkcms_domain;?>style/css/swiper.min.css" rel="stylesheet" type="text/css" >		
<link href="<?php echo $mkcms_domain;?>style/font/iconfont.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mkcms_domain;?>style/css/whitecolor.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $mkcms_domain;?>style/css/style.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $mkcms_domain;?>style/js/jquery.min.js"></script>
<script src="<?php echo $mkcms_domain;?>style/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="http://tv.bbbbbb.me/ckplayer/ckplayer.js"></script>
<meta name="keywords" content="在线音乐,网易音乐,QQ音乐,酷狗音乐,百度音乐,音乐下载">
<meta name="description" content="热剧快播,最好看的剧情片尽在<?php echo $mkcms_description;?>,在线音乐欣赏,音乐免费下载">
<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
<style type="text/css">

table {border-collapse:collapse;border-spacing:0}
fieldset,img {border:0}
ol,ul {list-style:none}
.bingdoutv{ width:100%;height:100%;}
.player{ width:80%;height:100%;float:left;margin:0;padding:0}
.list{ width:20%;height:100%; float:right;}
</style>
<SCRIPT language=javascript type=text/javascript>
<!--
document.oncontextmenu=new Function('event.returnValue=false;');
document.onselectstart=new Function('event.returnValue=false;');
-->
  </SCRIPT>
<script>
function onKeyDown()
{
 if ((event.keyCode==116)||(window.event.ctrlKey)||(window.event.shiftKey)||(event.keyCode==122))
 {
 event.keyCode=0;
 event.returnValue=false;
 }
}
</script>
<script>
function yxl() { 
if(window.event.altKey) 
{
window.event.returnValue=false;
}
}
document.onkeydown=yxl 
</script>

</head>
<body class="vod-type apptop">
<?php include 'header.php'; ?>
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo get_ad(15)?></div>
	<div class="row">
		<div class="hy-player clearfix">
			<div class="item">
				<div class="col-sm-12 padding-0">
<iframe id="iframe-player" name="iframe-player" src="../music" width="100%" height="500" scrolling="no" frameborder="0"></iframe>
</div>
</div>
	</div>
</div></div>
<?php  include 'footer.php';?>