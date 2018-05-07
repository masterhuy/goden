<?php /* Smarty version Smarty-3.1.19, created on 2018-05-06 22:03:22
         compiled from "D:\xamppp\htdocs\jms_goden\modules\jmspagebuilder\views\templates\hook\addoncategoryshow2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:326335aefb3eabe0d59-78443955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c609ff65d340bc558101bedf21bf3229ee7214f3' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\modules\\jmspagebuilder\\views\\templates\\hook\\addoncategoryshow2.tpl',
      1 => 1524796669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '326335aefb3eabe0d59-78443955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'categories' => 0,
    'category' => 0,
    'link' => 0,
    'categoryLink' => 0,
    'img_cat_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aefb3eac7d155_05611476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aefb3eac7d155_05611476')) {function content_5aefb3eac7d155_05611476($_smarty_tpl) {?>
<script type="text/javascript">
jQuery(function ($) {
    "use strict";
	var categoriesCarousel = $(".categories-carousel2");		
	var rtl = false;
	if ($("body").hasClass("rtl")) rtl = true;				
	categoriesCarousel.owlCarousel({
		responsiveClass:true,
		responsive:{			
			1199:{
				items:4
			},
			991:{
				items:3
			},
			768:{
				items:2
			},
			318:{
				items:1
			}
		},
		rtl: rtl,
		margin:30,
	    nav: true,
	    dots: false,
		autoplay: false,
		loop: true,
	    rewindNav: false,
	    navigationText: ["", ""],
	    slideBy: false,
	    slideSpeed: 200	
	});
});
</script>
<div class="home_categories2">
    <?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value) {?>
            <div class="categories-carousel2">
            <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                <?php $_smarty_tpl->tpl_vars['categoryLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['link']->value->getcategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), null, 0);?>
					<div class="categories-wrapper">
						<div class="categoy-image">
							<a href="<?php echo $_smarty_tpl->tpl_vars['categoryLink']->value;?>
">
								<img src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
" class="img-responsive"/>
							</a>
						</div>
						<div class="category-info">
							<a class="cat-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryLink']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a>
						</div>
					</div>
            <?php } ?>
            </div>
    <?php } else { ?>
        <p><?php echo smartyTranslate(array('s'=>'No categories','d'=>'Modules.JmsPagebuilder'),$_smarty_tpl);?>
</p>
  <?php }?>
</div><?php }} ?>
