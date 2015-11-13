<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-13 17:35:55
         compiled from "/data/src/test/codeIgniter/application/views/admin/Nav/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5645aefb750321_14729345',
  'file_dependency' => 
  array (
    '311557dd5ae7a75cf00484251ac8494c16b7c945' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/Nav/index.html',
      1 => 1447401768,
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
if ($_valid && !is_callable('content_5645aefb750321_14729345')) {
function content_5645aefb750321_14729345 ($_smarty_tpl) {
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
            <button id="add-cate" type="button" class="am-btn am-btn-default" onclick="jumpUrl('/admin/nav/add')"><span class="am-icon-plus"></span> 新增</button>
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" /></th>
                <th class="table-id">ID</th><th class="table-title">名称</th>
                <th class="table-type">排序</th>
                <th class="table-author am-hide-sm-only">状态</th>
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
$__foreach_val_0_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_0_total = $_smarty_tpl->_count($_from);
if ($__foreach_val_0_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_0_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
            <tr>
              <td><input type="checkbox" /></td>
              <td><span class="am-btn am-btn-xs am-btn-danger"><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</span></td>
              <td><a href="/admin/nav/add?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</a></td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sort'];?>
</td>
              <td class="am-hide-sm-only"><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php if ($_smarty_tpl->tpl_vars['val']->value['status'] == 1) {?>可用<?php } else { ?>不可用<?php }?></span></td>
              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="jumpUrl('/admin/nav/add?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
')"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <!-- <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="copy(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-copy"></span> 复制</button> -->
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
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
	              <td><input type="checkbox" /></td>
	              <td><span class="am-btn am-btn-xs am-btn-success am-radius"><?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
</span></td>
	              <td>└──<a href="/admin/cate/add?id=<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['va']->value['name'];?>
</a></td>
	              <td><?php echo $_smarty_tpl->tpl_vars['va']->value['sort'];?>
</td>
	              <td class="am-hide-sm-only"><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['va']->value['status'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php if ($_smarty_tpl->tpl_vars['va']->value['status'] == 1) {?>可用<?php } else { ?>不可用<?php }?></span></td>
	              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['va']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
	              <td>
	                <div class="am-btn-toolbar">
	                  <div class="am-btn-group am-btn-group-xs">
	                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="jumpUrl('/admin/nav/add?id=<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
')"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                      <!-- <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="copy(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-copy"></span> 复制</button> -->
                      <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
	                  </div>
	                </div>
	              </td>
	            </tr>
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
		            <tr>
		              <td><input type="checkbox" /></td>
		              <td><span class="am-btn am-btn-primary am-btn-xs am-round"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span></td>
		              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;└──<a href="/admin/cate/add?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></td>
		              <td><?php echo $_smarty_tpl->tpl_vars['va']->value['sort'];?>
</td>
		              <td class="am-hide-sm-only"><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php if ($_smarty_tpl->tpl_vars['v']->value['status'] == 1) {?>可用<?php } else { ?>不可用<?php }?></span></td>
		              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		              <td>
		                <div class="am-btn-toolbar">
		                  <div class="am-btn-group am-btn-group-xs">
		                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="jumpUrl('/admin/nav/add?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
')"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                        <!-- <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="copy(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-copy"></span> 复制</button> -->
                        <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)"><span class="am-icon-trash-o"></span> 删除</button>
		                  </div>
		                </div>
		              </td>
		            </tr>
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
    <div class="am-modal-bd">
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
  function copy(id)
  {

  }

  function del(id)
  {
    $('#my-confirm').modal({
        relatedTarget: this,
        onConfirm: function(options) {
          $.post("/admin/nav/del?id=" + id,
            '',
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