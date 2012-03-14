<?php
require "../other/smarty3/Smarty.class.php";

$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->template_c = 'templates_c/';

$smarty->assign('title', '¬ход в административную панель.');
$smarty->display('admin_login.tpl');