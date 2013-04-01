<?php

 /**
 * @fileName index.php 
 * @extends for class JOB
 * @describe 展示学校动态和公司动态 
 * @package Example-application
 */

require './libs/index.php'; 


$index = new JOB();
$index->actionIndex();

?>
