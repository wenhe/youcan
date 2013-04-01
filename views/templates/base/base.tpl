<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><{block name='title'}> you can do it<{$path}><{/block}> </title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<{**!-- 
		CSS
			链接CSS 	
			内链CSS
		JS 
			外链javascript
			内链javascript
	
	--**}>
	<{block name='linkcss'}>

		<!--链接CSS--> 
	<{/block}>

	<{block name='innerpagecss'}>
	
		<!-- 内链CSS -->
	<{/block}>

	<{block name='srcjavascript'}>
	
		<!-- 外链javascript -->
	<{/block}>

	<{block name='innerjavascript'}>
		<!-- 内链javascrip -->
	<{/block}>
</head>

<body>
	<{block name='header'}>

		<!-- 头部内容 -->
		<{if !$headerPath}>
			<{$headerPath = './base/header.tpl'}>
		<{/if}>
		<{include file= $headerPath}>
	<{/block}>
	
	<{block name='body'}>
	
		<!-- 主体内容 -->
	<{/block}>
	
	<{block name='footer'}>
	
		<!-- 尾部内容 -->
		<{if !$footerPath}>
			<{$footerPath = './base/footer.tpl'}>
		<{/if}>
		<{include file=$footerPath}>
	<{/block}>
	
</body>
</html>

