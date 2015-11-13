<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-13 16:06:32
         compiled from "/data/src/test/codeIgniter/application/views/admin/link/add.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56459a08d86718_08049176',
  'file_dependency' => 
  array (
    '40e28e303cef1ac4cc020fea968e8127616116eb' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/link/add.html',
      1 => 1447389545,
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
if ($_valid && !is_callable('content_56459a08d86718_08049176')) {
function content_56459a08d86718_08049176 ($_smarty_tpl) {
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
      <li class="am-active"><a href="#tab1">添加内容</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">

		    <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              公司名称
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="name" type="text" class="am-input-sm" data-validation-message="公司名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['name'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top-sm">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            公司描述
          </div>
          <div class="am-u-sm-8 am-u-md-3 am-u-end">
            <textarea name="desc" rows="4"><?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['desc'];
}?></textarea>
          </div>
        </div>
        <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              公司链接
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="url" type="text" class="am-input-sm" data-validation-message="公司链接必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['url'];
}?>" required>
            </div>
        </div>
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">显示状态</div>
          <div class="am-u-sm-8 am-u-md-10">
            <div class="am-btn-group" data-am-button>
              <label class="am-btn am-btn-default am-btn-xs <?php if (!$_smarty_tpl->tpl_vars['cate']->value) {?> am-active<?php } elseif ($_smarty_tpl->tpl_vars['cate']->value && $_smarty_tpl->tpl_vars['cate']->value['status'] == 1) {?> am-active<?php }?>">
                <input type="radio" name="status" id="option1" value="1"> 正常
              </label>
              <label class="am-btn am-btn-default am-btn-xs<?php if ($_smarty_tpl->tpl_vars['cate']->value && $_smarty_tpl->tpl_vars['cate']->value['status'] == 0) {?> am-active<?php }?>">
                <input type="radio" name="status" id="option3" value="0"> 不显示
              </label>
            </div>
          </div>
        </div>
        
        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              排序
            </div>
            <div class="am-u-sm-8 am-u-md-2 am-u-end">
              <input name="sort" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['sort'];
}?>"  placeholder="默认50">
            </div>
        </div>
        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              logo
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="image" id="image" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['image'];
}?>"  placeholder="默认50">
              <span style="color:red;">200 * 70图片</span>
            </div>
            <div class="am-u-sm-12 am-u-md-6">
              <input name="upload" id="upload" type="button" class="am-input-sm" value="上传图片">
            </div>
        </div>
      </div>
		
    </div>
  </div>
  <?php if ($_smarty_tpl->tpl_vars['cate']->value) {?>
  <input name="id" type="hidden" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['cate']->value['id'];?>
">
  <?php }?>
  </form>
  <div class="am-margin">
    <button id="save-sure" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/cate/index')">放弃保存</button>
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
    var editor = K.editor({
                    allowFileManager : true //允许图片管理 开启后再挑选图片的时候可以直接从图片空间内挑选
                  });
    K('#upload').click(function() {
      editor.loadPlugin('image', function() {
        //图片弹窗的基本参数配置
        editor.plugin.imageDialog({
          imageUrl : K('#image').val(), //如果图片路径框内有内容直接赋值于弹出框的图片地址文本框
          showRemote : false,
          //点击弹窗内”确定“按钮所执行的逻辑
          clickFn : function(url, title, width, height, border, align) {
            K('#image').val(url);//获取图片地址
            editor.hideDialog(); //隐藏弹窗
          }
        });
      });
    });

  });
	$('#save-sure').on('click', function() {
		$.post("/admin/link/add",
			$('#doc-vld-msg').serializeArray(),
		  function(data,status){
        result(data, status, '/admin/link/index');
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
