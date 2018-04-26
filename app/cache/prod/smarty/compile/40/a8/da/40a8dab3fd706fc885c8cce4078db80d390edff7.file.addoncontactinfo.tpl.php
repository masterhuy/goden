<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 03:34:43
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\modules\jmspagebuilder\views\templates\hook\addoncontactinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29655ad84693c14f39-99594717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40a8dab3fd706fc885c8cce4078db80d390edff7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncontactinfo.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29655ad84693c14f39-99594717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'box_class' => 0,
    'ci_address' => 0,
    'phone' => 0,
    'email' => 0,
    'opentime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad84693c304c4_86121803',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad84693c304c4_86121803')) {function content_5ad84693c304c4_86121803($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>
<div class="addon-title">
	<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['addon_desc']->value) {?>
<p class="addon-desc"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_desc']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</p>
<?php }?>
<div class="contact-info<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?>">
	<ul>
       <?php if ($_smarty_tpl->tpl_vars['ci_address']->value!='') {?><li><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['ci_address']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
       <?php if ($_smarty_tpl->tpl_vars['phone']->value!='') {?><li><span><?php echo smartyTranslate(array('s'=>'Tel: ','d'=>'Shop.Theme'),$_smarty_tpl);?>
 </span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['phone']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['email']->value!='') {?><li><span><?php echo smartyTranslate(array('s'=>'Email: ','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['email']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
	   <?php if ($_smarty_tpl->tpl_vars['opentime']->value!='') {?><li><span><?php echo smartyTranslate(array('s'=>'Open: ','d'=>'Shop.Theme'),$_smarty_tpl);?>
 </span><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['opentime']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</li><?php }?>
    </ul>
</div>
<?php }} ?>
