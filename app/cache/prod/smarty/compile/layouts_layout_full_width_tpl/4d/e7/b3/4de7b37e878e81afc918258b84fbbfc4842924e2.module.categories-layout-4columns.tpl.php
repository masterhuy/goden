<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "module:jmsblog/views/templates/front/categories-layout-4columns.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176525b02443c0b7394-36488414%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4de7b37e878e81afc918258b84fbbfc4842924e2' => 
    array (
      0 => 'module:jmsblog/views/templates/front/categories-layout-4columns.tpl',
      1 => 1523948721,
      2 => 'module',
    ),
    '96c342734325d50e7c3eb58f570afa9cf4c2e184' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\page.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    'ba15f50fce90d89446e77ffbf8a5d3899cc2c13a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\layouts\\layout-full-width.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    '366c3065953eea28c0fe35a24438e9fb91d945d1' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    '3681121fd55eb8606843949af543880fa6277187' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\stylesheets.tpl',
      1 => 1526444613,
      2 => 'file',
    ),
    '4893507f8a31aaf5f532be0911dc34784e1fbd75' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\javascript.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    '5f948a804757de11ec1adc4df0c177ef28604d0c' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\head.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    'a9b17a3748e9d377a322d4ce1254a7165df2c42a' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    'e0089b109b1426f03844456b7c628540e1752407' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\header.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    '531b4956071b56288103914c474c766c625b7d47' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\breadcrumb.tpl',
      1 => 1523948722,
      2 => 'file',
    ),
    '1e948b087201d9e3c4f61d1b7fd8c6344cc2b1cf' => 
    array (
      0 => 'D:\\xamppp\\htdocs\\jms_goden\\themes\\jms_goden\\templates\\_partials\\footer.tpl',
      1 => 1523951702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176525b02443c0b7394-36488414',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebar' => 0,
    'layout' => 0,
    'language' => 0,
    'page' => 0,
    'jpb_homeclass' => 0,
    'jpb_rtl' => 0,
    'jpb_loadingstyle' => 0,
    'jpb_mobilemenu' => 0,
    'javascript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5b02443c1c8a91_52139108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b02443c1c8a91_52139108')) {function content_5b02443c1c8a91_52139108($_smarty_tpl) {?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
  <head>
    
      <?php /*  Call merged included template "_partials/head.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '176525b02443c0b7394-36488414');
content_5b02443c0de493_24927508($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/head.tpl" */?>
    
  </head>

  <body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['classnames'][0][0]->smartyClassnames($_smarty_tpl->tpl_vars['page']->value['body_classes']), ENT_QUOTES, 'UTF-8');?>
 <?php if (isset($_smarty_tpl->tpl_vars['jpb_homeclass']->value)&&$_smarty_tpl->tpl_vars['jpb_homeclass']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_homeclass']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?> <?php if ($_smarty_tpl->tpl_vars['jpb_rtl']->value) {?> rtl<?php }?>">
	<?php if ($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value) {?>
		<div class="preloader">
			<div class="spinner<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['jpb_loadingstyle']->value, ENT_QUOTES, 'UTF-8');?>
">
				<div class="dot1"></div>
				<div class="dot2"></div>
			    <div class="bounce1"></div>
			    <div class="bounce2"></div>
			    <div class="bounce3"></div>
			</div>
		</div>
	<?php }?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['jpb_mobilemenu']->value) {?>
		<div class="menu-wrap hidden-lg hidden-md">
			<button id="close-button" class="close-button"> <?php echo smartyTranslate(array('s'=>'Menu','d'=>'Shop.Theme'),$_smarty_tpl);?>
</button>
				<nav id="off-canvas-menu">					
					<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTopColumn'),$_smarty_tpl);?>

				</nav>				
				
			</div>
	<?php }?>
    <div class="main-site">
      
        <?php /*  Call merged included template "catalog/_partials/product-activation.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '176525b02443c0b7394-36488414');
content_5b02443c12c690_07382995($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "catalog/_partials/product-activation.tpl" */?>
      
      <header id="header">
        
          <?php /*  Call merged included template "_partials/header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '176525b02443c0b7394-36488414');
content_5b02443c12c691_41202097($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/header.tpl" */?>
        
      </header>
      
     
      
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
			
			   <?php /*  Call merged included template "_partials/breadcrumb.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '176525b02443c0b7394-36488414');
content_5b02443c153798_74662383($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/breadcrumb.tpl" */?>
			
		<?php }?>
        <div id="wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>class="container"<?php }?>> 
		<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
		<div class="row">
		<?php }?>
          

          
  <div id="content-wrapper" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!="index") {?>class="col-lg-12 col-md-12 col-sm-12 col-xs-12"<?php }?>>
    

  <section id="main">
	
    
      <section id="content" class="page-content card card-block row">
        
        
