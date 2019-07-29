<?php
/*
第一修改者为作者
修改者:lbr-dev,预留
修改者GITHUB:lbr-dev(https://github.com/lbr-dev/),预留
修改者QQ:lbr-dev(3170482764),预留
本项目开源地址:https://github.com/kingcardconfig/kingcardconfig/
*/
include_once('public.php');
$submit = $_GET['submit'];
if ($submit == 'yes') {
$guid = $_GET['guid'];
$token = $_GET['token'];
$time=date("Y-m-d H:i:s");
$wkdtconfig='{"Time":"'.$time.'","Guid":"'.$guid.'","Token":"'.$token.'"}';
file_put_contents($configwkdtconfigfilename,$wkdtconfig);
echo "写入配置到".$configwkdtconfigfilename."成功！";
} else {
echo '<!DOCTYPE html>
<html>
<body>

<form action="submitguidandtoken.php">
<br>
<input type="hidden" name="submit" value="yes">
<br>
GUID:<br>
<input type="text" name="guid" value="">
<br>
TOKEN:<br>
<input type="text" name="token" value="">
<br><br>
<input type="submit" value="提交">
</form> 

<p></p>

</body>
</html>';
}
?>