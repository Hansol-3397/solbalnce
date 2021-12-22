<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','공지사항 | 뉴발란스'); </script> ";
?>
		

		<div id="sub">
			<div class="sub_menu">
				<div class="container">
					<ul>
						<li><a href="#" title="홈 바로가기"><span>홈</span></a></li>
						<li><a href="#" title="CUSTOMER CENTER 바로가기">CUSTOMER CENTER</a></li>
						<li><a href="#" title="공지사항 바로가기">공지사항</a></li>
					</ul>
				</div>
			</div><!-- //sub_menu -->
			
			<div class="sub_tmpt">
				<div class="container">
					<?php  include_once  './sub_cs.php' ;    
				echo "<script>
							$('.map_m2 a').addClass('selected'); 
								
							</script>";
				?>
					
					 <div class="board_search">
					     <form action="#" method="get">
					         <fieldset>
					             <legend>검색</legend>
					             <input type="text" id="search" title="search">
					             <input type="button" id="search_ico" title="search" value="검색">
					         </fieldset>
					     </form>
					 </div><!-- //board_search-->
					 <div class="board_box">
					     <dl class="board_header">
					         <dt class="num">번호</dt>
					         <dt class="title">제목</dt>
					         <dt class="date">일시</dt>
					     </dl>
					     <dl>
					         <dd class="num">64</dd>
					         <dd class="title"><a href="#" title="해당 게시물로 이동">뉴발란스 쿠폰 정책 변경안내</a></dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">63</dd>
					         <dd class="title"><a href="#" title="해당 게시물로 이동">뉴발란스 마일리지 사용방법 변경 안내</a></dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">62</dd>
					         <dd class="title">8월 14일 광복절 임시휴일 온라인스토어 업무 안내</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">61</dd>
					         <dd class="title">설 연휴 배송안내</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">60</dd>
					         <dd class="title">강남매장 오픈 2주년 이벤트</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">59</dd>
					         <dd class="title">뉴발란스 키즈 NK9D44101U 제품 리콜을 실시합니다.</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">58</dd>
					         <dd class="title">2014년 뉴발란스 마일리지 소멸 안내</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">57</dd>
					         <dd class="title">뉴발란스 키즈 바람막이 NK9A42159U상품에 대해 리콜을 실시 합니다.</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">56</dd>
					         <dd class="title">아동용 스키장갑 리콜공지</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
					     <dl>
					         <dd class="num">55</dd>
					         <dd class="title">12월 31일 마일리지 소멸안내</dd>
					         <dd class="date">2017-02-23	</dd>
					     </dl>
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