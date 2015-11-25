<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-24 11:51:34
         compiled from "/data/src/test/codeIgniter/application/views/admin/article/add.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5653dec6bbb6a2_73290644',
  'file_dependency' => 
  array (
    '71f0479145e591ae3d96279d37c15a384aca9a27' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/article/add.html',
      1 => 1448337092,
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
if ($_valid && !is_callable('content_5653dec6bbb6a2_73290644')) {
function content_5653dec6bbb6a2_73290644 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/data/src/test/codeIgniter/system/libs/smarty/libs/plugins/modifier.date_format.php';
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
      <li class="am-active"><a href="#tab1">基本选项</a></li>
      <li><a href="#tab2">文章内容</a></li>
      <li><a href="#tab3">SEO 选项</a></li>
    </ul>
    <div class="am-tabs-bd">
      <div class="am-tab-panel am-fade am-in am-active" id="tab1">
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">分类</div>
          <div class="am-u-sm-8 am-u-md-10">
            <select data-am-selected="{btnSize: 'sm',maxHeight: 180}" name="cate_id" required>
              <option value="">请选择分类</option>
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
              <?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 1) {?> 
              <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['cate_id'] == $_smarty_tpl->tpl_vars['val']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['val']->value['cate'];?>
</option>
              <?php } else { ?>
              <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['cate_id'] == $_smarty_tpl->tpl_vars['val']->value['id']) {?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['val']->value['cate'];?>
</option>
              <?php }?>
              <?php }?>
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
                  <?php if ($_smarty_tpl->tpl_vars['va']->value['status'] == 1) {?> 
                  <option value="<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['cate_id'] == $_smarty_tpl->tpl_vars['va']->value['id']) {?> selected<?php }?>>&nbsp;&nbsp;└-<?php echo $_smarty_tpl->tpl_vars['va']->value['cate'];?>
</option>
                  <?php } else { ?>
                  <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['cate_id'] == $_smarty_tpl->tpl_vars['va']->value['id']) {?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" selected>&nbsp;&nbsp;└-<?php echo $_smarty_tpl->tpl_vars['va']->value['cate'];?>
</option>
                  <?php }?>
                  <?php }?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['va']->value['child'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_2_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_2_total = $_smarty_tpl->_count($_from);
if ($__foreach_v_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_2_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?> 
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['cate_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?> selected<?php }?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└-<?php echo $_smarty_tpl->tpl_vars['v']->value['cate'];?>
</option>
                    <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['cate_id'] == $_smarty_tpl->tpl_vars['v']->value['id']) {?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" selected>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└-<?php echo $_smarty_tpl->tpl_vars['v']->value['cate'];?>
</option>
                    <?php }?>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
?>
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
          <div class="am-u-sm-4 am-u-md-2 am-text-right">审核状态</div>
          <div class="am-u-sm-8 am-u-md-10">
            <div class="am-btn-group" data-am-button>
              <label class="am-btn am-btn-default am-btn-xs <?php if (!$_smarty_tpl->tpl_vars['article']->value) {?> am-active<?php } elseif ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['audit'] == 1) {?> am-active<?php }?>">
                <input type="radio" name="audit" id="option1" value="1"> 通过
              </label>
              <label class="am-btn am-btn-default am-btn-xs <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['audit'] == 2) {?> am-active<?php }?>">
                <input type="radio" name="audit" id="option3" value="2"> 不通过
              </label>
              <label class="am-btn am-btn-default am-btn-xs <?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['audit'] == 0) {?> am-active<?php }?>">
                <input type="radio" name="audit" id="option3" value="0"> 待审核
              </label>
            </div>
          </div>
        </div>
        
        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">推荐类型</div>
          <div class="am-u-sm-8 am-u-md-10">
            <div class="am-btn-group" data-am-button>
              <label class="am-btn am-btn-default am-btn-xs am-active<?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['comment'] == 1) {?> am-active<?php }?>">
                <input type="checkbox" name="comment" value="1"> 允许评论
              </label>
              <label class="am-btn am-btn-default am-btn-xs<?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['top'] == 1) {?> am-active<?php }?>">
                <input type="checkbox" name="top" value="1"> 置顶
              </label>
              <label class="am-btn am-btn-default am-btn-xs<?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['recommend'] == 1) {?> am-active<?php }?>">
                <input type="checkbox" name="recommend" value="1"> 推荐
              </label>
              <label class="am-btn am-btn-default am-btn-xs<?php if ($_smarty_tpl->tpl_vars['article']->value && $_smarty_tpl->tpl_vars['article']->value['hot'] == 1) {?> am-active<?php }?>">
                <input type="checkbox" name="hot" value="1"> 热门
              </label>
            </div>
          </div>
        </div>

        
        <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              排序
            </div>
            <div class="am-u-sm-8 am-u-md-2 am-u-end">
              <input name="sort" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['sort'];
}?>"  placeholder="默认50">
            </div>
        </div>

        <div class="am-g am-margin-top">
          <div class="am-u-sm-4 am-u-md-2 am-text-right">
            发布时间
          </div>
          <div class="am-u-sm-8 am-u-md-3 am-u-end">
              <div class="am-form-group am-form-icon">
                <i class="am-icon-calendar"></i>
                <input name="publish_time" type="text" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['article']->value['publish_time'],'%Y-%m-%d %H:%M:%S');
}?>" id="datetimepicker" class="am-form-field am-input-sm form-datetime" placeholder="时间">
              </div>
          </div>
        </div>

      </div>
		
      <div class="am-tab-panel am-fade" id="tab2">
        <form class="am-form">
          <div class="am-g am-margin-top am-form-group">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input type="text" class="am-input-sm"  name="title" data-validation-message="文章标题必填" placeholder="输入文章标题" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['title'];
}?>" required>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              文章作者
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end col-end">
              <input type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['username'];
} else {
echo $_SESSION['user']['info']['username'];
}?>" readonly>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              内容摘要
            </div>
            <div class="am-u-sm-8 am-u-md-4">
              <input type="text" class="am-input-sm" name="desc" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['desc'];
}?>">
            </div>
            <div class="am-u-sm-12 am-u-md-6">不填写则自动截取内容前255字符</div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              正文内容
            </div>
            <div class="am-u-sm-16 am-u-md-6 am-u-end">
              <textarea rows="16" name="content"><?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['content'];
}?></textarea>
            </div>
          </div>

        </form>
      </div>
      <div class="am-tab-panel am-fade" id="tab3">
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 标题
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input name="seo_title" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['seo_title'];
}?>">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 关键字
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <input name="seo_keyword" type="text" class="am-input-sm" value="<?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['seo_keyword'];
}?>">
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">
              SEO 描述
            </div>
            <div class="am-u-sm-8 am-u-md-4 am-u-end">
              <textarea name="seo_desc" rows="4"><?php if ($_smarty_tpl->tpl_vars['article']->value) {
echo $_smarty_tpl->tpl_vars['article']->value['seo_desc'];
}?></textarea>
            </div>
          </div>
      </div>

      <?php if ($_smarty_tpl->tpl_vars['article']->value) {?>
      <input name="id" type="hidden" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
">
      <?php }?>
    </div>
  </div>
  </form>
  <div class="am-margin">
    <button id="save-sure" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/article/index')">放弃保存</button>
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
  $(function() {
    $.fn.datetimepicker.dates['zh-CN'] = {
      days: ["星期日", "星期一", "星期二", "星期三", "星期四", "星期五", "星期六", "星期日"],
      daysShort: ["周日", "周一", "周二", "周三", "周四", "周五", "周六", "周日"],
      daysMin:  ["日", "一", "二", "三", "四", "五", "六", "日"],
      months: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
      monthsShort: ["一月", "二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"],
      today: "今日",
      suffix: [],
      meridiem: ["上午", "下午"]
    };
    $('.form-datetime').datetimepicker({
      language:  'zh-CN', 
      format: 'yyyy-mm-dd hh:ii:ss',
      autoclose: true,
      todayBtn: true,
      pickerPosition: 'bottom-left'
    });
  });
	$('#save-sure').on('click', function() {
    var postData = $('#doc-vld-msg').serializeArray();
    postData.push({
      "name": "content",
      "value": editor.html()
    });
    var jumpUrl = '/admin/article/index';
    var url = "/admin/article/add";
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
