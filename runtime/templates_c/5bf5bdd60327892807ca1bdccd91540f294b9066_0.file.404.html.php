<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-22 21:15:08
         compiled from "/var/www/html/codeIgniter/application/views/admin/public/404.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5651bfdca7cf71_55779780',
  'file_dependency' => 
  array (
    '5bf5bdd60327892807ca1bdccd91540f294b9066' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/public/404.html',
      1 => 1448198072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/public/header.html' => 1,
    'file:admin/public/footer.html' => 1,
  ),
),false);
if ($_valid && !is_callable('content_5651bfdca7cf71_55779780')) {
function content_5651bfdca7cf71_55779780 ($_smarty_tpl) {
$_smarty_tpl->setupSubTemplate('file:admin/public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<div class="am-cf admin-main">
  <!-- sidebar end -->
  <!-- content start -->
  <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">系统错误</strong> / <small>错误页</small></div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <h2 class="am-text-center am-text-xxxl am-margin-top-lg"><?php echo $_smarty_tpl->tpl_vars['msgtype']->value;?>
</h2>
        <p class="am-text-center"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<a id="href" href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
">跳转</a> 等待时间：<b id="wait" >3</b></p>

        <pre class="page-404">
          .----.
       _.'__    `.
   .--($)($$)---/#\
 .' @          /###\
 :         ,   #####
  `-..__.-' _.-\###/
        `;_:    `"'
      .'"""""`.
     /,  ya ,\\
    //        \\
    `-._______.-'
    ___`. | .'___
   (______|______)
        </pre>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
 type="text/javascript">
  (function(){
  var wait = document.getElementById('wait'),href = document.getElementById('href').href;
  var interval = setInterval(function(){
    var time = --wait.innerHTML;
    if(time == 0) {
      location.href = href;
      clearInterval(interval);
    };
  }, 1000);
  })();
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
