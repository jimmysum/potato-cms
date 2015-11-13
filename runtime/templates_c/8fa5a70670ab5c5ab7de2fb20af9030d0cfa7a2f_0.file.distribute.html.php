<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-13 20:21:54
         compiled from "/data/src/test/codeIgniter/application/views/admin/role/distribute.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5645d5e2942157_04021518',
  'file_dependency' => 
  array (
    '8fa5a70670ab5c5ab7de2fb20af9030d0cfa7a2f' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/role/distribute.html',
      1 => 1447417312,
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
if ($_valid && !is_callable('content_5645d5e2942157_04021518')) {
function content_5645d5e2942157_04021518 ($_smarty_tpl) {
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
          </div>
        </div>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-sm-12">
        <form class="am-form">
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
              <input type="checkbox" name="parent<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="check(<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
)"  <?php if (in_array($_smarty_tpl->tpl_vars['val']->value['id'],$_smarty_tpl->tpl_vars['auth']->value)) {?>checked=checked<?php }?>/>
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
              <input type="checkbox" name="check<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="check(<?php echo $_smarty_tpl->tpl_vars['va']->value['id'];?>
)" <?php if (in_array($_smarty_tpl->tpl_vars['va']->value['id'],$_smarty_tpl->tpl_vars['auth']->value)) {?>checked<?php }?>/>
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
              <input type="checkbox" name="check<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
" onclick="check(<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
)"  <?php if (in_array($_smarty_tpl->tpl_vars['v']->value['id'],$_smarty_tpl->tpl_vars['auth']->value)) {?>checked<?php }?>/>
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
<?php $_smarty_tpl->setupSubTemplate('file:admin/public/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false)->render();
?>

<?php echo '<script'; ?>
>
  function check(id)
  {
    var parent = $('input[name="parent' + id + '"]');
    var check = $('input[name="check' + id + '"]');
    if (parent.attr('checked') == 'checked' || parent.attr('checked') == true) 
    {
      parent.attr('checked', false);
      check.attr('checked', false); 
    }
    else
    {
      check.attr('checked', true); 
      parent.attr('checked', true);
    }
    // for (var i = 0; i < check.length; i++) {  
    //     if(check[i].checked == false){  
    //       check[i].checked = true;
    //     }
    //     else
    //     {
    //       check[i].checked = false;
    //     }
    // } 
  }

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
