<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 03:34:43
         compiled from "D:\xampp\htdocs\jms_goden\themes\jms_goden\modules\jmswishlist\jmswishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325885ad84693bf99b9-86354990%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93a26f0f8df27415c2a4ed26cefdf081a094305' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmswishlist\\jmswishlist_top.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325885ad84693bf99b9-86354990',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'loggin_required' => 0,
    'added_to_wishlist' => 0,
    'mywishlist_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad84693bfd835_41460074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad84693bfd835_41460074')) {function content_5ad84693bfd835_41460074($_smarty_tpl) {?>
<script type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
</script>
<?php }} ?>