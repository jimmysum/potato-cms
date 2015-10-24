<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-24 11:50:28
         compiled from "/data/src/test/codeIgniter/application/views/admin/nav/add.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562b0004494b78_68000644',
  'file_dependency' => 
  array (
    '29b2a269bd7d5dcc007c0ba0e50a2d7c47a85d73' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/nav/add.html',
      1 => 1445658625,
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
if ($_valid && !is_callable('content_562b0004494b78_68000644')) {
function content_562b0004494b78_68000644 ($_smarty_tpl) {
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
      <li class="am-active"><a href="#tab1">分类内容</a></li>
      <li><a href="#tab3">SEO 选项</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">上级分类</div>
          <div class="am-u-sm-8 am-u-md-10">
            <select data-am-selected="{btnSize: 'sm',maxHeight: 200}" name="pid">
              <option value="0">请选择分类</option>
              <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_val_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cate']->value && $_smarty_tpl->tpl_vars['cate']->value['pid'] == $_smarty_tpl->tpl_vars['val']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
              	  <?php
$_from = $_smarty_tpl->tpl_vars['val']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_va_1_saved_item = isset($_smarty_tpl->tpl_vars['va']) ? $_smarty_tpl->tpl_vars['va'] : false;
$_smarty_tpl->tpl_vars['va'] = new Smarty_Variable();
$__foreach_va_1_total = $_smarty_tpl->_count($_from);
if ($__foreach_va_1_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['va']->value) {
$__foreach_va_1_saved_local_item = $_smarty_tpl->tpl_vars['va'];
?>
	              <option value="<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['cate']->value && $_smarty_tpl->tpl_vars['cate']->value['pid'] == $_smarty_tpl->tpl_vars['va']->value['id']) {?> selected<?php }?>>&nbsp;&nbsp;└-<?php echo $_smarty_tpl->tpl_vars['va']->value['name'];?>
</option>
	              <?php
$_smarty_tpl->tpl_vars['va'] = $__foreach_va_1_saved_local_item;
}
}
if ($__foreach_va_1_saved_item) {
$_smarty_tpl->tpl_vars['va'] = $__foreach_va_1_saved_item;
}
?>
              <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?>
            </select>
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
        
		<div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              分类名称
            </div>
            <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <input name="name" type="text" class="am-input-sm" data-validation-message="分类名称必填" placeholder="输入分类名称" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['name'];
}?>" required>
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
      </div>
		
      <div class="am-tab-panel am-fade" id="tab3">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input name="seo_title" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['seo_title'];
}?>">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input name="seo_keyword" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['seo_keyword'];
}?>">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea name="seo_desc" rows="4"><?php if ($_smarty_tpl->tpl_vars['cate']->value) {
echo $_smarty_tpl->tpl_vars['cate']->value['seo_desc'];
}?></textarea>
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
    <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs">放弃保存</button>
  </div>
</div>
<!-- content end -->

</div>
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
>
	$('#save-sure').on('click', function() {
		$.post("/admin/nav/add",
			$('#doc-vld-msg').serializeArray(),
		  function(data,status){
        var res =  jQuery.parseJSON(data);
        if (status == 'success')
        {
          if (res.ret == 0) 
          {
            $('#success-msg').removeClass('am-alert-danger');
            $('#success-msg').addClass('am-alert-success');
            $('#success-msg').html(res.msg);
            $('#success-msg').fadeIn(2000, function() {
              window.location.href = '/admin/nav/index';
            });
          }
          else 
          {
            $('#success-msg').removeClass('am-alert-success');
            $('#success-msg').addClass('am-alert-danger');
            $('#success-msg').html(res.msg);
            $('#success-msg').fadeIn(1000, function() {
              $('#success-msg').fadeOut(1000);
            });
          }
        }
        
		  });
	});

	$('#save-forgive').on('click', function() {
		window.location.href='/admin/nav/index';
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
