<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-13 16:09:18
         compiled from "/data/src/test/codeIgniter/application/views/admin/system/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56459aae4534b5_91975741',
  'file_dependency' => 
  array (
    'd2d1a3a3bc309062434d2f4c47490265da6ebc86' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/system/index.html',
      1 => 1447397004,
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
if ($_valid && !is_callable('content_56459aae4534b5_91975741')) {
function content_56459aae4534b5_91975741 ($_smarty_tpl) {
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
    <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表单</strong> / <small>form</small></div>
    <div class="am-alert am-alert-success am-u-end success-msg" id="success-msg">添加成功！</div>
  </div>

  <form class="am-form" id="doc-vld-msg">
  <div class="am-tabs am-margin" data-am-tabs>
    <ul class="am-tabs-nav am-nav am-nav-tabs">
      <li class="am-active"><a href="#tab1">公司信息</a></li>
      <li><a href="#tab3">网站信息</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站名称
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="name" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['name'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站域名
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="domain" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['domain'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              公司地址
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="address" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['address'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站版权信息
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="copyright" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['copyright'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              公司电话
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="phone" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['phone'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              公司Email
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="email" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['email'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              公司QQ
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="qq" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['qq'];
}?>" required>
            </div>
        </div>
      </div>
    
      <div class="am-tab-panel am-fade" id="tab3">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input name="title" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['title'];
}?>">
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站关键词
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input name="keyword" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['keyword'];
}?>">
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              网站描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea name="desc" rows="4"><?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['desc'];
}?></textarea>
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              关于我们
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea name="content" rows="4" cols="50"><?php if ($_smarty_tpl->tpl_vars['data']->value) {
echo $_smarty_tpl->tpl_vars['data']->value['content'];
}?></textarea>
            </div>
          </div>
      </div>

    </div>
  </div>
  </form>
  <div class="am-margin">
    <button id="save-sure" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/system/index')">放弃保存</button>
  </div>
</div>
<!-- content end -->

</div>
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['picker_style_url']->value;?>
kindeditor/kindeditor-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['picker_style_url']->value;?>
kindeditor/lang/zh_CN.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
  var editor;
  KindEditor.ready(function(K) {
    editor = K.create('textarea[name="content"]', {
      allowFileManager : true
    });
  });
  $('#save-sure').on('click', function() {
    var postData = $('#doc-vld-msg').serializeArray();
    postData.push({
      "name": "content",
      "value": editor.html()
    });
    $.post("/admin/system/index",
      postData,
      function(data,status){
        result(data, status, '');
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
