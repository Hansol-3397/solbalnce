$(function(){
///////// visual 비쥬얼///////////////////////

	$(".lolling li a:first").addClass("selected");//초기화
	$(".v_slide li:not(:first)").hide();

	// 무한 롤링 돌리기   
	var v_timer = setInterval(    function(){  $("#visual #next").click(); }, 3000 ); 
	var v_now = true; // 슬라이딩의 현재 상태

	$("#v_playing").click(function(){  
		console.log(v_timer); 
		
		if(v_now)
		{
			clearInterval(v_timer); //멈추기 
			v_now=false; //상태표시 - 멈췄어
			$(this).children("a").css("backgroundPosition","left bottom"); // 재생을 유도하기 위한 이미지
		}
		else
		{	
			v_timer=setInterval(    function(){  $("#visual #next").click();    }, 3000 );
			v_now = true;
			$(this).children("a").css("backgroundPosition","left top");
		}
		return false; 
		});

	//인덱스 - 디스플레이 논 / 블럭 효과로 주기
	$(".lolling li a").click(function(){
			//console.log( $(this).attr("href") );
			$(".v_slide li").fadeOut();
			$( $(this).attr("href") ).fadeIn();
			$(".lolling li a").removeClass("selected");
			$(this).addClass("selected");
			return false
		});//인덱스 제어 click End*/

	//넥스트 버튼 제어
	$("#visual #next").click(function(){
			var v_slide1 = $(".v_slide li:eq(0)").css("display"); // 1번째 li
			var v_slide2 = $(".v_slide li:eq(1)").css("display"); // 2번째 li
			var v_slide3 = $(".v_slide li:eq(2)").css("display"); // 3번째 li

		if (v_slide1=="list-item") //1번째 li가 보일때 
		{	
			$(".v_slide li").fadeOut();
			$(".v_slide li:eq(1)").fadeIn(); //2번째 li 보여줘
			$(".lolling li a").removeClass("selected");
			$(".lolling li:eq(1) a").addClass("selected");
			//console.log("1"+ v_slide1 );
			//console.log("2"+ v_slide2 );
			//console.log("3"+ v_slide3 );
		}
		if (v_slide2=="list-item") //2번째 li가 보일때 
		{	
		$(".v_slide li").fadeOut(); 
		$(".v_slide li:eq(2)").fadeIn();//3번째 li 보여줘
		$(".lolling li a").removeClass("selected");
		$(".lolling li:eq(2) a").addClass("selected");
		}
		if (v_slide3=="list-item") //3번째 li가 보일때 
		{	
		$(".v_slide li").fadeOut(); 
		$(".v_slide li:eq(0)").fadeIn();//1번째 li 보여줘
		$(".lolling li a").removeClass("selected");
		$(".lolling li:eq(0) a").addClass("selected");
		}
		return false;
	});
	
	//이전 버튼 제어
	$("#visual #prev").click(function(){
			var v_slide1 = $(".v_slide li:eq(0)").css("display"); // 1번째 li
			var v_slide2 = $(".v_slide li:eq(1)").css("display"); // 2번째 li
			var v_slide3 = $(".v_slide li:eq(2)").css("display"); // 3번째 li

		if (v_slide1=="list-item") //1번째 li가 보일때 
		{	
			$(".v_slide li").fadeOut(); 
			$(".v_slide li:eq(2)").fadeIn();//3번째 li 보여줘
			$(".lolling li a").removeClass("selected");
			$(".lolling li:eq(2) a").addClass("selected");
		}
		if (v_slide2=="list-item") //2번째 li가 보일때 
		{	
		$(".v_slide li").fadeOut(); 
		$(".v_slide li:eq(0)").fadeIn();//1번째 li 보여줘
		$(".lolling li a").removeClass("selected");
		$(".lolling li:eq(0) a").addClass("selected");
		}
		if (v_slide3=="list-item") //3번째 li가 보일때 
		{	
		$(".v_slide li").fadeOut();
		$(".v_slide li:eq(1)").fadeIn(); //2번째 li 보여줘
		$(".lolling li a").removeClass("selected");
		$(".lolling li:eq(1) a").addClass("selected");
		}
		return false;
	});
	
		//-- visual End --

	/// ///////////////////m1 베스트 메뉴//////////////////////////////

		$(".m1 .best_product:not(:first)").hide();
		$(".bestTab>li:first>a").addClass("on");
		
	/* $(".bestTab>li>a") TODO
	1. 마우스 엔터 - marginLeft:0
	2. 클릭하면 해당 탭 보여주고 a에  marginLeft:0 남아있기
	3. 다른 시빌링을 하버하면  - marginLeft:0
	만약 이미 marginLeft : 0한 상태라면 marginLeft : 0으로
	
	*/
		
		

		//넥스트 버튼 제어
	$(".bestAfter").click(function(){
		//console.log( $(".product_details").css("marginLeft") );
		
		if( (parseInt( $(".product_details").css("marginLeft") ) % 727) ==0 ){	
			if( parseInt( $(".product_details").css("marginLeft") ) >= -727 ){
				$(".product_details").stop().animate({"marginLeft":"-=727px"}); 
			}
		}
		return false;
	});//".next" click

		//이전 버튼 제어
	$(".bestBefore").click(function(){
		//console.log( $(".product_details").css("marginLeft") );
		
		if( (parseInt( $(".product_details").css("marginLeft") ) % 727) ==0 ){	
			if( parseInt( $(".product_details").css("marginLeft") ) <= -727 ){
				$(".product_details").stop().animate({"marginLeft":"+=727px"}); 
			}
		}
		return false;
	});//".next" click

	//상품 하버 하면 변하게 
		var best_a, best_b;
		$(".product_details li a").on("mouseover focus", function(){
			best_a = $(this).find("img").attr("src");  // .images/m02_a.jpg
			best_b = $(this).attr("title"); // .images/m02_b.jpg
			//console.log(best_a);
			//console.log(best_b);

			$(this).find("img").attr("src", best_b );
			//return false;
		}).on("mouseout  blur", function(){
			$(this).find("img").attr("src", best_a);
			//return false;
		});
		// m1 베스트 메뉴 End
		

		////m2 뉴 메뉴
		//a3 무한 롤링 세팅
	var timer = setInterval(    function(){  $(".n1").click();    }, 1700 );
		var now = true; // 슬라이딩의 현재 상태 - 움직이는 중이야
		
		//playing 제어하기
		$(".s1").click(function(){  
			//console.log(timer); 
			if(now)
			{
				clearInterval(timer); //멈추기 
				now=false; //상태표시 - 멈췄어
				$(this).find("a").css("backgroundPosition","-14px -299px"); // 재생을 유도하기 위한 이미지
				//$(this).addClass("selected");
			}
			else
			{	
				timer=setInterval(    function(){  $(".n1").click();    }, 1700 );
				now = true;
				$(this).find("a").css("backgroundPosition"," -15px -227px");
				//$(this).removeClass("selected");
			}
			return false; 
			});
		// setInterval 무제한으로 돌린다

				

		//초기화  nt1
		$(".nt1").prepend( $(".nt1 li:last") );
		$(".nt1").css({"marginLeft":"-100%"});

		//$(".nt2").prepend( $(".nt2 li:last") );
		//$(".nt2").css({"marginLeft":"-100%"});
		//a3 넥스트 버튼 제어
		$(".n1").click(function(){
			//console.log( $(".nt1").css("marginLeft") );
			$(".nt1").animate({"marginLeft":"-=100%"}, function(){
			$(".nt1").append( $(".nt1 li:first") );
			$(".nt1").css({"marginLeft":"-100%"});
			});  
			return false;
		});//click End

		//a3 이전 버튼 제어
		$(".p1").click(function(){
			//console.log( $(".nt1").css("marginLeft") );
			$(".nt1").animate({"marginLeft":"+=100%"}, function(){
			$(".nt1").prepend( $(".nt1 li:last") );
			$(".nt1").css({"marginLeft":"-100%"});
			}); 
				return false;
			});//click End

		//이미지 하버시 크게
		$(".m2 .imgBox img").mouseenter(function(){
			$(this).stop().animate({"width":"107%"});
		});
		$(".m2 .imgBox img").mouseleave(function(){
			$(this).stop().animate({"width":"100%"});
		});
	// m2 뉴 메뉴 End

	// m3  마이퓨쳐
		$(".future:not(:first)").hide();

		$(".f_tab>li>a").click(function(){
			//alert("클릭")
			$(".future").fadeOut();
			$( $(this).attr("href") ).fadeIn();
			$(".m3").attr("style","background-image:url("+$(this).parent("li").attr("class")+") "); //배경바꾸기
			$(".f_tab>li>a").removeClass("on");
			$(this).addClass("on");
			return false
		});//click End

	// m3  마이퓨쳐 End
	

	// m5 인스타그램
		//$(".nb_insta").prepend( $(".nb_insta li:last") );
		//$(".nb_insta").css({"marginLeft":"-170px"});
		//넥스트 버튼 제어

		$(".insta_after").click(function(){
				console.log( $(".nb_insta").css("marginLeft"));
				$(".nb_insta").animate({"marginLeft":"-=850px"},  function(){
					$(".nb_insta").append( $(".nb_insta li:first") );
					$(".nb_insta").css({"marginLeft":"-850px"});
				
					});
	
				/*	$(".nb_insta").animate({"marginLeft":"-=850px"});
					$(".nb_insta").append( $(".nb_insta li:first") );
					//$(".nb_insta").css({"mar	ginLeft":"-55%"});*/
			
				return false;
			});// $(".next").click End

		//이전 버튼 제어
		$(".insta_before").click(function(){
				$(".nb_insta").animate({"marginLeft":"+=850px"},  function(){
					$(".nb_insta").prepend( $(".nb_insta li:last") );
					$(".nb_insta").css({"marginLeft":"-850px"});
				
					});
				return false;
			});//click End

		//######################## 인스타그램 API 연동
			//01. ACCESS TOCKEN
		var tocken = "5788291141.205460a.2f673ff3cc90433ca93f5711d7dcdc0f";
		//02. 몇개씩 보여줄것인지 카운트
		var count = "6";
		//03. AJAX 통신을 이용해서 화면단에 보여주기
		$.ajax({
			url:"https://api.instagram.com/v1/users/self/media/recent/?access_token=" + tocken, //04. 주소 가져오기
			type:"GET",
			dataType:"jsonp", //05.외부에서 json 데이터 가져오기 -jsonp
			cache:false,
			success:function(response){
				console.log(response);  //OBJECT{"","":}
				console.log(response.data);  // array
		var instacount = response.data.length;
		if(instacount>0){
			for(var i=0; i<instacount; i++  ){
				var link = response.data[i].link;
				var src = response.data[i].images.thumbnail.url;
				var photo = response.data[i].images.standard_resolution.url;
				var caption =  response.data[i].caption.text;
				var like = response.data[i].likes.count;
				var id =  response.data[i].id;

				var insta = '<li>'  ;
						insta +=	 '<a title="인스타 탭으로 보여주기" href="#'+id+'">'; // link
						insta +=		' <img src="'+src+'">';  //src
						insta +=	'</a>';
						insta +=	'<div class="insta_con" id="'+id+'">';
						insta +=		'<dl>';
						insta +=			'<dt><a title="뉴발란스인스타 계정 바로가기" target="_blank" href="https://www.instagram.com/iq627163/" title="nb인스타 바로가기">nblifestyle_kr</a></dt>';
						insta +=			'<dd class="imgBox">';
						insta +=				'<a title="NBLIFESTYLE_KR 인스타그램 페이지 바로가기(새창)" target = "_blank" href="'+ link +'"><img src="'+photo+'"></a>';
						insta +=			'</dd>';
						insta +=			'<dd class="desc">' +caption+ '<p class="insta-likes"> Like : '+like+'</p> </dd>';
						insta +=		'</dl>';
						insta +=	'</div>';	
						insta +='</li>';

						$(".nb_insta").append(insta);	
						}//for End
					}//if End
					//.nb_insta li>a를 누르면 탭 되게
					$(".nb_insta li a:first").addClass("on");
					$(".insta_con:not(:first)").hide(); 
					
					$(".nb_insta li a").click(function(){
						$(".insta_con").fadeOut();
						$( $(this).attr("href") ).fadeIn();
						
						$(".nb_insta li a").removeClass("on");
						$(this).addClass("on");
						return false;
					});
					
				}, //sucess
				
			error:function( xhr, testStatus, erroThrown){ alert(testStatus + "(HTTP-" + xhr.status + "/" + erroThrown);}
		});

		// m5 인스타그램 End
		
			

	
	//############# 리사이즈 제어
	bestMenu();
	m_myfuture(); 

	$(window).resize(function(){
		bestMenu();
		m_myfuture(); 

	});//$(window).resize End


});//function
 
