<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 21:40:24
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\templates\checkout\_partials\cart-detailed-actions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:322655ad94508d9ce98-20104356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31295589c382bcbfe1bbce14d2c35dd3dc5287d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\checkout\\_partials\\cart-detailed-actions.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322655ad94508d9ce98-20104356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cart' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad94508d9ce99_36569731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad94508d9ce99_36569731')) {function content_5ad94508d9ce99_36569731($_smarty_tpl) {?>
<div class="checkout cart-detailed-actions card-block">
  <?php if ($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired']) {?>
    <div class="alert alert-warning" role="alert">
      <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['minimalPurchaseRequired'], ENT_QUOTES, 'UTF-8');?>

    </div>
    <div class="text-xs-center">
      <button type="button" class="btn-default disabled button-small btn-effect" disabled><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</button>
    </div>
  <?php } else { ?>
    <div class="text-xs-center">
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['order'], ENT_QUOTES, 'UTF-8');?>
" class="btn-default button-small btn-effect"><?php echo smartyTranslate(array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl);?>
</a>
      <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayExpressCheckout'),$_smarty_tpl);?>

    </div>
  <?php }?>
</div>
<?php }} ?>
