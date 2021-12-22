<?php
	header("Content-type:text/html;  charset=utf-8");
	
include_once  './inc/db_connect.php' ; 
	//04_데이터 받아오기 $_POST['']
	$title=$_POST['title'];
	$content=$_POST['content'];
	$name=$_POST['name'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
	$ip=$_SERVER['REMOTE_ADDR'];

	//05_쿼리 구문작성 $sql = "INSERT INTO;"
	$sql="INSERT INTO multiboard (title, content, name, pass, email, ip,wdate )
	VALUE										('$title', '$content', '$name', '$pass', '$email','$ip',now() )";
	//06_ $result = mysqli_query  실행 / 실패 false, 성공시true
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	if($result ){ echo "<script>alert('글쓰기가 성공했습니다.');</script>"; }
	//07_글쓰기에 성공했다면 글쓰기 성공했다고 알림창
	//08_db닫기
	mysqli_close($con);
	//09_ board.php로 넘어가기
	echo "<meta http-equiv='refresh' content='1; URL=./board.php'/>";  
?>