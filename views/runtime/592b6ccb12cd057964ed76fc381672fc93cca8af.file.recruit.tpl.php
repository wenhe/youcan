<?php /* Smarty version Smarty-3.1.13, created on 2013-03-30 23:44:23
         compiled from "/home/wwwroot/youcan/views/templates/recruit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219871247515708570a4f81-16468988%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '592b6ccb12cd057964ed76fc381672fc93cca8af' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/recruit.tpl',
      1 => 1364655521,
      2 => 'file',
    ),
    '868f86249fc31e41664942dace9bd540c3332353' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/base/base.tpl',
      1 => 1364616550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '219871247515708570a4f81-16468988',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'path' => 0,
    'headerPath' => 0,
    'footerPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_515708572120a4_41393494',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_515708572120a4_41393494')) {function content_515708572120a4_41393494($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

	
	
	
	<h1>实现公司校园招聘</h1>
	<ul>
	<li><a href='#'>XX大学XX更新了自己的简历</a></li>
	<li><a href='#'>查看XX的简历</a></li>
	</ul>

	
	
	
		<!-- 尾部内容 -->
		<?php if (!$_smarty_tpl->tpl_vars['footerPath']->value){?>
			<?php $_smarty_tpl->tpl_vars['footerPath'] = new Smarty_variable('./base/footer.tpl', null, 0);?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footerPath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
</body>
</html>

<?php }} ?>