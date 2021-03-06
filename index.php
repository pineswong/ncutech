<?php 
/**
 * index.php
 * @authors Pines Wong (pineswong@163.com)
 * @date    2015-08-06 22:10:51
 * @version $Id$
 */

	// 引入函数
	require './checkSignature.php';

	// 获取数据
	$signature = $_GET['signature'];
	$timestamp = $_GET['timestamp'];
	$nonce = $_GET['nonce'];
	$echostr = $_GET['echostr'];

	// 验证Token
	if (checkSignature($signature, $timestamp, $nonce)) {
		echo $echostr;
	}
