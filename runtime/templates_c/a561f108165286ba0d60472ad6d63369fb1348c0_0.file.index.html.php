<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-21 16:43:03
         compiled from "/var/www/html/codeIgniter/application/views/admin/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56502e97a4c6e0_95902526',
  'file_dependency' => 
  array (
    'a561f108165286ba0d60472ad6d63369fb1348c0' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/index.html',
      1 => 1448095382,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/public/header.html' => 1,
    'file:admin/public/left.html' => 1,
    'file:admin/public/footer.html' => 1,
  ),
),false);
if ($_valid && !is_callable('content_56502e97a4c6e0_95902526')) {
function content_56502e97a4c6e0_95902526 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:admin/public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php $_smarty_tpl->setupSubTemplate('file:admin/public/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg"><?php echo $_smarty_tpl->tpl_vars['nav']->value[0];?>
</strong> / <small><?php echo $_smarty_tpl->tpl_vars['nav']->value[1];?>
</small></div>
    </div>

    <ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="/Admin/Article/add" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>新增文章<br/><?php echo $_smarty_tpl->tpl_vars['data']->value['artCount'];?>
</a></li>
      <li><a href="/admin/Comment/index" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>评论管理<br/><?php echo $_smarty_tpl->tpl_vars['data']->value['comCount'];?>
</a></li>
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>昨日访问<br/>80082</a></li>
      <li><a href="/admin/User/index" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>在线用户<br/><?php echo $_smarty_tpl->tpl_vars['data']->value['userCount'];?>
</a></li>
    </ul>


    <div class="am-g">
      <div class="am-u-md-12">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">欢迎登录Potato后台管理系统<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-1" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <td class="am-text-left" width="15%">用户名</td>
                <td><?php echo $_SESSION['user']['info']['nickname'];?>
</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">登陆IP</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ip'];?>
</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">系统运行信息<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-2" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <td class="am-text-left" width="15%">服务器信息</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['serverInfo'];?>
</th>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">服务器环境</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['serverEn'];?>
</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">服务器语言</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['serverLan'];?>
</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">PHP版本</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['serverVer'];?>
</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">服务器IP</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['serverIp'];?>
</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">MYSQL版本</td>
                <td>MySQL<?php echo $_smarty_tpl->tpl_vars['data']->value['serverMysql'];?>
</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">作者信息<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-3" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <td class="am-text-left" width="15%">作者</td>
                <td>Jimmy Chen</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">Email</td>
                <td>jimmysum@163.com</td>
              </tr>
              <tr>
                <td class="am-text-left" width="15%">合作</td>
                <td>请联系邮箱</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- content end -->

</div>

<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>


</body>
</html>
<?php }
}
