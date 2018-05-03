<?php /* Smarty version Smarty-3.1.19, created on 2018-05-02 03:03:26
         compiled from "module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311925ad84692593cf3-12526928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl',
      1 => 1525244326,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '311925ad84692593cf3-12526928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad846925b3102_27609074',
  'variables' => 
  array (
    'urls' => 0,
    'msg' => 0,
    'nw_error' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad846925b3102_27609074')) {function content_5ad846925b3102_27609074($_smarty_tpl) {?>

<!-- Block Newsletter module-->

<div id="newsletter_block_left" class="block">	
	<div class="block_content">
		<div class="textnews_popup addon-title">
			<h2><?php echo smartyTranslate(array('s'=>'Sign Up Our Newsletter','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h2>
			<span><?php echo smartyTranslate(array('s'=>'For receive and never miss the latest products, news, events, promotion and many more','d'=>'Shop.Theme'),$_smarty_tpl);?>
</span>
		</div>
		<div class="textnews_h1 addon-title">
			<h3><?php echo smartyTranslate(array('s'=>'Don’t Miss Out!','d'=>'Shop.Theme'),$_smarty_tpl);?>
</h3>
			<span>Get latest news & receive 30% off for your next buy!</span>
		</div>
		<div class="textnews_h2 addon-title">
			<h3>Join Our Newsletter</h3>
			<span>Sign up for get our offers and promotions and receive 20% off for your next buy!</span>
		</div>
		<div class="textnews_h3 addon-title">
			<h3>Follow Us</h3>
			<p>Hi you, sign up our newsletter and  get 30% off for your next purchase!</p>
		</div>
		<div class="textnews_h6 addon-title">
			<h3>Don’t Miss Out!</h3>
			<p>Sign up for get news, our offers, promotions and receive 20% off for your next purchase!</p>
		</div>
		<div class="news_content">
        	<div  class="block_content block_c_right">
				<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
					<div class="form-group<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)&&$_smarty_tpl->tpl_vars['msg']->value) {?> <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>form-error<?php } else { ?>form-ok<?php }?><?php }?>" >
						<input class="inputNew normal form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Enter your e-mail','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
						<input class="inputNew popup form-control grey newsletter-input" id="newsletter-input" type="text" name="email" size="18" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo smartyTranslate(array('s'=>'Email@example.com','d'=>'Shop.Forms.Labels'),$_smarty_tpl);?>
" />
						
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1 btn-default">
							<?php echo smartyTranslate(array('s'=>'Subscribe','d'=>'Shop.Theme'),$_smarty_tpl);?>

						</button>
						<button type="submit" name="submitNewsletter" class="newsletter-btn buttonh1 btn-h3">
							<span class="fa fa-paper-plane"></span>
						</button>
						
						<input type="hidden" name="action" value="0" />
					</div>
				</form>
			</div>
       	</div>
	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
    <div class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

    </div>
<?php }?>
<div id="social_block">
	<ul class="find-us">
       <li class="divider"><a href="#" class="facebook"><span class="fa fa-facebook"></span></a></li>
       <li class="divider"><a href="#" class="twitter"><span class="fa fa-twitter"></span></a></li>
       <li class="divider"><a href="#" class="gplus"><span class="fa fa-google"></span></a></li>
	   <li class="divider"><a href="#" class="pinterest"><span class="fa fa-pinterest"></span></a></li>
	   <li class="divider"><a href="#" class="instagram"><span class="fa fa-instagram"></span></a></li>
    </ul>
</div>

<?php }} ?>
