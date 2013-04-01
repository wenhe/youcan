<?php

define('APP_PATH','/home/wwwroot/youcan');
set_include_path(APP_PATH.'/libs/classic');



require_once('Login.class.php');

$signIn =  new USERLOGIN();



require_once('JOB.class.php');

?>
