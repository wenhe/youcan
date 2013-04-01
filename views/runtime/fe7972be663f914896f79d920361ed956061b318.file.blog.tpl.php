<?php /* Smarty version Smarty-3.1.13, created on 2013-03-30 23:44:20
         compiled from "/home/wwwroot/youcan/views/templates/blog.tpl" */ ?>
<?php /*%%SmartyHeaderCode:823561713515708547f6bb9-06016973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe7972be663f914896f79d920361ed956061b318' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/blog.tpl',
      1 => 1364656888,
      2 => 'file',
    ),
    '868f86249fc31e41664942dace9bd540c3332353' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/base/base.tpl',
      1 => 1364616550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '823561713515708547f6bb9-06016973',
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
  'unifunc' => 'content_51570854967661_59078267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51570854967661_59078267')) {function content_51570854967661_59078267($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

	
	
	
	<h1>全面的展示自己让公司了解自己的blog</h1>
	<ul>
	<li><a href='#'>为学生推荐企业、公司</a></li>
	<li>
		<ul>
			<li> 好友动态 \  同校好友</a></li>
			<li><a href='#'>好友XX关注了XX企业</a></li>
			<li><a href='#'>好友XX投递了XX企业</a></li>
		</ul>
	</li>
	<li>
		<ul>
			<li> 个人动态 </a></li>
			<li><a href='#'>你XX关注了XX企业</a></li>
			<li><a href='#'>你投递了XX企业</a></li>
			<li><a href='#'>XX企业查看了你的简历</a></li>
		</ul>
	</li>
	<li>
		<ul>
			<li> 公司动态 </a></li>
			<li><a href='#'>XX企业新添XX职位(人事变动、项目开发)</a></li>
			<li><a href='#'>XX企业更新了XX招聘信息</a></li>
		</ul>
	</li>
	</ul>

	
	
	
		<!-- 尾部内容 -->
		<?php if (!$_smarty_tpl->tpl_vars['footerPath']->value){?>
			<?php $_smarty_tpl->tpl_vars['footerPath'] = new Smarty_variable('./base/footer.tpl', null, 0);?>
		<?php }?>
		<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['footerPath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
	
</body>
</html>

<?php }} ?>