<?php
require "../other/smarty3/Smarty.class.php";


$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->template_c = 'templates_c/';

$smarty->assign('title', 'Административная панель управления зоопарком');








$smarty->display('header.tpl');
$smarty->display('admin_panel.tpl');
$smarty->display('footer.tpl');