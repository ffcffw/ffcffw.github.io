<?php
$bangdan=file_get_contents('http://www.360kan.com/');
//print_r($bangdan);
$bd='#<ul class="rank-list g-clear">[\s\S]*?</ul>#';
preg_match_all($bd, $bangdan,$bdarr);

$dybd = $bdarr[0][2];
$tvbd = $bdarr[0][0];
$zybd = $bdarr[0][1];
$dmbd = $bdarr[0][3];

$bdinfo='#<a title="(.*?)" href="(.*?)" class="name">(.*?)</a>[\s\S]+?<span class="vv">(.*?)</span>#';

preg_match_all($bdinfo, $dybd,$dybdR);
preg_match_all($bdinfo, $tvbd,$tvbdR);
preg_match_all($bdinfo, $zybd,$zybdR);
preg_match_all($bdinfo, $dmbd,$dmbdR);

//电影榜单
$bdArr['dy']['title'] =$dybdR[1];
$bdArr['dy']['url'] =$dybdR[2];
$bdArr['dy']['num'] =$dybdR[4];

//剧集榜单
$bdArr['tv']['title'] =$tvbdR[1];
$bdArr['tv']['url'] =$tvbdR[2];
$bdArr['tv']['num'] =$tvbdR[4];

//综艺榜单
$bdArr['zy']['title'] =$zybdR[1];
$bdArr['zy']['url'] =$zybdR[2];
$bdArr['zy']['num'] =$zybdR[4];

//动漫榜单
$bdArr['dm']['title'] =$dmbdR[1];
$bdArr['dm']['url'] =$dmbdR[2];
$bdArr['dm']['num'] =$dmbdR[4];