<?php
header("Content-type:text/html;  charset=utf-8");
	include_once  './inc/db_connect.php' ; 
	//4. 수정할 페이지의 번호를 넘겨받기 $_GET, 각각의 데이터 받아오기 $_POST
	$no=$_GET['no'];  $name=$_POST['name']; 	$pass=$_POST['pass']; 
	$email=$_POST['email']; $title=$_POST['title'];  $content=$_POST['content'];
	$REMOTE_ADDR = $_SERVER['REMOTE_ADDR'];

//	echo $name; 

	//5. $sql구문작성 - 해당번호의 비밀번호를 찾아오기
	//$sql="select pass FROM  multiboard where no = '$no'";
	$result = mysqli_query($con, "select pass FROM  multiboard where no = '$no'");
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
	
	//6. 만약 사용자가 입력한 비밀번호(4)와 DB에서 찾아온 비밀번호(5)가 같다면 업데이트, 업데이트된 화면을 확인하기 위해 board_detail.php로 넘기기
	if ($pass == $row['pass']){
		mysqli_query($con, "UPDATE multiboard
												set name='$name',  title='$title',  wdate=now(),
														content = '$content', email='$email'
												WHERE no = '$no'") or die (mysqli_error($con));
				echo "<script> alert('수정을 완료했습니다.'); </script>";
				echo "<meta http-equiv='Refresh' content='1; url=./board_detail.php?no=$no'>";
	}else{
		echo "<script> alert('비밀번호를 확인해주세요'); history.go(-1); </script>";
	}
	include_once  './inc/db_connect_close.php' ; 
	//비밀번호가 다르다면 수정할폼으로 다시 넘어가기
?>