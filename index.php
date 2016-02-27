<?php
	    header("Content-type: text/html; charset=utf-8");
		require_once "./framework/require_list.php";
		$name=$_COOKIE["name"];
		if($name==null){
			// $smarty->assign("test","<a href="."login.html"." class="."login".">登录</a>
			// 						<a href="."resign.php"." class="."resign".">注册</a>");
			$test=array('test'=>"<a href="."login.php"." class="."login".">登录</a>
								<a href="."resign.php"." class="."resign".">注册</a>");
			$smarty->assign($test);
		}
		else{
			$smarty->assign("test","<a href="."exit.php"." class="."login".">退出登录</a>");
		}
	$smarty->display("index.tpl");
?>