<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 00:26:06
         compiled from "D:\xamppp\htdocs\jms_goden\modules\jmspagebuilder\views\templates\hook\addoninstantshop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:243845b024a5e9f75e4-23629880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dba5059de11cabea9b1ee8d5c6f4072043db3027' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoninstantshop.tpl',
      1 => 1526523104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243845b024a5e9f75e4-23629880',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addon_title' => 0,
    'addon_desc' => 0,
    'showall' => 0,
    'categories' => 0,
    'k' => 0,
    'category' => 0,
    'order_by' => 0,
    'order_way' => 0,
    'products' => 0,
    'product' => 0,
    'loadmore_type' => 0,
    'limit' => 0,
    'load' => 0,
    'total_config' => 0,
    'col_class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b024a5ea39c77_30871986',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b024a5ea39c77_30871986')) {function content_5b024a5ea39c77_30871986($_smarty_tpl) {?>
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
<div class="instant-tabs">
	<ul class="nav-tab" role="tablist">
		<?php if ($_smarty_tpl->tpl_vars['showall']->value) {?>
		<li ><a class="instant-btn" data-id="0">All</a></li>					
		<?php }?>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['category']->key;
?>
			<li <?php if (!$_smarty_tpl->tpl_vars['showall']->value&&$_smarty_tpl->tpl_vars['k']->value==0) {?>class="active"<?php }?>><a class="instant-btn" data-id="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['id_category'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['name'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></li>					
		<?php } ?>	
	</ul>
	<div class="instantshop-filters btn-group">
		<a class="dropdown-toggle" data-toggle="dropdown"><?php echo smartyTranslate(array('s'=>'Filter','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
<i class="fa fa-angle-down"></i></a>
		<div class="dropdown-menu" role="menu">
			<div class="row">
				<div class="filter col-sm-6 col-md-6 col-xs-12">
					<label><?php echo smartyTranslate(array('s'=>'Sort By','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</label>
					<ul name="instantshop-orderby" id="instantshop-s-orderby">
						<li data-val="date_add" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='date_add') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Date Add','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
						<li data-val="date_upd" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='date_upd') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Date Update','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
						<li data-val="price" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='price') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Price','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
						<li data-val="position" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='position') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Position','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
						<li data-val="name" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='name') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Name','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
						<li data-val="id_product" class="<?php if ($_smarty_tpl->tpl_vars['order_by']->value=='id_product') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Product ID','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
					</ul>
				</div>
				<div class="filter col-sm-6 col-md-6 col-xs-12">
					<label><?php echo smartyTranslate(array('s'=>'Sort Way','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</label>
					<ul name="instantshop-orderway" id="instantshop-s-orderway">
						<li data-val="DESC" class="<?php if ($_smarty_tpl->tpl_vars['order_way']->value=='DESC') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Desc','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>
						<li data-val="ASC" class="<?php if ($_smarty_tpl->tpl_vars['order_way']->value=='ASC') {?>active<?php }?>"><?php echo smartyTranslate(array('s'=>'Asc','mod'=>'jmspagebuilder'),$_smarty_tpl);?>
</li>		
					</ul>
				</div>
			</div>	
		</div>	
	</div>	
</div>
<div id="instant-products" class="instant-products">
<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>				
	<div class="item">
		<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

	</div>	
<?php } ?>
</div>
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
<script type="text/javascript">
	var instantshow_limit = <?php if ($_smarty_tpl->tpl_vars['limit']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['limit']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>8<?php }?>;
	var instantshow_load = <?php if ($_smarty_tpl->tpl_vars['load']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['load']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;	
</script>

<input type="hidden" name="instantshop_id_category" id="instantshop-id-category" value="0" />
<input type="hidden" name="instantshop_loadmore_type" id="instantshop-loadmore-type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loadmore_type']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_limit" id="instantshop-limit" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['limit']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_load" id="instantshop-load" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['load']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_total" id="instantshop-total" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['total_config']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_col_class" id="instantshop-col-class" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['col_class']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_orderby" id="instantshop-orderby" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_by']->value, ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="instantshop_orderway" id="instantshop-orderway" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['order_way']->value, ENT_QUOTES, 'UTF-8');?>
" /><?php }} ?>
