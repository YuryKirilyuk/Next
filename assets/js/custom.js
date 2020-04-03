jQuery(window).on('load', function () {
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
        jQuery('body').addClass('ios');
	} else{
        jQuery('body').addClass('web');
	}
});


/* ==========================================================================
   When the window is scrolled, do
   ========================================================================== */

jQuery(window).scroll(function() {
	
		
	});

/* ==========================================================================
   When the window is resized, do
   ========================================================================== */

jQuery(window).resize(function() {
		
		
	});





jQuery(function($){


    $('.contact textarea').each(function () {
        this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
    }).on('input', function () {
        this.style.height = 0;
        this.style.height = (this.scrollHeight) + 'px';
    });


    $('#more-seed').on('click', function(){
        var btn = $(this),
            sSeed = $('.section-seed-stage').offset();

        $('#seed').slideToggle();
        btnChange(btn, sSeed);
        return false;
    });

    $('#more-board').on('click', function(){
        var btn = $(this),
            sBoard = $('.section-board-bundle').offset();

        $('#board').slideToggle();
        btnChange(btn, sBoard);
        return false;
    });

    $('#more-p1').on('click', function(){
        var btn = $(this),
            sSeed = $('.section-package-1').offset();

        $('#package-1').slideToggle();
        btnChange(btn, sSeed);
        return false;
    });

    $('#more-p2').on('click', function(){
        var btn = $(this),
            sBoard = $('.section-package-2').offset();

        $('#package-2').slideToggle();
        btnChange(btn, sBoard);
        return false;
    });

    $('#more-p3').on('click', function(){
        var btn = $(this),
            sSeed = $('.section-package-3').offset();

        $('#package-3').slideToggle();
        btnChange(btn, sSeed);
        return false;
    });

    $('#more-p4').on('click', function(){
        var btn = $(this),
            sBoard = $('.section-package-4').offset();

        $('#package-4').slideToggle();
        btnChange(btn, sBoard);
        return false;
    });


    function btnChange(btn, offset){
        btn.toggleClass('visible');
        btn.hasClass('visible') ? btn.text('Close') : (btn.text('More'), $("html, body").animate({ scrollTop: offset.top - 180 }));
    }


});