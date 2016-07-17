<?php
/**
 * @Author: y
 * @Date:   2016-06-29 17:00:59
 * @Last Modified by:   y
 * @Last Modified time: 2016-06-29 22:32:17
 */

// 自动加载的函数


function s2($array){
	dump($array, 1, "<pre>", 0);
}


function node_merge($node, $access=null, $pid = 0){
	$arr = array();

	foreach ($node as $key => $v) {
		if(is_array($access)){
			$v['access'] = in_array($v['id'], $access) ? 1 : 0;

		}
		if($v['pid'] == $pid){
			$v['child'] = node_merge($node, $access, $v['id']);
			$arr[] = $v;
		}
	}
	return $arr;
}


//curl函数的封装
function request($url, $https=true, $method="get", $data=null){
	//1.初始化url
	$ch = curl_init($url);
	//2.设置相关的参数
	//字符串不能直接输出，进行一个变量的存储
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//判断是否为https 请求
	if($https === true){
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	}
	//3.发送请求
	$str = curl_exec($ch);
	curl_close($ch);
	return $str;
}     

  















