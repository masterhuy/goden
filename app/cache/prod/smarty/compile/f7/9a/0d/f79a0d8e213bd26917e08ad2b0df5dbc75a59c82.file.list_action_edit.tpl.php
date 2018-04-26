<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 05:22:29
         compiled from "D:\xampp\htdocs\jms_goden\admin594vuqml0\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198705ad85fd5070e56-50346009%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f79a0d8e213bd26917e08ad2b0df5dbc75a59c82' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\admin594vuqml0\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1522991718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198705ad85fd5070e56-50346009',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad85fd5088561_12075756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad85fd5088561_12075756')) {function content_5ad85fd5088561_12075756($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
