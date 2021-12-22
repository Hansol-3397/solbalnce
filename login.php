
<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','로그인 | 뉴발란스'); </script> ";
?>
		

		<div id="sub">
			<div class="sub_menu">
				<div class="container">
					<ul>
						<li><a href="/" title="홈 바로가기"><span>홈</span></a></li>
						<li><a href="#" title="로그인 바로가기">로그인</a></li>
					</ul>
				</div>
			</div><!-- //sub_menu -->
			
			<div class="sub_tmpt">
				<div class="container">
					<div class="loginTab">
						<ul>
							<li><a href="#member" title="회원로그인 바로가기" class="selected"><h3>회원 로그인</h3></a>
								<div class="login_cont show" id="member">
									<form action="./login_process.php" method="post" id="member_login">
										<fieldset>
											<legend>로그인 폼</legend>
											<p><input type="text" id="yourId" title="yourId" name="userid" placeholder="아이디"></p>
											<p><input type="password" id="yourPass"  title="yourPass"  name="userpass"  placeholder="비밀번호"></p>
											<p class="bt"><input type="submit" value="로그인" id="login"   ></p>
											<p class="save">
												<input type="checkbox" id="idSave"><label for="idSave">아이디 저장</label>
												<a href="#" title="아이디 비밀번호 찾기 바로가기">아이디/비밀번호 찾기</a>	
											</p>
										</fieldset>
									</form>
								</div><!-- //login_cont -->
							</li><!-- //회원로그인 End -->
							<li><a href="#notmember" title="비회원로그인 바로가기"><h3>비회원 주문/배송조회</h3></a>
								<div class="login_cont" id="notmember">
									<form action="#" method="post" id="notmember_login">
										<fieldset>
											<legend>비회원 로그인 폼</legend>
											<p><input type="text" id="yourName" title="yourName" placeholder="이름"></p>
											<p><input type="text" id="yourNumber" title="yourNumber"  placeholder="주문번호"></p>
											<p><input type="password" id="yourNotpass" title="yourNotpass" placeholder="비밀번호"></p>
											<p><input type="submit" value="조회 하기" id=""></p>
											<p class="save">
												· 주문번호/비밀번호를 모두 입력해 주십시오.<br>
												· 기억나지 않으실 경우, 고객센터(02-338-9085)를 통해<br> 문의해주세요.
													
											</p>
										</fieldset>
									</form>
								</div><!-- //login_cont -->
							</li><!-- //비회원 주문/배송조회 End -->
						</ul>
					</div><!-- //loginTab -->
					

					<div class="benefits">
						<h3><img src="images/sub/benefits_img.png" alt="회원가입 아이콘">회원가입하고 다양한 혜택 받으세요!</h3>
						<div class="con">
							<ul>
								<li>
									<p class="imgBox"><img src="images/sub/login_benefit_1.png" alt="회원가입 쿠폰 5,000원"></p>
									<strong>회원가입 쿠폰발급</strong>
									<p class="">
										<span class="">뉴발란스 온라인 토어에서 사용 가능한 </span>
										<span class="">회원가입 쿠폰 5,000원이 지급됩니다.</span>
									</p>
								</li><!-- 회원가입 쿠폰발급 End -->
								<li>
									<p><img src="images/sub/login_benefit_2.png" alt="뉴발란스 마일리지 이미지"></p>
									<strong>온 · 오프 마일리지 통합마일리지</strong>
									<p>
										<span class="">온ㆍ오프라인 매장에서 적립한 마일리지를</span>
										<span class="">온ㆍ오프라인 매장에서 사용할 수 있습니다.</span>
									</p>
								</li><!-- 온 · 오프 마일리지 통합마일리지 End -->
								<li class="border0">
									<p><img src="images/sub/login_benefit_3.png" alt="이벤트 상자 이미지"></p>
									<strong>신상품 및 다양한 이벤트이벤트</strong>
									<p>
										<span class="">신상품 및 다양한 이벤트와 행사 소식을  </span>
										<span class="">이메일, SNS를 통해 받아보실 수 있습니다.</span>
									</p>
								</li><!--신상품 및 다양한 이벤트이벤트 End -->
							</ul>
							<p class="join_shortcut"> 
								<a href="join.php" title="회원가입 바로가기">회원가입 바로가기</a>
							</p><!-- //join_shortcut -->
						</div><!-- //con -->
					</div><!-- //benefits -->
				</div><!-- //container -->
				
			</div><!-- //sub_tmpt -->
		
		</div><!-- //sub -->

<?php  include_once  './footer.php' ;    ?>