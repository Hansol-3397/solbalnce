<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','1대1문의 작성 | 뉴발란스'); </script> ";
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
					
			<form action="./board_insert.php" method="post">
			<div class="subcontent subtop ">
			
				<div id="" class="board detail write">
					<ul class="title">
						<li class="">글쓰기</li>
					</ul>
					<ul class="detail_con">
						<li class="detail_con_title">제목</li>
						<li class="detail_con_content"><input type="text" id="title" name="title"></li>
					</ul>
					<ul class="detail_con">
						<li class="detail_con_title">이름</li>
						<li class="detail_con_content"><input type="text" id="name" name="name"></li>
					</ul>
					<ul class="detail_con">
						<li class="detail_con_title">이메일</li>
						<li class="detail_con_content"><input type="text" id="email" name="email"></li>
					</ul>
					<ul class="detail_con">
						<li class="detail_con_title">비밀번호</li>
						<li class="detail_con_content"><input type="password" id="pass" name="pass"><span class="">*수정, 삭제시 필수!</span></li>
					</ul>
					<ul class="detail_con con">
						<li class="detail_con_title">내용</li>
						<li class="detail_con_content"><textarea rows="5" cols="56" id="content" name="content"></textarea></li>
					</ul>

		
				</div><!-- //board detail write -->
				

				<ul class="menu_btn">
					<li><input type="submit" value="저장"/></li>
					<li><input type="reset" value="다시쓰기"/></li>
					<li><input type="button" value="목록" onclick="history.back(-1)"/></li>
				</ul>
						
			</div>	<!-- //subcontent subtop -->
			</form>

			</div><!-- //container -->
					
		</div><!-- //sub_tmpt -->
		
		</div><!-- //sub -->
<?php  include_once  './footer.php' ;    ?>