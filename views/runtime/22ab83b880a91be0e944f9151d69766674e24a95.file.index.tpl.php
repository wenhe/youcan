<?php /* Smarty version Smarty-3.1.13, created on 2013-03-30 23:30:07
         compiled from "/home/wwwroot/thinkphp/views/templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:180062895851565745dc03b5-97785564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22ab83b880a91be0e944f9151d69766674e24a95' => 
    array (
      0 => '/home/wwwroot/thinkphp/views/templates/index.tpl',
      1 => 1364656551,
      2 => 'file',
    ),
    '62c3b5f7ae4c6e0c2ac112e59035c2b30fd34ca9' => 
    array (
      0 => '/home/wwwroot/thinkphp/views/templates/base/base.tpl',
      1 => 1364616550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180062895851565745dc03b5-97785564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51565745e73165_12444033',
  'variables' => 
  array (
    'path' => 0,
    'headerPath' => 0,
    'footerPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51565745e73165_12444033')) {function content_51565745e73165_12444033($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

	
	
	
<h1>展示公司及学生简历更新动态</h1>
	<ul>
	<li><a href=''>展示idear动态</a></li>
	<li><a href=''>学生博客（简历）动态</a></li>
	<li><a href=''>职位推荐</a></li>
	<li><a href=''>公司动态</a></li>
	<li><a href=''>学校招聘</a></li>
	</ul>

	
	
	
		<!-- 尾部内容 -->
		<?php if (!$_smarty_tpl->tpl_vars['footerPath']->value){?>
			<?php $_smarty_tpl->tpl_vars['footerPath'] = new Smarty_variable('./base/footer.tpl', null, 0);?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footerPath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
</body>
</html>

<?php }} ?>