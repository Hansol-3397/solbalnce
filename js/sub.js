$(function(){
	//////////////////////////  login.html  로그인 폼  ///////////////////////////////
		$(".loginTab>ul>li>a").click(function(){
			//alert("클릭")
			$(".login_cont").hide();
			$( $(this).attr("href") ).show();
			$(".loginTab>ul>li>a").removeClass("selected");
			$(this).addClass("selected");
			return false
		});//click End

		$("#member_login").submit(function(){
			//만약 아이디 값과 비밀 번호 값이 빈칸이라면 알림창, 포커스
			var mamber=["#yourId", "#yourPass"]
			var mamber_a=["로그인", "비밀번호"]
			for (var a=0 ;a<mamber.length ; a++ )
			{
				if(  $(mamber[a]).val()=="" )
				{
					alert(mamber_a[a] + " 칸이 빈칸입니다 확인해주세요");
					$(mamber[a]).focus();
					return false;
				}// if
			} // for
		});//#member_login.submit

		$("#notmember_login").submit(function(){
			//만약 아이디 값과 비밀 번호 값이 빈칸이라면 알림창, 포커스
			var notmamber=["#yourName", "#yourNumber", "#yourNotpass"]
			var notmamber_a=["이름", "주문번호", "비밀번호"]
			for (var a=0 ;a<notmamber.length ; a++ )
			{
				if(  $(notmamber[a]).val()=="" )
				{
					alert(notmamber_a[a] + " 칸이 빈칸입니다 확인해주세요.");
					$(notmamber[a]).focus();
					return false;
				}// if
			} // for
		});//#member_login.submit
		////////////////////////////  login.html  로그인 폼 End  //////////////////////////

	
	////////////////////////////  join.html 회원가입 폼  //////////////////////////
		$("#join").submit(function(){
			//alert("dfd");
			//만약 아이디 값과 비밀 번호 값이 빈칸이라면 알림창, 포커스
			var join=["#userName", "#userID", "#userPass", "#userPassre","#userMobile","#userMobile2","#userMobile3", "#userEmaile", "#userAddress"]
			var join_a=["이름", "아이디", "비밀번호", "비밀번호 확인","연락처 첫번째","연락처 두번째", "연락처 세번째", "이메일", "주소"]
			for (var a=0 ;a<join.length ; a++ )
			{
				if(  $(join[a]).val()=="" )
				{
					alert(join_a[a] + " 칸이 빈칸입니다 확인해주세요");
					$(join[a]).focus();
					return false;
				}// if
			} // for

			if( $("#agree_email").is(":checked") || $("#agree_sms").is(":checked")  || $("#no_agree").is(":checked")){}
			else{ alert("수신 방법을 선택해주세요"); $("#agree_email").focus(); return false; }

			if($("#id_double_result span").text() == "") //아이디 중복체크 결과가 빈칸이라면
			{
				alert("아이디 중복체크를 확인해주세요.");
				$("#id_double").focus();
				return false;
			}
		});//#member_login.submit
		
		/*var themeObj = {
			   bgColor: "#04B9B9", //바탕 배경색
			   searchBgColor: "#162525", //검색창 배경색
			   contentBgColor: "#D4F7F7", //본문 배경색(검색결과,결과없음,첫화면,검색서제스트)
			   pageBgColor: "#162525", //페이지 배경색
			   textColor: "#323131", //기본 글자색
			   queryTextColor: "#FFFFFF", //검색창 글자색
			   //postcodeTextColor: "", //우편번호 글자색
			   //emphTextColor: "", //강조 글자색
			   outlineColor: "#444444" //테두리
			};*/

		$("#userAddressSerach").click(function(){
			//alert(" 우편번호검색을 시작합니다. ");
			  new daum.Postcode({  // new (공간을 만든다.)
				  
				oncomplete: function(data) { //oncomplete가 (data)를 담는다
					// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분입니다.
					// 예제를 참고하여 다양한 활용법을 확인해 보세요.
					$("#userAddress").val(data.postcode1);//우편번호 앞자리 
					$("#userAddress2").val(data.postcode2);//우편번호 뒷자리 
					$("#userAddress3").val(data.address);//지번주소
					$("#userAddress4").focus();
				},
				theme: themeObj={
					searchBgColor: "#e51837", //검색창 배경색
					queryTextColor: "#FFFFFF" //검색창 글자색
				},
			}).open();
		}); 

		// 아코디언 기능
		$(".agree dt").click(function(){
			//dd가 안보일때 전체 css지우고, dd보이고, 해당 css 보이게
			if( $(this).next("dd").css("display") == "none" )
			{
				$(".agree dt span").removeClass("select"); //전체 css지움
				$(this).next("dd").stop().slideToggle("linear"); //이것에 해당하는 dd보여줌
				$(this).next().siblings("dd").slideUp("linear"); //다음 형제의 dd를 숨김
				$(this).css({"marginBottom":"0"});
				$(this).children("span").addClass("select");  //그 선택된 자식에게 클래스 추가
				$(this).siblings("dt").children("span").removeClass("select");
				return false;
			}

			else //만약에 보이면 dd닫아주고, css 지워주고
			{
				$(".agree dt span").addClass("select");
				$(this).next().stop().slideToggle("linear");
				$(".agree dt span").removeClass("select"); 
				return false;
			}
		/*
			$(this).next().stop().slideToggle("linear");
			$(".agree dt span").removeClass("select"); 
			$(this).children("span").addClass("select"); 

			$(this).next().siblings("dd").slideUp("linear");
			//$(this).children("span").removeClass("select"); 
			$(this).css({"marginBottom":"0"});

			i
			return false;
			*/
			//닫혔으면 클래스를 지워

		});//아코디언 기능
		////////////////////////////    join.html 회원가입 폼 End   //////////////////////////

	////////////////////////////  event, faq -  아코디언 기능   //////////////////////////
		$(".question dt").click(function(){
			$(this).next("dd").stop().slideToggle("linear"); //이것에 해당하는 dd보여줌
			$(this).next().siblings("dd").slideUp("linear"); 
			$(".question dt").css("fontWeight","normal");
			$(this).css("fontWeight","bold");
			return false;
		});
		////////////////////////////  event, faq -  아코디언 기능   //////////////////////////
 
	//////////////////////////////  퍼포먼스, 숍-멘  - 무한 롤링 슬라이드   ////////////////////////////
		$("#infinite_index li:eq(0) a").addClass("selected"); //초기화
									
		//무한 롤링 세팅
		var s_timer = setInterval(    function(){  $("#infinite_next").click();    }, 1700 );
		var s_now = true; // 슬라이딩의 현재 상태 - 움직이는 중이야
		
		//playing 제어하기
		$(".playing").click(function(){  
			console.log(s_timer); 
			if(s_now)
			{
				clearInterval(s_timer); //멈추기 
				s_now=false; //상태표시 - 멈췄어
				$(this).find("img").attr("src","images/sub/perpo_play.png"); // 재생을 유도하기 위한 이미지
			}
			else
			{	
				s_timer=setInterval(    function(){  $("#infinite_next").click();    }, 1700 );
				s_now = true;
				$(this).find("img").attr("src","images/sub/perpo_stop.png");
			}
			return false; 
			});
		// setInterval 무제한으로 돌린다
		
						
		$("#infinite_train").prepend( $("#infinite_train li:last") );
		$("#infinite_train").css({"marginLeft":"-100%"});
		/*
			1. 이전 그림을 클릭하면 이전그림이 보인다.
			이벤트 대상 : 이전 그림을
			이벤트: 클릭하면
			이벤트 핸들러 : 이전 그림이 보인다.
			1-2-3-4-1-2-3-4-
		*/
		

		$("#infinite_prev").click(function(){
			//console.log( s_box.css("marginLeft"));
			$("#infinite_train").animate({"marginLeft":"+=100%"}, function(){
				$("#infinite_train").prepend( $("#infinite_train li:last") );
				$("#infinite_train").css({"marginLeft":"-100%"});
				$("#infinite_index li a").removeClass("selected");
				$(  $("#infinite_train li:eq(1) a").attr("href") ).addClass("selected");
			}); 
			return false;
		});// $(".prev").click End

		/*
			2. 다음 그림을 클릭하면 다음그림이 보인다.
			이벤트 대상 : 다음 그림을
			이벤트: 클릭하면
			이벤트 핸들러 : 다음 그림이 보인다.
			1-2-3-4-1-2-3-4-
		*/
		$("#infinite_next").click(function(){
			//console.log( s_box.css("marginLeft"));
			$("#infinite_train").animate({"marginLeft":"-=100%"},  function(){
				$("#infinite_train").append( $("#infinite_train li:first") );
				$("#infinite_train").css({"marginLeft":"-100%"});
				$("#infinite_index a").removeClass("selected");
				$(  $("#infinite_train li:eq(1) a").attr("href") ).addClass("selected"); 
				});
			//
			return false;
		});// $(".next").click End

		//슬라이드 컨트롤 인덱스 
		$("#infinite_index li a").click(function(){
		//	console.log( s_box.css("marginLeft"));
				/*   4        1     2        3         4
				 -1200	0   1200  2400   3600
				*/
				//만약 perpo_slide이 0px 아니면  perpo_slide을 0으로 바꿔줘
				//	$(".perpo_slide").css({"marginLeft":"100%"}); //순서 바꾸기
				//	$(".perpo_slide").prepend( $(".perpo_slide li:last") );
					$("#infinite_train").css({"marginLeft":"-100%"});

					$("#infinite_train").animate({"marginLeft":  (-100*$(this).parent().index() )+"%"}); //animate하고
					
					$("#infinite_index li a").removeClass("selected");
					$(this).addClass("selected");
					return false;
		}); // $(".lolling li a").click End


		
		/*
			$(".perpo_slide").mousedown일때 
			$(this).mousemove(function(e){가
			e.pageX 가 현재위치보다 -라면 움직여 주세요.

			https://www.w3schools.com/jquerymobile/jquerymobile_events_touch.asp  참고
		*/
		/*
		$(".perpo_slide").mousedown(function(e){ //꾹 누른 상태에서
			//2 팝업창 움직이기
			e.preventDefault();
			//alert("dfdfd");
			$(this).animate({"marginLeft":"-100%"});

			
		}); //$(".perpo_slide").mousedown*/
		////////////////////////////////  무한 롤링 End  ////////////////////////////// 
						
	////////////////////////////////   비디오 슬라이드 및 상품보기  탭 제어  ////////////////////////////// 
			//썸네일 동영상 누르면 해당 영상으로 바뀐다
			//이벤트 핸들러 : 클릭
			//이벤트 처리 : train li a
			//이벤트 행동 : videoBox iframe src가  train li a herf로 바뀌게
			
			//초기화
			$("#sub_train li:eq(0) a").addClass("selected");
			$(".video_cont dl:not(:first)").hide();
			$(".sub_tab li:eq(0) a").addClass("selected"); //상품보기
			$(".sub_detail>div:not(:first)").hide();//상품보기
			
			//탭 기능
			$(".sub_tab li a").click(function(){
				$(".sub_detail>dl").hide(); //비디오
				$(".sub_detail>div").hide(); //상품 보기
				$( $(this).attr("href") ).show();
				$(".sub_tab li a").removeClass("selected");	
				$(this).addClass("selected");
				return false;
			});

			$("#sub_next").click(function(){
				console.log($("#sub_train").css("marginLeft"));
				//마진레프트(0)첫번째 칸이면 화살표 왼쪽꺼 서서히 사라지게
				//마진레프트 (몇이라면)마지막 칸이라면 화살표 오른쪽꺼가 서서히 사라지게 
				if( (parseInt( $("#sub_train").css("marginLeft") ) % 528) ==0 )
					{
						if( parseInt( $("#sub_train").css("marginLeft") ) >= -528 )
					
						{
							$("#sub_train").stop().animate({"marginLeft":"-=528px"}) 
						}
					}
					return false;
			}); // next End

			$("#sub_prev").click(function(){
				console.log($("#sub_train").css("marginLeft"));
				//마진레프트(0)첫번째 칸이면 화살표 왼쪽꺼 서서히 사라지게
				//마진레프트 (몇이라면)마지막 칸이라면 화살표 오른쪽꺼가 서서히 사라지게 
				if( (parseInt( $("#sub_train").css("marginLeft") ) % 528) ==0 )
					{
						if( parseInt( $("#sub_train").css("marginLeft") ) <= -528 )
					
						{
							$("#sub_train").stop().animate({"marginLeft":"+=528px"}) 
						}
					}
					return false;
			}); // prev End
			//////////////////////////////  비디오 슬라이드 및 탭 제어 End ////////////////

		//////////////////////////////  숍-멘 셀렉트 박스 제어 및 슬라이드 ////////////////				
            //////셀렉트 박스 
			$(".selectbox").click(function(){
				//alert('dfdfd');
				$(this).children("ul.option_list").show();
				return false;
			});//click

			// li목록 보여줘서 span text내용 바꿔줭
			$(".option_list>li>a").click(function(){
				//console.log(this.text);
				$(this).parent().parent().parent().find("span.txt").text( this.text);
				$(".option_list").hide();
				return false;
			});//click
			
			//////train2 product_details  슬라이드 제어
			$("#shop_index li:eq(0)>a").addClass("selected"); //초기화
			
			$("#shop_index  li>a").click(function(){
			$("#shop_train").animate({"marginLeft":  (-990*$(this).parent().index() )+"px"}); // index  (eq의 순서대로 처리)
			$("#shop_index  li>a").removeClass("selected");
			$(this).addClass("selected");
			return false;
			});//점으로 제어 하기 click

			$("#shop_next").click(function(){
				if( (parseInt( $("#shop_train").css("marginLeft") ) % 990) ==0 )
					{
						if( parseInt( $("#shop_train").css("marginLeft") ) >= 0)
						{
							$("#shop_train").stop().animate({"marginLeft":"-=990px"},
							function(){	
								if( $("#shop_train").css("marginLeft") == "0px"){  
								$("#shop_index li>a").removeClass("selected"); 
								$(" #shop_index li:eq(0)>a").addClass("selected"); 
								}
								else if( $("#shop_train").css("marginLeft") == "-990px"){  
								$("#shop_index li>a").removeClass("selected"); 
								$("#shop_index li:eq(1)>a").addClass("selected"); 
								}
							});//function
						}//>= -990
					}// % 990
			return false;
			}); // next End

			$("#shop_prev").click(function(){
				if( (parseInt( $("#shop_train").css("marginLeft") ) % 990) ==0 )
					{
						if( parseInt( $("#shop_train").css("marginLeft") ) <= -990)
						{
							$("#shop_train").stop().animate({"marginLeft":"+=990px"},
							function(){	
								if( $("#shop_train").css("marginLeft") == "0px"){  
								$("#shop_index li>a").removeClass("selected"); 
								$("#shop_index li:eq(0)>a").addClass("selected"); 
								}
								else if( $("#shop_train").css("marginLeft") == "-990px"){  
								$("#shop_index li>a").removeClass("selected"); 
								$("#shop_index li:eq(1)>a").addClass("selected"); 
								}
							});//function
						}//>= -990
					}// % 990
			return false;
			}); // next End
				/*
			$(".v_after").click(function(){
				if( (parseInt( $(".train2").css("marginLeft") ) % 990) ==0 )
					{
						if( parseInt( $(".train2").css("marginLeft") ) >= -990)
						{
							$(".train2").stop().animate({"marginLeft":"-=990px"})
							
						}//>= -990
					}// % 990
			return false;
			}); // next End*/

			////////////////////////////// 숍-멘 셀렉트 박스 제어 및 슬라이드End ////////////////				
            
		////////////////////////////// 프러덕트 뷰 이미지 바뀌게 ////////////////	
		// 이벤트 대상 product_thum li a
		//이벤트 효과  this img src 가  product_view의 img src로 바뀌고 this의 addClass selected 주기
		$(".product_thum li:eq(0) a").addClass("selected");//초기화
		

		$(".product_thum li a").click(function(){
			//대상.attr({바꿀 이미지})   
			var proimg=$(this).find("img").attr("src");
			$(".product_view img").attr({"src":proimg});
			$(".product_thum li a").removeClass("selected");
			$(this).addClass("selected");
			return false;
		}); 

		//초기화
		$("#ProductQuantity").val(1); //ProductQuantity의 value가 초기값  1로
		$("#product_price").after( "<span class='price_unit'>원</span>"); //주문금액 원붙이기
		$("#original_price").after( "원"); //판매가에 원붙이기
				

			
		// todo : + 버튼 누르면 숫자 증가 가격이 배수가 되게
		//								숫자증가
		//								가격 = 판매가 * 수량
				var original_price = $('#original_price').text(); //원래 판매가
				var stat = $('#ProductQuantity').val();
				var num = parseInt(stat,10);
				var result=0;
				
				$("#original_price").text(   original_price.format()); //판매가에 1000단위로 콤마 붙이기
				$("#product_price").text(  $("#product_price").text().format());//초기화로 주문금액에 콤마 붙이기

			$('#decreaseQuantity').click(function(e){
				e.preventDefault();
				num--;  //alert( num );
				//1) 최소주문수량
				if(num<=0){	alert('최소 주문수량은 1개 입니다.');	num =1;   }
				$("#ProductQuantity").val(num);
				//2) 전체값
				result = $("#product_price").text(   (Number( num)* Number(original_price)).format()    );  
			});
				
			$('#increaseQuantity').click(function(e){
				e.preventDefault();
				num++;
				$('#ProductQuantity').val(num);
				//console.log(num*product_price);
				//console.log(product_price );
				result = $("#product_price").text(   (Number( num)* Number(original_price)).format()     );  
			});
});//function

///1,000단위 콤마 찍기 넘버 포멧
Number.prototype.format = function(){
    if(this==0) return 0;
 
    var reg = /(^[+-]?\d+)(\d{3})/;
    var n = (this + '');
 
    while (reg.test(n)) n = n.replace(reg, '$1' + ',' + '$2');
 
    return n;
};
 
// 문자열 타입에서 쓸 수 있도록 format() 함수 추가
String.prototype.format = function(){
    var num = parseFloat(this);
    if( isNaN(num) ) return "0";
 
    return num.format();
};
 



