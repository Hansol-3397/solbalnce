<?php
	header("Content-type:text/html; charset=utf-8");
	include_once './inc/db_connect.php';  //db접속
	$check = $_GET['userid'];
	//1. $sql 받아온데이터가 db에 있는지 검사 select~
	$sql= "SELECT * from members where userid = '$check'";
	//2. $sql 실행
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); 
	//3. 줄단위로 뽑기
	$row=mysqli_fetch_array($result , MYSQLI_ASSOC );
	//4. 만약 데이터가 있다면 중복-사용불가능 / 없다면 사용가능출력
	$return = "<span style=\" color:red \">중복-사용불가능</span>";
	if ($check != $row['userid'])
		{
			$return = "<span style =  \"color:blue  \"> 사용가능 </span> ";
		}
		echo $return;

		mysqli_free_result($result);
		mysqli_close($con);

?>