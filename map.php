<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','매장찾기 | 뉴발란스'); </script> ";
?>
		

		<div id="sub">
			<div class="sub_menu">
				<div class="container">
					<ul>
						<li><a href="/" title="홈 바로가기"><span>홈</span></a></li>
						<li><a href="#" title="CUSTOMER CENTER 바로가기">CUSTOMER CENTER</a></li>
						<li><a href="#" title="매장찾기 바로가기">매장찾기</a></li>
					</ul>
				</div>
			</div><!-- //sub_menu -->
			
			<div class="sub_tmpt">
				<div class="container">
					<?php  include_once  './sub_cs.php' ;    
				echo "<script>
							$('.map_m5 a').addClass('selected'); 
								
							</script>";
				?>
					<p class="map_title">뉴발란스 본사 오시는 길</p>
					<div class="map_view"></div>
					
		                  
					<div class="map_info">
					    <p class="address">
					        서울특별시 마포구 서강로 77 (평일 10:00 ~ 17:00 / 점심시간 12:30 ~ 13:30)
					        <span>02-338-9085</span>
					    </p>
					    <p class="pt"><strong>자전거</strong>홍대입구 와우산로 32길을 따라 약 7분 거리</p>
					    <p><strong>자가용</strong>창전삼거리에서 우회전 서강로를 따라 이동</p>
					    <p><strong>지하철</strong>6호선(광흥창) 1번출구 약 6분거리  / 경의중앙선(서강대) 2번 출구 약 12분 거리</p>
					    <p class="bus"><strong>자가용</strong>
                            <span class="green">마을</span> 마포07 마포14&nbsp; &nbsp;
                            <span class="blue">간선</span> 153, 753&nbsp; &nbsp;
                            <span>지선</span> 5713, 7013A
                        </p>
					</div>
					
				</div><!-- //container -->
				
			</div><!-- //sub_tmpt -->
		
		</div><!-- //sub -->
	 <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 <script src="http://maps.google.com/maps/api/js"></script><!--구글지도-->
 <script src="js/gmaps.js"></script><!--구글지도-->
		<script>
			//map 구글 지도 기능
		var map = new GMaps({
		  el: '.map_view',
		  lat: 37.5499804,
		  lng: 126.93153010000003 
		});
	//37.5499804,126.93153010000003
		map.addMarker({
			  lat: 37.5499804,
			  lng: 126.93153010000003,
			  title: '뉴발란스 본사',
			  click: function(e) { alert('네이버 지도로 연동됩니다');	},
			  infoWindow: { content: "<a href='http://map.naver.com/?mapmode=0&lng=76f02722b36ef8ff289f471cb3308bb5&pinId=18339484&pinType=site&lat=375bbed6214da0407203e27b93088f89&dlevel=11&enc=b64' title='' target='_blank'>네이버지도로 이동</a>" }
			});
		</script>
<?php  include_once  './footer.php' ;    ?>

