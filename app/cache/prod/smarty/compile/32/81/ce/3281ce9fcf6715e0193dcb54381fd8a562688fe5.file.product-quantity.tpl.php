<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:58:22
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\catalog\_partials\product-quantity.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13095b0243de0a7970-03268331%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3281ce9fcf6715e0193dcb54381fd8a562688fe5' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\catalog\\_partials\\product-quantity.tpl',
      1 => 1526869623,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13095b0243de0a7970-03268331',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0243de0a7977_54051182',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0243de0a7977_54051182')) {function content_5b0243de0a7977_54051182($_smarty_tpl) {?><li id="product-quantity" data-product="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['product']->value['embedded_attributes']), ENT_QUOTES, 'UTF-8');?>
">
    <label class="label" style="padding-right: 0"><?php echo smartyTranslate(array('s'=>'Quantity:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</label>
    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</span>
    <span <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']>1) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Item','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
    <span <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity']==1) {?> style="display: none;"<?php }?>><?php echo smartyTranslate(array('s'=>'Items','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</span>
</li>
<?php }} ?>
