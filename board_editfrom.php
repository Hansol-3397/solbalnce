<?php
	header("Content-type:text/html; charset=utf-8");
	### board_editform.php 파일
	# board_write.php 복사해서 board_editform.php 이름 바꾸기
	//1. db접속
	include_once  './inc/db_connect.php' ; 
	//4. 수정할 글쓰기 번호 받아오기
	$no=$_GET['no'];
	//5. $sql 수정할 번호의 글 정보 가져오기
	$sql="select * FROM multiboard WHERE no ='$no' ";
	$result = mysqli_query($con, $sql) or die (mysqli_error());

	//6. 글줄단위로 뽑기
	$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
	//7. 해당하는 글 내용 체우기
?>

<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','1대1문의 수정 | 뉴발란스'); </script> ";
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
				<form action="./board_edit.php?no=<?=$no?>" method="post">
				<div class="subcontent subtop ">
				
					<div id="" class="board detail write">
						<ul class="title">
							<li class="">글쓰기</li>
						</ul>
						<ul class="detail_con">
							<li class="detail_con_title">제목</li>
							<li class="detail_con_content"><input type="text" id="title" name="title" value="<?=$row['title']?>"></li>
						</ul>
						<ul class="detail_con">
							<li class="detail_con_title">이름</li>
							<li class="detail_con_content"><input type="text" id="name" name="name" value="<?=$row['name']?>" readonly="readonlys"></li>
						</ul>
						<ul class="detail_con">
							<li class="detail_con_title">이메일</li>
							<li class="detail_con_content"><input type="text" id="email" name="email" value="<?=$row['email']?>"></li>
						</ul>
						<ul class="detail_con">
							<li class="detail_con_title">비밀번호</li>
							<li class="detail_con_content"><input type="password" id="pass" name="pass"><span class="">*수정, 삭제시 필수!</span></li>
						</ul>
						<ul class="detail_con con">
							<li class="detail_con_title">내용</li>
							<li class="detail_con_content"><textarea rows="5" cols="56" id="content" name="content"><?=$row['content']?></textarea></li>
						</ul>

			
					</div><!-- //board detail write -->
					

					<ul class="menu_btn">
						<li><input type="submit" value="저장"/></li>
						<li><input type="reset" value="다시쓰기"/></li>
						<li><input type="button" value="목록" onclick="history.back(-1)"/></li>
					</ul>
					<script>
						// 다시쓰기 누르면 input val() 가 빈칸이 되게
						$(function(){
							$(".menu_btn input[type='reset']").click(function(){
								$(".detail_con_content input").attr("value","");
								$(".detail_con_content textarea").text("");
							});
						});
					</script>		
				</div>	<!-- //subcontent subtop -->
				</form>
			</div><!-- //container -->
				
		</div><!-- //sub_tmpt -->
	
	</div><!-- //sub -->
<?php  include_once  './footer.php' ;    ?>