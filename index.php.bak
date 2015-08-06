<?php 
/**
 * index.php
 * @authors Pines Wong (pineswong@163.com)
 * @date    2015-08-06 22:10:51
 * @version $Id$
 */

	// 定义Token
	define('TOKEN', 'ncutech');

	$token = TOKEN;

	// 获取数据
	$signature = $_GET['signature'];
	$timestamp = $_GET['timestamp'];
	$nonce = $_GET['nonce'];
	$echostr = $_GET['echostr'];


	// 处理数据
	$tmpArr = array($token, $timestamp, $nonce);
	sort($tmpArr, SORT_STRING);
	// print_r($tmpArr);
	$tmpStr = implode($tmpArr);
	$tmpStr = sha1($tmpStr);

	// echo $tmpStr;
	// echo '<br />';
	// echo $signature;

	// 处理返回
	if ($tmpStr == $signature) {
		echo $echostr;
	}