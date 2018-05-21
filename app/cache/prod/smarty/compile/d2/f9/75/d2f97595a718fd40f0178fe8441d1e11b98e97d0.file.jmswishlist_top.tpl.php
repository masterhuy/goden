<?php /* Smarty version Smarty-3.1.19, created on 2018-05-21 00:26:54
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\modules\jmswishlist\jmswishlist_top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68045b024a8e166d79-00852365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '68045b024a8e166d79-00852365',
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
  'unifunc' => 'content_5b024a8e16ea71_68353797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b024a8e16ea71_68353797')) {function content_5b024a8e16ea71_68353797($_smarty_tpl) {?>
<script type="text/javascript">
    var loggin_required= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loggin_required']->value, ENT_QUOTES, 'UTF-8');?>
';
    var added_to_wishlist= '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['added_to_wishlist']->value, ENT_QUOTES, 'UTF-8');?>
';
    var mywishlist_url= '<?php echo $_smarty_tpl->tpl_vars['mywishlist_url']->value;?>
';
</script>
<?php }} ?>
