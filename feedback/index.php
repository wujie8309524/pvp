<?php
$data = file_get_contents('php://input');
$data = json_decode($data,true);

$student = $data['aid'];
$content= $data['content'];

//log日志文件
$txt = './'.date('Y-m-d').'.txt';
//要写入的内容
$addLogStr = date('Y-m-d H:i:s')."=>ID ".$student."内容:".base64_decode($content)."\n";
//打开资源并将光标设置为末尾
$fp = fopen($txt,"a+");
//写入内容
fwrite($fp,$addLogStr);
//关闭资源
fclose($fp);

echo $content;
