<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php  include 'head.php';
$zy='class="active"'?>
<title>追综艺-最新综艺-好看综艺-最新综艺排行-<?php echo $mkcms_seoname;?></title>
<meta name="keywords" content="追综艺,最新综艺,好看综艺,最新综艺排行,<?php echo $mkcms_keywords;?>">
<meta name="description" content="<?php echo $mkcms_description;?>">
</head>
<body>
<?php include 'header.php'; ?>
<div class="container">
<div class="row">
<?php echo get_ad(9)?>
<div class="stui-pannel stui-pannel-bg clearfix">
<div class="stui-pannel-box">
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
<h3 class="title"><img src="<?php echo $mkcms_domain;?>moban/<?php echo $mkcms_bdyun;?>/img/icon_25.png">综艺频道</h3></div>
</div>
</div>
<div class="stui-pannel stui-pannel-bg clearfix"> 
   <div class="fed-screen-list fed-layout fed-bgc-white fed-row"> 
    <dl class="fed-col-sx12 fed-col-sm6 fed-col-md4"> 
<dt>按剧情</dt> 
  <dd><a href="?m=/zongyi/list.php?cat=all&pageno=1" >全部</a></dd>
<?php
foreach ($zycat as $kcat=>$vcat){ 
$flname= $zyname[$kcat]; 
$flname2=str_replace('<i class="s-hot-icon"></i>', '', "$flname");
$flid="/zongyi/list.php?cat=".$vcat.'&pageno=1'; 
echo "<dd><a href='?m=$flid' target='_self'>$flname2</a></dd>";}?>  </dl>  
      <dl class="fed-col-sx12 fed-col-sm6 fed-col-md4"> 
        <dt>按明星</dt>
<dd><a href="?m=/zongyi/list.php?act=all&pageno=1">全部</a></dd>
<?php
foreach($zycat1 as $kcat=>$vcat){$flname=$zyname1[$kcat];
if ($vcat == "易烊千玺"||$vcat == "王俊凯"||$vcat == "黄磊"||$vcat == "黄渤"||$vcat == "吴亦凡"||$vcat == "赵薇"||$vcat == "沈腾"||$vcat == "罗志祥"||$vcat == "张艺兴"||$vcat == "潘玮柏"||$vcat == "钱枫"||$vcat == "涂磊") {
echo "";} else {
$flid='/zongyi/list.php?act='.$vcat.'&page=1';
echo "<dd><a href='?m=$flid' target='_self'>$flname</a></dd>";}}?>
      </dl>
     <dl class="fed-col-sx12 fed-col-sm6 fed-col-md4"> 
        <dt>按地区</dt>
        <dd><a href="?m=/zongyi/list.php?area=all&page=1">全部</a></dd>
<?php
foreach($zycat2 as $kcat=>$vcat){$flname=$zyname2[$kcat];
$flid='/zongyi/list.php?area='.$vcat.'&page=1';
echo "<dd><a  href='?m=$flid' target='_self'>$flname</a></dd>";}?>
      </dl>
    </div>
  </div>
<div class="stui-pannel_hd">
<div class="stui-pannel__head active bottom-line clearfix">
				<span class="more text-muted pull-right hidden-xs">千万部VIP视频免费等你观看</span>
				<ul class="nav nav-head">
<?php 
$b=(strpos($_GET['m'],'rank='));
$ye=substr($_GET['m'],$b+5);
?>
<li <?php if ($ye=="rankhot"){echo 'class="active"';}elseif($ye=="createtime" or $ye=="rankpoint"){}else{ echo 'class="active"';};?>><a href="?m=/zongyi/list.php?rank=rankhot&page=1">最近热映</a></li>
					<li <?php if ($ye=="createtime"){echo 'class="active"';}else{};?>><a href="?m=/zongyi/list.php?rank=createtime&page=1">按最更新</a></li>
				</ul>
</div>
</div>
<div class="stui-pannel_bd">
<ul class="stui-vodlist clearfix">
 <?php
$flid1=$_GET['m'];
if ($flid1==""){
$flid1='/zongyi/list.php?rank=rankhot&page=1';
}
include 'system/360.php';

foreach ($xname as $key=>$xvau){ $do=$xlist[$key]; 
$do1=$do; 
$cc="./play.php?play="; 
if ($mkcms_wei==1){
$ccb=vod.$do1;
}
else{
$ccb=$cc.$do1;	
}
echo "<li class='col-md-6 col-sm-4 col-xs-3'>
<div class='stui-vodlist__box'>
<a class='stui-vodlist__thumb lazyload' href='".$ccb."' title='".$xvau."' data-original='".$ximg[$key]."' >
<span class='play hidden-xs'></span>
                            
<span class='pic-text text-right'>".$xjishu[$key]."</span></a>
<div class='stui-vodlist__detail'>
<h4 class='title text-overflow'><a href='".$ccb."' title='".$xvau."'>".$xvau."</a></h4>
<p class='text text-overflow text-muted hidden-xs'>".$xstar[$key]."</p>
</div>
</div>
</li>"; 
						
 } ?>
</ul>
</div>
</div>
</div>
</div>
<ul class="stui-page text-center cleafix">
<?php include('system/fenye.php');?>
</ul>
</div>
<div class="row"  style="margin-top:0px"><?php echo get_ad(8)?></div></div>
<?php  include 'footer.php';?>
