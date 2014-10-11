
var main = function(){
	
	// Ici gestion du slide pour résolution téléphone portable
	if (window.matchMedia('(max-width: 991px)').matches)
	{

		var currentProd = $('.activeProduct');
		$('.productContain').css('display','none');
		currentProd.fadeIn(600);

	 $('.arrow-next').click(function(){
    var currentProd = $('.activeProduct');
    var currentDot = $('.active-dot');
    var nextProd = currentProd.next();
    var nextDot = currentDot.next();
    if(nextProd.length === 0){
      nextProd = $('.productContain').first();
      nextDot= $('.dot').first();
    }

    currentProd.fadeOut(600);
    currentProd.removeClass('activeProduct');
    currentDot.removeClass('active-dot');

    nextProd.delay(650).fadeIn(600);
    nextProd.addClass('activeProduct');
    nextDot.addClass('active-dot');
    
  	});
  
   $('.arrow-prev').click(function(){
    var currentProd = $('.activeProduct');
    var currentDot = $('.active-dot');
    var nextProd = currentProd.prev();
    var nextDot = currentDot.prev();
    if(nextProd.length === 0){
      nextProd = $('.productContain').last();
      nextDot= $('.dot').last();
    }
    currentProd.fadeOut(600);
    currentProd.removeClass('activeProduct');
    currentDot.removeClass('active-dot');
    nextProd.delay(650).fadeIn(600);
    nextProd.addClass('activeProduct');
    nextDot.addClass('active-dot'); 
 	 });
	
	}	



	$('.productButton').hover(function(){
		
		if ( $(this).hasClass('clicked') === false ) {
			$(this).css('background-color','#ea8e9c');
			$(this).parent().next().css('visibility','visible');
			$(this).parent().next().next().css('visibility','visible');
		}
	},function(){
		
		if ( $(this).hasClass('clicked') === false ) {
			$(this).css('background-color','');
			$(this).parent().next().css('visibility','hidden');
			$(this).parent().next().next().css('visibility','hidden');
		}
	})


	$('.productButton').click(function(){

		if ( $(this).hasClass('clicked') === false ){ $(this).addClass('clicked');}
		else {$(this).removeClass('clicked');} 

		if ( $(this).hasClass('clicked') === true ) {
		$(this).parent().next().css('visibility','visible');
		$(this).parent().next().next().css('visibility','visible');
		}
		else {
		$(this).parent().next().css('visibility','hidden');
		$(this).parent().next().next().css('visibility','hidden');
		}

	})


}

$(document).ready(main);