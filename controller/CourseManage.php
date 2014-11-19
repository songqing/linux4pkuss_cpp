<?php
use \service\CourseManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/CourseManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$courseManage=new CourseManageService();
//��theme_tb�����ӿγ���Ϣ����Ҫ�޸���������������Ϊ�γ���Ϣid��
$result=$courseManage->GetCourseInfo(2);

if($result!=null)
{
	if(isset($_POST['btnSave'])){
		$result[0]['title']=$_POST['Title'];
		$result[0]['content']=$_POST['TextArea'];
		$result=$courseManage->UpdateCourseInfo($result);
		echo '<script language="JavaScript">window.location.href="CourseManage.php";</script>';
	}
	else{
		$smarty->assign('Title',$result[0]['title']);
		$smarty->assign('Content',$result[0]['content']);
	} 
}
$smarty->display('../templates/SystemManage/CourseManage.tpl');