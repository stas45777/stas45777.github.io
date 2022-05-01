<?php 
require '../temp/connection.php';
$action = $_POST['action'];
function addCourse($connection) {
	$title = $_POST['title'];
	$cat = str_replace('\\','',$_POST['cat']);
	$level = str_replace('\\','',$_POST['level']);
	$type = str_replace('\\','',$_POST['type']);
	$text = $_POST['text'];
	$query = "INSERT INTO `courses`(`title`,`cat`,`level`,`type`,`text`) VALUES('$title','$cat','$level','$type','$text')";
	$test = mysqli_query($connection,$query);
	echo $query;
}
function removeCourse($connection) {
	$id = $_POST['id'];
	mysqli_query($connection,"DELETE FROM `courses` WHERE `id` = $id");
}
function redactCourse ($connection) {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$cat = str_replace('\\','',$_POST['cat']);
	$level = str_replace('\\','',$_POST['level']);
	$type = str_replace('\\','',$_POST['type']);
	$text = $_POST['text'];
	$query = "UPDATE `courses` SET `title`='$title',`cat`='$cat',`level`='$level',`type`='$type',`text`='$text' WHERE `id` = $id";
	$test = mysqli_query($connection,$query);
	echo 'Изменил курс';
}
if ($action == 'add') {
	addCourse($connection);
}
if ($action == 'remove') {
	removeCourse($connection);
}
if ($action == 'redact') {
	redactCourse($connection);
}
 ?>
