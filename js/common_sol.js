$(function(){
	/////////////////header///////////////////////////////
		 $(".gnb_subMenu_box").hide();
		$(".all_menu_sub1").hide(); 
		$(".all_menu_sub2").hide(); 
				

				/*
				//스크롤탑 버튼 구현
				1. #top 화면상에 안보이게 숨기기
				2. 스크롤을 내리면 #top가 서서히 나타난다
				3. #top을 클릭하면 서서히 위로 올라간다
			*/
				$(window).scroll(function(){
					//console.log(top); 
					if (  $(this).scrollTop()>=1000 )
					{	
						$("#top").fadeIn(700);
						
					} // if 
					else
					{
						$("#top").fadeOut(700);
					}
				});//$(window).scroll


				
				$("#top").click(function(e){   //(e)  event의 기능을 갖는다  
					e.preventDefault(); //event의 뭐든 정보를 멈춰  return falses는 그 뒤에 a의 기능을 막는다
					$("body,html").animate({"scrollTop":"0"}, '500');
				});

	
	/*header */
	pc_gnb();
	m_gnb();

	m_header();
	gnbfix_scroll();
	
	/*serch*/
	m_search1();
	
	//######## 481px이하 footer
	m_f1_acco();
	m_f3_slide();

/////////////////// 리사이즈 불러오기 /////////////////////////////
	$(window).resize(function(){
		
		/*header */
		pc_gnb();
		m_gnb();
		m_header();
		gnbfix_scroll();
		
		/*serch*/
		m_search1();

		//######## 481px이하 footer
		m_f1_acco();
		m_f3_slide();
	});//$(window).resize End



});  //function


//################## pc버전 header ############
function pc_gnb() {
	var win_w = $(window).width();
	if( win_w >=751 )
	{	
		$("ul.gnb>li>a").off('click');
		$(".allMenu>a").off('click');
		$(".all_menu_sub1>li").off('click');
		$(".hc3").css({"marginLeft":"0px"});
		$("ul.gnb>li>a").removeClass("m_selected");
		$("ul.gnb>li>a").removeClass("on");
		$(".all_menu_sub1>li").removeClass("h_inherit");
			       
			//gnb 제어
		$("ul.gnb>li").on("mouseenter focusin", function(){
			$(this).children(".gnb_subMenu_box").stop().fadeIn();
			$(this).addClass("on");
			$(this).prev().children("a").addClass("on_before");
			$(this).next().children("a").addClass("on_after");

		});
		
		$("ul.gnb>li").on("mouseleave focusout", function(){
			$(this).children(".gnb_subMenu_box").stop().fadeOut();
			$(this).removeClass("on");
			$(this).prev().children("a").removeClass("on_before");
			$(this).next().children("a").removeClass("on_after");
		});

	//전체 카테고리 제어
		$(".allMenu").on("mouseenter focusin", function(){
			$(this).children(".all_menu_sub1").stop().fadeIn();
			$(this).addClass("on");
			$(this).children("a").children("span").css({"backgroundPosition":"14px -41px"});
		});
		$(".allMenu").on("mouseleave focusout", function(){
			$(this).children(".all_menu_sub1").stop().fadeOut();
			$(this).children("a").children("span").css({"backgroundPosition":"14px 12px"});
		});
		
		//전체 카테고리 1차 gnb 제어
		$(".all_menu_sub1>li").on("mouseenter focusin", function(){
			$(this).children(".all_menu_sub2").stop().fadeIn();
		});
		$(".all_menu_sub1>li").on("mouseleave focusout", function(){
			$(this).children(".all_menu_sub2").stop().fadeOut();
		}); 
						
						
	 } //if( win_w >=751 ) End
	 else
	{	
		$("ul.gnb>li").off("mouseenter focusin mouseleave focusout");
		$(".allMenu").off("mouseenter focusin mouseleave focusout");
		$(".all_menu_sub1>li").off("mouseenter focusin mouseleave focusout");

		/*$("ul.gnb>li>a").on('click');
		$(".allMenu>a").on('click');
		$(".all_menu_sub1>li").on('click');*/
	 }

}//function pc_gnb()  End

