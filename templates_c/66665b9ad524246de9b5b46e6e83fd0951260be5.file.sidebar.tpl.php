<?php /* Smarty version Smarty-3.1.19, created on 2014-11-03 19:14:44
         compiled from "/home/aclass/workspace/PHP/linux4pkuss/templates/admin/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1188194494545763a4821be2-78915689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66665b9ad524246de9b5b46e6e83fd0951260be5' => 
    array (
      0 => '/home/aclass/workspace/PHP/linux4pkuss/templates/admin/sidebar.tpl',
      1 => 1414248756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188194494545763a4821be2-78915689',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545763a4829418_71427709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545763a4829418_71427709')) {function content_545763a4829418_71427709($_smarty_tpl) {?>
<div class="page-sidebar nav-collapse collapse">

	<!-- BEGIN SIDEBAR MENU -->

	<ul class="page-sidebar-menu">
		<li class="start "><a
			href="/controller/user/userHandler.php?type=admin&num=<?php echo $_SESSION['user']['num'];?>
">
				<i class="icon-home"></i> <span class="title">本站管理员</span>
		</a></li>

		<li class=""><a href="javascript:;"> <i class="icon-cogs"></i>

				<span class="title">项目信息</span> <span class="arrow "></span>

		</a>

			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>

		<li class=""><a href="javascript:;"> <i
				class="icon-bookmark-empty"></i> <span class="title">课程通知</span> <span
				class="arrow "></span>

		</a>

			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>


		<li class=""><a href="javascript:;"> <i class="icon-table"></i>

				<span class="title">资源信息</span> <span class="arrow "></span>

		</a>

			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>


		<li class=""><a href="javascript:;"> <i
				class="icon-briefcase"></i> <span class="title">文章信息</span> <span
				class="arrow "></span>

		</a>

			<ul class="sub-menu">

				<li><a href="/controller/article/articleHandler.php?type=list">文章管理</a></li>
				<li><a href="/controller/article/articleHandler.php?type=showAddTpl">发布文章</a></li>
				<li><a href="/controller/article/articleHandler.php?type=showAddTpl">文章审核</a></li>
				
			</ul></li>
		<li class=""><a href="javascript:;"> <i class="icon-gift"></i>
				<span class="title">用户信息</span><span class="arrow"></span>

		</a>

			<ul class="sub-menu">

				<li><a href="/controller/project/projectHandler.php?type=list">未认证用户</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">已认证用户</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">用户检索</a></li>
			</ul></li>

		<li><a class="active" href="javascript:;"> <i
				class="icon-sitemap"></i> <span class="title">角色信息</span> <span
				class="arrow "></span>
		</a>
			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>

		<li><a href="javascript:;"> <i class="icon-folder-open"></i>

				<span class="title">權限信息</span> <span class="arrow "></span>

		</a>

			<ul class="sub-menu">

				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>







		<li class=""><a href="javascript:;"> <i class="icon-user"></i>
				<span class="title">通知通告</span> <span class="arrow "></span>
		</a>
			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>
		<li class=""><a href="javascript:;"> <i class="icon-th"></i>
				<span class="title">数据统计</span> <span class="arrow "></span>
		</a>
			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>
		<li class=""><a href="javascript:;"> <i
				class="icon-file-text"></i> <span class="title">我的任务</span> <span
				class="arrow "></span>
		</a>

			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">项目管理</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">主题管理</a></li>
			</ul></li>

		<li class=""><a href="javascript:;"> <i
				class="icon-map-marker"></i> <span class="title">鏈接管理</span> <span
				class="arrow "></span>

		</a>

			<ul class="sub-menu">
				<li><a href="/controller/project/projectHandler.php?type=list">添加鏈接</a></li>
				<li><a href="/controller/theme/themeHandler.php?type=list">鏈接管理</a></li>
			</ul></li>



	</ul>

	<!-- END SIDEBAR MENU -->

</div><?php }} ?>
