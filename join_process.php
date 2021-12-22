<?php
	header("Content-Type:text/html; charset=utf-8");
	// 1. DB에 접속하기 mysqli_connect
	//$con = mysqli_connect('localhost', 'iq627163', 'hansol877', 'iq627163');
include_once  './inc/db_connect.php' ; 
	// 4. 사용자에게 데이터 입력받기 [$_POST[NAME명]]
		// echo로 출력하기
		$username=$_POST['username'];
		$userid=$_POST['userid'];
		$userpass=$_POST['userpass'];
		$useremail=$_POST['useremail'];
		$userphone=$_POST['userphone'] .$_POST['userphone2'] .$_POST['userphone3'];
		
		#echo $username ."<br/>"; echo $userid ."<br/>"; echo $userpass ."<br/>";  //확인 했으면 지우고
		#echo $useremail ."<br/>"; echo $userphone ."<br/>";
	// 5. DB에 데이터 입력하기 mysqli_query
	$sql = "INSERT INTO members (username, userid, userpass, useremail, userphone, userdate) 
					VALUES ('$username', '$userid', '$userpass', '$useremail', '$userphone',now())";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));     // or die 실행하거나 죽어라
	// 6. DB 종료
	#mysqli_free_result($result); 셀렉트
	mysqli_close($con);
	// 7. 04_join_result.php로 파일 넘기기
	//									refresh 새로고침    content="초"  url= " 경로"    
	//쿼링스트링 : ./04_join_result.php?userdata=$useremail
	echo "<meta http-equiv='refresh' content='0; URL=./join_result.php?userdata=$useremail'/>";
?>