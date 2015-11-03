<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-03 20:26:42
         compiled from "/data/src/test/codeIgniter/application/views/admin/node/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5638a8021a0a46_18208230',
  'file_dependency' => 
  array (
    '7a9412f8414cdb24eac06ed4abffb96ec5dd381f' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/node/index.html',
      1 => 1446553600,
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
if ($_valid && !is_callable('content_5638a8021a0a46_18208230')) {
function content_5638a8021a0a46_18208230 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3902972495638a802149f29_00226561';
$_smarty_tpl->setupSubTemplate('file:admin/public/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <?php $_smarty_tpl->setupSubTemplate('file:admin/public/left.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
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
            <button id="add-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main box-shadow">
          <tbody>
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
            <tr>
              <td>
              <span><strong><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
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
            <tr>
              <td>
              &nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['va']->value['title'];?>

              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
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
              <td>
              <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
              <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_local_item;
}
}
if ($__foreach_v_2_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved_item;
}
?>
            </tr>
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
            
          </tbody>
        </table>
        <div class="am-cf">
          <div class="am-fr">
              <ul class="am-pagination">
              </ul>
          </div>
        </div>
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
    <div class="am-modal-bd">
      你，确定要删除这条记录吗？
    </div>
    <div class="am-modal-footer">
      <span class="am-modal-btn" data-am-modal-cancel>取消</span>
      <span class="am-modal-btn" data-am-modal-confirm>确定</span>
    </div>
  </div>
</div>

<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
>
	$('#add-cate').on('click', function() {
		window.location.href='/admin/node/add';
  	});

  function edit(id)
  {
    window.location.href='/admin/node/add?id=' + id;
  }

  function result(data, status)
  {
    var res =  jQuery.parseJSON(data);
    if (status == 'success')
    {
      if (res.ret == 0) 
      {
        $('#success-msg').removeClass('am-alert-danger');
        $('#success-msg').addClass('am-alert-success');
        $('#success-msg').html(res.msg);
        $('#success-msg').fadeIn(2000, function() {
          location.reload();
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
  }

  function del(id)
  {
    var url = "/admin/node/del?id=" + id;
    $('#my-confirm').modal({
        relatedTarget: this,
        onConfirm: function(options) {
          $.post(url,
            '',
            function(data,status){
              result(data, status)
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
