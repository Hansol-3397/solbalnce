<?php
	header("Content-Type:text/html; charset=utf-8");
	// 1. DB에 접속하기 mysqli_connect
	//$con = mysqli_connect('localhost', 'iq627163', 'hansol877', 'iq627163');
	include_once  './inc/db_connect.php' ;  
	// 4. 사용자에게 데이터 입력받기 [$_POST[NAME명]]
		// echo로 출력하기
		$userid=$_POST['userid'];
		$userpass=$_POST['userpass'];
		
		
	// 5. DB에 데이터 확인하고 데이터가 비밀번호와 아이디가 맞는지 확인하기
	//5-1) members라는 테이블에서 id와 pass를 두개다 일치하는 데이터 가져오기

	//5-2) 만약 id와 pass라는 데이터가 1개라면 회원 로그인 성공
	$sql = "SELECT count(*) FROM members WHERE userid='$userid' AND userpass='$userpass'";
	$result = mysqli_query($con, $sql); // 테이블표

	$row = mysqli_fetch_array($result, MYSQLI_NUM); //줄

	if($row[0] == 1) {
		// 세션 설정
		session_start(); $_SESSION['userid'] = $userid;  //$_SESSION['now'] = $userid.date("Ymd His");
	echo "<script>alert('로그인에 성공했습니다.')</script>";} //데이터를 찾은 칸
	else{echo "<script>
								alert('아이디와 비밀번호를 확인해주세요.');
								history.go(-1);
						</script>";
	}
	
	// 6. DB 종료
 include_once  './inc/db_connect_close.php' ;
	// 7. 04_join_result.php로 파일 넘기기
	//									refresh 새로고침    content="초"  url= " 경로"    
	//쿼링스트링 : ./04_join_result.php?userdata=$useremail
	echo "<meta http-equiv='refresh' content='0; URL=./index.php'/>";
?>