<!DOCTYPE html>
	<html lang="ko">
	 <head>
	  <meta charset="UTF-8">
	  <title>TMPT</title>
	  <link rel="stylesheet"  type="text/css"  href= "./css/04_style.css"/>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="./js/main.js"></script>
	 </head>
	 <body>
		<div class="basic">
			<ul id="infoMenu">
				<li><a href="./board.php" title="홈페이지 메인 바로가기">home</a></li>
				
				<?php
					// 만약 세션이 없다면 login, join로 넘기기
					if(empty($_SESSION['userid']) ){  ?>

					<li><a href="./login.php" title="로그인 페이지 바로가기">login</a></li>
					<li><a href="./join.php" title="회원가입 페이지 바로가기">join</a></li>
				<?php		}else{   ?>
					<li><span style="color:#f09; text-transform: none;"><?=$_SESSION['userid']?></span>님 환영합니다.
							<a href="./login.php" title="로그아웃 하기">LOGOUT</a>
					</li>
				<?php	 } ?>
				
			</ul><!--  보조메뉴 -->
