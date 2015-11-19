<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-19 21:22:32
         compiled from "/data/src/test/codeIgniter/application/views/admin/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_564dcd18513634_29864968',
  'file_dependency' => 
  array (
    '720acd37de3237d8f281d26b441f89b52e1e7d78' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/index.html',
      1 => 1447939351,
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
if ($_valid && !is_callable('content_564dcd18513634_29864968')) {
function content_564dcd18513634_29864968 ($_smarty_tpl) {
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
      <li><a href="/Admin/Article/add" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>新增文章<br/>2300</a></li>
      <li><a href="/admin/Comment/index" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>评论管理<br/>308</a></li>
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>昨日访问<br/>80082</a></li>
      <li><a href="#" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>在线用户<br/>3000</a></li>
    </ul>


    <div class="am-g">
      <div class="am-u-md-6">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">欢迎登录Potato后台管理系统<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-1" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <th class="am-text-left">用户名</th>
                <th><?php echo $_SESSION['user']['info']['nickname'];?>
</th>
              </tr>
              <tr>
                <td class="am-text-left">登陆IP</td>
                <td><?php echo $_smarty_tpl->tpl_vars['data']->value['ip'];?>
</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">欢迎登录Potato后台管理系统<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-2" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <th>浏览器</th>
                <th>访问量</th>
              </tr>
              <tr>
                <td>Google Chrome</td>
                <td>3,005</td>
              </tr>
              <tr>
                <td>Mozilla Firefox</td>
                <td>2,505</td>
              </tr>
              <tr>
                <td>Internet Explorer</td>
                <td>1,405</td>
              </tr>
              <tr>
                <td>Opera</td>
                <td>4,005</td>
              </tr>
              <tr>
                <td>Safari</td>
                <td>505</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <div class="am-u-md-6">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">欢迎登录Potato后台管理系统<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-2" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <th class="am-text-center">#</th>
                <th>浏览器</th>
                <th>访问量</th>
              </tr>
              <tr>
                <td class="am-text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/examples/admin-chrome.png" alt=""></td>
                <td>Google Chrome</td>
                <td>3,005</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/examples/admin-firefox.png" alt=""></td>
                <td>Mozilla Firefox</td>
                <td>2,505</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/examples/admin-ie.png" alt=""></td>
                <td>Internet Explorer</td>
                <td>1,405</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/examples/admin-opera.png" alt=""></td>
                <td>Opera</td>
                <td>4,005</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['admin_style_url']->value;?>
i/examples/admin-safari.png" alt=""></td>
                <td>Safari</td>
                <td>505</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">最近留言<span class="am-icon-chevron-down am-fr" ></span></div>
          <div class="am-panel-bd am-collapse am-in am-cf" id="collapse-panel-3">
            <ul class="am-comments-list admin-content-comment">
              <li class="am-comment">
                <a href="#"><img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96" alt="" class="am-comment-avatar" width="48" height="48"></a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta"><a href="#" class="am-comment-author">某人</a> 评论于 <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p>遵循 “移动优先（Mobile First）”、“渐进增强（Progressive enhancement）”的理念，可先从移动设备开始开发网站，逐步在扩展的更大屏幕的设备上，专注于最重要的内容和交互，很好。</p>
                  </div>
                </div>
              </li>

              <li class="am-comment">
                <a href="#"><img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96" alt="" class="am-comment-avatar" width="48" height="48"></a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta"><a href="#" class="am-comment-author">某人</a> 评论于 <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p>有效减少为兼容旧浏览器的臃肿代码；基于 CSS3 的交互效果，平滑、高效。AMUI专注于现代浏览器（支持HTML5），不再为过时的浏览器耗费资源，为更有价值的用户提高更好的体验。</p>
                  </div>
                </div>
              </li>

            </ul>
            <ul class="am-pagination am-fr admin-content-pagination">
              <li class="am-disabled"><a href="#">&laquo;</a></li>
              <li class="am-active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
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
