<?php /* Smarty version Smarty-3.1.19, created on 2018-04-25 23:46:28
         compiled from "D:\xampp\htdocs\jms_goden\modules\jmstestimonials\views\templates\hook\path.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157745ae14b94d57a04-87225428%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca182f8c81af69a1ffb926edb32dd37bcaba001' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\modules\\jmstestimonials\\views\\templates\\hook\\path.tpl',
      1 => 1523458732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157745ae14b94d57a04-87225428',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'view' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae14b94dd4a25_71540929',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae14b94dd4a25_71540929')) {function content_5ae14b94dd4a25_71540929($_smarty_tpl) {?>
<style>
.jms-blog-nav{
	margin-bottom:10px;
}
.jms-blog-menu{
	position: relative;
	margin-bottom: 20px;
	padding: 0 10px;
	border: solid 1px #d3d8db;
	background-color: #fff;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	list-style: none;
}
.jms-blog-menu li{
	float:left;
}

.jms-blog-menu li:hover,.jms-blog-menu li.active {
	background: #333;
}

.jms-blog-menu li a{
	color: #757575;
    display: block;
    padding: 10px 20px;
    text-decoration: none !important;
}
.jms-blog-menu li:hover a,.jms-blog-menu li.active a{
	color: #fff;
	text-dicoration:none;
}
</style>
<div class="jms-blog-nav">
	<ul class="jms-blog-menu clearfix">
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value=='items') {?>active<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=jmstestimonials&view=items">Items</a>
		</li>
		<li class="<?php if ($_smarty_tpl->tpl_vars['view']->value=='config') {?>active<?php }?>">
			<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules'),'html','UTF-8');?>
&configure=jmstestimonials&view=config">Config</a>
		</li>
	</ul>
</div><?php }} ?>
