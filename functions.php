<?php
function reportMysqlError($text, $query, $file=__FILE__, $line=__LINE__, $die='false') {
	$dtError = date('Y.m.d H:i:s');
	$f = fopen("mysql_error.log", 'a');
	fwrite($f, "//---------- MySQL ERROR ---------------------\n"
			."Дата: ".$dtError."\n"
			.$text."\n"
			."Ошибка: ".mysql_errno()." - ".mysql_error()."\n"
			."Запрос: ".$query."\n"
			."Файл: ".$file."\n"
			."Строка: ".$line."\n");

	fclose($f);
	echo "Произошла ошибка. Обратитесь в службу технической поддержки.";
	if($die){
		die;
	}
	return true;
}

function showLocation($smarty){
	$sql = "SELECT * FROM `location` ORDER BY `location`";
	if(!$result = mysql_query($sql)){
		reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
	}
	$head = array('location' => 'Место жительства',
				'schedule' => 'Время работы',
				'date_construction' => 'Дата постройки',
				'date_open' => 'Дата открытия');
	while($row = mysql_fetch_assoc($result)){
		$locations[$row['id']]=array('location' => $row['location'],
			'schedule' => $row['schedule'],
			'date_construction' => $row['date_construction'],
			'date_open' => $row['date_open']);
	}
	$smarty->assign('item', 'location');
	$smarty->assign('head', $head);
	$smarty->assign('info', isset($locations) ? $locations : 0);
}

function showVids($smarty){
	$sql = "SELECT `id`, `vid` FROM `vid` ORDER BY `vid`";
	if(!$result = mysql_query($sql)){
		reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
	}
	$head = array('vid' => 'Вид');
	while($row = mysql_fetch_assoc($result)){
		$vids[$row['id']] = $row['vid'];
	}
	$smarty->assign('item', 'vid');
	$smarty->assign('head', $head);
	$smarty->assign('info', isset($vids) ? $vids : 0);
}

function showVidsDesc($smarty){
	$sql = "SELECT `vd`.`id`, `v`.`vid`, `vd`.`description`
				FROM `vid` AS `v`
				LEFT JOIN `vid_description` AS `vd` USING(`id`)
				ORDER BY `vid`";
	if(!$result = mysql_query($sql)){
		reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
	}
	$head = array('vid' => 'Вид', 'description' => 'Описание');
	while($row = mysql_fetch_assoc($result)){
		$vid_descriptions[$row['id']] = array('vid' => $row['vid'], 'description' => $row['description']);
	}
	$smarty->assign('item', 'vid_description');
	$smarty->assign('head', $head);
	$smarty->assign('info', isset($vid_descriptions) ? $vid_descriptions : 0);
}
function showAnimals(){}
function showAnimalsDesc(){}
function showVisitors(){}
function showPhotographers(){}
function showPhotos(){}
function showUsers(){}

function deleteItem($sql, $smarty) {
	if(!$result = mysql_query($sql)){
		reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
	}
	if(mysql_num_rows($result)) {
		$smarty->assign('status', 0);
	}
	else {
		$smarty->assign('status', 1);
	}
}

function deleteLocation($sql, $smarty, $id) {
	if($id != 1) {
		if(!$result = mysql_query($sql)){
			reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
		}
		if(mysql_affected_rows()) {
			$sql = "UPDATE `vid`
						SET `location_id`='1'
						WHERE `location_id`='".$id."'";
			if(!$result = mysql_query($sql)){
				reportMysqlError("Нельзя выполнить запрос.", $sql, __FILE__, __LINE__, true);
			}
			$smarty->assign('status', 0);
		}
		else {
			$smarty->assign('status', 1);
		}
	}
	else {
		$smarty->assign('status', 2);
	}
}