<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:53:56
         compiled from "D:\xamppp\htdocs\jms_goden\modules\jmspagebuilder\views\templates\hook\addoninstantshop-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:47455b0242d4c2cc48-14033625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bc0a48a8f4aa4b95a0d5276292d5ead87c12292' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstantshop-content.tpl',
      1 => 1523458732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '47455b0242d4c2cc48-14033625',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'col_class' => 0,
    'product' => 0,
    'loadmore_type' => 0,
    'limit' => 0,
    'load' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b0242d4c7ae40_43638626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b0242d4c7ae40_43638626')) {function content_5b0242d4c7ae40_43638626($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>				
	<div class="item col-sm-6 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_class']->value, ENT_QUOTES, 'UTF-8');?>
 col-xs-12">
		<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

	</div>	
<?php } ?>
<span class="instantshop-loading"></span>
<div class="instantshop-loadmore">
<?php if ($_smarty_tpl->tpl_vars['loadmore_type']->value=='infinite') {?>
<button id="btn" class="load-btn btn-default"><?php echo smartyTranslate(array('s'=>'Scroll to Load','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</button>
<?php } else { ?>
<button id="btn" class="load-btn btn-default"><?php echo smartyTranslate(array('s'=>'Load More','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</button>
<?php }?>
</div>
<script>	
jQuery(function ($) {
<?php if ($_smarty_tpl->tpl_vars['loadmore_type']->value=='infinite') {?>
    $("#instant-products").loadMore({
        selector: 'div.item',
        loadBtn: '#btn',
		limit: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
',
        load: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['load']->value, ENT_QUOTES, 'UTF-8');?>
',
    });
<?php } else { ?>
	$("#instant-products").loadMore({
            selector: 'div.item',
            loadBtn: '#btn',
            limit: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
',
            load: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['load']->value, ENT_QUOTES, 'UTF-8');?>
',
            animate: true,
            animateIn: 'fadeIn'
    });
<?php }?>
});
</script><?php }} ?>
