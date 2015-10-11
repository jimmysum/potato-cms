<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-08 15:18:17
         compiled from "/data/src/test/codeIgniter/application/views/admin/copy.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_561618b98db1c8_44859174',
  'file_dependency' => 
  array (
    'be2f97577a0e12fbc9734360f2a62f4b8f0329b6' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/copy.html',
      1 => 1444288684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_561618b98db1c8_44859174')) {
function content_561618b98db1c8_44859174 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title></title>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
css/admin.css" />
</head>
<body>
	<table class="table">
		<tr>
			<td colspan='2' class="th"><span class="span_people">&nbsp</span>欢迎光临HDPHP博客管理后台</td>
		</tr>
		<tr>
			<td>用户名</td>
			<td><?php echo $_SESSION['user']['username'];?>
</td>
		</tr>
		<tr>
			<td>登录IP</td>
			<td><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</td>
		</tr>
		<tr>
			<td colspan='2' class="th"><span class="span_server" style="float:left">&nbsp</span>服务器信息</td>
		</tr>

		<tr>
			<td>服务器环境</td>
			<td><?php echo $_smarty_tpl->tpl_vars['serverEn']->value;?>
</td>
		</tr>
		<tr>
			<td>PHP版本</td>
			<td><?php echo $_smarty_tpl->tpl_vars['serverVer']->value;?>
</td>
		</tr>
		<tr>
			<td>服务器IP</td>
			<td><?php echo $_smarty_tpl->tpl_vars['serverIp']->value;?>
</td>
		</tr>
		<tr>
			<td>数据库信息</td>
			<td><?php echo $_smarty_tpl->tpl_vars['serverMysql']->value;?>
</td>
		</tr>

</table>
</body>
</html><?php }
}