<?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<h1 class="page-heading"><?php echo smartyTranslate(array('s'=>'Categories'),$_smarty_tpl);?>
</h1>
<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)&&$_smarty_tpl->tpl_vars['categories']->value) {?>		
	<div class="categories-list row">
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>			
			<?php $_smarty_tpl->tpl_vars['catparams'] = new Smarty_variable(array('category_id'=>$_smarty_tpl->tpl_vars['category']->value['category_id'],'slug'=>$_smarty_tpl->tpl_vars['category']->value['alias']), null, 0);?>				
			<div class="blog-category col-sm-6 col-lg-3 col-md-3 col-xs-12">
				<?php if ($_smarty_tpl->tpl_vars['category']->value['image']&&$_smarty_tpl->tpl_vars['jmsblog_setting']->value['JMSBLOG_SHOW_MEDIA']) {?>
					<div class="post-thumb">
						<a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['image_baseurl']->value,'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['image'],'html','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive" /></a>			 		
					</div>
				<?php }?>
				<div class="category-info">
					<h4 class="post-title"><a href="<?php echo htmlspecialchars(jmsblog::getPageLink('jmsblog-category',$_smarty_tpl->tpl_vars['catparams']->value), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['category']->value['title'],'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</a></h4>	
					<div class="blog-intro"><?php echo $_smarty_tpl->tpl_vars['category']->value['introtext'];?>
</div>
				</div>			
			</div>
		<?php } ?>
	</div>
<?php } else { ?>	
<?php echo smartyTranslate(array('s'=>'Sorry, dont have any category in this section','d'=>'Modules.JmsBlog'),$_smarty_tpl);?>

<?php }?>

      </section>
    

    
     
    

  </section>


  </div>


          
			
        <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']!='index') {?>
		</div>
		<?php }?>
      </div>

      <footer id="footer">
        
          <?php /*  Call merged included template "_partials/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '176525b02443c0b7394-36488414');
content_5b02443c1c8a94_54226653($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/footer.tpl" */?>
        
      </footer>

    </div>

    
      <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, '176525b02443c0b7394-36488414');
content_5b02443c105598_78862526($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>
    

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl);?>

	<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name']=='cms') {?>		 
		 <script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv9p77jYCRrlLa3xx1hwemtEjUyH3YcZo&callback=initMap">
        </script>
		<?php }?>
  </body>

</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\_partials\head.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c0de493_24927508')) {function content_5b02443c0de493_24927508($_smarty_tpl) {?>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">


  <title><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</title>
  <meta name="description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="keywords" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots']!=='index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>


<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
<link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">

  <?php /*  Call merged included template "_partials/stylesheets.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, '176525b02443c0b7394-36488414');
content_5b02443c0de494_21625731($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/stylesheets.tpl" */?>



  <?php /*  Call merged included template "_partials/javascript.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, '176525b02443c0b7394-36488414');
content_5b02443c105598_78862526($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "_partials/javascript.tpl" */?>



  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\_partials\stylesheets.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c0de494_21625731')) {function content_5b02443c0de494_21625731($_smarty_tpl) {?>
 <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
 <link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
