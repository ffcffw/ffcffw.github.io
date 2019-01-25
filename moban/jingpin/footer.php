<div class="container"><div class="row"><div class="stui-pannel  stui-pannel-bg clearfixl">
<div class="stui-pannel-box clearfix">
<div class="stui-pannel_bd clearfix">
<div class="col-xs-1 padding-0">
<div class="col-pd text-center hidden-xs"></div>
<p class="text-center"><span style="color:#000;text-align:center;"><?php echo $mkcms_copyright;?></span></p>
</div>
<div style="display:none;">
<?php echo $mkcms_tongji;?>
</div>
</div>
</div>
</div></div></div>
<ul class="stui-extra clearfix">
<li><a class="backtop" href="javascript:scroll(0,0)" style="display: block;"><i class="icon iconfont icon-less"></i></a></li>
<li class="visible-xs"><a class="open-share" href="javascript:;"><i class="icon iconfont icon-share"></i></a></li>
<li class="hidden-xs"><span><i class="icon iconfont icon-qrcode"></i></span>
<div class="sideslip">
<div class="col-pd">
<img width="150" height="150" src="http://bshare.optimix.asia/barCode?site=weixin&url=<?php echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];?>">
<p class="text-center font-12">扫码用手机访问</p>
</div>
</div>
</li>
<li title="会员中心"><a class="open-share" href="<?php echo $mkcms_domain;?>ucenter"><i class="icon iconfont icon-smile"></i></a></li>
<li><a href="<?php echo $mkcms_domain;?>book.php"><i class="icon iconfont icon-comments"></i></a></li>
</ul>
</body>
</html>