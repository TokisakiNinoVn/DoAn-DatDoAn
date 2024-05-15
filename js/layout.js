 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        document.getElementById("back-to-top").style.display = "block";
    } else {
        document.getElementById("back-to-top").style.display = "none";
    }
}



 $(document).ready(function() {
		$('#demo1').owlCarousel({
			items: 1,
			margin: 10,							               
		});
		owl1 = $('#demo1').owlCarousel();
		$(".prev-1").click(function () {
		    owl1.trigger('prev.owl.carousel');
		});
		$(".next-1").click(function () {
		    owl1.trigger('next.owl.carousel');
		});

		$('#demo3').owlCarousel({
			items: 1,
			margin: 10,							               
		});
		owl3 = $('#demo3').owlCarousel();
		$(".prev-3").click(function () {
		    owl3.trigger('prev.owl.carousel');
		});
		$(".next-3").click(function () {
		    owl3.trigger('next.owl.carousel');
		});

		$(document).ready(function(){
		$("#back-to-top").click(function(){return $("body, html").animate({scrollTop:0},400),!1});
		$(function(){$('[data-toggle="tooltip"]').tooltip()});
		});	
		
		$(".con").hide();
		    $(".cap1").click(function(){
		      $(this).next().slideToggle();

		    });
		
		
	   $('#demo4').owlCarousel({
		items: 5,
		margin: 10,		
		autoplaySpeed:true,		               
		});
	
});




