<?php /* Smarty version Smarty-3.1.19, created on 2018-05-04 06:19:01
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\templates\catalog\_partials\active_filters.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177475aec3395b6c3e1-68557251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10c1b263aadd8c745a10bf5f4a95d11107d1201a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\catalog\\_partials\\active_filters.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177475aec3395b6c3e1-68557251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'activeFilters' => 0,
    'filter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aec3395b8f668_59453961',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aec3395b8f668_59453961')) {function content_5aec3395b8f668_59453961($_smarty_tpl) {?>
<section id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
  
    <h3 class=" active-filter-title"><?php echo smartyTranslate(array('s'=>'Active filters','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
  

  <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
    <ul>
      <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['activeFilters']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>
        
          <li class="filter-block">
            <?php echo smartyTranslate(array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl);?>

            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

            <a class="js-search-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
"><i class="material-icons close">&#xE5CD;</i></a>
          </li>
        
      <?php } ?>
    </ul>
  <?php }?>
</section>
<?php }} ?>
