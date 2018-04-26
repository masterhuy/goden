<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 21:49:05
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\templates\_partials\form-errors.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208025ad94711e66ea9-37435658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6229db63b1d98e1e1b2cd64e5a4929a45dc49b41' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\form-errors.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208025ad94711e66ea9-37435658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad94711e66ea3_34539994',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad94711e66ea3_34539994')) {function content_5ad94711e66ea3_34539994($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php } ?>
    </ul>
  </div>
<?php }?>
<?php }} ?>
