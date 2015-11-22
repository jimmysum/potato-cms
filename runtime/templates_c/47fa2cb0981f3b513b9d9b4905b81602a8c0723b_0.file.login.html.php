<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-22 20:08:03
         compiled from "/var/www/html/codeIgniter/application/views/admin/login.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5651b02336e465_12534097',
  'file_dependency' => 
  array (
    '47fa2cb0981f3b513b9d9b4905b81602a8c0723b' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/login.html',
      1 => 1448194082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5651b02336e465_12534097')) {
function content_5651b02336e465_12534097 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Potato 后台管理</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="alternate icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/favicon.png">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
css/amazeui.min.css"/>
  <style>
    .header {
      text-align: center;
    }
    .header h1 {
      font-size: 200%;
      color: #333;
      margin-top: 30px;
    }
    .header p {
      font-size: 14px;
    }
  </style>
</head>
<body>
<div class="header">
  <div class="am-g">
    <h1>Potato 后台管理</h1>
  </div>
  <hr />
</div>
<div class="am-g">
  <div class="am-u-lg-3 am-u-md-8 am-u-sm-centered">
    <form method="post" class="am-form" action="/admin/login/login">
      <label for="email">账号:</label>
      <input type="text" name="username" id="email" value="">
      <br>
      <label for="password">密码:</label>
      <input type="password" name="password" id="password" value="">
      <br>
      <div class="am-cf">
        <input type="submit" name="" value="登 录" class="am-btn am-btn-primary am-btn-sm am-fl">
        <!-- <input type="submit" name="" value="忘记密码 ^_^? " class="am-btn am-btn-default am-btn-sm am-fr"> -->
      </div>
    </form>
    <hr>
  </div>
  <div class="am-u-lg-6 am-u-sm-centered">
    <br />
    <br />
    <br />
    <br />
    <br />
    <p>Copyright © 2015 www.520sports.cn Powered By Potato后台管理 Version 1.0.0</p>
  </div>
</div>
</body>
</html><?php }
}
