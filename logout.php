<?php
	header("Content-type:text/html; charset=utf-8");
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0; url=./index.php'>";
?>