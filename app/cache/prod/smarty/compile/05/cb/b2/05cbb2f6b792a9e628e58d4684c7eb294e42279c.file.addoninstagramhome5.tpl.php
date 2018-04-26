<?php /* Smarty version Smarty-3.1.19, created on 2018-04-26 05:23:43
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\modules\jmspagebuilder\views\templates\hook\addoninstagramhome5.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33605ae19a9f03b630-03601897%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05cbb2f6b792a9e628e58d4684c7eb294e42279c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstagramhome5.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33605ae19a9f03b630-03601897',
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
  'unifunc' => 'content_5ae19a9f0feb57_71323047',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae19a9f0feb57_71323047')) {function content_5ae19a9f0feb57_71323047($_smarty_tpl) {?>
<div class="instagram-carousel">
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
