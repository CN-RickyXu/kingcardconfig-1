<?php
/*
第一修改者为作者
修改者:半条咸鱼,lbr-dev,预留
修改者GITHUB:半条咸鱼(https://github.com/Halfsaltedfish/),lbr-dev(https://github.com/lbr-dev/),预留
修改者QQ:半条咸鱼(379369845),lbr-dev(3170482764),预留
本项目开源地址:https://github.com/kingcardconfig/kingcardconfig/
*/
include_once('public.php');

$config = file_get_contents('php://input');

// check for required fields
if (strlen($config) > 50) {
  $result = file_put_contents($configwkdtconfigfilename,$config);
    // check result
  if ($result>50) {
        // successfully put into file
    $response["success"] = 1;
    $response["message"] = "Config successfully created.";

        // echoing JSON response
    echo json_encode($response);
  } else {
        // failed to insert row
    $response["success"] = 0;
    $response["message"] = "put failed";

        // echoing JSON response
    echo json_encode($response);
  }
} else {
    // required field is missing
  $response["success"] = 0;
  $response["message"] = "Required field(s) is missing";

    // echoing JSON response
  echo json_encode($response);
}
?>