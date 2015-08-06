<?php 

	// echo 'NcuTech' 
	// 引入函数
	require './checkSignature.php';


	// 获取数据
	$signature = $_GET['signature'];
	$timestamp = $_GET['timestamp'];
	$nonce = $_GET['nonce'];
	$echostr = $_GET['echostr'];

	// 验证Token
	if (checkSignature()) {
		echo $echostr;	
	}

?>
