<?php
						header("Content-type:text/html;  charset=utf-8");
						session_cache_expire(10); //세션 유지시간 10분
						session_start();
					?>

<!-- //#############  header.php -->
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>뉴발란스</title>
   <link rel="stylesheet"  type="text/css"  href= "css/style.css" />

   <!--favicon-->
  <link href="./images/favicon/fav_32.png" rel="shortcut icon">
  <link href="./images/favicon/fav_32.png" rel="apple-touch-icon">
  <link href="./images/favicon/fav_16.png" rel="icon" >
  <link href="./images/favicon/fav_32.png" rel="icon" >
  <link href="./images/favicon/fav_48.png" rel="icon" >
  <link href="./images/favicon/fav_64.png" rel="icon">
  <link href="./images/favicon/fav_128.png" rel="icon" >
  <link href="./images/favicon/fav_256.png" rel="icon" >
  <link href="./images/favicon/fav_512.png" rel="icon" >

     <!--[if  IE 7]>
      <link rel="stylesheet"  type="text/css"  href= "css/ie7.css" />
	<![endif]-->
  <!--[if lt ie 9]>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script>
	<link rel="stylesheet"  type="text/css"  href= "css/ielt9.css" />
  <![endif]-->

 <style>    
 </style>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="js/common.js"></script><!--  //header, footer 공통 스크립트 -->
   <script src="js/main.js"></script><!--  //메인 스크립트 -->
   <script src="js/sub.js"></script> <!-- //서브 스크립트 -->
   <script type="text/javascript" src="./js/jquery.touchSwipe.min.js"></script><!-- //스와이프 플러그인 -->
