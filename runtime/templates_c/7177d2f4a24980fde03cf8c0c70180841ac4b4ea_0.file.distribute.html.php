<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-21 16:39:01
         compiled from "/var/www/html/codeIgniter/application/views/admin/role/distribute.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56502da56ef596_09634841',
  'file_dependency' => 
  array (
    '7177d2f4a24980fde03cf8c0c70180841ac4b4ea' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/role/distribute.html',
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
if ($_valid && !is_callable('content_56502da56ef596_09634841')) {
function content_56502da56ef596_09634841 ($_smarty_tpl) {
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
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form" id="doc-vld-msg">
          <table class="am-table am-table-striped ">
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
              <input type="checkbox" name="check[]" id="check<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="check(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
, 0)"  <?php if (in_array($_smarty_tpl->tpl_vars['val']->value['id'],$_smarty_tpl->tpl_vars['auth']->value)) {?>checked=checked<?php }?>/>
              <span><strong><?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
</strong></span>
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
              &nbsp;&nbsp;&nbsp;
              <input type="checkbox" name="check[]" id="check<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" parent="<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="check(<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
, 1)" <?php if (in_array($_smarty_tpl->tpl_vars['va']->value['id'],$_smarty_tpl->tpl_vars['auth']->value)) {?>checked<?php }?>/>
              <?php echo $_smarty_tpl->tpl_vars['va']->value['title'];?>

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
              <input type="checkbox" name="check[]" id="check<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" parent="<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
" onclick="check(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
, 2)"  <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['auth']->value)) {?>checked<?php }?>/>
              <?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>

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
        <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
        <input name="id" type="hidden" class="am-input-sm" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
        <?php }?>
        </form>
        <div class="am-margin">
          <button id="save-sure" type="submit" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
          <button id="save-forgive" type="button" class="am-btn am-btn-primary am-btn-xs" onclick="jumpUrl('/admin/role/index')">放弃保存</button>
        </div>
      </div>

    </div>
  </div>
  <!-- content end -->
</div>
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
>
  $('#save-sure').on('click', function() {
    var postData = $('#doc-vld-msg').serializeArray();
    
    $.post("/admin/role/distribute",
      postData,
      function(data,status){
        result(data, status, '/admin/role/index');
      });
  });

  function check(id, step)
  {
    if (step == 0) 
    {
      var check = $('input[parent="' + id + '"]');
      checkChild(id);
      check.each(function(){
        checkChild($(this).attr('value'));
      });
    }
    else if (step == 1)
    {
      checkChild(id);
      checkParent(id);
    }
    else if (step == 2)
    {
      var parentId = $('#check' + id).attr('parent');
      checkParent(id);
      checkParent(parentId);
      
    }
  }

  function checkParent(id)
  {
    var parentId = $('#check' + id).attr('parent');
    var sameCheck = $('input[parent="' + parentId + '"]');
    if ($('#check' + id).is(':checked') == false) 
    {
      var res = false;
      sameCheck.each(function(){
        if ($('#check' + $(this).attr('value')).is(':checked') == true) 
        {
          res = true;
        }
      });
      if (res == false) 
      {
          $('#check' + parentId).prop('checked',false);
      };
    }
    else
    {
      $('#check' + parentId).prop('checked',true);
    }
  }

  function checkChild(id)
  {
    var check = $('input[parent="' + id + '"]');
    if ($('#check' + id).is(':checked') == false) 
    {
      check.prop('checked',false);
    }
    else
    {
      check.prop('checked',true);
    }
  }

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
