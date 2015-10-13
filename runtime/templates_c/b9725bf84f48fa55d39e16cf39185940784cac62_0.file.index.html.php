<?php /* Smarty version 3.1.28-dev/63, created on 2015-10-13 18:39:42
         compiled from "/data/src/test/codeIgniter/application/views/admin/cate/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_561cdf6ed88d21_43971818',
  'file_dependency' => 
  array (
    'b9725bf84f48fa55d39e16cf39185940784cac62' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/cate/index.html',
      1 => 1444730738,
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
if ($_valid && !is_callable('content_561cdf6ed88d21_43971818')) {
function content_561cdf6ed88d21_43971818 ($_smarty_tpl) {
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
    </div>

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <button id="add-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-plus"></span> 新增</button>
            <button id="save-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-save"></span> 保存</button>
            <button id="examine-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
            <button id="del-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-form-group">
          <select data-am-selected="{btnSize: 'sm'}">
            <option value="option1">所有类别</option>
            <option value="option2">IT业界</option>
            <option value="option3">数码产品</option>
            <option value="option3">笔记本电脑</option>
            <option value="option3">平板电脑</option>
            <option value="option3">只能手机</option>
            <option value="option3">超极本</option>
          </select>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
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
                <th class="table-id">ID</th><th class="table-title">分类名称</th>
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
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
              <td><a href="#"><?php echo $_smarty_tpl->tpl_vars['val']->value['cate'];?>
</a></td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sort'];?>
</td>
              <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
</td>
              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
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
	              <td><?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
</td>
	              <td>&nbsp;└─<a href="#"><?php echo $_smarty_tpl->tpl_vars['va']->value['cate'];?>
</a></td>
	              <td><?php echo $_smarty_tpl->tpl_vars['va']->value['sort'];?>
</td>
	              <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['val']->value['status'];?>
</td>
	              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['va']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
	              <td>
	                <div class="am-btn-toolbar">
	                  <div class="am-btn-group am-btn-group-xs">
	                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
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
		              <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
		              <td>&nbsp;└─<a href="#"><?php echo $_smarty_tpl->tpl_vars['v']->value['cate'];?>
</a></td>
		              <td><?php echo $_smarty_tpl->tpl_vars['va']->value['sort'];?>
</td>
		              <td class="am-hide-sm-only"><?php echo $_smarty_tpl->tpl_vars['v']->value['status'];?>
</td>
		              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
		              <td>
		                <div class="am-btn-toolbar">
		                  <div class="am-btn-group am-btn-group-xs">
		                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
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

<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
>
	$('#add-cate').on('click', function() {
		window.location.href='/admin/cate/add';
  	});

  function edit(id)
  {
    window.location.href='/admin/cate/add?id=' + id;
  }

  function copy(id)
  {

  }

  function del(id)
  {

  }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
