<?php
/**
 * 实例描述：把本地文件上传到FTP服务器上
 */
$curlobj = curl_init();
$localfile = 'ftp01.php';
$fp = fopen($localfile, 'r');

curl_setopt($curlobj, CURLOPT_URL, "ftp://192.168.1.100/ftp01_uploaded.php");
curl_setopt($curlobj, CURLOPT_HEADER, 0);
curl_setopt($curlobj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlobj, CURLOPT_TIMEOUT, 300); // times out after 300s
curl_setopt($curlobj, CURLOPT_USERPWD, "peter.zhou:123456");//FTP用户名：密码

curl_setopt($curlobj, CURLOPT_UPLOAD, 1);
curl_setopt($curlobj, CURLOPT_INFILE, $fp);
curl_setopt($curlobj, CURLOPT_INFILESIZE, filesize($localfile));
$rtn = curl_exec($curlobj);
fclose($fp);
if(!curl_errno($curlobj)){
    echo "Uploaded successfully.";
} else {
    echo 'Curl error: ' . curl_error($curlobj);
}
curl_close($curlobj);
?>