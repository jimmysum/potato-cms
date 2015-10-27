<?php
$_valid = $_smarty_tpl->decodeProperties(array (
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/63',
  'unifunc' => 'content_562f70a08598f2_28094411',
  'file_dependency' => 
  array (
    'b00651b287dc94c8b985fc9cfc602e5431c867b6' => 
    array (
      0 => '/data/src/test/codeIgniter/application/views/admin/admin/index.html',
      1 => 1445949314,
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
      1 => 1445949598,
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
if ($_valid && !is_callable('content_562f70a08598f2_28094411')) {
function content_562f70a08598f2_28094411 ($_smarty_tpl) {
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
            <button id="examine-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-archive"></span> 审核</button>
            <button id="del-cate" type="button" class="am-btn am-btn-default"><span class="am-icon-trash-o"></span> 删除</button>
          </div>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-form-group">
          <select data-am-selected="{btnSize: 'sm'}">
            <option value="0">所有类别</option>
            
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined index: cateList</p>
<p>Filename: templates_c/b00651b287dc94c8b985fc9cfc602e5431c867b6_0.file.index.html.cache.php</p>
<p>Line Number: 61</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/runtime/templates_c/b00651b287dc94c8b985fc9cfc602e5431c867b6_0.file.index.html.cache.php<br />
			Line: 61<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
	
		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/application/core/MY_Controller.php<br />
			Line: 32<br />
			Function: display			</p>

		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/application/controllers/admin/Admin.php<br />
			Line: 93<br />
			Function: display			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/index.php<br />
			Line: 304<br />
			Function: require_once			</p>

		
	

</div>
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Trying to get property of non-object</p>
<p>Filename: templates_c/b00651b287dc94c8b985fc9cfc602e5431c867b6_0.file.index.html.cache.php</p>
<p>Line Number: 61</p>


	<p>Backtrace:</p>
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/runtime/templates_c/b00651b287dc94c8b985fc9cfc602e5431c867b6_0.file.index.html.cache.php<br />
			Line: 61<br />
			Function: _error_handler			</p>

		
	
		
	
		
	
		
	
		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/application/core/MY_Controller.php<br />
			Line: 32<br />
			Function: display			</p>

		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/application/controllers/admin/Admin.php<br />
			Line: 93<br />
			Function: display			</p>

		
	
		
	
		
	
		
			<p style="margin-left:10px">
			File: /data/src/test/codeIgniter/index.php<br />
			Line: 304<br />
			Function: require_once			</p>

		
	

</div>          </select>
        </div>
      </div>
      <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" name="title" class="am-form-field" placeholder="输入文章标题" >
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
                <th class="table-title">名称</th>
                <th class="table-title">用户名</th>
                <th class="table-type">登陆ip</th>
                <th class="table-type">登陆时间</th>
                <th class="table-type">状态</th>
                <th class="table-type">权限组</th>
                <th class="table-type">排序</th>
                <th class="table-date am-hide-sm-only">创建时间</th>
                <th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody>
                        <tr>
              <td><input type="checkbox" name="check" rid="1" /></td>
              <td>1</td>
              <td></td>
              <td>admin</td>
              <td>10.0.2.2</td>
              <td>2015-10-09 15:46:01</td>
              <td><span class="am-btn am-btn-success am-round am-btn-xs">可用</span></td>
              <td><span class="am-btn am-btn-success am-round am-btn-xs">Super</span></td>
              <td>0</td>
              <td class="am-hide-sm-only">2015-07-23 20:22:32</td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary" onclick="edit(1)"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                    <!-- <button type="button" class="am-btn am-btn-default am-btn-xs am-hide-sm-only" onclick="copy(1)"><span class="am-icon-copy"></span> 复制</button> -->
                    <button type="button" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" onclick="del(1)"><span class="am-icon-trash-o"></span> 删除</button>
                  </div>
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
		window.location.href='/admin/admin/add';
  	});

  function edit(id)
  {
    window.location.href='/admin/admin/add?id=' + id;
  }

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
    $.post("/admin/admin/check?type=" + type + "&id=" + data,
      '',
      function(data,status){
        result(data,status);
      });
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
    var url = "/admin/admin/del?id=" + id;
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
