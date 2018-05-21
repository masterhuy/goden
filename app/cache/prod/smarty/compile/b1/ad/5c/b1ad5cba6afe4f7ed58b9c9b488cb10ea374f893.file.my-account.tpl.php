<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 00:25:52
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmswishlist\views\templates\hook\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240905b024a5045a902-15749749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b1ad5cba6afe4f7ed58b9c9b488cb10ea374f893' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmswishlist\\views\\templates\\hook\\my-account.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240905b024a5045a902-15749749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b024a50462605_42994645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b024a50462605_42994645')) {function content_5b024a50462605_42994645($_smarty_tpl) {?>

<!-- MODULE WishList -->
<a class=" wishlist_top lnk_wishlist col-lg-4 col-md-6 col-sm-6 col-xs-12" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getModuleLink('jmswishlist','mywishlist',array(),true),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','d'=>'Shop.Theme'),$_smarty_tpl);?>
">
  <span class="link-item">
		<i class="fa fa-heart"></i>
		<?php echo smartyTranslate(array('s'=>'My wishlists','d'=>'Shop.Theme.CustomerAccount'),$_smarty_tpl);?>

	</span>
</a>
<!-- END : MODULE WishList --><?php }} ?>
