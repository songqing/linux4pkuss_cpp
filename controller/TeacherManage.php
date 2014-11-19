<?php
use \service\TeacherManageService;
require_once '../libs/Smarty.class.php';
require_once '../service/TeacherManageService.class.php';

$smarty = new Smarty;
$smarty->force_compile = true;
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$teacherManage=new TeacherManageService();
//��theme_tb�����ӽ�ʦ��Ϣ����Ҫ�޸���������������Ϊ��ʦ��Ϣid��
$result=$teacherManage->GetTeacherInfo(1);

if($result!=null)
{
	if(isset($_POST['btnSave'])){
		$result[0]['title']=$_POST['Title'];
		$result[0]['content']=$_POST['TextArea'];
		$result=$teacherManage->UpdateTeacherInfo($result);
		echo '<script language="JavaScript">window.location.href="TeacherManage.php";</script>';
	}
	else{
		$smarty->assign('Title',$result[0]['title']);
		$smarty->assign('Content',$result[0]['content']);
	} 
}
$smarty->display('../templates/SystemManage/TeacherManage.tpl');