<?php /* Smarty version Smarty-3.1.19, created on 2018-05-06 00:28:03
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmspagebuilder\views\templates\hook\addoncountdown.tpl" */ ?>
<?php /*%%SmartyHeaderCode:133835aee845368d3d9-85710848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '262b9947aaa2edc82ca6a31ff402ef622746ca8f' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncountdown.tpl',
      1 => 1524129100,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133835aee845368d3d9-85710848',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'box_class' => 0,
    'image' => 0,
    'root_url' => 0,
    'html_content' => 0,
    'expire_time' => 0,
    'button_text' => 0,
    'button_link' => 0,
    'target' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aee84536bc1e6_63047336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aee84536bc1e6_63047336')) {function content_5aee84536bc1e6_63047336($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['addon_title']->value) {?>	
<div class="addon-title">
<h3><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['addon_title']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</h3>
</div>
<?php }?>
<div class="countdown-box<?php if ($_smarty_tpl->tpl_vars['box_class']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['box_class']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php }?> addon-title">
<?php if ($_smarty_tpl->tpl_vars['image']->value) {?>	
<div class="customs">
	<img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['root_url']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" />
</div>	
<?php }?>
<div class="content">
	<?php if ($_smarty_tpl->tpl_vars['html_content']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['html_content']->value;?>

	<?php }?>
	<div class="countdown">
		<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['expire_time']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>

	</div>
	<?php if ($_smarty_tpl->tpl_vars['button_text']->value) {?>
		<a href="<?php if ($_smarty_tpl->tpl_vars['button_link']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>#<?php }?>"<?php if ($_smarty_tpl->tpl_vars['target']->value=='new window') {?> target="_blank"<?php }?> class="btn-default btn-shopnow btn-effect"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['button_text']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>

		</a>
	<?php }?>
</div>
</div>	<?php }} ?>
