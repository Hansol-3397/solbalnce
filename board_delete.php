<?php
	header("Content-type:text/html;  charset=utf-8");
	//1. db연동
	include_once  './inc/db_connect.php' ; 
	//4. 삭제할 번호 넘겨받기, 비밀번호 넘겨받기
	$no=$_GET['no'];  
	$pass=$_POST['pass']; 

	//5. $sql 구문 작성 : 삭제할 번호의 비밀번호 넘겨받기
	$result = mysqli_query($con, "select pass FROM  multiboard where no = '$no'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 

	//6. 만약 4)에서 사용자가 입력한 비밀번호와 5)에서 db에서 뽑아온데이터가 같다면 삭제처리 / 삭제알림창 / board.php로 go
	if($pass == $row['pass']){
		mysqli_query($con, "DELETE FROM multiboard WHERE no='$no'");
		echo "<script> alert('삭제되었습니다');</script>";
	} else{
		echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1);</script>";
	}
	echo "<meta http-equiv='Refresh' content='0; url=./board.php'>";
	
	include_once  './inc/db_connect_close.php' ; 
	//7. 비밀번호가 다르다면 비밀번호를 확인해주세요 알림창
	//8. db닫기

?>