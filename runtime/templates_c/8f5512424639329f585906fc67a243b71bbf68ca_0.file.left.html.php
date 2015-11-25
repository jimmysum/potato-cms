<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-25 20:07:03
         compiled from "/data/src/test/codeIgniter/application/views/admin/public/left.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5655a4674ffd53_65661821',
  'file_dependency' => 
  array (
    '8f5512424639329f585906fc67a243b71bbf68ca' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/public/left.html',
      1 => 1448244790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_5655a4674ffd53_65661821')) {
function content_5655a4674ffd53_65661821 ($_smarty_tpl) {
?>
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="/admin/main/index"><span class="am-icon-home"></span> 首页</a></li>
        <?php
$_from = $_smarty_tpl->tpl_vars['leftnav']->value;
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
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
'}"><span class="am-icon-<?php echo $_smarty_tpl->tpl_vars['val']->value['icon'];?>
"></span> <?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>
 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub <?php if ($_smarty_tpl->tpl_vars['val']->value['id'] == $_smarty_tpl->tpl_vars['open']->value) {?>am-in<?php }?>" id="collapse-<?php echo $_smarty_tpl->tpl_vars['val']->value['id'];?>
">
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
            <li><a href="/admin/<?php echo $_smarty_tpl->tpl_vars['va']->value['name'];?>
"><span class="am-icon-<?php if ($_smarty_tpl->tpl_vars['va']->value['icon']) {
echo $_smarty_tpl->tpl_vars['va']->value['icon'];
} else { ?>table<?php }?>"></span> <?php echo $_smarty_tpl->tpl_vars['va']->value['title'];?>
</a></li>
            <?php
$_smarty_tpl->tpl_vars['va'] = $__foreach_va_1_saved_local_item;
}
}
if ($__foreach_va_1_saved_item) {
$_smarty_tpl->tpl_vars['va'] = $__foreach_va_1_saved_item;
}
?>
          </ul>
        </li>
        <?php
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_local_item;
}
}
if ($__foreach_val_0_saved_item) {
$_smarty_tpl->tpl_vars['val'] = $__foreach_val_0_saved_item;
}
?>
        <li><a href="/admin/login/logout"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>今天公告，不要乱搞基啦！--Admin</p>
        </div>
      </div>

      <!-- <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the Amaze UI wiki!</p>
        </div>
      </div> -->
    </div>
  </div><?php }
}
