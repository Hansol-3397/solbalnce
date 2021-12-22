<?php
	header("Content-type:text/html;  charset=utf-8");
		//1. db연동
	include_once  './inc/db_connect.php' ; 

		//4. 상세보기할 번호 넘겨받기
	$no=$_GET['no']; 
	$sql= "SELECT * FROM multiboard WHERE no='$no'";  //ORDER BY no desc 최신글을 맨위로
		//5. sql 념겨받은 번호의 데이터를 가져오기 (select * from where)
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //표
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		//6. 줄단위로 구분
		//7.해당하는 칸의 데이터 출력
?>

<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','1대1문의 상세보기 | 뉴발란스'); </script> ";
?>
		<div id="sub">
			<div class="sub_menu">
				<div class="container">
					<ul>
						<li><a href="/" title="홈 바로가기"><span>홈</span></a></li>
						<li><a href="#" title="CUSTOMER CENTER 바로가기">CUSTOMER CENTER</a></li>
						<li><a href="#" title="1대1문의 바로가기">1대1문의</a></li>
					</ul>
				</div>
			</div><!-- //sub_menu -->

		<div class="sub_tmpt">
		<div class="container">
			<?php  include_once  './sub_cs.php' ;    
		echo "<script>
					$('.map_m4 a').addClass('selected'); 
						
					</script>";
		?>
		
		<div class="subcontent subtop ">
			<div class="board detail">
				<ul class="title">
					<li class="">상세페이지</li>
				</ul>
				<ul class="detail_con">
					<li class="detail_con_title">제목</li>
					<li class="detail_con_content"><?=$row['title']?></li>
				</ul>
				<ul class="detail_con">
					<li class="detail_con_title">이름</li>
					<li class="detail_con_content"><?=$row['name']?></li>
				</ul>
				<ul class="detail_con">
					<li class="detail_con_title">이메일</li>
					<li class="detail_con_content"><?=$row['email']?></li>
				</ul>
				<ul class="detail_con">
					<li class="detail_con_title">조회수</li>
					<li class="detail_con_content"><?=$row['view']?></li>
				</ul>
				<ul class="detail_con">
					<li class="detail_con_title">날짜</li>
					<li class="detail_con_content"><?=$row['wdate']?></li>
				</ul>
				<ul class="detail_con con">
					<li class="detail_con_title">내용</li>
					<li class="detail_con_content"><?=$row['content']?></li>
				</ul>
			</div><!-- //board detail -->

			<ul class="menu_btn">
				<li><a href="./board.php"><input type="button" value="목록보기"/></a></li>
				<!-- <li><a href="./board_edit.php?"><input type="button" value="답글달기"/></a></li> -->
				<li><a href="./board_editfrom.php?no=<?=$no?>"><input type="button" value="수정"/></a></li>
				<li><a href="./board_delform.php?no=<?=$no?>"><input type="button" value="삭제"/></a></li>
			</ul>
		</div>	<!-- //subcontent subtop -->
	</div><!-- //container -->
					
		</div><!-- //sub_tmpt -->
		
		</div><!-- //sub -->
<?php  include_once  './footer.php' ;    ?>
<?php
	$sql = "UPDATE multiboard
				set view = view + 1
				WHERE no = '$no'	";
				mysqli_query($con, $sql) or die (mysqli_error($con));

		 include_once  './inc/db_connect_close.php' ;  	
?>