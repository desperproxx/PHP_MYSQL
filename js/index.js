


/*$( document ).ready(function() {
	('.change').click(function() {
		//('body').css('background','green');
		 alert( 'Привет' );
	});
    //window.location.replace("http://stackoverflow.com");
});*/

$(document).ready(function(){
	setTimeout(function() { $(".cover").fadeIn()
		.css({top:1000,opacity:1})
		.animate({top:100}, 1000, function() {
    //callback
}).animate({top:0}, 1500, function() {
    //callback
});; 
	}, 10000);

});

function func() {

}

setTimeout(func, 100);
$('img').each(function() {
	 var deg = $(this).data('rotate') || 0;
    var rotate = 'rotate(' + deg + 'deg)';
    $(this).css({ 
        '-webkit-transform': rotate,
        '-moz-transform': rotate,
        '-o-transform': rotate,
        '-ms-transform': rotate,
        'transform': rotate 
    });
 
        $(this).hover(function() {
             $(this).css('transform', 'rotate(0deg)');
    }, function() {
      deg = $(this).data('rotate') || 0;
      rotate = 'rotate(' + deg + 'deg)';
    $(this).css({ 
        '-webkit-transform': rotate,
        '-moz-transform': rotate,
        '-o-transform': rotate,
        '-ms-transform': rotate,
        'transform': rotate 
    });
    $(this).click(function() {
             $(this).css('width', '500px').css('height','250px');
    });
});
        
});

