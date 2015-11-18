<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-18 18:51:15
         compiled from "/data/src/test/codeIgniter/application/views/admin/Restore/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_564c58239747a7_46220072',
  'file_dependency' => 
  array (
    '32ea44ccc96c39c05d77fc8ebdb7e55c0298293f' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/Restore/index.html',
      1 => 1447843874,
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
if ($_valid && !is_callable('content_564c58239747a7_46220072')) {
function content_564c58239747a7_46220072 ($_smarty_tpl) {
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
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">表格</strong> / <small>Table</small></div>
      <div class="am-alert am-alert-success am-u-end success-msg" id="success-msg">添加成功！</div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button id="database-optimalize" type="button" class="am-btn am-btn-default" onclick="selectMethod(1)"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form" id="doc-vld-msg">
          <table class="am-table am-table-striped am-table-hover table-main">
          <thead>
              <tr>
                <th class="table-check"><input type="checkbox" id="check" onclick="checkAll();"/></th>
                <th class="table-title">文件名</th>
                <th class="table-title">数据大小</th>
                <th class="table-type">相对路径</th>
                <th class="table-date am-hide-sm-only">修改日期</th>
                <th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$__foreach_v_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_v_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
            <tr>
              <td><input type="checkbox" name="tables[]" data="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"/></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['size'];?>
K</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['relative_path'];?>
</span></td>
              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['date'],'%Y-%m-%d %H:%M:%S');?>
</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <!-- <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="jumpUrl('/admin/ad/add?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['ad_id'];?>
')"><span class="am-icon-pencil-square-o"></span> 编辑</button> -->
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
                </div>
              </td>
            </tr>
            <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
?>
            
          </tbody>
        </table>
          <hr />
          <p>注：.....</p>
        </form>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>
<div class="am-modal am-modal-confirm" tabindex="-1" id="my-confirm">
  <div class="am-modal-dialog">
    <div class="am-modal-hd">温馨提示</div>
    <div class="am-modal-bd" id="alert-msg">
      你，确定要删除这条记录吗？
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
  </div>
</div>

<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
>
  function checkAll()
  {
    var check = $('input[data="checkbox"]');
    if ($('#check').is(':checked') == false) 
    {
      check.prop('checked',false);
    }
    else
    {
      check.prop('checked',true);
    }
  }

  function selectMethod(id)
  {
    var url = '';
    var msg = '确定要备份这些表吗？';
    if (id == 1) 
    {
      url = "/admin/back/optimize_database";
      msg = "确定要优化数据库吗？";
    }
    else if (id == 2)
    {
      url = "/admin/back/optimize_tables";
      msg = "确定要优化这些表吗？";
    }
    else if (id == 3)
    {
      url = "/admin/back/repair_tables";
      msg = "确定要修复这些表吗？";
    }
    else if (id == 4)
    {
      url = "/admin/back/backup";
      msg = "确定要备份这些表吗？";
    }
    else 
    {
      $('#success-msg').removeClass('am-alert-success');
      $('#success-msg').addClass('am-alert-danger');
      $('#success-msg').html('无效选择！');
      $('#success-msg').fadeIn(1000, function() {
        $('#success-msg').fadeOut(1000);
      });
      return false;
    }

    $('#alert-msg').html(msg);
    $('#my-confirm').modal({
      relatedTarget: this,
      onConfirm: function(options) {
        $.post(url,
          $('#doc-vld-msg').serializeArray(),
          function(data,status){
            result(data, status, '');
          });
        
      },
      // closeOnConfirm: false,
      onCancel: function() {
        
      }
    });
  }

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
