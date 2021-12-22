<?php  include_once  './header.php' ;    
		echo "<script> $(document).attr('title','1대1문의 삭제 | 뉴발란스'); </script> ";
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

			<form  action="./board_delete.php?no=<?=$_GET['no']?>"  method="post"   id="delform" class="subcontent subtop ">
				<fieldset>
				   <legend> 비밀번호확인</legend>
					 
					 <div class="board detail write">
						 <ul class="title"><li class="">비밀번호확인</li></ul>

						  <ul class="detail_con">
								<li class="detail_con_title"><label for="pass">	비밀번호 </label></li>
								<li class="detail_con_content"><input type="password"   id="pass" name="pass"  size="10"  maxlength="8"/></li>
						  </ul>
						</div><!-- //board detail -->
					  <ul class="menu_btn">
						 <li> <input  type="submit"  value="확인"/></li>
						<li><input  type="reset"    value="취소"   onclick="history.back(-1)"/></li>
					</ul>
				</fieldset>
			</form>
		</div><!-- //sub_tmpt -->
		
	</div><!-- //sub -->
<?php  include_once  './footer.php' ;    ?>