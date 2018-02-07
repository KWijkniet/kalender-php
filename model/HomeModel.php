<?php

function getBirthdays(){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM verjaardagskalender";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetchAll();
}

function getMonths(){
	$months = ["januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december"];
	return $months;
}

function deleteRow($id){
	$db = openDatabaseConnection();
	$sql = "DELETE FROM verjaardagskalender WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
}

function getUser($id){
	$db = openDatabaseConnection();
	$sql = "SELECT * FROM verjaardagskalender WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return $query->fetch();
}

function createRow($day, $month, $name, $birth){
	$db = openDatabaseConnection();
	$sql = "INSERT INTO verjaardagskalender(day, month, name, birth) VALUES (:day, :month, :name, :birth)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':day' => $day,
		':month' => $month,
		':name' => $name,
		':birth' => $birth
	));
	$db = null;
	return true;
}

function updateRow($id, $day, $month, $name, $birth){
	$db = openDatabaseConnection();
	$sql = "UPDATE verjaardagskalender SET day='$day', month='$month', name='$name', birth='$birth' WHERE id=$id";
	$query = $db->prepare($sql);
	$query->execute();
	$db = null;
	return true;
}