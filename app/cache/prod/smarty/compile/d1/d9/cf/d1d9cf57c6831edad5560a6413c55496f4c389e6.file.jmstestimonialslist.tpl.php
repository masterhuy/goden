<?php /* Smarty version Smarty-3.1.19, created on 2018-04-25 23:46:28
         compiled from "D:\xampp\htdocs\jms_goden\modules\jmstestimonials\views\templates\hook\jmstestimonialslist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42235ae14b94e076b1-85475866%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d9cf57c6831edad5560a6413c55496f4c389e6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\modules\\jmstestimonials\\views\\templates\\hook\\jmstestimonialslist.tpl',
      1 => 1523458732,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42235ae14b94e076b1-85475866',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'testimonials' => 0,
    'testimonial' => 0,
    'image_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae14b94e51a44_47962069',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae14b94e51a44_47962069')) {function content_5ae14b94e51a44_47962069($_smarty_tpl) {?>
<div class="panel">
	<h3><i class="icon-list-ul"></i> 
		<?php echo smartyTranslate(array('s'=>'Testimonial list','d'=>'Modules.JmsTestimonials.Admin'),$_smarty_tpl);?>

		<span class="panel-heading-action">
			<a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&addTes=1">
			<span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="Add new" data-html="true">
				<i class="process-icon-new "></i>
			</span>
		</a>
		</span>
	</h3>
	<script>
			$(document).ready(function(){
				$('.toogle').click(function(e){
					$('#slidesContent').toggle(200);
				});
				$('.panel-heading').click(function(e){
					$(this).next('.form-wrapper').toggle(200);
				});
			});
				
	</script>
	<div id="slidesContent">
		<div id="slides">
			<?php  $_smarty_tpl->tpl_vars['testimonial'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['testimonial']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['testimonials']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['testimonial']->key => $_smarty_tpl->tpl_vars['testimonial']->value) {
$_smarty_tpl->tpl_vars['testimonial']->_loop = true;
?>
				<div id="slides_1" class="panel slideContent_">
					<div class="row">
						<div class="col-lg-1">
							<span><i class="icon-arrows"></i></span>
						</div>
						<div class="col-md-3">
						
							<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['image']) {?>
							<img src="<?php echo $_smarty_tpl->tpl_vars['image_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
" class="img-thumbnail" />
							<?php }?>
						</div>
						<div class="col-md-8">
							<h4 class="pull-left"> #<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
- <?php echo $_smarty_tpl->tpl_vars['testimonial']->value['author'];?>
</h4>							
							<div class="btn-group-action pull-right">								
								<a class="btn <?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>btn-success<?php } else { ?>btn-danger<?php }?>"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&changeStatus&status_id_testimonial=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
" title="title="<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>"">
									<i class="<?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>icon-check<?php } else { ?>icon-remove<?php }?>"></i><?php if ($_smarty_tpl->tpl_vars['testimonial']->value['active']) {?>Enabled<?php } else { ?>Disabled<?php }?>
								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&id_testimonial=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
"
									<i class="icon-edit"></i>
									<?php echo smartyTranslate(array('s'=>'Edit','d'=>'Modules.JmsTestimonials.Admin'),$_smarty_tpl);?>

								</a>
								<a class="btn btn-default"
									href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=jmstestimonials&delete_id_tes=<?php echo $_smarty_tpl->tpl_vars['testimonial']->value['id_testimonial'];?>
">
									<i class="icon-trash"></i>
									<?php echo smartyTranslate(array('s'=>'Delete','d'=>'Modules.JmsTestimonials.Admin'),$_smarty_tpl);?>

								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div><?php }} ?>
