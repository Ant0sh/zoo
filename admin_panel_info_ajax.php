<?php
if(isset($_POST['action_id'])) {
	require "../other/smarty3/Smarty.class.php";
	include('config.php');
	include('functions.php');

	$smarty = new Smarty;
	$smarty->template_dir = 'templates/';
	$smarty->template_c = 'templates_c/';

	switch($_POST['action_id']){
		case 1:
			showLocation(&$smarty);
			break;
		case 2:
			showVids(&$smarty);
			break;
		case 3:
			showVidsDesc(&$smarty);
			break;
		case 4:
			showAnimals();
			break;
		case 5:
			showAnimalsDesc();
			break;
		case 6:
			showVisitors();
			break;
		case 7:
			showPhotographers();
			break;
		case 8:
			showPhotos();
			break;
		case 9:
			showUsers();
			break;
		case 10:
			break;
		default:
			break;
	}
	$smarty->display('admin_panel_info_ajax.tpl');
}
