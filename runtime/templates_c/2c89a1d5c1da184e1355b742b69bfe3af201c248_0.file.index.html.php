<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-21 17:30:26
         compiled from "/var/www/html/codeIgniter/application/views/admin/article/index.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_565039b3099026_09828798',
  'file_dependency' => 
  array (
    '2c89a1d5c1da184e1355b742b69bfe3af201c248' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/article/index.html',
      1 => 1448098225,
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
if ($_valid && !is_callable('content_565039b3099026_09828798')) {
function content_565039b3099026_09828798 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/html/codeIgniter/system/libs/smarty/libs/plugins/modifier.date_format.php';
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
            <button id="add-cate" type="button" class="am-btn am-btn-default"  onclick="jumpUrl('/admin/article/add')"><span class="am-icon-plus"></span> 新增</button>
            <?php if ($_smarty_tpl->tpl_vars['del']->value) {?>
            <button id="recover-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-heart"></span> 恢复</button>
            <?php } else { ?>
            <button id="recommend-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-star"></span> 推荐</button>
            <button id="top-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-thumbs-up"></span> 置顶</button>
            <button id="hot-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-bomb"></span> 热门</button>
            <button id="examine-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
            <?php }?>
            <button id="del-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>

      <form class="am-form" id="search-content">
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-form-group">
          <select data-am-selected="{btnSize: 'sm'}" name="cate_id" id="cate_id">
            <option value="0">所有类别</option>
            <?php
$_from = $_smarty_tpl->tpl_vars['cateList']->value;
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
" ><?php echo $_smarty_tpl->tpl_vars['val']->value['cate'];?>
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
">&nbsp;&nbsp;└-<?php echo $_smarty_tpl->tpl_vars['va']->value['cate'];?>
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
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" name="title" class="am-form-field" placeholder="输入文章标题" >
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button" id="search">搜索</button>
          </span>
        </div>
      </div>
      </form>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
          <table class="am-table am-table-striped am-table-hover table-main">
            <thead>
              <tr>
                <th class="table-check"><input type="checkbox" id="allCheck" name="check" /></th>
                <th class="table-id">ID</th><th class="table-title">标题</th>
                <th class="table-type">分类</th>
                <th class="table-type">发布人</th>
                <th class="table-type">推荐</th>
                <th class="table-type">置顶</th>
                <th class="table-type">热门</th>
                <th class="table-type">审核</th>
                <th class="table-type">排序</th>
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
$__foreach_val_2_saved_item = isset($_smarty_tpl->tpl_vars['val']) ? $_smarty_tpl->tpl_vars['val'] : false;
$_smarty_tpl->tpl_vars['val'] = new Smarty_Variable();
$__foreach_val_2_total = $_smarty_tpl->_count($_from);
if ($__foreach_val_2_total) {
foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$__foreach_val_2_saved_local_item = $_smarty_tpl->tpl_vars['val'];
?>
            <tr>
              <td><input type="checkbox" name="check" rid="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" /></td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
</td>
              <td><a href="/admin/article/add?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</a></td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['cate'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['username'];?>
</td>
              <td><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['val']->value['recommend'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php echo $_smarty_tpl->tpl_vars['val']->value['recommend_str'];?>
</span></td>
              <td><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['val']->value['top'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php echo $_smarty_tpl->tpl_vars['val']->value['top_str'];?>
</span></td>
              <td><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['val']->value['hot'] == 1) {?>am-btn-success<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php echo $_smarty_tpl->tpl_vars['val']->value['hot_str'];?>
</span></td>
              <td><span class="am-btn <?php if ($_smarty_tpl->tpl_vars['val']->value['audit'] == 1) {?>am-btn-success<?php } elseif ($_smarty_tpl->tpl_vars['val']->value['audit'] == 0) {?>am-btn-secondary<?php } else { ?>am-btn-warning<?php }?> am-round am-btn-xs"><?php echo $_smarty_tpl->tpl_vars['val']->value['audit_str'];?>
</span></td>
              <td><?php echo $_smarty_tpl->tpl_vars['val']->value['sort'];?>
</td>
              <td class="am-hide-sm-only"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['val']->value['time'],'%Y-%m-%d %H:%M:%S');?>
</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="jumpUrl('/admin/article/add?id=<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
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
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_2_saved_local_item;
}
}
if ($__foreach_val_2_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_2_saved_item;
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
    <div class="am-modal-bd">
      你，确定要删除这篇文章吗？
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
$('#search').on('click', function() {
    var titleobj = $('input[name="title"]');
    var title = titleobj[0].value;
    var cate_id = $('#cate_id').val();
    if (title == '' && cate_id == 0) 
    {
      alert('分类和标题至少选择一项！');
    }
    var recycle = $.getUrlParam('recycle');
    var url = '/admin/article/index?title=' + title + '&cate_id=' + cate_id;
    if (recycle == 1) 
    {
      url += '&recycle=1'; 
    }
    jumpUrl(url);
  });


  $('#allCheck').on('click', function(){
    var check = $('input[name="check"]');
    for (var i = 0; i < check.length; i++) {  
        if(check[0].checked){  
          check[i].checked = true;
        }
        else
        {
          check[i].checked = false;
        }
    } 
  })

  $('#examine-cate').on('click', function(){
    var data = getId();
    checkPost(data, 1);
  })

  $('#recommend-cate').on('click', function(){
    var data = getId();
    checkPost(data, 2);
  })

  $('#top-cate').on('click', function(){
    var data = getId();
    checkPost(data, 3);
  })

  $('#hot-cate').on('click', function(){
    var data = getId();
    checkPost(data, 4);
  })

  $('#del-cate').on('click', function(){
    var data = getId();
    del(data);
  })

  $('#recover-cate').on('click', function(){
    var data = getId();
    var url = "/admin/article/notDelete?recover=1&id=" + data;
    $.post(url,
      '',
      function(data,status){
        result(data, status)
      });
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

  function checkPost(data, type)
  {
    $.post("/admin/article/check?type=" + type + "&id=" + data,
      '',
      function(data,status){
        result(data,status);
      });
  }

  function del(id)
  {
    <?php if ($_smarty_tpl->tpl_vars['del']->value) {?>var url = "/admin/article/del?id=" + id;<?php } else { ?>var url = "/admin/article/notDelete?id=" + id;<?php }?>
    $('#my-confirm').modal({
        relatedTarget: this,
        onConfirm: function(options) {
          $.post(url,
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
