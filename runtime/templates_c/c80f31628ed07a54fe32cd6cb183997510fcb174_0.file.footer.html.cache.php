<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-24 19:52:32
         compiled from "/data/src/test/codeIgniter/application/views/admin/public/footer.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562b7100510ef3_55006408',
  'file_dependency' => 
  array (
    'c80f31628ed07a54fe32cd6cb183997510fcb174' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/public/footer.html',
      1 => 1445251977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_562b7100510ef3_55006408')) {
function content_562b7100510ef3_55006408 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '86176883562b71005033c9_51987421';
?>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
js/amazeui.ie8polyfill.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
js/jquery.min.js"><?php echo '</script'; ?>
>
<!--<![endif]-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
js/amazeui.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
js/app.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['picker_style_url']->value;?>
datetimepicker/js/amazeui.datetimepicker.min.js"><?php echo '</script'; ?>
><?php }
}
