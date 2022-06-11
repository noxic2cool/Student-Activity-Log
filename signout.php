<?php 
SESSION_START();

if(session_destroy()){
	header("location: login.php");
}
?>