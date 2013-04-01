<?php

/**
* @fileName  JOB.class.php
*
*/
class JOB extends USERLOGIN{
	// request请求参数
	public $isLogin = false;
	// smarty类库地址
	private $smartyLibPath =  '/libs/smarty/Smarty.class.php';

	// 定义smarty 对象
	public $smarty = null;

	// 构造函数
	function __construct(){
		$this->smarty = $this->initSmarty();	
		$this->smarty->assign('isLogin',$this->issetSID());
	}

	// 初始化smarty模板引擎
	function initSmarty(){
		// 引入smarty
		require(APP_PATH.$this->smartyLibPath);
		return new Smarty;
	}
	// rewrite; 重定向
	private function reWrite($rURL=5){
		if(!$this->issetSID()){
			header('location:/login.php?fr='.$rURL);
			exit;
		}else{
			$isLogin = true;
		};
	}

	// 渲染首页
	function actionIndex(){
		
		$this->smarty->display('index.tpl');
	
	}

	// 渲染学生展示Idear首页
	function actionIdear(){
		$this->reWrite('idear.php');
		$this->smarty->display('idear.tpl');
	
	}

	// render 展示自己的专业技能
	function actionBlog(){
		
		$this->smarty->display('blog.tpl');
	
	}

	// 渲染公司帮助学生实现自己的idear
	function actionRealize(){
		
		$this->smarty->display('realize.tpl');
	
	}

	// 渲染校园招聘
	function actionRecruit(){
		
		$this->smarty->display('recruit.tpl');
	
	}

	// 渲染login
	function actionLogin(){
		if(!isset($_POST['userName'])||!isset($_POST['password'])){
			$this->smarty->display('login_or_out.tpl');
				
		}else{
			$this->setSession($_POST['userName']);
			header('location:/index.php');
		}
	}

	// 渲染logout
	function actionLogout(){
		$this->unsetSession();
		$this->reWrite();
	}
	// 渲染 register
	function actionRegister(){
		
		$this->register(array(
			'name'    => $_POST['name'],
			'password'=> $_POST['password'],
			'email'   => $_POST['email'],
		));
	}

}





