<?php /* Smarty version Smarty-3.1.19, created on 2014-11-29 13:17:17
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1798392963545761df560ca6-93612254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '954b3cf6b770906364dcc7e9b70b582cca46d48b' => 
    array (
      0 => './templates/index.tpl',
      1 => 1417238233,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1798392963545761df560ca6-93612254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_545761df5b3c20_38239113',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_545761df5b3c20_38239113')) {function content_545761df5b3c20_38239113($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("totem.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $_smarty_tpl->getConfigVariable('title');?>
--<?php echo $_smarty_tpl->getConfigVariable('teacher');?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset=utf-8>
<!-- Bootstrap -->
<link href="/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="/bootstrap/bootstrap/css/bootstrap-responsive.css"
	rel="stylesheet">
<link href="/bootstrap/bootstrap/css/font-awesome.min.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/style-metro.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style.css" rel="stylesheet"
	type="text/css" />
<link href="/bootstrap/bootstrap/css/style-responsive.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/uniform.default.css"
	rel="stylesheet" type="text/css" />
<link href="/bootstrap/bootstrap/css/jquery.gritter.css"
	rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="/bootstrap/bootstrap/image/favicon.ico" />
<script src="/bootstrap/bootstrap/js/jquery-1.10.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-migrate-1.2.1.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery-ui-1.10.1.custom.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/bootstrap.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/excanvas.min.js"></script>
<script src="/bootstrap/bootstrap/js/respond.min.js"></script>
<script src="/bootstrap/bootstrap/js/jquery.slimscroll.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.blockui.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.cookie.min.js"
	type="text/javascript"></script>
<script src="/bootstrap/bootstrap/js/jquery.uniform.min.js"
	type="text/javascript"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.gritter.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.pulsate.min.js"></script>
<script type="text/javascript"
	src="/bootstrap/bootstrap/js/jquery.bootpag.min.js"></script>
<script src="/bootstrap/bootstrap/js/app.js"></script>
<script src="/bootstrap/bootstrap/js/ui-general.js"></script>
<script src="/bootstrap/bootstrap/javascript/index.js"></script>
<script>
	jQuery(document).ready(function() {
		App.init();
		UIGeneral.init();
	});
</script>
</head>
<body>
	<header> <?php echo $_smarty_tpl->getSubTemplate ("header_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 </header>
	<div class="container-fluid" style="padding: 4% 8% 0 8%">
		<div class="row-fluid">
			<div class="span3">
				<div class="portlet box blue">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-user"></i>快速注册
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body">
						<ol>
							<li>请填写真实邮箱，用于激活您的帐号；</li>
							<li>包括 Gmail 在内很多邮件服务商会把<span class="label label-success">本站</span>发送的邮件识别为垃圾邮件；</li>
							<li>如果您使用<span class="label label-info">163邮箱</span>，那么邮件可能在您的订阅邮件列表中</li>
							<li>如果您没有收到<span class="label label-success">本站</span>发送的邮件，请注意查看您邮箱中的垃圾邮件；</li>
							<li>请将来自<span class="label label-success">本站</span>的邮件设置成不是垃圾邮件，以便接受本站邮件；</li>
							<li>如果您<span class="label label-important">忘记登录密码</span>，也可以通过此邮箱进行密码重置；</li>
						</ol>
						<p style="text-align: right">
							<a href="/controller/user/userHandler.php?type=regist">进入注册</a>
						</p>
					</div>
				</div>
				<div class="portlet box purple">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-download"></i>最新资源
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newResource">

					</div>
				</div>

			</div>
			<div class="span6">
				
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-book"></i>最新文章
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newArticle">
					</div>
				</div>
				<div class="portlet box grey">

					<div class="portlet-title">

						<div class="caption">
							<i class="icon-cogs"></i>课程简介
						</div>

						<div class="tools">

							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload"></a> <a href="javascript:;"
								class="remove"></a>
						</div>
					</div>
					<div class="portlet-body">
						<div ><b><big><center>Linux 内核分析与驱动编程</center></big></b></div>
						<div class="row-fluid">
							<div class="span12">
								<!--Body content-->
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab6" data-toggle="tab">基本信息</a>
									<li><a href="#tab7" data-toggle="tab">成绩分布</a>
									<li><a href="#tab8" data-toggle="tab">课程内容</a>
									<li><a href="#tab9" data-toggle="tab">参考教材</a>
									<li><a href="#tab10" data-toggle="tab">课程信息</a>
								</ul>
								<div class="tab-content">
									<div class="tab-pane active" id="tab6">
										<p>课程名称： Linux 内核分析与驱动编程(Linux Kernel Analysis and Driver
											Development)</p>
										<p>课程号 ： 01711620</p>
										<p>所属学科： 计算机科学与技术</p>
										<p>领域方向： 软件工程</p>
										<p>学时和学分： 48学时； 3学分</p>
										<p>主讲： 荆琦</p>
										<p>上课信息： 周三 （0:00- 0:00） （教室号）
										<p>
									</div>
									<div class="tab-pane" id="tab7">
										<p>1、 内核体系架构及模块间关系分析报告</p>
										<p>– 平时成绩（70%）：按时提交，内容完整丰满，格式正确</p>
										<p>– 课程报告（30%）：</p>
										<p>• 文档提交（10%）：及时提交，有自己的见解</p>
										<p>• 课堂报告（20%）：思路清晰，课堂表达清楚</p>
										<p>2、 课后作业及内存分析报告</p>
										<p>– 课后作业（40%）：提交及时，程序结果正确，编写规范</p>
										<p>– 课程报告（60%）：</p>
										<p>• 文档提交（30%）：及时提交，内容相对完整，独立完成，有自己的见解</p>
										<p>• 课堂报告（30%）：思路清晰，课堂表达清楚；</p>


									</div>
									<div class="tab-pane" id="tab8">
										<table class="table table-bordered table-hover">
											<thead>
												<tr>
													<th></th>
													<th>知识模块</th>
													<th>知识点</th>
												</tr>
											</thead>
											<tr>
												<td>1</td>
												<td>课程介绍和相关基础知识概述</td>
												<td>Linux内核基本结构、Linux的历史、开放社区的文化、驱动程序介绍、内核编程基础</td>
											</tr>
											<tr>
												<td>2</td>
												<td>进程管理</td>
												<td>Linux进程基本概念、进程的生命周期、进程上下文切换等</td>
											</tr>
											<tr>
												<td>3</td>
												<td>进程调度</td>
												<td>Linux 进程调度策略、调度算法、进程切换、调度相关的调用</td>
											</tr>
											<tr>
												<td>4</td>
												<td>系统调用、中断处理</td>
												<td>系统调用内核支持机制、系统调用处理函数、系统调用实现、系统调用上下文、Linux中断处理</td>
											</tr>
											<tr>
												<td>5</td>
												<td>内核同步</td>
												<td>原子操作、自旋锁、RCU、内存屏障等linux内核同步机制</td>
											</tr>
											<tr>
												<td>6</td>
												<td>内存管理（1）</td>
												<td>内存寻址、Linux页式管理、物理页分配</td>
											</tr>
											<tr>
												<td>7</td>
												<td>内存管理（2）</td>
												<td>内存初始化、伙伴系统建立、Slab管理、进程地址空间</td>
											</tr>
											<tr>
												<td>8</td>
												<td>文件系统</td>
												<td>Linux虚拟文件系统、Ext3/Ext2文件系统结构</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Linux设备驱动基础、字符设备驱动程序设计</td>
												<td>Linux设备驱动基础、字符设备创建和加载、字符设备的操作、对字符设备进行poll
													和select的实现、字符设备访问控制、IOCTL、阻塞IO、异步事件等</td>
											</tr>
											<tr>
												<td>10</td>
												<td>块设备驱动程序设计</td>
												<td>块设备内核相关数据结构和组织、块设备操作、内核磁盘调度算法、请求处理。</td>
											</tr>
											<tr>
												<td>11</td>
												<td>网络设备驱动程序设计、USB设备驱动程序设计、PCI设备驱动程序设计</td>
												<td>网络设备驱动程序的编写方法、高速网络设备驱动程序结构实现方法、使用DMA等；USB设备模型、USB驱动程序设计方法等；PCI驱动程序设计方法</td>
											</tr>
											<tr>
												<td>12</td>
												<td>课程报告</td>
												<td>课堂报告</td>
											</tr>
										</table>
									</div>
									<div class="tab-pane" id="tab9">
										<p>1、 《Understanding the Linux Kernel, 3rd Edition 》
											作者：Daniel P. Bovet, Marco Cesati 出版社：O'Reilly 出版日期：2005年12月</p>
										<p>2、 《Professional Linux Kernel Architecture》 作者：Wolfgang
											Mauerer 出版社：Wiley 出版日期：2008年10月</p>
										<p>3、 《Linux 驱动程序设计》，作者：Jonathan Corbet,Alessandro
											Rubini,Greg Kroah-Hartman，魏永明,耿岳,钟书毅 译 语种：汉语 出版社：中国电力出版社
											出版日期：2005年12月</p>
										<p>4、 《Essential Linux Device Drivers》 作者：Sreekrishnan
											Venkateswaran 出版社：Pearson Education Asia 出版日期：2008年5月</p>
										<hr>
										<h4>参考书：</h4>


										<p>1、 《Linux Kernel Development, 3rd edition》 作者：（美）Robert
											Love 语种：英语 出版社: Addison-Wesley，出版日期：2010年6月</p>

										<p>2、 《Linux内核情景分析》 作者：毛德操、胡希明 出版社：浙江大学出版社 出版日期：2005年1月</p>
										<p>3、 《操作系统教程》 作者：陈向群、杨芙清 出版社：北京大学出版社 出版日期：2004年7月</p>
										<p>4、 《The Linux Kernel Primer : A Top-Down Approach for
											x86 and PowerPC Architectures》 作者：（美）Claudia Salzberg
											Rodriguez,Gordon Fischer,Steven Smolski 出版社：机械工业出版社
											出版日期：2006年7月</p>
									</div>

									<div class="tab-pane" id="tab10">
										<h4>课程基础知识要求：</h4>

										<p>数据结构</p>

										<p>–操作系统</p>

										<p>–计算机体系结构</p>

										<p>–C 语言</p>

										<p>–汇编语言</p>


										<h4>课程主要目标：</h4>
										<p>以Linux为实例，掌握操作系统的设计原理；掌握Linux操作系统的体系结构、设计原理</p>

										<p>能在Linux上开发相关驱动程序</p>

										<p>为今后进行相关实习与工作打下基础</p>

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="span3">
				<div class="portlet box red">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-comments-alt"></i>课程通知
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newCourse">
					</div>
				</div>
				<div class="portlet box yellow">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-download-alt"></i>热门下载
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newDown">
					</div>
				</div>
				<div class="portlet box green">
					<div class="portlet-title">
						<div class="caption">
							<i class="icon-download-alt"></i>友情链接
						</div>
						<div class="tools">
							<a href="javascript:;" class="collapse"></a> <a
								href="#portlet-config" data-toggle="modal" class="config"></a> <a
								href="javascript:;" class="reload hidden-phone"></a> <a
								href="javascript:;" class="remove hidden-phone"></a>
						</div>
					</div>
					<div class="portlet-body" id="newLink">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"><?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
</div>
</body>
</html>
<?php }} ?>
