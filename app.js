var main = function() {

$(".menu-icon").click(function() {

	$('.menu').animate({
      left: "3%"
    }, 200);

})

$(".close-icon").click(function(){

	$('.menu').animate({
      left: "-50%"
    }, 200);	

})

//hover to expand with dequeue
$(".funbox").hover(function(){
	if (!$(this).hasClass('animated')) {
		$(this).dequeue().stop().animate({ width: "125%" }, 200);
	}
}, function() {
    $(this).addClass('animated').animate({ width: "95%" }, "normal", "linear", function() {
		$(this).removeClass('animated').dequeue();
	});
});

$(".sm-icon").hover(function(){
  
  $(this).animate({opacity: '1.0'}); 
  }, 
  function(){ 
    $(this).animate({opacity: '0.4'});
  

  });


}//main
$(document).ready(main);