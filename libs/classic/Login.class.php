<?php



/**
 * @fileName Login.class.php 
 * @describer 登录与登出。
 * @return request array()
 */


class USERLOGIN{
	// 初始化
	function __construct(){
		// session	
		session_start();

	}
	
	// 登录页面
	function issetSID(){
		return isset($_SESSION['SID']);
	}

	// 登出页面
	function unsetSession(){
		$_SESSION['SID'] = null;
		session_destroy();	
	
	}

	// 设置session 
	function setSession($val){
			$_SESSION['SID'] = $val;
	
	}

	// 注册页面
	function  register($insert){
			print_r($insert);
	
	}

}


