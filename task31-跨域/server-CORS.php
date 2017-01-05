<?php
		 //设置php头部信息，表示允许a.com访问
		header('Access-Control-Allow-Origin:http://a.com');
		$arr = array('小明'=>'18','小红'=>'20','小美'=>'22');
		$callback = $_GET["callback"];

		echo $callback.':'.$arr[$callback];
?>