//###########pc 버전 일때  win_w >= 751 
function bestMenu(){
	var win_w = $(window).width();
	//console.log(win_w);
	if( win_w >= 751 ) //pc버전일때
	{	
		// 스와이프의 기능을 막는다
		$(".m1").swipe({
		swipe:function(event, direction, distance, duration, fingerCount, fingerData) { false},
		 threshold:0
	  });
		$(".bestTab").css({"marginLeft":"0px"});
		$(".m_arrow").hide();
		

		// $(".bestTab>li>a").마우스 엔터, 클릭  PC 버전 일때 
		 $(".bestTab>li>a").on("mouseenter",function(event){
			$(".bestTab>li>a").children("span").stop().animate({"marginLeft":"-200px"}); //초기화
			$(".bestTab>li>a").stop().animate({"marginLeft":"200px"}); //초기화
			
			//탭기능
			$(this).children("span").stop().animate({"marginLeft":"0px"});//에니메이트 효과
			$(this).stop().animate({"marginLeft":"0px"});//에니메이트 효과
			$(".m1 .best_product").hide();
			$( $(this).attr("href") ).show();
			$(".bestTab>li>a").removeClass("on");
			$(this).addClass("on");
			
			//$(this).css({"backgroundColor": "#e51837"});
			$(".product_details").css("marginLeft","0px");
			
		return false;

		}); //$(".bestTab>li>a").on("mouseenter  click") End
	}//if( win_w >= 751 ) End

	//############## 모바일 버전 ###########
	if(win_w <=750 ) 
	{	
		$(".m_after").show();
		$(".product_details").css("marginLeft","auto");
		 $(".bestTab>li>a").off("mouseenter") ;
		 $(".bestTab>li>a span").css({"marginLeft":"0px"});//초기화
		$(".bestTab>li>a").css({"marginLeft":"0px"});//초기화
		$(".bestTab").css("marginLeft","-10px");

		$(".bestTab>li>a").on("click",function(event){
			$(".m1 .best_product").hide();
			$( $(this).attr("href") ).show();
			$(".bestTab>li>a").removeClass("on");
			$(this).addClass("on");
			return false;
		});//$(".bestTab>li>a").on("click") End
		
		$(".m1_after").on("click", function(event){
			$(".bestTab").animate({"marginLeft":"-184px"});
			$(this).fadeOut();
			$(".m1_before").fadeIn();
			return false;
		}); //$(".m_after").on("click") End

		$(".m1_before").on("click", function(event){
			$(".bestTab").animate({"marginLeft":"-10px"});
			$(this).fadeOut();
			$(".m1_after").fadeIn();
			return false;
		}); //$(".m_before").on("click") End

		// 스와이프 기능
		$(".m1").swipe( {
		//Generic swipe handler for all directions
		swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
		  if(direction=="left"){
			 $(".bestTab").animate({"marginLeft":"-184px"});
			 $(".m1_after").fadeOut();
			 $(".m1_before").fadeIn();
		  }//if
		  if(direction=="right"){
			$(".bestTab").animate({"marginLeft":"-10px"});
			$(".m1_before").fadeOut();
			$(".m1_after").fadeIn();
		  }
		  //console.log(event);
		},
		//Default is 75px, set to 0 for demo so any distance triggers swipe
		 threshold:0
	  });  //$(".train").swipe End



	}//if(win_w <=750 ) //모바일 버전일때  End
}//function bestMenu() End





