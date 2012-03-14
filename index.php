<?php
require "../other/smarty3/Smarty.class.php";
$smarty = new Smarty;

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';

$smarty->debugging = false;
$smarty->assign('title', 'Сайт сингапурского зоопарка.');

$smarty->display('header.tpl');

$smarty->display('index.tpl');
$smarty->display('footer.tpl');