<!--   <script src="http://dmaps.daum.net/map_js_init/postcode.v2.js"></script>  다음에서 주소 찾기 팝업창 제공 -->

 </head>
 <body>
    <ul class="skip_nav">
			<li><a href="#mainLink" title="본문바로가기">본문바로가기</a></li>
			<li><a href="#gnb" title="주메뉴바로가기">주메뉴</a></li>
	</ul>

	<div id="wrap">
		<header id="header">
			<!-- 1)top menu  -->
			<div class="h_content hc1">
				<div class="container">
					<ul class="leftMenu">
						<li><a href="./map.php" title="매장안내 바로가기">매장안내</a></li>
						<li class="down"><a href="#" title="앱다운 바로가기">앱다운</a></li>
					</ul><!-- //leftMenu -->
					<ul class="rightMenu">
					
					<!-- 로그인 유지 -->
					
					<!-- 로그인 유지 End -->

					<?php
					

					// 만약 세션이 없다면 login, join로 넘기기
					if(empty($_SESSION['userid']) ){  ?>
						<li class="bgNone"><a href="./login.php" title="로그인 바로가기">로그인</a></li>
						<li><a href="./join.php" title="회원가입 바로가기">회원가입</a></li>
					<?php		}else{   ?>
						<li class="bgNone ml"><span><?=$_SESSION['userid']?></span>님 환영합니다.
							<a href="./logout.php" title="로그아웃 하기">로그아웃</a>
						</li>
					<?php	 } ?>
					
						<li><a href="#" title="장바구니 바로가기">장바구니</a></li>
						<li><a href="#" title="주문배송 바로가기">주문배송</a></li>
						<li><a href="./board.php" title="마이페이지 바로가기">마이페이지</a></li>
						<li><a href="./board.php" title="고객센터 바로가기">고객센터</a></li>
						<li><a href="#" title="사이트맵 바로가기">사이트맵</a></li>
					</ul><!-- //rightMenu -->
				</div><!-- //container -->
			</div><!-- //h_content hc1 -->
			
			<!-- 2) h1 logo  -->
			<div class="h_content hc2">
				<div class="container ">	
					<h1 class="logo">
						<a href="index.php" title="메인 바로가기">
							<img src="images/logo.jpg" alt="뉴발란스 로고">
							<img class="mobile_logo" src="images/mobile_logo.png" alt="모바일 뉴발란스 로고">
						</a>
					</h1>

					<form action="#" method="post" class="search">	
					<fieldset>
						<legend>검색</legend>
						<p>
							 <input type="search" id="search" name="search" placeholder="검색어를 입력하세요"   autocomplete="on">
							 <a href="#" title="모바일 검색 닫기" class="close"><img src="images/mobole_close.png" alt="모바일 검색 닫기 버튼"></a>
							 
							 <label for="search">
								<img src="images/m1_search.png" alt="검색버튼">
								<img class="m_search" src="images/mobile_search.png" alt="모바일 검색버튼">
							 </label>
						</p>
					</fieldset>
					</form>
				</div>

				

				<div class="modaloverlay"></div><!-- //모바일 gnb눌렀을때 바탕 검정 -->
			</div><!-- //h_content hc2 -->

			<div class="mtLeft">
				<p id="m_search">
					<a href="#" title="검색 바로가기"><img src="images/mobile_search.png" alt="모바일 검색 이미지"></a>
				</p>
				<p>
					<a href="login.php" title="마이페이지 바로가기"><img src="images/mobile_user.png" alt="모바일 마이페이지 이미지"></a>
				</p>
			</div>
			
			<div class="mtMenu">
				<a href="#" title="모바일 메뉴 바로가기">
					<img src="images/mobile_menu.png" alt="모바일 메뉴 이미지">
 				</a>
			</div>
			<!-- 3) gnb  -->
			<nav class="h_content hc3 m_gnb">
				<h2 class="hidden">뉴발란스 gnb</h2>
				<div class="container">
					<div class="fix_home"><a href="#" title="홈 바로가기"><img src="images/gnb_fix_home.png" alt="홈 바로가기 이미지"></a></div> <!-- // 스크롤탑 fix 홈 바로가기  -->
					<ul class="gnb">
						<li class="allMenu"><a href="#" title="전체카테고리 바로가기" id="gnb"><span class="">메뉴</span>전체카테고리</a>
							<ul class="all_menu_sub1">
								<li><a href="shop_men.php" title="Men 바로가기">MEN</a>
									<ul class="all_menu_sub2">
										<li><a href="product_view.php" title="러닝  바로가기">러닝 </a></li>
										<li><a href="#" title="축구/야구/테니스  바로가기">축구/야구/테니스 </a></li>
										<li><a href="#" title="티셔츠  바로가기">티셔츠 </a></li>
										<li><a href="#" title="나시  바로가기">나시 </a></li>
										<li><a href="#" title="맨투맨/후드   바로가기">맨투맨/후드</a></li>
										<li><a href="#" title="롱팬츠  바로가기">롱팬츠 </a></li>
										<li><a href="#" title="숏팬츠  바로가기">숏팬츠 </a></li>
										<li><a href="#" title="레깅스  바로가기">레깅스 </a></li>
									</ul>
								</li>
								<li><a href="#" title="women 바로가기">women</a>
									<ul class="all_menu_sub2">
										<li><a href="#" title="러닝  바로가기">러닝 </a></li>
										<li><a href="#" title="트레이닝  바로가기">트레이닝 </a></li>
										<li><a href="#" title="우먼스  바로가기">우먼스 </a></li>
										<li><a href="#" title="티셔츠  바로가기">티셔츠 </a></li>
										<li><a href="#" title="슬리브리스/브라탑   바로가기">슬리브리스/브라탑</a></li>
										<li><a href="#" title="맨투맨/후디  바로가기">맨투맨/후디 </a></li>
										<li><a href="#" title="자켓  바로가기">자켓 </a></li>
										<li><a href="#" title="롱팬츠  바로가기">롱팬츠 </a></li>
										<li><a href="#" title="숏팬츠/스커트  바로가기">숏팬츠/스커트 </a></li>
										<li><a href="#" title="레깅스  바로가기">레깅스 </a></li>
									</ul>
								</li>
								<li><a href="#" title="kids 바로가기">kids</a>
									<ul class="all_menu_sub2">
										<li><a href="#" title="의류  바로가기">의류 </a></li>
										<li><a href="#" title="신발  바로가기">신발</a></li>
										<li><a href="#" title="가방/용품  바로가기">가방/용품 </a></li>
									</ul>
								</li>
								<li><a href="#" title="shoes 바로가기">shoes</a>
									<ul class="all_menu_sub2">
										<li><a href="#" title="러닝  바로가기">러닝 </a></li>
										<li><a href="#" title="트레이닝  바로가기">트레이닝 </a></li>
										<li><a href="#" title="라이프스타일  바로가기">라이프스타일 </a></li>
										<li><a href="#" title="슬리퍼  바로가기">슬리퍼 </a></li>
										<li><a href="#" title="썸머슈즈   바로가기">썸머슈즈</a></li>
									</ul>
								</li>
								<li><a href="#" title="bag 바로가기">bag</a>
									<ul class="all_menu_sub2">
										<li><a href="#" title="백팩  바로가기">백팩 </a></li>
										<li><a href="#" title="가방  바로가기">가방</a></li>
									</ul>
								</li>
								<li><a href="#" title="ACC 바로가기">ACC</a>
									<ul class="all_menu_sub2">
										<li><a href="#" title="모자  바로가기">모자 </a></li>
										<li><a href="#" title="장갑 바로가기">장갑 </a></li>
										<li><a href="#" title="양말  바로가기">양말 </a></li>
										<li><a href="#" title="기타  바로가기">기타 </a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="#" title="inside nb 바로가기">inside nb</a>
						    <div class="gnb_subMenu_box">
								<div class="gnb_subMenu_wrap">
									<ul class="gnb_subMenu">
										<li><a href="about.php" title="100년역사 바로가기">100년역사</a></li>
										<li><a href="volunteer.php" title="사회공헌 바로가기">사회공헌</a></li>
										<li><a href="notice.php" title="공지사항 바로가기">공지사항</a></li>
									</ul><!-- //gnb_subMenu -->
									<dl class="img_box">
										<dt><a href="volunteer.php" title="사회공헌 바로가기">사회공헌</a></dt>
										<dd><a href="volunteer.php" title="사회공헌 바로가기"><img src="images/gnb_volunteer.jpg" alt="사회공헌"></a></dd>
									</dl><!-- //사회공헌 -->
									<dl class="board">
										<dt><a href="notice/php" title="공지사항 바로가기">공지사항</a></dt>
										<dd><a href="#" title="뉴발란스 쿠폰 정책 변경안내 바로가기">뉴발란스 쿠폰 정책 변경안내</a></dd>
										<dd><a href="#" title="뉴발란스 마일리지 사용방법 변경 안내 바로가기">뉴발란스 마일리지 사용방법 변경 안내</a></dd>
										<dd><a href="#" title="8월 14일 광복절 임시휴일 온라인스토어 업무 안내 바로가기">8월 14일 광복절 임시휴일 온라인스토어 업무 안내</a></dd>
										<dd><a href="#" title="설 연휴 배송안내 바로가기">설 연휴 배송안내</a></dd>
									</dl><!-- //공지사항 -->
								</div><!-- //gnb_subMenu_wrap -->
							</div><!-- //gnb_subMenu_box -->
						</li>
						<li><a href="#" title="SPECIAL SALE 바로가기">SPECIAL SALE</a>
						    <div class="gnb_subMenu_box">
								<div class="gnb_subMenu_wrap">
									<ul class="gnb_subMenu">
										<li><a href="shop_men.php" title="SPECIAL SALE 바로가기">SPECIAL SALE</a></li>
									</ul>
									<dl class="img_box2">
										<dt><a href="shop_men.php" title="SPECIAL SALE 바로가기">NEW</a></dt>
										<dd><a href="shop_men.php" title="SPECIAL SALE 바로가기"><img src="images/gnb_sale_new.jpg" alt="SPECIAL SALE new"></a></dd>
										<dd><a href="shop_men.php" title="SPECIAL SALE 바로가기"><img src="images/gnb_sale_new2.jpg" alt="SPECIAL SALE new"></a></dd>
									</dl><!-- //NEW -->
									<dl class="img_box2">
										<dt><a href="shop_men.php" title="SPECIAL SALE 바로가기">BEST</a></dt>
										<dd><a href="shop_men.php" title="SPECIAL SALE 바로가기"><img src="images/gnb_sale_best.jpg" alt="SPECIAL SALE best"></a></dd>
										<dd><a href="shop_men.php" title="SPECIAL SALE 바로가기"><img src="images/gnb_sale_best2.jpg" alt="SPECIAL SALE best"></a></dd>
									</dl><!-- //BEST -->
								</div><!-- //gnb_subMenu_wrap -->
							</div><!-- //gnb_subMenu_box -->
						</li>

						<li><a href="#" title="EVENT 바로가기">EVENT</a>
						   <div class="gnb_subMenu_box">
								<div class="gnb_subMenu_wrap">
									<ul class="gnb_subMenu">
										<li><a href="event.php" title="진행중인 이벤트 바로가기">진행중인 이벤트</a></li>
										<li><a href="event_past.php" title="지난이벤트/당첨자발표 바로가기">지난이벤트/당첨자발표</a></li>
									</ul>
									<dl class="img_box">
										<dt><a href="event.php" title="진행중인 이벤트 바로가기">진행중인 이벤트</a></dt>
										<dd><a href="event.php" title="진행중인 이벤트 바로가기"><img src="images/sub/event_past_1.jpg" alt="뉴발란스키즈 책가방 이벤트"></a></dd>
									</dl><!-- //진행중인 이벤트 사진으로 -->
									<dl class="board">
										<dt><a href="event_past.php" title="지난이벤트/당첨자발표 바로가기">지난이벤트/당첨자발표</a></dt>
										<dd><a href="#" title="뉴발란스 쿠폰 정책 변경안내 바로가기">뉴발란스 쿠폰 정책 변경안내</a></dd>
										<dd><a href="#" title="뉴발란스 마일리지 사용방법 변경 안내 바로가기">뉴발란스 마일리지 사용방법 변경 안내</a></dd>
										<dd><a href="#" title="8월 14일 광복절 임시휴일 온라인스토어 업무 안내 바로가기">8월 14일 광복절 임시휴일 온라인스토어 업무 안내</a></dd>
										<dd><a href="#" title="설 연휴 배송안내 바로가기">설 연휴 배송안내</a></dd>
									</dl><!-- //지난이벤트/당첨자발표 -->
								</div><!-- //gnb_subMenu_wrap -->
							</div><!-- //gnb_subMenu_box -->
						</li>

						<li><a href="#" title="PERFORMANCE 바로가기">PERFORMANCE</a>
							<div class="gnb_subMenu_box">
								<div class="gnb_subMenu_wrap">
									<ul class="gnb_subMenu">
										<li><a href="performence_1.php" title="Running 바로가기">Running</a></li>
										<li><a href="performence_1.php" title="Walking 바로가기">Walking</a></li>
										<li><a href="performence_1.php" title="Baseball 바로가기">Baseball</a></li>
										<li><a href="performence_1.php" title="Football 바로가기">Football</a></li>
										<li><a href="performence_1.php" title="Women`s 바로가기">Women`s</a></li>
									</ul>
									<dl class="img_box3">
										<dt><a href="performence_1.php" title="Running 바로가기">Running</a></dt>
										<dd class="big"><a href="performence_1.php" title="Running 바로가기"><img src="images/gnb_running1.jpg" alt="한혜진 크루즈"></a></dd>
										<dd><a href="performence_1.php" title="Running 바로가기"><img src="images/gnb_running2.jpg" alt="한혜진 크루즈"></a></dd>
										<dd><a href="performence_1.php" title="Running 바로가기"><img src="images/gnb_running3.jpg" alt="한혜진 크루즈"></a></dd>
									</dl><!-- //Running -->
									<dl class="img_box2">
										<dt><a href="performence_1.php" title="Women`s 바로가기">Women`s</a></dt>
										<dd><a href="performence_1.php" title="Women`s 바로가기"><img src="images/sub/lookbook_p5.jpg" alt="김연아 Women`s"></a></dd>
										<dd><a href="performence_1.php" title="Women`s 바로가기"><img src="images/gnb_wonem.jpg" alt="김연아 Women`s"></a></dd>
									</dl><!-- //Women`s -->
								</div><!-- //gnb_subMenu_wrap -->
							</div><!-- //gnb_subMenu_box -->
						</li>
						<li><a href="#" title="lookbook 바로가기">lookbook</a>
							<div class="gnb_subMenu_box">
								<div class="gnb_subMenu_wrap">
									<ul class="gnb_subMenu">
										<li><a href="lookbook.php" title="lookbook 바로가기">lookbook</a></li>
										<li><a href="video.php" title="video 바로가기">video</a></li>
									</ul>
										<dl class="img_box">
											<dt><a href="lookbook.php" title="lookbook 바로가기">lookbook</a></dt>
											<dd><a href="lookbook.php" title="lookbook 바로가기"><img src="images/gnb_lookbook.jpg" alt="한혜진 크루즈 lookbook"></a></dd>
										</dl><!-- //lookbook -->
										<dl class="img_box">
											<dt><a href="video.php" title="video 바로가기">video</a></dt>
											<dd><a href="video.php" title="video 바로가기"><img src="images/gnb_video.jpg" alt="김연아 우먼스 홍보영상"></a></dd>
										</dl><!-- //video -->
								</div><!-- //gnb_subMenu_wrap -->
							</div><!-- //gnb_subMenu_box -->
						</li>
					</ul>
				</div><!-- //container -->
				<div class="mobile_menu_cancel"> <a href="#" title=""><img src="images/m_menu_cancel.png" alt="모바일 닫기 버튼"></a></div>
			</nav><!-- //h_content hc3 -->
			

			<div class="mobile_Quickmenu">
				<ul>
					<li class="on"><a href="#" title="home 바로가기">Home</a></li>
					<li><a href="#" title="bset 바로가기">bset</a></li>
					<li><a href="#" title="new 바로가기">new</a></li>
					<li><a href="#" title="sale 바로가기">sale</a></li>
					<li><a href="#" title="event 바로가기">event</a></li>
				</ul>
			</div>

			<!-- 스크롤 탑 -->
			<div class="top">
					<a href="#" id="top">
						<img src="images/top.png" alt="top">
					</a>
				</div><!-- //top -->
				
		</header>
		