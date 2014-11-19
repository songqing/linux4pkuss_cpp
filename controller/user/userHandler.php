<?php
$ROOT = $_SERVER ['DOCUMENT_ROOT'];
require_once $ROOT . '/libs/Smarty.class.php';
require_once $ROOT . '/service/UserService.class.php';
$smarty = new Smarty ();

$smarty->setTemplateDir ( $ROOT . '/templates' );
$smarty->setCompileDir ( $ROOT . '/templates_c' );
$smarty->setCacheDir ( $ROOT . '/cache' );
session_start ();
$type = $_GET ['type'] . trim ();
if ('regist' == $type) {
	$smarty->display ( 'user/registPage.tpl' );
} else if ('submit' == $type) {
	// $studentid=$_POST['studentid'];
	// $collage=$_POST['collage'];
	// $street=$_POST['street'];
	// $area_code=$_POST['area'];
	// $phone=$_POST['phone'];
	
	$userService = new UserService ();
	$user = $userService->createUser ( $_POST );
	
	if ($user) {
		if (! $user ['imgurl']) {
			$user ['imgurl'] = 'default/default.jpg';
		}
		$_SESSION ['user'] = $user;
		header ( "location:/index.php" );
	} else {
		header ( "location:/index.php" );
	}
} else if ('login' == $type) {
	$userService = new UserService ();
	$user = $userService->login ( $_POST );
	if ($user) {
		if (isset ( $_POST ['remember'] )) {
			setcookie ( "username", $_POST ['username'] . trim (), time () + 2 * 7 * 24 * 3600 );
			setcookie ( "password", $_POST ['password'] . trim (), time () + 2 * 7 * 24 * 3600 );
		}
		if (1 != $user ['status_id']) {
			header ( "location:/index.php?msg=status_error" );
		} else {
			if (! $user ['imgurl']) {
				$user ['imgurl'] = 'default/default.jpg';
			}
			$_SESSION ['user'] = $user;
			
			header ( "location:/index.php?msg=success" );
		}
	} else {
		header ( "location:/index.php?msg=auth_error" );
	}
} else if ('logout' == $type) {
	
	session_destroy ();
	// $smarty->display('index.tpl');
	header ( "location:/index.php" );
} else if ('lock' == $type) {
	
	if (isset ( $_SESSION ['user'] )) {
		$smarty->assign('username',$_SESSION['user']['username']);
		$smarty->assign('email',$_SESSION['user']['email']);
		$smarty->assign('imgurl',$_SESSION['user']['imgurl']);
		session_destroy ();
		$smarty->display ( 'user/extra_lock.tpl' );
	} else {
		
		header ( "location:/index.php" );
	}
} else if ('profile' == $type) {
	if (isset ( $_SESSION ['user'] )) {
		$smarty->display ( 'user/profile.tpl' );
	} else {
		header ( "location:/index.php" );
	}
} else if ('admin' == $type) {
	$userService = new UserService ();
	$user = $userService->findUserById ( $_GET ['num'] );
	if (1 == $user ['role_id']) {
		$smarty->display ( 'admin/profile.tpl' );
	} else {
		$smarty->display ( 'user/profile.tpl' );
	}
}

