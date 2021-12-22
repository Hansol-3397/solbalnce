<?php
	header("Content-Type:text/html; charset=utf-8");
	// 1. DB에 접속하기 mysqli_connect

	include_once  './inc/db_connect.php' ;   
	// 4. 쿼리스트링을 이용하여 데이터 넘어온것 확인 - userdata			$email=$_GET['userdata']
	$email = $_GET['userdata'];
	// 5. mysqli를 이용해서 해당하는 이메일의 데이터 찾기 - select
	// SELECT*FROM member WHERE useremail='$email'
	// 6. mysqli_fetch_array
	// 7. echo 이용해서 데이터 출력
	$sql	 = "SELECT*FROM members WHERE useremail='$email'";
	$result = mysqli_query($con, $sql) or die(mysqli_error($con));
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC); // NUM 은 1번 2번 .... ASSOC 필드명
	// echo $row['userid'] ."/" .$row['username'];
?>
<?php  include_once  'header.php' ;    ?>
<div id="sub">
			<div class="sub_menu">
				<div class="container">
					<ul>
						<li><a href="/" title="홈 바로가기"><span>홈</span></a></li>
						<li><a href="login.php" title="로그인 바로가기">로그인</a></li>
						<li><a href="#" title="회원가입 바로가기">회원가입 완료</a></li>
					</ul>
				</div>
			</div><!-- //sub_menu -->
			
			<div class="sub_tmpt join result">
				<div class="container">
		
					<h3>뉴발란스 회원가입이 완료 되었습니다!</h3>
					<div id="result">
						<p>
							<strong>아이디</strong>
							<span class="resultshow"><?php echo $row['userid'];?></span>
						</p>
						<p>
							<strong class="label">비밀번호</strong>
							<span class="resultshow"><?=$row['userpass'];?></span>  <!-- (=)은 대입 / 출력하라는 얘기 --> 
						</p>
						<p>
							<strong class="label">이름</strong>
							<span class="resultshow"><?=$row['username'];?></span>
						</p>
						<p>
							<strong class="label">이메일</strong>
							<span class="resultshow"><?=$row['useremail'];?></span>
						</p>
						<p>
							<strong class="label">MOBILE</strong>
							<span class="resultshow"><?=$row['userphone'];?></span>
						</p>
						<p>
							<strong class="label">가입날짜</strong>
							<span class="resultshow"><?=$row['userdate'];?></span>
						</p>
					</div><!-- //result -->

					<p class="login_control">
						<a href="login.php" title="로그인페이지 바로가기"><input type="button" value="로그인 하러가기"/></a>
						<a href="/" title="홈페이지 바로가기"><input type="button" value="홈페이지 이동"/></a>
					</p>	

				</div><!-- //container -->
			</div><!-- //sub_tmpt -->
		</div><!-- //sub -->

	<?php  include_once  '/footer.php' ;    ?>