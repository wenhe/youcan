<?php /* Smarty version Smarty-3.1.13, created on 2013-03-30 23:44:21
         compiled from "/home/wwwroot/youcan/views/templates/realize.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148182401051570855b8f730-51513324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4bf8ab1008065f0965f13a6777f384ff48d9a7e' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/realize.tpl',
      1 => 1364655427,
      2 => 'file',
    ),
    '868f86249fc31e41664942dace9bd540c3332353' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/base/base.tpl',
      1 => 1364616550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148182401051570855b8f730-51513324',
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
  'unifunc' => 'content_51570855d09dc0_26259945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51570855d09dc0_26259945')) {function content_51570855d09dc0_26259945($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

	
	
	
	<h1>帮助学生实现自己的理想</h1>
	<ul>
	<li><a href='#'>XX专业XX发表了Idear,你可能感兴趣</a></li>
	<li><a href='#'>公司关注的XX的Idear有更新</a></li>
	<li><a href='#'>公司关注的XX的Idear有评论</a></li>
	</ul>

	
	
	
		<!-- 尾部内容 -->
		<?php if (!$_smarty_tpl->tpl_vars['footerPath']->value){?>
			<?php $_smarty_tpl->tpl_vars['footerPath'] = new Smarty_variable('./base/footer.tpl', null, 0);?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footerPath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
</body>
</html>

<?php }} ?>