<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-25 20:07:03
         compiled from "/data/src/test/codeIgniter/application/views/admin/public/header.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5655a4674b8b86_07081563',
  'file_dependency' => 
  array (
    '680e9ab0d86fa35caf24de669fd8861b3ae70099' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/public/header.html',
      1 => 1448244790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5655a4674b8b86_07081563')) {
function content_5655a4674b8b86_07081563 ($_smarty_tpl) {
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Potato后台管理</title>
  <meta name="description" content="Potato后台管理">
  <meta name="keywords" content="Potato后台管理">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Potato后台管理" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
css/amazeui.min.css"/>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
css/admin.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['picker_style_url']->value;?>
datetimepicker/css/amazeui.datetimepicker.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['picker_style_url']->value;?>
kindeditor/themes/default/default.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>Potato</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <!-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li> -->
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <!-- <li><a href="#"><span class="am-icon-user"></span> 资料</a></li> -->
          <li><a href="/admin/admin/myinfo"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="/admin/login/logout"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>
<?php }
}
