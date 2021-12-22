<?php
	header("Content-type:text/html;  charset=utf-8");
//	session_cache_expire(10); //세션 유지시간 10분
//	session_start();
/* ##############(1/2) DB연동 start   db_connect.php*/	
	//include_once  dirname(__FILE__)."/inc/db_connect.php";
	include_once  './inc/db_connect.php' ;  
/* ##############(1/2) DB연동 close  db_connect.php*/	

	$sql= "SELECT * FROM multiboard order by no DESC"; //ORDER BY no desc 최신글을 맨위로
		//5. sql구문 실행
	$result = mysqli_query($con, $sql) or die(mysqli_error($con)); //표
	$rowCnt=mysqli_affected_rows($con); //echo "전체갯수" . $rowCnt;
	$cnt= 0;
	//echo $row['title'];
		//6. 한줄씩 뽑기
		//7. 각각의 데이터 출력
?>



<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','1대1문의 | 뉴발란스'); </script> ";
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
					
					 <div class="board_search mt">
					   
					             <input type="search" id="board_search"  name="search"  placeholder="검색어를 입력해주세요" title="검색어 입력">

					             <input type="button" id="search_ico" title="search" value="검색">
								
									<script>
									$(function(){
										$("#board_search").on("keyup",function(){
										//	alert('dd');
												$.ajax({
												url:"./board_search.php",
												type:"get",
												data:{"now_search" : $(this).val()},
												dataType:"text",
												success:function(searchData){ $("#result").html(searchData); },
												error:function( xhr, textStatus, errorThrown){
													$("#result").html(textStatus + "(HTTP-" + xhr.status + "/" + errorThrown );}
											}); // $.ajax End
										}); //$("#search") End
									}); //$(function() End
								</script>
								
								

				
					 </div><!-- //board_search-->
					
					<ul class="result_search"><!-- 검색 결과 가져오기 -->
									<li id="result">
										
									</li>
					</ul>

					 <div class="board_box board_tmpt">
					     <dl class="board_header">
					         <dt class="num">번호</dt>
							 <dt class="subject">제목</dt>
							 <dt class="writer">글쓴이</dt>
					         <dt class="date">작성일</dt>
					         <dt class="views">조회</dt>
					     </dl>
						
							
					<?php 
						while ( $row = mysqli_fetch_array($result, MYSQLI_ASSOC)  ) // 줄-row , null
						{   
					?>

					     <dl>
					         <dd class="num"><?=$rowCnt-$cnt?></dd>
					         <dd class="subject"><a href="./board_detail.php?no=<?=$row['no']?>" title="해당 게시물로 이동"><?=$row['title']?></a></dd>
							 <dd class="writer"><?=$row['name']?></dd>
					         <dd class="date"><?=$row['wdate']?></dd>
							 <dd class="views"><?=$row['view']?></dd>
					     </dl>
					
					<?php
							$cnt++;
						 }
					?>
					<!-- 			###################데이터 삽입 END -->

				<ul class="menu_btn">
					<li><a href="./board_write.php"><input type="button" value="글쓰기"/></a></li>
				</ul>


					 </div><!--//notice_box-->
					 <ul class="page_number">
					    <li class="prev"><a href="#" title="이전 바로가기"></a></li>
					    <li><a href="#" title="1번 바로가기" class="selected">1</a></li>
					    <li><a href="#" title="2번 바로가기">2</a></li>
					    <li><a href="#" title="3번 바로가기">3</a></li>
					    <li><a href="#" title="4번 바로가기">3</a></li>
					    <li><a href="#" title="5번 바로가기">5</a></li>
					    <li class="next"><a href="#" title="다음 바로가기"></a></li>
					</ul>
				</div><!-- //container -->
				
			</div><!-- //sub_tmpt -->
		
		</div><!-- //sub -->

<?php  include_once  './footer.php' ;    ?>
<?php  include_once  './inc/db_connect_close.php' ;    ?>