<?php
	header("Content-type:text/html; charset=utf-8");
	# board_search.php
	//1. db연동
	include_once  './inc/db_connect.php' ;  
	
	//2. get방식으로 데이터 넘겨받기
	$search = $_REQUEST['now_search'];

	//3. 현재 단어가 포함되어 있는 (like 이용) 자료찾아오기 (표)
	$result = mysqli_query($con, "SELECT * FROM multiboard WHERE title LIKE '%$search%'") or die (mysqli_error($con));

	$returnresult = "<ul>";
	while( $row = mysqli_fetch_array($result,  MYSQLI_ASSOC) ){
		$returnresult .= '<li> <a href="./board_detail.php?no='. $row['no'].'">'.$row['title'].'
		</a></li>';
	}
	$returnresult.="<ul>";

	mysqli_free_result($result);
	mysqli_close($con);
	echo $returnresult;

	//4. 한줄씰 출력

	//5. DB닫기
?>