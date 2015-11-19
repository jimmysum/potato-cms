<?php /* Smarty version 3.1.28-dev/63, created on 2015-11-01 21:19:20
         compiled from "/var/www/html/codeIgniter/application/views/admin/public/left.html" */ ?>
<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_56361158c830e3_64216566',
  'file_dependency' => 
  array (
    '754a6eaa03f383968b25b8426d4428790e59a62a' => 
    array (
      0 => '/var/www/html/codeIgniter/application/views/admin/public/left.html',
      1 => 1446380314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false);
if ($_valid && !is_callable('content_56361158c830e3_64216566')) {
function content_56361158c830e3_64216566 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '183405160656361158c71646_90056782';
?>
<div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="/admin/main/index"><span class="am-icon-home"></span> 首页</a></li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-tasks"></span> 内容管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="/admin/cate/index"><span class="am-icon-table"></span> 分类管理</a></li>
            <li><a href="/admin/article/index"><span class="am-icon-table"></span> 文章管理</a></li>
            <li><a href="/admin/comment/index"><span class="am-icon-table"></span> 评论管理</a></li>
            <li><a href="/admin/article/index?recycle=1"><span class="am-icon-table"></span> 回收站</a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-user'}"><span class="am-icon-user"></span> 用户管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-user">
            <li><a href="/admin/ad/index"><span class="am-icon-table"></span> 用户管理</a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-admin'}"><span class="am-icon-list"></span> 权限管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-admin">
            <li><a href="/admin/admin/index"><span class="am-icon-table"></span> 管理员管理 </a></li>
            <li><a href="/admin/role/index"><span class="am-icon-table"></span> 角色管理 </a></li>
            <li><a href="/admin/admin/position"><span class="am-icon-table"></span> 节点管理 </a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-ad'}"><span class="am-icon-comments"></span> 广告管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-ad">
            <li><a href="/admin/ad/index"><span class="am-icon-table"></span> 广告管理</a></li>
            <li><a href="/admin/ad/position"><span class="am-icon-table"></span> 广告位</a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-nav'}"><span class="am-icon-group"></span> 导航管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-nav">
            <li><a href="/admin/nav/index"><span class="am-icon-table"></span> 导航管理</a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-back'}"><span class="am-icon-comments-o"></span> 备份管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-back">
            <li><a href="/admin/nav/index"><span class="am-icon-table"></span> 导航管理</a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-setting'}"><span class="am-icon-cogs"></span> 基本设置 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-setting">
            <li><a href="/admin/link/index"><span class="am-icon-table"></span> 友情链接 </a></li>
            <li><a href="/admin/system/index"><span class="am-icon-table"></span> 网站设置 </a></li>
            <li><a href="/admin/system/clean"><span class="am-icon-table"></span> 缓存清理 </a></li>
          </ul>
        </li>
        <li><a href="/admin/login/logout"><span class="am-icon-sign-out"></span> 注销</a></li>
      </ul>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>时光静好，与君语；细水流年，与君同。—— Amaze UI</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> wiki</p>
          <p>Welcome to the Amaze UI wiki!</p>
        </div>
      </div>
    </div>
  </div><?php }
}
