<?php

/**
 * @fileName login.php 
*/

require './libs/index.php'; 

$jobs = new JOB();



 /**
 * @extends for class JOB
 * @describe 登录页面 
 * @package Example-application
 */



if(isset($_GET['login']) || (!isset($_GET['logout']) && !isset($_GET['register'])) ){

	// 如果 login 被设置或者 logout和register 都没有被设置时
	$jobs->actionLogin();

}







 /**
 * @extends for class JOB
 * @describe 展示学校动态和公司动态 
 * @package Example-application
 */

if(isset($_GET['logout']) && $_GET['logout']==4){
	$jobs->actionLogout();
}




 /**
 * @extends for class JOB
 * @describe 学生注册 
 * @package Example-application
 */

if(isset($_GET['register']) && $_GET['register']==4){
	$jobs->actionRegister();
}
