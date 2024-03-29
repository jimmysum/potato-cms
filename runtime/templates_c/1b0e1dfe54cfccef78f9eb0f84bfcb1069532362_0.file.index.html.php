<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-26 10:52:42
         compiled from "/data/src/test/codeIgniter/application/views/admin/user/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_565673fa29aea6_56291350',
  'file_dependency' => 
  array (
    '1b0e1dfe54cfccef78f9eb0f84bfcb1069532362' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/user/index.html',
      1 => 1448244790,
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
if ($_valid && !is_callable('content_565673fa29aea6_56291350')) {
function content_565673fa29aea6_56291350 ($_smarty_tpl) {
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

    <div class="am-g">
      <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
          <div class="am-btn-group am-btn-group-xs">
            <!-- <button id="add-cate" type="button" class="am-btn am-btn-default" onclick="jumpUrl('/admin/admin/add')"><span class="am-icon-plus"></span> 新增</button> -->
            <button id="examine-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 启用</button>
            <button id="del-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 禁用</button>
          </div>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" name="title" class="am-form-field" placeholder="输入用户名" >
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
                <th class="table-check"><input type="checkbox" id="allCheck" name="check" /></th>
                <th class="table-id">ID</th>
                <th class="table-title">用户名</th>
                <th class="table-title">名称</th>
                <th class="table-type">邮箱</th>
                <th class="table-type">性别</th>
                <th class="table-type">积分</th>
                <th class="table-type">登陆IP</th>
                <th class="table-type">最后登陆时间</th>
                <th class="table-type">状态</th>
                <th class="table-date am-hide-sm-only">创建时间</th>
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
              <td><input type="checkbox" name="check" rid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" /></td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['user_login'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['user_nicename'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['user_email'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sex'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['score'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['last_login_ip'];?>
</td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['last_login_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
              <td><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['val']->value['user_status'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php echo $_smarty_tpl->tpl_vars['val']->value['status_str'];?>
</span></td>
              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['create_time'],'%Y-%m-%d %H:%M:%S');?>
</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="del(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
, 1)"><span class="am-icon-pencil-square-o"></span> 启用</button>
                    <!-- <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="copy(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"><span class="am-icon-copy"></span> 复制</button> -->
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
, 0)"><span class="am-icon-trash-o"></span> 禁用</button>
                  </div>
                </div>
              </td>
            </tr>
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
              <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

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
  $('#allCheck').on('click', function(){
    var check = $('input[name="check"]');
    if ($('#allCheck').is(':checked') == false) 
    {
      check.prop('checked',false);
    }
    else
    {
      check.prop('checked',true);
    } 
  })

  $('#examine-cate').on('click', function(){
    var data = getId();
    del(data, 1);
  })

  $('#del-cate').on('click', function(){
    var data = getId();
    del(data, 0);
  })

  function getId()
  {
    var check = $('input[name="check"]');
    var data = '';
    for (var i = 0; i < check.length; i++) {  
        if(check[i].checked){
          if (data) {
            data += ',' + $(check[i]).attr('rid');
          }
          else
          {
            data = $(check[i]).attr('rid');
          }
        }
    } 
    return data;
  }

  function checkPost(data, status)
  {
    $.post("/admin/user/enable?status=" + status + "&id=" + data,
      '',
      function(data,status){
        result(data,status, '');
      });

  }

  function del(id, status)
  {
    var msg = '';
    if (status == 1) 
    {
      msg = '确定要启用这个用户吗？';
    }
    else
    {
      msg = '确定要禁用这个用户吗？';
    }
    $('#alert-msg').html(msg);

    var url = "/admin/user/enable?id=" + id + '&status=' + status;
    $('#my-confirm').modal({
        relatedTarget: this,
        onConfirm: function(options) {
          post(url);
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
