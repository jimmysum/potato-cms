<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-19 22:38:35
         compiled from "/var/www/html/codeIgniter/application/views/admin/public/footer.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_564ddeebbf1732_03004729',
  'file_dependency' => 
  array (
    '91beeb366e5be7fc96dce787fa1064d06c564205' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/public/footer.html',
      1 => 1447943490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_564ddeebbf1732_03004729')) {
function content_564ddeebbf1732_03004729 ($_smarty_tpl) {
?>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">Copyright © 2015 www.520sports.cn Powered By Potato后台管理 Version 1.0.0</p>
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