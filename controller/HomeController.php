<?php
require(ROOT . "model/HomeModel.php");
function index()
{
	render("home/index", array(
		'birthdays' => getBirthdays(),
		'months' => getMonths()
	));
}

function delete($id){
	render("home/delete", array(
		'user' => getUser($id),
		'userID' => $id
	));
}

function create(){
	render("home/create", array(
		'months' => getMonths()
	));
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$birth = isset($_POST['birth']) ? $_POST['birth'] : null;
	
	if (strlen($day) != 0 || strlen($month) != 0 || strlen($name) != 0 || strlen($birth) != 0) {
		createRow($_POST['day'], $_POST['month'], $_POST['name'], $_POST['birth']);
	}
}

function edit($id){
	render("home/edit", array(
		'user' => getUser($id),
		'months' => getMonths(),
		'userID' => $id
	));
}

function editConfirm($id){
	$day = isset($_POST['day']) ? $_POST['day'] : null;
	$month = isset($_POST['month']) ? $_POST['month'] : null;
	$name = isset($_POST['name']) ? $_POST['name'] : null;
	$birth = isset($_POST['birth']) ? $_POST['birth'] : null;
	
	if (strlen($day) != 0 || strlen($month) != 0 || strlen($name) != 0 || strlen($birth) != 0) {
		updateRow($id, $_POST['day'], $_POST['month'], $_POST['name'], $_POST['birth']);
	}
}