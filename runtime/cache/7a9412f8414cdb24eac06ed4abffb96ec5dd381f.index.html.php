<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_5638adaed292d9_87992113',
  'file_dependency' => 
  array (
    '7a9412f8414cdb24eac06ed4abffb96ec5dd381f' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/node/index.html',
      1 => 1446553600,
      2 => 'file',
    ),
    '680e9ab0d86fa35caf24de669fd8861b3ae70099' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/public/header.html',
      1 => 1445688625,
      2 => 'file',
    ),
    '8f5512424639329f585906fc67a243b71bbf68ca' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/public/left.html',
      1 => 1446536544,
      2 => 'file',
    ),
    'c80f31628ed07a54fe32cd6cb183997510fcb174' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/public/footer.html',
      1 => 1445251977,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true);
if ($_valid && !is_callable('content_5638adaed292d9_87992113')) {
function content_5638adaed292d9_87992113 ($_smarty_tpl) {
?>
<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin index Examples</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="http://ci.ci.lamall.com/style/admin/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="http://ci.ci.lamall.com/style/admin/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="http://ci.ci.lamall.com/style/admin/css/amazeui.min.css"/>
  <link rel="stylesheet" href="http://ci.ci.lamall.com/style/admin/css/admin.css">
  <link rel="stylesheet" href="http://ci.ci.lamall.com/style/picker/datetimepicker/css/amazeui.datetimepicker.css">
  <link rel="stylesheet" href="http://ci.ci.lamall.com/style/picker/kindeditor/themes/default/default.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>Amaze UI</strong> <small>后台管理模板</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <!-- <li><a href="#"><span class="am-icon-user"></span> 资料</a></li> -->
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="/admin/login/logout"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
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
            <li><a href="/admin/node/index"><span class="am-icon-table"></span> 节点管理 </a></li>
          </ul>
        </li>
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#nav-ad'}"><span class="am-icon-comments"></span> 广告管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="nav-ad">
            <li><a href="/admin/ad/index"><span class="am-icon-table"></span> 广告管理</a></li>
            <li><a href="/admin/node/index"><span class="am-icon-table"></span> 广告位</a></li>
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
  </div>
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
                        <tr>
              <td>
              <span><strong>权限管理</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(1)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(1)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;管理员管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(2)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(2)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(3)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(3)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(4)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(4)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(5)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(5)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(7)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(7)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;角色管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(8)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(8)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(9)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(9)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(10)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(10)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(11)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(11)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(12)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(12)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              分配权限
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(18)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(18)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;节点管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(13)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(13)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(14)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(14)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(15)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(15)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(16)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(16)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(17)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(17)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    <tr>
              <td>
              <span><strong>内容管理</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(19)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(19)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;分类管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(31)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(31)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(32)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(32)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(33)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(33)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(34)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(34)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(35)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(35)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;文章管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(36)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(36)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(37)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(37)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(38)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(38)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(39)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(39)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(40)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(40)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;回收站
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(42)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(42)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(43)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(43)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              恢复
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(44)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(44)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              清空
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(45)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(45)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;评论管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(46)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(46)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(47)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(47)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(48)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(48)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    <tr>
              <td>
              <span><strong>广告管理</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(20)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(20)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;广告管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(21)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(21)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(22)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(22)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(23)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(23)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(24)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(24)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(25)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(25)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;广告位
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(26)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(26)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(27)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(27)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(28)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(28)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(29)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(29)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(30)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(30)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    <tr>
              <td>
              <span><strong>用户管理</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(49)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(49)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;用户管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(50)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(50)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(51)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(51)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              拉黑
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(52)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(52)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              启用
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(53)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(53)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    <tr>
              <td>
              <span><strong>基本设置</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(54)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(54)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;网站设置
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(55)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(55)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              显示
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(56)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(56)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;个人信息
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(57)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(57)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改昵称
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(58)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(58)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改密码
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(60)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(60)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;友情链接
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(61)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(61)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(62)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(62)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              增加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(63)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(63)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(64)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(64)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(65)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(65)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;缓存管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(66)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(66)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              更新缓存
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(67)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(67)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    <tr>
              <td>
              <span><strong>导航管理</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(68)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(68)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;导航栏管理
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(69)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(69)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(70)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(70)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              添加
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(71)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(71)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              修改
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(72)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(72)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(73)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(73)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    <tr>
              <td>
              <span><strong>备份管理</strong></span>
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(82)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(82)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
            </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;数据备份
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(83)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(83)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              备份
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(84)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(84)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                        <tr>
              <td>
              &nbsp;&nbsp;&nbsp;数据恢复
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(85)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(85)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              列表
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(86)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(86)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              删除
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(87)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(87)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              恢复
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(88)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(88)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                            <td>
              下载
              <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(89)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(89)"><span class="am-icon-trash-o"></span> 删除</button>
              </div>
              </td>
                          </tr>
                                    
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


<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="http://ci.ci.lamall.com/style/admin/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="http://ci.ci.lamall.com/style/admin/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="http://ci.ci.lamall.com/style/admin/js/amazeui.min.js"></script>
<script src="http://ci.ci.lamall.com/style/admin/js/app.js"></script>
<script src="http://ci.ci.lamall.com/style/picker/datetimepicker/js/amazeui.datetimepicker.min.js"></script>
<script>
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

</script>
</body>
</html>
<?php }
}
