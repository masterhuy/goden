<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 00:26:53
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmsajaxsearch\views\templates\hook\jmsajaxsearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76815b024a8dd80732-31957360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95d6215e48fd632557ff5ca27e7ec9fcbd4269fd' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmsajaxsearch\\views\\templates\\hook\\jmsajaxsearch.tpl',
      1 => 1524540358,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76815b024a8dd80732-31957360',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'jpb_homepage' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b024a8dd8c2c3_41319283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b024a8dd8c2c3_41319283')) {function content_5b024a8dd8c2c3_41319283($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==2) {?>
<div class="btn-group compact-hidden jms_ajax_search type2" id="jms_ajax_search">
	<div class="search-box">
		<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
			
		</a>
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search here...','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search" />		
			<button type="submit" name="submit_search" class="button-search pe pe-7s-search">
		</form>
		<div id="search_result"></div>
	</div>	
</div>
<?php } else { ?>
<div class="btn-group compact-hidden jms_ajax_search type1" id="jms_ajax_search">
	<a href="#"  class="btn-xs icon dropdown-toggle" title="Search" data-toggle="dropdown">
		<span class="icon-magnifier icons"></span>
		<span class="text">Search</span>
	</a>
	<div class="dropdown-menu search-box" role="menu">	
		<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'),'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="searchbox">
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input type="text" id="ajax_search" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search everything here','d'=>'Modules.JmsAjaxsearch'),$_smarty_tpl);?>
" class="form-control ajax_search"  />		
			
			<button type="submit" name="submit_search" class="button-search pe pe-7s-search">
				
		    </button>
		</form>
		<div id="search_result"></div>
	</div>	
</div>
<?php }?>


<?php }} ?>
