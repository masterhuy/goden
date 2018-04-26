<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 03:34:43
         compiled from "module:ps_shoppingcart/ps_shoppingcart-product-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155185ad84693b32603-11330911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cdfb4ec01c7f108b4781d3aa4b0a15e221a8ad0' => 
    array (
      0 => 'module:ps_shoppingcart/ps_shoppingcart-product-line.tpl',
      1 => 1523948722,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '155185ad84693b32603-11330911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad84693b42008_88135583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad84693b42008_88135583')) {function content_5ad84693b42008_88135583($_smarty_tpl) {?><div class="cart-wrap clearfix">
	<a class="preview-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
		<img alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['cart_default']['url'], ENT_QUOTES, 'UTF-8');?>
" class="preview img-responsive" data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
	</a>
	<div class="description"> 
		<a href="" title="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['product']->value['name'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
			<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>

		</a>
		<div class="price-quantity">
			<span class="price">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

			</span>
		</div>
		<div class="quantity-formated">
		
			<span class="quantity">
				<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>

			</span>
		</div>
	</div>
	<span class="remove_link">
		<a class="remove-from-cart" rel="nofollow" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="remove-from-cart" title="<?php echo smartyTranslate(array('s'=>'remove from cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
" >
			<i class="fa fa-trash-o"></i>
		</a>
	</span>
</div><?php }} ?>
