<?php /* Smarty version Smarty-3.1.13, created on 2013-03-30 22:20:28
         compiled from "/home/wwwroot/thinkphp/views/templates/idear.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8670801085156f3a116b7f8-71646917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58caf195901d7c19941227f5ae254b94c1483a96' => 
    array (
      0 => '/home/wwwroot/thinkphp/views/templates/idear.tpl',
      1 => 1364652992,
      2 => 'file',
    ),
    '62c3b5f7ae4c6e0c2ac112e59035c2b30fd34ca9' => 
    array (
      0 => '/home/wwwroot/thinkphp/views/templates/base/base.tpl',
      1 => 1364616550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8670801085156f3a116b7f8-71646917',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5156f3a12f36c9_95778921',
  'variables' => 
  array (
    'path' => 0,
    'headerPath' => 0,
    'footerPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5156f3a12f36c9_95778921')) {function content_5156f3a12f36c9_95778921($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> you can do it<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
 </title>
<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	
	

		<!--链接CSS--> 
	

	
	
		<!-- 内链CSS -->
	

	
	
		<!-- 外链javascript -->
	

	
		<!-- 内链javascrip -->
	
</head>

<body>
	

		<!-- 头部内容 -->
		<?php if (!$_smarty_tpl->tpl_vars['headerPath']->value){?>
			<?php $_smarty_tpl->tpl_vars['headerPath'] = new Smarty_variable('./base/header.tpl', null, 0);?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['headerPath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
	
	<h1>主要用于展示自己的能力、idear,及招募公司协同自己完成</h1>
	<ul>
	<li><a href='#'>展示自己的idear</a></li>
	<li><a href='#'>XX公司查看了你的idear</a></li>
	<li><a href='#'>好友，对你的idear提出了意见、评论</a></li>
	<li><a href='#'>XX公司，对你的idear提出了意见、评论</a></li>
	<li><a href='#'>XX公司为你你的Idear打分</a></li>
	</ul>

	
	
	
		<!-- 尾部内容 -->
		<?php if (!$_smarty_tpl->tpl_vars['footerPath']->value){?>
			<?php $_smarty_tpl->tpl_vars['footerPath'] = new Smarty_variable('./base/footer.tpl', null, 0);?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footerPath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
</body>
</html>

<?php }} ?>