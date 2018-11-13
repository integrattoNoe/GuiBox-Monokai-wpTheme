	<h1>Hola mundo</h1>
	</div><!--divContainer-->
	
	</section>
	<footer>
		<div class="social">
		  <div class="social__item" data-aos="flip-left">
		  	<!--<i class="fab fa-facebook-f"></i>-->
		    <span class="fa fa-facebook" data-count="..." data-social="fb" ></span>
		  </div>
		  <div class="social__item" >
		    <span class="fa fa-vk" data-count="..." data-social="vk"></span>
		  </div>
		  <div class="social__item" >
		    <span class="fa fa-twitter" data-count="..." data-social="tw"></span>
		  </div>
		  <div class="social__item" >
		    <span class="fa fa-linkedin" data-count="..." data-social="ln"></span>
		  </div>
		  <div class="social__item" >
		    <span class="fa fa-pinterest" data-count="..." data-social="pt"></span>
		  </div>
		</div>
	</footer>
</body>
<script>
	var flagSuperado = false;
		$(window).on("load",function(){
			AOS.init();
			var element_position1 = /*$('#guiboxContent')*/$("nav.navbar").offset().top;
			console.log("POS: "+element_position1);
			$(window).on('scroll', function() {
				var y_scroll_pos = window.pageYOffset;
				console.log("scroll pos: "+y_scroll_pos);
				$("#bann").removeClass("shake fadeInUp");
				if(y_scroll_pos >= element_position1){
					flagSuperado=true;
					$/*('#guiboxContent').find*/("nav.navbar").removeClass("slideInDown").addClass("navFix swing");
					$('#mainContent').addClass("mainFix");
				}else if(y_scroll_pos < element_position1 && flagSuperado){
					$("#bann").addClass("fadeInUp");
					$/*('#guiboxContent').find*/("nav.navbar").removeClass("navFix swing").addClass("slideInDown");
					$('#mainContent').removeClass("mainFix");
				}
				
			});
			AOS.refresh();
			/*$(document).on("mouseenter",".divItemDashboard",function(){
				$(this).addClass("zoomIn");
			});
			$(document).on("mouseleave",".divItemDashboard",function(){
				$(this).removeClass("zoomIn");
			});*/
			
		});
	</script>
</html>