css/pe-icon-7-stroke/css/pe-icon-7-stroke.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="/jms_goden/themes/jms_goden/assets/css/simple-line-icons.css" />
<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
	<link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['stylesheet'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['stylesheet']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['stylesheets']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->key => $_smarty_tpl->tpl_vars['stylesheet']->value) {
$_smarty_tpl->tpl_vars['stylesheet']->_loop = true;
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php } ?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\_partials\javascript.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c105598_78862526')) {function content_5b02443c105598_78862526($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['external']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['js']->value['attribute'], ENT_QUOTES, 'UTF-8');?>
></script>
<?php } ?>

<?php  $_smarty_tpl->tpl_vars['js'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['js']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['javascript']->value['inline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['js']->key => $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
?>
  <script type="text/javascript">
    <?php echo $_smarty_tpl->tpl_vars['js']->value['content'];?>

  </script>
<?php } ?>

<?php if (isset($_smarty_tpl->tpl_vars['vars']->value)&&count($_smarty_tpl->tpl_vars['vars']->value)) {?>
  <script type="text/javascript">
    <?php  $_smarty_tpl->tpl_vars['var_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['var_value']->_loop = false;
 $_smarty_tpl->tpl_vars['var_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['vars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['var_value']->key => $_smarty_tpl->tpl_vars['var_value']->value) {
$_smarty_tpl->tpl_vars['var_value']->_loop = true;
 $_smarty_tpl->tpl_vars['var_name']->value = $_smarty_tpl->tpl_vars['var_value']->key;
?>
    var <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['var_name']->value, ENT_QUOTES, 'UTF-8');?>
 = <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['json_encode'][0][0]->jsonEncode($_smarty_tpl->tpl_vars['var_value']->value);?>
;
    <?php } ?>
  </script>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['jpb_homepage']->value==8) {?>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themename']->value, ENT_QUOTES, 'UTF-8');?>
/assets/js/jquery.multiscroll.extensions.min.js"></script>
<script type="text/javascript" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
themes/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['themename']->value, ENT_QUOTES, 'UTF-8');?>
/assets/js/jquery.multiscroll.js"></script>
<?php }?><?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\catalog\_partials\product-activation.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c12c690_07382995')) {function content_5b02443c12c690_07382995($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['page']->value['admin_notifications']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
          <div class="col-sm-12">
            <i class="material-icons pull-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['notif']->value['message'], ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\_partials\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c12c691_41202097')) {function content_5b02443c12c691_41202097($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayTop'),$_smarty_tpl);?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\_partials\breadcrumb.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c153798_74662383')) {function content_5b02443c153798_74662383($_smarty_tpl) {?>
 <div class="breadcrumb">
<div class="breadcrumb-box container">
<span class="title_meta"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
</span>
	<div data-depth="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-inner hidden-sm-down">
  <ol itemscope itemtype="http://schema.org/BreadcrumbList">
    <?php  $_smarty_tpl->tpl_vars['path'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['path']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumb']->value['links']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['path']->key => $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['breadcrumb']['iteration']++;
?>
      <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
        <a itemprop="item" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
">
           <span itemprop="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
        <meta itemprop="position" content="<?php echo htmlspecialchars($_smarty_tpl->getVariable('smarty')->value['foreach']['breadcrumb']['iteration'], ENT_QUOTES, 'UTF-8');?>
">
      </li>
    <?php } ?>
  </ol>
</div>
</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.19, created on 2018-05-20 23:59:56
         compiled from "D:\xamppp\htdocs\jms_goden\themes\jms_goden\templates\_partials\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5b02443c1c8a94_54226653')) {function content_5b02443c1c8a94_54226653($_smarty_tpl) {?>
 <div class="back-to-top" id="back-to-top">
			<span class="fa fa-angle-up"></span>
</div>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayFooter'),$_smarty_tpl);?>


<?php }} ?>
