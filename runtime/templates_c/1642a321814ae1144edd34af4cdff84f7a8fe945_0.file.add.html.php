<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-23 00:17:43
         compiled from "/var/www/html/codeIgniter/application/views/admin/role/add.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5651eaa78428c3_44132840',
  'file_dependency' => 
  array (
    '1642a321814ae1144edd34af4cdff84f7a8fe945' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/role/add.html',
      1 => 1448207926,
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
if ($_valid && !is_callable('content_5651eaa78428c3_44132840')) {
function content_5651eaa78428c3_44132840 ($_smarty_tpl) {
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

  <form class="am-form" id="doc-vld-msg">
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">用户信息</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top am-form-group">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            角色名
          </div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end">
            <input type="text" class="am-input-sm"  name="name" data-validation-message="角色名必填" placeholder="请输入角色名" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>" required>
          </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            角色描述
          </div>
          <div class="am-u-sm-8 am-u-md-4 am-u-end">
            <input type="text" class="am-input-sm"  name="remark" data-validation-message="角色描述必填" placeholder="请输入角色描述" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['remark'];
}?>" required>
          </div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">状态</div>
          <div class="am-u-sm-8 am-u-md-10">
            <div class="am-btn-group" data-am-button>
              <label class="am-btn am-btn-default am-btn-xs <?php if (!$_smarty_tpl->tpl_vars['data']->value) {?> am-active<?php } elseif ($_smarty_tpl->tpl_vars['data']->value && $_smarty_tpl->tpl_vars['data']->value['status'] == 1) {?> am-active<?php }?>">
                <input type="radio" name="status" id="option1" value="1"> 开启
              </label>
              <label class="am-btn am-btn-default am-btn-xs <?php if ($_smarty_tpl->tpl_vars['data']->value && $_smarty_tpl->tpl_vars['data']->value['status'] == 0) {?> am-active<?php }?>">
                <input type="radio" name="status" id="option3" value="0"> 关闭
              </label>
            </div>
          </div>
        </div>
        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              排序
            </div>
            <div class="am-u-sm-8 am-u-md-2 am-u-end">
              <input name="sort" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['sort'];
}?>"  placeholder="默认50">
            </div>
        </div>
      </div>
		

    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
  <input name="id" type="hidden" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
  <?php }?>
  </form>
  <div class="am-margin">
    <button id="save-sure" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/role/index')">放弃保存</button>
  </div>
</div>
<!-- content end -->

</div>
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>


<?php echo '<script'; ?>
>
	$('#save-sure').on('click', function() {
    var postData = $('#doc-vld-msg').serializeArray();
    
    var url = "/admin/role/add";
    var jumpUrl = '/admin/role/index';
    post(url, postData, jumpUrl);
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