//############모바일 gnb 아코디언 제어 윈도우 
// 윈도우 위즈에만 넣고 리사이즈에 안넣음
function m_gnb() {
	var win_w = $(window).width();
	 if( win_w <=750 )
	{	


		// li를 눌렀을때 하의 div 토글로
		$("ul.gnb>li>a").on('click', function(event){//a를 잡아야 하위 메뉴 링크가 잡힘
			console.log( $(this).next(".gnb_subMenu_box").css("display")   );
			if (  $(this).next(".gnb_subMenu_box").css("display") == "none"  )
			{	
				$(".all_menu_sub1, .gnb_subMenu_box").stop().slideUp(); //나머지꺼 가려줘
				$(this).next(".gnb_subMenu_box").stop().slideDown();
				
				$("ul.gnb>li>a").removeClass("m_selected");
				$(this).addClass("m_selected");
				
				$("ul.gnb>li>a").removeClass("on");
				$(this).addClass("on");
				
				return false;
				
			}//if End
			else //보이면
			{	
				$(this).next(".gnb_subMenu_box").stop().slideUp();
				
				$("ul.gnb>li>a").removeClass("m_selected");
				$("ul.gnb>li>a").removeClass("on");
				$(this).removeClass("on");
				return false;
			}//else End
				
		});//$("ul.gnb>li>a").click  End

		//전체 카테고리 제어
		$(".allMenu>a").on('click', function(event){
			if (  $(".all_menu_sub1").css("display")=="none")
			{	
				$(".all_menu_sub1, .gnb_subMenu_box").slideUp();
				$(this).next(".all_menu_sub1").slideDown();
				
				//$(".all_menu_sub1>li").css({"height":"inherit"});
				$(".all_menu_sub1>li").addClass("h_inherit");


				$("ul.gnb>li>a").removeClass("on");
				$(this).addClass("on");
				$(".all_menu_sub2").slideUp();

				//서브메뉴 a는 width:42%
				//li 누르면 아래꺼 보이게
				return false;
			}
			else
			{
				$(this).next(".all_menu_sub1").slideUp();
				//$(".all_menu_sub1>li").css({"height":"36px"});
				$(".all_menu_sub1>li").removeClass("h_inherit");
				return false;
			}
		
		});  //$(".allMenu>a").click End
		
		//전체 카테고리 2차 gnb 제어
		$(".all_menu_sub1>li").on('click', function(event){
			// alert(  $(this).index() );   1) 각각의 index 이벤트 확인!
			if (  $(this).children(".all_menu_sub2").css("display")=="none"){
				$(".all_menu_sub2").slideUp(); //전체 닫아줘
				$(this).children(".all_menu_sub2").stop().slideDown(); //해당 li만 보여줘
				
			//	$(".all_menu_sub1>li").css({"backgroundPosition":"176px 15px"}); //전체 아래 화살표
				$(".all_menu_sub1>li").removeClass("m_selected");

			//	$(this).css({"backgroundPosition":"176px -24px"});// 해당 위 화살표
				$(this).addClass("m_selected");

			}else{
				$(this).children(".all_menu_sub2").slideUp(); //해당 li만 닫아줘
				//alert("다른 li보여줘");
				console.log(  $(this).children(".all_menu_sub2").css("display")  );
				
				//	$(".all_menu_sub2").slideUp(); //전체 닫아줘
				
				$(this).removeClass("m_selected");// 해당 아래 슬라이드
			}//else
			
		}); //$(".all_menu_sub1>li").click End
	}//  if( win_w <=750 ) End

	//############pc 버전 일때
	else 
	{
		$("ul.gnb>li>a").off('click');
		$(".allMenu>a").off('click');
		$(".all_menu_sub1>li").off('click');
	}
} //m_gnb() End

//################## 767px 모바일 버전 반응형 헤더############
function m_header() {
	var win_w = $(window).width();
	 if( win_w <=750 )
	{
		/*$("ul.gnb>li>a").on('click');
		$(".allMenu>a").on('click');
		$(".all_menu_sub1>li").on('click');*/
	$(".hc3").css({"marginLeft":"-200px"});
	$(".modaloverlay").hide();
	$(".mobile_menu_cancel").hide();

	//모바일 gnb제어
	$(".mtMenu").click(function(){
		console.log(  $(".hc3").css("marginLeft")  );
		if ($(".hc3").css("marginLeft")=="-200px")
		{
			$(".modaloverlay").fadeIn(700);
			$(".mobile_menu_cancel").show();
			$(".hc3").animate({"marginLeft":"0px"});
				
				

					//엑스 버튼을 누를때
					$(".mobile_menu_cancel").click(function(){
						$(".modaloverlay").fadeOut(700);
						
						$(".hc3").animate({"marginLeft":"-200px"});
						$(".mobile_menu_cancel").hide();
						return false;
					});
					

				return false;
			} //if ($(".hc3").css("marginLeft") End
		else //만약  $(".hc3").css("marginLeft") == 0 일때
		{
			$(".hc3").css({"marginLeft":"-200px"});
		}
			//########모바일 메뉴가 보일 때
		/*	if ($(".hc3").css("marginLeft")=="-200px")
			{
				$(".modaloverlay").fadeOut(700);
				$(".mobile_menu_cancel").hide();
				$(".hc3").animate({"marginLeft":"-200px"});
				return false;
			}*/
			
		}); //$(".mtMenu").click End

	 }//if End
	 else 
	   {	
			$(".modaloverlay").hide();
			$(".mobile_menu_cancel").hide();
			$(".hc3").css({"marginLeft":"0px"});
	   } // ELSE  pc버전

} //m_header()  End

