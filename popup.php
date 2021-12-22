
  
	<div class="popWrap">
		<div class="main"> 
			<p class="title">NOTICE</p>
			<p>
				<span>본사이트는 상업적 목적이 아닌</span>
				<span>개인포트폴리오 용도로 제작 되었으며,</span>
				<span>홈페이지의 일부내용과 기타이미지 등은</span>
				<span>그 출처가 따로 있음을 밝힙니다.</span>
			</p>
			<p class="img"><img src="images/QRCodeImg.jpg" alt=""></p>
			<p>
		</div><!-- //상단 -->
		
		<div class="footer">
			<p>
			<input type="checkbox" id="subpop" name="subpop" title="오늘 하루동안 이창 열지 않음"  onclick="controlCookes()" >
				<label for="subpop">오늘 하루동안 이 창 열지 않음</label>
			</p>
			<p class="close"><a href="#" onclick="controlCookes(); return false;">[닫기]</a></p>
		</div><!-- 하단 오늘 하루 이창 열지 않음 -->
				
		</div><!-- //popWrap -->
		<script src="js/cookies.js"> </script>
		<script>
			//function setCookie(cname, cvalue, exdays) => setCookie("쿠키 이름", "쿠키값", 안보일 일수)
			// function getCookie(cname)

			/*function controlCookes()
			{
				-팝업창이 닫힌다
				-만약 체크박스를 체크가 되었다면 
				팝업창이 안뜨게 -알림창(알림체크 여부)
				체크가 안되어 있다면
				팝업창이 뜨게 만들기 - 알림창(알림 체크 여부)
			}*/
			
			

			function controlCookes()
			{
				$(".popWrap").fadeOut();
				if($("#subpop").is(":checked"))
				{
					 setCookie("subpop", "done", 1);
				} // if End
			} // function controlCookes()  End

			$(function(){
				if(getCookie("subpop") == "done"){  $(".popWrap").hide();  }
				else{   $(".popWrap").fadeIn(); }
				/*쿠키가 설정되어 있다면 팝업창 닫기  /   아니라면 보여주기*/
				
					/*$(".popWrap").mousedown(function(e){
						$(this).css({ "left" : e.pageX+20+"px", "top" : e.pageY+20+"px"})
					});*/
		
			});

			

			/*
				cookie 설정
				floating window

				Todo1) 팝업창을 꾹 누른 상태에서 움직이면 팝업창이 움직이고, 팝업창을 떼면 그자리에서 멈춘다.
					이벤트 대상 : 팝업창을 (.popWrap)
					이벤트 : 꾹 누른 상태에서 (mousedown)  떼면(mouseup)
					이벤트 핸들러 : 팝업창이 움직이고 팝업창이 움직임이 (그자리에서)멈춘다.
						mouseover 이벤트 연결 mouseover이벤트 연결떼기
				
				Todo2) 팝업창이 움직이고 
							사용자가 움직일 때마다 움직인 위치에 팝업창의 위치값을 지정해준다.
							이벤트 대상 : 브라우저창 - body영역안에서 움직임 - document
							이벤트 : mousemove
							이벤트 핸들러 : 움직인 위치에 팝업창의 위치값을 지정해준다. - 그럼 현재 위치는?
				
			*/

			$(function(){
				$(".popWrap").mousedown(function(e){ //꾹 누른 상태에서
					$("body").bind("selectstart", function(){return false;});  //selectstart 뭔지 찾아보기
					//1. [노랑] 누른위치(이벤트 발생) - 팝업창의 위치
					$(".popWrap").data("goldX", e.pageX - $(this).offset().left)
										   .data("goldY", e.pageY - $(this).offset().top);
					//2 팝업창 움직이기
					$(document).mousemove(function(e){
					  e.preventDefault();
						$(".popWrap").css({
							"left" : e.pageX - $(".popWrap").data("goldX")+"px", 
							"top" : e.pageY - $(".popWrap").data("goldY")+"px"
						});
					});
				}).mouseup(function(){ //떼면 (mouseup)
					//3 팝업창 멈추기 - off이용해서 mousemove 끊기
					$("body").unbind("selectstart");
					$(document).unbind("mousemove");
				});
			});
		</script>
			

