<?php /* Smarty version Smarty-3.1.19, created on 2018-05-06 00:29:09
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmspagebuilder\views\templates\hook\addonproducttab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198585aee8495bfbe66-51877863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe69840fdcb8b2d3252e004c5dbde9e2fb05fff' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addonproducttab.tpl',
      1 => 1524468243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198585aee8495bfbe66-51877863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cols' => 0,
    'cols_md' => 0,
    'cols_sm' => 0,
    'cols_xs' => 0,
    'navigation' => 0,
    'pagination' => 0,
    'autoplay' => 0,
    'addon_title' => 0,
    'addon_desc' => 0,
    'config' => 0,
    'cf' => 0,
    'featured_products' => 0,
    'products_slide' => 0,
    'product' => 0,
    'new_products' => 0,
    'topseller_products' => 0,
    'special_products' => 0,
    'onsale_products' => 0,
    'urls' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aee8495d0d5a2_24116716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aee8495d0d5a2_24116716')) {function content_5aee8495d0d5a2_24116716($_smarty_tpl) {?>
<script type="text/javascript">
var tab_items = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;
var tab_itemsDesktop = <?php if ($_smarty_tpl->tpl_vars['cols']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>4<?php }?>;
var tab_itemsDesktopSmall = <?php if ($_smarty_tpl->tpl_vars['cols_md']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_md']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>3<?php }?>;
var tab_itemsTablet = <?php if ($_smarty_tpl->tpl_vars['cols_sm']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_sm']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>2<?php }?>;
var tab_itemsMobile = <?php if ($_smarty_tpl->tpl_vars['cols_xs']->value) {?><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['cols_xs']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>1<?php }?>;
var p_nav_tab = <?php if ($_smarty_tpl->tpl_vars['navigation']->value==1) {?>true<?php } else { ?>false<?php }?>;
var p_pag_tab = <?php if ($_smarty_tpl->tpl_vars['pagination']->value==1) {?>true<?php } else { ?>false<?php }?>;
var auto_play_tab = <?php if ($_smarty_tpl->tpl_vars['autoplay']->value==1) {?>true<?php } else { ?>false<?php }?>;
</script>
</script>
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
<div class="jms-tab">
	<ul class="nav" role="tablist">
	<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable(0, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_new']=='1') {?>
			<li class="nav-item"><a class="button active"  button" data-toggle="tab" href="#latest"><?php echo smartyTranslate(array('s'=>'New Arrivals','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a></li>
			<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_topseller']=='1') {?>
			<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active<?php }?> button" data-toggle="tab" href="#topseller"><?php echo smartyTranslate(array('s'=>'Best Seller','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a></li>
			<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_featured']=='1') {?>
			<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active<?php }?>  data-toggle="tab" href="#featured"><?php echo smartyTranslate(array('s'=>'Featured','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a></li>
		<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
		<?php }?>			
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_special']=='1') {?>
			<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active<?php }?> button" data-toggle="tab" href="#special"><?php echo smartyTranslate(array('s'=>'Special','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a></li>
			<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
		<?php }?>			
		<?php if ($_smarty_tpl->tpl_vars['config']->value['show_onsale']=='1') {?>
			<li class="nav-item"><a class="<?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active<?php }?> button" data-toggle="tab" href="#onsale"><?php echo smartyTranslate(array('s'=>'Sale Off','d'=>'Shop.Theme'),$_smarty_tpl);?>
</a></li>
			<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
		<?php }?>			
	</ul>
</div>
<div class="tab-content">
	<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable(0, null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['show_featured']=='1') {?>
		 <div role="tabpanel" class="tab-pane active fade in" id="featured">
		  <div class="producttab-carousel">	
				<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['featured_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
					<div class="item">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php } ?>
					</div>
				<?php } ?>
			</div>
			
		 </div>
		<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['show_new']=='1') {?>
		 <div role="tabpanel" class="tab-pane fade<?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active in<?php }?>" id="latest">
		 
			<div class="producttab-carousel">	
				<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['new_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
					<div class="item">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php } ?>
					</div>
				<?php } ?>
			</div>
			
		 </div>
		<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['show_topseller']=='1') {?>
		 <div role="tabpanel" class="tab-pane  fade <?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active in<?php }?>" id="topseller">
		 
			<div class="producttab-carousel">	
				<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['topseller_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
					<div class="item">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php } ?>
					</div>
				<?php } ?>
			</div>
			
		 </div>
		<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['show_special']=='1') {?>
		 <div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active in<?php }?>" id="special">
		
			<div class="producttab-carousel">	
				<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['special_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
					<div class="item">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php } ?>
					</div>
				<?php } ?>
			</div>
			
		 </div>
		<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['config']->value['show_onsale']=='1') {?>
		 <div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['cf']->value==0) {?>active in<?php }?>" id="onsale">
		
			<div class="producttab-carousel">	
				<?php  $_smarty_tpl->tpl_vars['products_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['onsale_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products_slide']->key => $_smarty_tpl->tpl_vars['products_slide']->value) {
$_smarty_tpl->tpl_vars['products_slide']->_loop = true;
?>
					<div class="item">
						<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products_slide']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0);?>

						<?php } ?>
					</div>
				<?php } ?>
			</div>
			
		 </div>
		<?php $_smarty_tpl->tpl_vars['cf'] = new Smarty_variable($_smarty_tpl->tpl_vars['cf']->value+1, null, 0);?>
	<?php }?>
</div>
<div class="view-all">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
index.php?id_category=10&controller=category&id_lang=1">Shop All Items</a>
</div>

<?php }} ?>