//############## pc버전에서 윈도우 위즈가 768px이상이라면 스크롤탑 gnb hc3 fixed
function gnbfix_scroll(){
	var win_w = $(window).width();
	if(win_w >= 751 )
	{
		$(window).on('scroll', function(e){
			if (  $(this).scrollTop()>=98)
							{	
								//console.log($(window).scroll);
								$(".hc3").addClass("fix");
								$(".hc3 .fix_home").show();
								//$("#header .hc3 .container").css({"width":"1024px"});
								$("#header .hc3 .container").addClass("fix");
							} // if 
							else
							{
								$(".hc3").removeClass("fix");
								$(".hc3 .fix_home").hide();
								//$("#header .hc3 .container").css({"width":"980px"});
								$("#header .hc3 .container").removeClass("fix");
							}
		});// $(window).on('scroll', function(e) End
	}//if win_w >= 768  End 
	else
	{
		$(window).off('scroll');
		$(".hc3").removeClass("fix");
		$(".hc3 .fix_home").hide();
		$("#header .hc3 .container").removeClass("fix");
	}//else End
}//gnbfix_scroll() End


// ###################serch1 검색 버튼 767px ~481px 
function m_search1(){
	var win_w = $(window).width();
	//console.log(win_w);
	/*
	미디어 width가 다르므로 확인해볼것
	초기화는 css로 다 준다
	*/
	 if(win_w <= 750  )
	   {
		  $("#m_search").on('click', function(event){
			   if (  $(".search").css("display") == "none")
			   {	
				 //  console.log(  $(".search").css("display") );
					$(".search").show();
					$(".hc2").addClass("selected");
					$("#visual").addClass("pt");
					return false;
			   }
			   else
			   {	
				
				  $(".search").hide();
					$(".hc2").removeClass("selected");
				$("#visual").removeClass("pt");
					return false;
			   }
		  }); //$("#m_search").click End 

		  $(".close").on('click', function(event){
			  $(".search").hide();
				$(".hc2").removeClass("selected");
				$("#visual").removeClass("pt");
					return false;
		  });//$(".close").on('click') End
	   }//width() <481 if End 창크기 변화 감지  window width가 481px 미만 일때 
	if( win_w >= 751 ) //pc버전에서는
	{
		$(".search").show();
	}
}//m_search1() End




//################## footer f1 아코디언   ~481px ############
function m_f1_acco() {
	var win_w = $(window).width();
	   if( win_w <= 464 )
	   {
			//푸터 아코디언
		//	$(".f1 dd:first").show();

			$(".f1 dl dt").on('click', function(event){
				$(".f1 dl dd").stop().slideUp()
				$(this).next("dd").stop().slideToggle("linear"); //이것에 해당하는 dd보여줌
				return false;
			}); //$(".f1 dl dt").click End
			
	   } // if End
		else
		{
			$(".f1 dd").show();
			$(".f1 dl dt").off("click");
			
		}
}// m_f1_acco()  End

//################## footer f3 카피라이트 슬라이드 업다운 ~481px ############
function m_f3_slide(){
	var win_w = $(window).width();
	console.log(win_w);
	   if( win_w <= 464 )
	   {
		   //초기화
		 //$(".f3 strong").css({ "top":"2px", "backgroundImage":"url('images/mobile_footer_more2.png')"});
			
			//.f3 strong 클릭했을때
			$(".f3 strong").on('click', function(event){
				//만약 안보인다면 보이게 해줘
				//console.log(  $(".f2 ul.f_sns").css("display") );
				if ($(".f2 ul.f_sns").css("display")=="none")
				{	
					$(this).addClass("selected");
					$(".f2 ul.f_sns").stop().slideDown();
					$(".f2 ul.f_menu").stop().slideDown();
					$(".f3 address").stop().slideDown();
					return false;
				} 
				else
				{
					//console.log($(".f2 ul.f_sns"))
					$(this).removeClass("selected");
					$(".f2 ul.f_sns").stop().slideUp();
					$(".f2 ul.f_menu").stop().slideUp();
					$(".f3 address").stop().slideUp();
					return false;
				}
			});//$(".f3 strong").click
	   } //  if( win_w <= 464 ) End
	   else
		{
		   $(".f3 strong").off("click");
			//$(".f3 strong").css({"top":"-25px", "backgroundImage":"url('images/mobile_footer_more2.png')"});
			$(".f2 ul.f_sns").show();
			$(".f2 ul.f_menu").show();
			$(".f3 address").show();
	   }
}//m_f3_slide()  End






