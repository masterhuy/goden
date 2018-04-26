<?php /* Smarty version Smarty-3.1.19, created on 2018-04-20 05:23:36
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\modules\jmspagebuilder\views\templates\hook\addonspace.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80065ad9b198c115d6-72923196%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bd2a702c969e5888814c0a00c512e40e112ae8f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addonspace.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80065ad9b198c115d6-72923196',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'space_class' => 0,
    'spacegap' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad9b198c63665_75268982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad9b198c63665_75268982')) {function content_5ad9b198c63665_75268982($_smarty_tpl) {?>
<div class="jms-empty-space clearfix<?php if (isset($_smarty_tpl->tpl_vars['space_class']->value)&&$_smarty_tpl->tpl_vars['space_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['space_class']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" style="margin-bottom:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spacegap']->value, ENT_QUOTES, 'UTF-8');?>
px;"></div>
<?php }} ?>
