
var main = function(){



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