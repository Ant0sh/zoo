<?php
require "../other/smarty3/Smarty.class.php";
include('config.php');

$smarty = new Smarty;
$smarty->templates_dir = 'templates';
$smarty->templates_c = 'templates_c';

if(!isset($_POST['login']) && !isset($_POST['password'])){
	$smarty->assign('status', 0);
}
else{
	$vidId = $_POST['vid_id'];
	$sql = "SELECT  `a`.`id`,
					`a`.`name`,
					`s`.`description_animal`,
					`a`.`age`,
					`a`.`color`,
					`a`.`birthday`,
					`a`.`date_enter`
				FROM `animal` AS `a`
				INNER JOIN `sex` AS `s` ON `s`.`id`=`a`.`sex_id`
				INNER JOIN `vid` ON `vid`.`id`=`a`.`vid_id`
					AND `a`.`vid_id`=".$vidId."
				ORDER BY `a`.`name`";
	$result = mysql_query($sql);
	while($row = mysql_fetch_assoc($result)){
		$animals[$row['id']]=array('name' => $row['name'],
			'description_animal' => $row['description_animal'],
			'age' => $row['age'],
			'color' => $row['color'],
			'birthday' => $row['birthday'],
			'date_enter' => $row['date_enter']);
	}
	$smarty->assign('animals', $animals);
}
$smarty->display('animal_ajax.tpl');