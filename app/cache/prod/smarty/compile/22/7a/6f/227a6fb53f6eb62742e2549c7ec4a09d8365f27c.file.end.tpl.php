<?php /* Smarty version Smarty-3.1.19, created on 2018-04-19 03:34:37
         compiled from "D:\xampp\htdocs\jms_goden\modules\welcome\views\contents\end.tpl" */ ?>
<?php /*%%SmartyHeaderCode:280995ad8468d28add9-83332151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '227a6fb53f6eb62742e2549c7ec4a09d8365f27c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\jms_goden\\modules\\welcome\\views\\contents\\end.tpl',
      1 => 1514888748,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280995ad8468d28add9-83332151',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ad8468d29e659_69696142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ad8468d29e659_69696142')) {function content_5ad8468d29e659_69696142($_smarty_tpl) {?>

<div id="onboarding-welcome" class="modal-body">
    <div class="col-12">
        <button class="onboarding-button-next pull-right close" type="button">&times;</button>
        <h2 class="text-center text-md-center"><?php echo smartyTranslate(array('s'=>'Over to you!','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</h2>
    </div>
    <div class="col-12">
        <p class="text-center text-md-center">
          <?php echo smartyTranslate(array('s'=>'You\'ve seen the essential, but there\'s a lot more to explore.','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
<br />
          <?php echo smartyTranslate(array('s'=>'Some ressources can help you go further:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>

        </p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6  justify-content-center text-center text-md-center link-container">
              <a class="final-link" href="http://doc.prestashop.com/display/PS17/Getting+Started" target="_blank">
                <div class="starter-guide"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Starter Guide','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.prestashop.com/forums/" target="_blank">
                <div class="forum"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Forum','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.prestashop.com/en/training-prestashop" target="_blank">
                <div class="training"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Training','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
            <div class="col-md-6 text-center text-md-center link-container">
              <a class="final-link" href="https://www.youtube.com/user/prestashop" target="_blank">
                <div class="video-tutorial"></div>
                <span class="link"><?php echo smartyTranslate(array('s'=>'Video tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="col-12">
            <div class="text-center text-md-center">
                <button class="btn btn-primary onboarding-button-next"><?php echo smartyTranslate(array('s'=>'I\'m ready','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
            </div>
        </div>
    </div>
</div>
<?php }} ?>
