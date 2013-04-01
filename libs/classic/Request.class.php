<?php

/**
 * @fileName Request.class.php 
 * @describer 整合请求的数据，以Array的格式分发。
 * @return request array()
 */

 class REQUEST{
 	
 	
	function get(){
		$outputArray = array();	
		// foreach 单列出POST的数据
		foreach($_GET as $key => $item ){
			$outputArray[$key] = $item;

		}
		return $outputArray;
	
	}
	
	function post(){
		$outputArray = array();	
		// foreach 单列出POST的数据
		foreach($_POST as $key => $item ){
			$outputArray[$key] = $item;

		}
		return $outputArray;
		
	}
 
 }


 $req = new REQUEST();

	var_dump($req -> get());
