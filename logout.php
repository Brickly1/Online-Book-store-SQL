<?php
	session_start();
	session_unset("login");
	session_unset("loginuser");
	header("Location:index.php");
?>