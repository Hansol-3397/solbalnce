<?php
	$con=mysqli_connect('localhost','root','123456','front9');
//	$con = mysqli_connect('localhost', 'iq627163', 'hansol877', 'iq627163');
//	$con = mysqli_connect('localhost', 'solbalance', 'hansol877', 'solbalance');
	if(mysqli_connect_errno()){echo "ERROR:".mysqli_connect_error();}
	# else {echo "DB연동성공"}
	mysqli_set_charset($con,'utf8');
	## db_connect :db연동
?>
