<?php 
require 'connection.php';

function addAchiev () {
	global $connection;
	$title = $_POST['title'];
	$description = $_POST['description'];
	$title_more = $_POST['title_more'];
	$description_more = $_POST['description_more'];
	$tag = $_POST['tag'];
	if (count($_FILES['file_img']['name']) != 0) {

		$imgs = array();
		for ($i=0; $i < count($_FILES['file_img']['name']); $i++) { 
			$fileName = uniqid('achiev_', true);
			$uploadname=basename($_FILES['file_img']['name'][$i]);//записываем имя файла
			$ext = '.' . pathinfo($_FILES['file_img']['name'][0], PATHINFO_EXTENSION);
			$uploadpath='../files/' . $fileName . $ext;
			move_uploaded_file($_FILES['file_img']['tmp_name'][$i], $uploadpath);
			array_push($imgs, $fileName . $ext);
		}
	}
	

	$imgs = json_encode($imgs);
	$query = "INSERT INTO `advantages` (`title`,`description`,`title_more`,`description_more`,`tag`,`imgs`) VALUES ('$title','$description','$title_more','$description_more','$tag','$imgs')";
	mysqli_query($connection,$query);
	echo $query;
}
function redactAchiev () {
	global $connection;
	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$title_more = $_POST['title_more'];
	$description_more = $_POST['description_more'];
	$tag = $_POST['tag'];
	$query = "UPDATE `advantages` SET `title` = '$title',
	`description` = '$description',
	`title_more` = '$title_more',
	`description_more` = '$description_more',
	`tag` = '$tag' WHERE `id` = '$id'
	";
	mysqli_query($connection,$query);
	echo $query;
}
function removeAchiev () {
	$id = $_POST['id'];
	global $connection;
	$query = "DELETE FROM `advantages` WHERE `id` = $id";
	mysqli_query($connection,$query);
	echo 'Удалил достижение';
	
}
if ($_POST['id'] == '') {
	addAchiev();
} else if ($_POST['remove'] == true) {
	removeAchiev();
} else {
	redactAchiev();
}





 ?>