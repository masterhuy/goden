<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 23:25:40
         compiled from "D:\xampp\htdocs\jms_goden\modules\jmsblog\views\templates\admin\jmsblog_post\pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:224035ad95db49c71a3-26808202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe259247b36a32c6675bd5f14219f627424d5e17' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\modules\\jmsblog\\views\\templates\\admin\\jmsblog_post\\pagination.tpl',
      1 => 1523458732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224035ad95db49c71a3-26808202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'limit' => 0,
    'pages' => 0,
    'foo' => 0,
    'start' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad95db49e9483_61740123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad95db49e9483_61740123')) {function content_5ad95db49e9483_61740123($_smarty_tpl) {?>
<div class="jms-blog-pagination">	
	<?php if ($_smarty_tpl->tpl_vars['total']->value>$_smarty_tpl->tpl_vars['limit']->value) {?>
	<div class="pagination">
		<ul>
		<?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['pages']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['pages']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<li class="<?php if (($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value==$_smarty_tpl->tpl_vars['start']->value) {?>active<?php }?>"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminJmsblogPost');?>
&configure=jmsblog&start=<?php echo ($_smarty_tpl->tpl_vars['foo']->value-1)*$_smarty_tpl->tpl_vars['limit']->value;?>
&limit=<?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
		<?php }} ?>
		</ul>
	</div>
	<?php }?>
	<div class="counter-div">
		<span>Total : <?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 items</span>
	</div>
</div><?php }} ?>
