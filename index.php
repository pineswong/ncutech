<?php 
	// 定义Token
	define('TOKEN', 'ncutech');

	// 验证函数
	function checkSignature($signature, $timestamp, $nonce) {
		// 获取数据
		$token = TOKEN;

		// 处理数据
		$tmpArr = array($token, $timestamp, $nonce);
		$tmpArr = sort($tmpArr, SORT_STRING);
		$tmpStr = implode('', $tmpArr);
		$tmpStr = sha1($tmpStr);

		// 处理返回
		if ($tmpStr != $signature) {
			return false;
		}

		return true;
	}

	// 获取数据
	$signature = $_GET['signature'];
	$timestamp = $_GET['timestamp'];
	$nonce = $_GET['nonce'];
	$echostr = $_GET['echostr'];

	// 验证Token
	if (checkSignature($signature, $timestamp, $nonce)) {
		echo $echostr;
	}

?>
