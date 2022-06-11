<?php
require_once('config.php');
?>

<?php

if(isset($_POST)){
	$firstname 	= $_POST['firstname'];
	$lastname 	= $_POST['lastname'];
	$username 	= $_POST['username'];
	$password 	= sha1($_POST['password']);
	$college 	= $_POST['college'];
	$major 	= $_POST['major'];

		$sql = "INSERT INTO users (firstname, lastname, username, password, college, major) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $username, $password, $college, $major]);
		if($result){
			echo 'Successfully saved.';
		}else {
			echo 'Errors while saving the data.';
		}
}else{
	echo 'No data';
}