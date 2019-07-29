<?php
/*
第一修改者为作者
修改者:lbr-dev,预留
修改者GITHUB:lbr-dev(https://github.com/lbr-dev/),预留
修改者QQ:lbr-dev(3170482764),预留
本项目开源地址:https://github.com/kingcardconfig/kingcardconfig/
*/
include_once('public.php');
if ($configcronlogonoroff == 'on') {
if (wcltfapi($configcronlogfilename) == '1') {
$wkdtconfig=file_get_contents($configwkdtconfigfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig),getconfigtoken($wkdtconfig),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig);
echo $configcronsuccessmessage;
} else {
$wkdtconfig1=gethtml($configwkdtconfig1url,$configwkdtconfig1ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig1),getconfigtoken($wkdtconfig1),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig1);
echo $configcronsuccessmessage;
} else {
$wkdtconfig2=gethtml($configwkdtconfig2url,$configwkdtconfig2ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig2),getconfigtoken($wkdtconfig2),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig2);
echo $configcronsuccessmessage;
} else {
$wkdtconfig3=gethtml($configwkdtconfig3url,$configwkdtconfig3ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig3),getconfigtoken($wkdtconfig3),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig3);
echo $configcronsuccessmessage;
} else {
$wkdtconfig4=gethtml($configwkdtconfig4url,$configwkdtconfig4ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig4),getconfigtoken($wkdtconfig4),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig4);
echo $configcronsuccessmessage;
} else {
$wkdtconfig5=gethtml($configwkdtconfig5url,$configwkdtconfig5ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig5),getconfigtoken($wkdtconfig5),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig5);
echo $configcronsuccessmessage;
} else {
$time=date("Y-m-d H:i:s");
$notwkdtconfig='{"Time":"'.$time.'","Guid":"not king card config !","Token":"not king card config !"}';
file_put_contents($configwkdtconfigfilename,$notwkdtconfig);
echo $configcronsuccessmessage;
}
}
}
}
}
}
} else {
echo "写入任务日志到".$configcronlogfilename."失败！";
}
} else {
$wkdtconfig=file_get_contents($configwkdtconfigfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig),getconfigtoken($wkdtconfig),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig);
echo $configcronsuccessmessage;
} else {
$wkdtconfig1=gethtml($configwkdtconfig1url,$configwkdtconfig1ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig1),getconfigtoken($wkdtconfig1),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig1);
echo $configcronsuccessmessage;
} else {
$wkdtconfig2=gethtml($configwkdtconfig2url,$configwkdtconfig2ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig2),getconfigtoken($wkdtconfig2),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig2);
echo $configcronsuccessmessage;
} else {
$wkdtconfig3=gethtml($configwkdtconfig3url,$configwkdtconfig3ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig3),getconfigtoken($wkdtconfig3),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig3);
echo $configcronsuccessmessage;
} else {
$wkdtconfig4=gethtml($configwkdtconfig4url,$configwkdtconfig4ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig4),getconfigtoken($wkdtconfig4),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig4);
echo $configcronsuccessmessage;
} else {
$wkdtconfig5=gethtml($configwkdtconfig5url,$configwkdtconfig5ua,$configtimeout,$configisgziphtmlfilename);
if (checkguidandtoken($configcheckguidandtokenurl,$configcheckguidandtokenproxyip,$configcheckguidandtokenproxyport,$configcheckguidandtokenua,getconfigguid($wkdtconfig5),getconfigtoken($wkdtconfig5),$configcheckguidandtokenhtml,$configtimeout,$configisgziphtmlfilename) == '1') {
file_put_contents($configwkdtconfigfilename,$wkdtconfig5);
echo $configcronsuccessmessage;
} else {
$time=date("Y-m-d H:i:s");
$notwkdtconfig='{"Time":"'.$time.'","Guid":"not king card config !","Token":"not king card config !"}';
file_put_contents($configwkdtconfigfilename,$notwkdtconfig);
echo $configcronsuccessmessage;
}
}
}
}
}
}
}
?>