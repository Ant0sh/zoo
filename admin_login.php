<?php
require "../other/smarty3/Smarty.class.php";

$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->template_c = 'templates_c/';


//kkkk

$smarty->assign('title', '���� � ���������������� ������.');
$smarty->display('admin_login.tpl');