//##############모바일 버전 마이퓨쳐 탭
function m_myfuture() {
	var win_w = $(window).width();
	//console.log(win_w);
	 
	 if( win_w <=750 )
	{	
		$(".m3_after").on("click", function(event){
			$(".f_tab").animate({"marginLeft":"-290px"});
			$(this).fadeOut();
			$(".m3_before").fadeIn();
			return false;
		}); //$(".m_after").on("click") End

		$(".m3_before").on("click", function(event){
			$(".f_tab").animate({"marginLeft":"0px"});
			$(this).fadeOut();
			$(".m3_after").fadeIn();
			return false;
		}); //$(".m_before").on("click") End
		
		// 스와이프 기능
		$(".m3").swipe( {
		//Generic swipe handler for all directions
		swipe:function(event, direction, distance, duration, fingerCount, fingerData) {
		  if(direction=="left"){
			 $(".f_tab").animate({"marginLeft":"-290px"});
			 $(".m3_after").fadeOut();
			 $(".m3_before").fadeIn();
		  }//if
		  if(direction=="right"){
			$(".f_tab").animate({"marginLeft":"0px"});
			$(".m3_before").fadeOut();
			$(".m3_after").fadeIn();
		  }
		  //console.log(event);
		},
		//Default is 75px, set to 0 for demo so any distance triggers swipe
		 threshold:0
	  });  //$(".train").swipe End
	}// if( win_w <=750 ) End
	if( win_w >= 751) //PC버전 일때
	{
		$(".f_tab").css({"marginLeft":"auto"});   

		//스와이프의 기능을 막는다
		$(".m3").swipe({ swipe:function( event, direction, distance, duration, fingerCount, fingerData){false},
		 threshold:0
		  });	
	} //else End
}//  m_myfuture() End