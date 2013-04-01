<?php /* Smarty version Smarty-3.1.13, created on 2013-04-01 22:52:43
         compiled from "/home/wwwroot/youcan/views/templates/base/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17626953705157085085f658-43509296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fed6638224423a8f59aa23c70679724c30c405a6' => 
    array (
      0 => '/home/wwwroot/youcan/views/templates/base/header.tpl',
      1 => 1364827929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17626953705157085085f658-43509296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51570850862ff2_57392737',
  'variables' => 
  array (
    'isLogin' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51570850862ff2_57392737')) {function content_51570850862ff2_57392737($_smarty_tpl) {?><h2> 这是一个有益于学生的一个开放平台  </h2>

	<div style='text-align:right;width:40%'>
		<?php if ($_smarty_tpl->tpl_vars['isLogin']->value){?>

			
			<a href='/login.php?logout=4'>logout</a>
		<?php }else{ ?>
			<a href='/login.php'>login</a>
		<?php }?>
	</div>

	<ul>
	<li><a href='/index.php'>首页</a></li>
	<li><a href='/idear.php'>展示idear</a></li>
	<li><a href='/blog.php'>学生博客（简历）职位推荐</a></li>
	<li><a href='/realize.php'>帮助学生实现</a></li>
	<li><a href='/recruit.php'>学校招聘</a></li>
	</ul>
<?php }} ?>