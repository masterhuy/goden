<?php /* Smarty version Smarty-3.1.19, created on 2018-05-06 00:28:04
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmswishlist\jmswishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225375aee8454842fd0-99643531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2f97595a718fd40f0178fe8441d1e11b98e97d0' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\modules\\jmswishlist\\jmswishlist_top.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225375aee8454842fd0-99643531',
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
  'unifunc' => 'content_5aee8454846e54_97327426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aee8454846e54_97327426')) {function content_5aee8454846e54_97327426($_smarty_tpl) {?>
<script type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
</script>
<?php }} ?>
