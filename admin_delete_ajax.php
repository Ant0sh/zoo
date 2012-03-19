<?php
if(isset($_POST['id']) && isset($_POST['item'])) {
	require "../other/smarty3/Smarty.class.php";
	include('config.php');
	include('functions.php');

	$smarty = new Smarty;
	$smarty->template_dir = 'templates/';
	$smarty->template_c = 'templates_c/';

	$id = $_POST['id'];

	switch($_POST['item']) {
	case 'location':
		$sql = "DELETE FROM `location`
				WHERE `id`='".$id."'";
		deleteLocation($sql, &$smarty, $id);
		break;
	case 'vid':
		break;
	case 'vid_description':
		break;
	case 'animal':
		$sql = "DELETE `a`, `ad`, `pa`
				FROM `animal` AS `a`,
					`animal_description` AS `ad`,
					`photo_animal` AS `pa`
				WHERE `a`.`id`='".$id."'
					AND `a`.`id`=`ad`.`id`
					AND `a`.`id`=`pa`.`animal_id`";
		deleteItem($sql, &$smarty);
		break;
	case 'animal_description':
		break;
	case 'visitor':
		break;
	case 'photographer':
		break;
	case 'photo':
		break;
	case 'user':
		break;
	case 'sex':
		break;
	}
}
else {
	$smarty->assign('status', 1);
}
$smarty->display('admin_delete_ajax.tpl');