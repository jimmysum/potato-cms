<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-21 16:48:25
         compiled from "/var/www/html/codeIgniter/application/views/admin/back/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56502fd98aacf7_76451012',
  'file_dependency' => 
  array (
    '0af6ece705f40be438abebe29fe7af57cdc732dc' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/back/index.html',
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
if ($_valid && !is_callable('content_56502fd98aacf7_76451012')) {
function content_56502fd98aacf7_76451012 ($_smarty_tpl) {
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

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button id="database-optimalize" type="button" class="am-btn am-btn-default" onclick="selectMethod(1)"><span class="am-icon-plus"></span> 优化数据库</button>
            <button id="tables-optimalize" type="button" class="am-btn am-btn-default" onclick="selectMethod(2)"><span class="am-icon-star"></span> 优化表</button>
            <button id="tables-repair" type="button" class="am-btn am-btn-default" onclick="selectMethod(3)"><span class="am-icon-thumbs-up"></span> 修复表</button>
            <button id="tables-back" type="button" class="am-btn am-btn-default" onclick="selectMethod(4)"><span class="am-icon-bomb"></span> 备份表</button>
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
                <th class="table-id">表名</th>
                <th class="table-title">引擎</th>
                <th class="table-title">总数据</th>
                <th class="table-type">数据总大小</th>
                <th class="table-author am-hide-sm-only">索引大小</th>
                <th class="table-date am-hide-sm-only">自增最大值</th>
                <th class="table-set">编码</th>
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
              <td><input type="checkbox" name="tables[]" data="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
"/></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Name'];?>
</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Engine'];?>
</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Rows'];?>
条</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Data_length'];?>
K</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Index_length'];?>
K</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Auto_increment'];?>
</span></td>
              <td><span><?php echo $_smarty_tpl->tpl_vars['v']->value['Collation'];?>
</span></td>
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
