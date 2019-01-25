<?php  include 'head.php'?>
<title>电视直播-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="电视直播,湖南卫视,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body class="vod-type apptop">
<?php include 'header.php'; ?>
<div class="container">
<div class="row">
<div class="container">
<div class="row"  style="margin-top:10px"><?php echo get_ad(14)?></div></div>
<div class="hy-layout clearfix" style="margin-top: 10px;">
<div class="hy-switch-tabs active clearfix">
				<span class="text-muted pull-right hidden-xs">如果您喜欢本站请动动小手分享给您的朋友！</span>
				<ul class="nav nav-tabs">
					<li class="active"><a href="">电视直播</a></li>
				</ul>
			</div>
			<div class="item">
				<div class="col-sm-12 padding-0">
<iframe id="iframe-player" name="iframe-player" src="http://www.cietv.com/images/img/100" width="100%" height="600" scrolling="no" frameborder="0"></iframe>
</div>
</div>
 <div class="footer clearfix" id="xlu" style="display:inline-block; height:auto; background:none">
<span class="text-muted" id="xlus">

<a href="http://www.cietv.com/images/img/100" class="btn btn-sm btn-default" target="iframe-player">直播源1</a>
<a href="http://tv.bingdou.net/live.html" class="btn btn-sm btn-default" target="iframe-player">直播源2</a>
						</span></div>
	</div>
</div></div>
<?php  include 'footer.php';?>