<?php
header('content-type: text/html; charset=utf-8');

$word=$_POST["name"];
echo $word;
echo '<br>';
$bool=move_uploaded_file($_FILES['uploadfile']['tmp_name'],__DIR__.'/2.png');
echo "上传成功";