<?php /* Smarty version Smarty-3.1.19, created on 2018-05-06 22:03:24
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmspagebuilder\views\templates\hook\addoninstagram_h5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216945aefb3ece2ac88-91573275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cfa4756b6f5f918478733254dca97c646fcdf06' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagram_h5.tpl',
      1 => 1524803886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216945aefb3ece2ac88-91573275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'insta_images' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aefb3ece2ac89_31433868',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aefb3ece2ac89_31433868')) {function content_5aefb3ece2ac89_31433868($_smarty_tpl) {?>
<div class="addon-title">
	<h3>Follow Us On Instagram</h3>
	<p>@Goden Store</p>
</div>
<div class="instagram-images">
	<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['insta_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value) {
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
		<a class="grouped_elements" data-fancybox-group="gallery" href="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img']->value['url'];?>
" alt="<?php echo smartyTranslate(array('s'=>'Instagram Image','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
"/>
		</a>
	<?php } ?>
</div>
<?php }} ?>
