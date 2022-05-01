<?php 
	require '../temp/connection.php';
	function redactMethod($connection){
		$id = $_POST['id'];
		$title = $_POST['title'];
		$theme = $_POST['theme'];
		$text = $_POST['text'];
		if (isset($_FILES['file']['name'])) {
			$imgs = array();
			$fileName = uniqid('method_', true);
			$uploadname=basename($_FILES['file']['name'][0]);//записываем имя файла
			$ext = '.' . pathinfo($_FILES['file']['name'][0], PATHINFO_EXTENSION);
			$uploadpath='../files/' . $fileName . $ext;
			$filenamesql = $fileName . $ext;
			move_uploaded_file($_FILES['file']['tmp_name'][0], $uploadpath);
			array_push($imgs, $fileName . $ext);
			$query = "UPDATE `methods` SET `title`='$title', `theme`= '$theme', `text`='$text', `img`= '$filenamesql' WHERE `id` = $id";
		} else {
			$query = "UPDATE `methods` SET `title`='$title', `theme`= '$theme', `text`='$text' WHERE `id` = $id";
		}
		$test = mysqli_query($connection,$query);
		echo 'Обновил метод';
		
	}
	function addMethod($connection){
		$title = $_POST['title'];
		$theme = $_POST['theme'];
		$text = $_POST['text'];
		if (isset($_FILES['file']['name'])) {
			$imgs = array();
			$fileName = uniqid('method_', true);
			$uploadname=basename($_FILES['file']['name'][0]);//записываем имя файла
			$ext = '.' . pathinfo($_FILES['file']['name'][0], PATHINFO_EXTENSION);
			$uploadpath='../files/' . $fileName . $ext;
			$filenamesql = $fileName . $ext;
			move_uploaded_file($_FILES['file']['tmp_name'][0], $uploadpath);
			array_push($imgs, $fileName . $ext);
			$query = "INSERT INTO `methods`(`title`, `theme`, `text`, `img`) VALUES ('$title','$theme','$text','$filenamesql')";
		} else {
			$query = "INSERT INTO `methods`(`title`, `theme`, `text`) VALUES ('$title','$theme','$text')";
		}
		$test = mysqli_query($connection,$query);
		echo 'Добавил метод';
		
	}
	function removeMethod($connection){
		$id = $_POST['id'];
		$query = "DELETE FROM `methods` WHERE `id` = $id";
		$test = mysqli_query($connection,$query);
		echo 'Удалил статью';
		
	}
	if ($_POST['action'] == 'redact') {
		redactMethod($connection);
	}
	if ($_POST['action'] == 'add') {
		addMethod($connection);
	}
	if ($_POST['action'] == 'remove') {
		removeMethod($connection);
	}



 ?>