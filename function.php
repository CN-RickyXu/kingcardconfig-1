<?php
/*
第一修改者为作者
修改者:lbr-dev,预留
修改者GITHUB:lbr-dev(https://github.com/lbr-dev/),预留
修改者QQ:lbr-dev(3170482764),预留
本项目开源地址:https://github.com/kingcardconfig/kingcardconfig/
*/

include_once('mainfunction.php');

function gethtml($url,$ua,$timeout,$isgziphtmlfilename){
$header = array("User-Agent:".$ua."");
$isgziphtml =getwebpages($url, $header, $timeout);
if (isgziphtmlapi($isgziphtmlfilename,$isgziphtml) == '1') {
$html=gzdecodeapi($isgziphtml);
} else {
$html=$isgziphtml;
}
return $html;
}
function checkguidandtoken($url,$proxyip,$proxyport,$ua,$guid,$token,$checkguidandtokenhtml,$timeout,$isgziphtmlfilename){
$header = array("User-Agent:".$ua."","Q-GUID:".$guid."","Q-Token:".$token."");
$isgziphtml =checktheproxyserver($url,$proxyip,$proxyport, $header, $timeout);
if (isgziphtmlapi($isgziphtmlfilename,$isgziphtml) == '1') {
$html=gzdecodeapi($isgziphtml);
} else {
$html=$isgziphtml;
}
if ($html == $checkguidandtokenhtml) {
$return="1";
} else {
$return="0";
}
return $return;
}
function getconfigguid($config){
$guid= get_between($config, '"Guid":"', '","Token"');
return $guid;
}
function getconfigtoken($config){
$token= get_between($config, '"Token":"', '"}');
return $token;
}
function getconfigtime($config){
$time= get_between($config, '"Time":"', '","Guid"');
return $time;
}
?>