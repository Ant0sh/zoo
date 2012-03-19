<?php
require "../other/smarty3/Smarty.class.php";
include('config.php');

$smarty = new Smarty;
$smarty->templates_dir = 'templates';
$smarty->templates_c = 'templates_c';

if(isset($_POST['login']) && isset($_POST['password'])){
	$login = $_POST['login'];
	$password = $_POST['password'];
	$sql = "SELECT `id` FROM `user` WHERE `login`='".$login."' AND `password`='".$password."'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result)) {
		$smarty->assign('status', 1);
		$smarty->display('admin_login_ajax.tpl');
		return;
	}
}
$smarty->assign('status', 0);
$smarty->display('admin_login_ajax.tpl');