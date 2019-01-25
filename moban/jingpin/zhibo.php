<?php  include 'head.php';?>
<title>电视直播 - 米酷影视</title>
<meta name="keywords" content="电视直播网站,米酷快播,云点播,免费看视频,湖南卫视直播,最新电影天堂免费在线观看">
<meta name="description" content="热剧快播,最好看的剧情片尽在<?php echo $mkcms_description;?>,米酷影视免费为大家提供最新最全的免费电影，剧集，综艺，动漫无广告在线云点播，以及电视直播">
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
<body>
<?php include 'header.php'; ?>
<div class="container">
<div class="row"><?php echo get_ad(14)?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">直播源来自于网络</span>
			<ul class="nav nav-tabs">
					<li class="active"><a href="#">电视直播</a></li>
				</ul>
</div>
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
<iframe id="iframe-player" name="iframe-player" src="http://www.cietv.com/images/img/100" width="100%" height="600" scrolling="no" frameborder="0"></iframe>
</ul>
</div>
<div class="footer clearfix" id="xlu" style="display:inline-block; height:auto; background:none">
<span class="text-muted" id="xlus">
<a href="http://www.cietv.com/images/img/100" class="btn btn-sm btn-default" target="iframe-player">直播源1</a>
<a href="http://tv.bingdou.net/live.html" class="btn btn-sm btn-default" target="iframe-player">直播源2</a>
</span></div>
</div>
</div>
</div>
<?php  include 'footer.php';?>