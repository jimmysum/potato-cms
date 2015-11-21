<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-21 16:39:21
         compiled from "/var/www/html/codeIgniter/application/views/admin/admin/myinfo.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56502db97c0f99_45532255',
  'file_dependency' => 
  array (
    '36557319ceb20980fcb647319d5488caaa0de155' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/admin/myinfo.html',
      1 => 1447943490,
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
if ($_valid && !is_callable('content_56502db97c0f99_45532255')) {
function content_56502db97c0f99_45532255 ($_smarty_tpl) {
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
    <div class="am-alert am-alert-success am-u-end success-msg" id="success-msg">添加成功！</div>
  </div>

  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">修改名称</a></li>
      <li><a href="#tab2">修改密码</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <form class="am-form" id="doc-vld-msg">
        <div class="am-g am-margin-top am-form-group">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            管理员名称
          </div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end">
            <input type="text" class="am-input-sm"  name="nickname"placeholder="输入管理员名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['nickname'];
}?>">
          </div>
        </div>
        </form>
        <div class="am-margin">
          <button id="save-nickname" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
          <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/admin/myinfo')">放弃保存</button>
        </div>
      </div>
		  
      <div class="am-tab-panel am-fade" id="tab2">
        <form class="am-form" id="changePwd">
          
        <div class="am-g am-margin-top am-form-group">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            原始密码
          </div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end">
            <input type="password" class="am-input-sm"  name="password" data-validation-message="原始密码必填" placeholder="输入原始密码" value="" required>
          </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            新密码
          </div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end">
            <input type="password" class="am-input-sm"  name="newpassword" data-validation-message="新密码必填" placeholder="新输入密码" value="" required>
          </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            重复新密码
          </div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end">
            <input type="password" class="am-input-sm"  name="repassword" data-validation-message="确认密码必填" placeholder="输入确认密码" value="" required>
          </div>
        </div>
        </form>
        <div class="am-margin">
          <button id="save-pwd" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
          <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/admin/myinfo')">放弃保存</button>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- content end -->

</div>
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>


<?php echo '<script'; ?>
>
	$('#save-nickname').on('click', function() {
    var postData = $('#doc-vld-msg').serializeArray();
    
		$.post("/admin/admin/changeName",
			postData,
		  function(data,status){
        result(data, status, '/admin/admin/myinfo');
		  });
	});

  $('#save-pwd').on('click', function() {
    var postData = $('#changePwd').serializeArray();
    
    $.post("/admin/admin/changePwd",
      postData,
      function(data,status){
        result(data, status, '/admin/admin/myinfo');
      });
  });

	$(function() {
		  $('#doc-vld-msg').validator({
		    onValid: function(validity) {
		      $(validity.field).closest('.am-form-group').find('.am-alert').hide();
		    },

		    onInValid: function(validity) {
		      var $field = $(validity.field);
		      var $group = $field.closest('.am-form-group');
		      var $alert = $group.find('.am-alert');
		      // 使用自定义的提示信息 或 插件内置的提示信息
		      var msg = $field.data('validationMessage') || this.getValidationMessage(validity);

		      if (!$alert.length) {
		        $alert = $('<div class="am-alert am-alert-danger am-u-md-2 am-u-end" id="danger-msg"></div>').hide().
		          appendTo($group);
		      }

		      $alert.html(msg).show();
		    }
		  });
			  
		});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
