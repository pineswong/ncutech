<?php
/**
 * checkSignature.php
 * @authors Pines Wong (pineswong@163.com)
 * @date    2015-08-06 22:10:51
 * @version $Id$
 */

	// 定义Token
	define('TOKEN', 'ncutech');

	// 验证函数
	function checkSignature($signature, $timestamp, $nonce) {
		// 获取数据
		$token = TOKEN;

		// 处理数据
		$tmpArr = array($token, $timestamp, $nonce);
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode('', $tmpArr);
		$tmpStr = sha1($tmpStr);
/*
		echo $tmpStr;
		echo '<br />';
		echo $signature;
*/
		// 处理返回
		if ($tmpStr != $signature) {
			return false;
		}

		return true;
	}
