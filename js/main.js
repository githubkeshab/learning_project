(function($){

 $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });




        

	 $('.gform_fields li input').each(function(){
	 	  var classname=$(this).attr('class');
	 	 $(this).parents('li').addClass(classname);
         $(this).parents('.gform_wrapper').addClass(classname +  '-form');
	 });
	  $('.gform_fields li select').each(function(){
	 	  var classname=$(this).attr('class');
	 	 $(this).parents('li').addClass(classname);
          $(this).parents('.gform_wrapper').addClass(classname +  '-form');
	 });
	   $('.gform_fields li textarea').each(function(){
	 	  var classname=$(this).attr('class');
	 	 $(this).parents('li').addClass(classname);
           $(this).parents('.gform_wrapper').addClass(classname +  '-form');
	 });
	$('.menu-main-menu-container ul.sqz-main_navigation li.current_page_parent').removeClass('current_page_parent');
	// svg image to png 								
	if (!Modernizr.svg) {
		var imgs = document.getElementsByTagName('img');
		var dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}
	
	$('.sqz-downarrow a[href*=\\#]').on('click', function(event){     
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top - 90}, 500);
	});

	// $(window).load(function() {
	// 	var urlHash = $(location).attr('hash');
	// 	if(urlHash == '#louisekeats') {
	// 		$('.sqz-nourish_desc a').trigger('click');
	// 	} 
	// 	if(urlHash !== '') {
	// 		$('body,html').animate({
	// 			scrollTop:$(urlHash).offset().top - 150
	// 		}, 500);
	// 		return false;
	// 	}
	// });
	$(window).load(function() {
		var urlHash = $(location).attr('hash');
		if(urlHash == '#our-founder') {
			$('body,html').animate({
				scrollTop:$(urlHash).offset().top - 90
			}, 500);
			return false;
		} 
		if(urlHash == '#louisekeats') {
			$('body,html').animate({
				scrollTop:$(urlHash).offset().top - 150
			}, 500);
			return false;
		}
	});
	

	function home_map_height() {
		var map_height = $("#sqz-mapblock").height();
		$("#sqz-map").css("height", map_height);
	}
	home_map_height();
	$(window).resize(home_map_height);
	
	//sticky header
	$(window).scroll( function(){
		var height = $(window).scrollTop();
		$('body').removeClass('sqz-sticky');
		if(height  > 0) {
			$('body').addClass('sqz-sticky');
			
		} else {
			$('body').removeClass('sqz-sticky');
			
		}
		
	});

	$(".sqz-trainer_listing > ul > li").click(function(){
		$(this).toggleClass('active');
		$(this).children("ul").slideToggle();
	});

	$('select').niceSelect();
	function youframe() {
		var frameWidth = $('.sqz-entry_content iframe').width();
		$('.sqz-entry_content iframe').css('height', frameWidth *.563); 
	}
	//youframe();
//	$(window).resize(youframe);
//	$(window).ajaxComplete(youframe);
	
	//gallery
	$(".sqz-fancy").fancybox({
		maxWidth : 1200,
		maxHeight : '70%',
		fitToView : false,
		width  : '100%',
		height  : '100%',
		autoSize : false,
		closeClick : false,
		openEffect : 'fade',
		closeEffect : 'fade',
		nextEffect : 'fade',
		prevEffect : 'fade',
		padding : 0,
		helpers : {
			title : {
				type : 'inside'
			},
			overlay: {
				locked: false
			},
			media : {}
		},
		beforeShow : function() {
			var alt = this.element.attr('data-title');
			this.inner.find('img').attr('alt', alt);
			this.title = alt;
		}
	});
	
	// FULL MENU
	$('.sqz-full_toggle_menu').click(function(e) {
		e.preventDefault();
		if($(this).hasClass('sqz-open')) {
			$('body').removeClass('sqz-menu_open');
			$('.sqz-full_nav').fadeOut(200);
			$(this).removeClass('sqz-open');
		}else{
			$(this).addClass('sqz-open');
			$('body').addClass('sqz-menu_open');
			$('.sqz-full_nav').fadeIn(200);
			e.stopImmediatePropagation();
		}
		$('.sub-toggle').removeClass('expand');		
		return false;		
	});
	
	// mobile menu
	$('.sqz-toggle_menu').click(function(e) {
		e.preventDefault();
		if($(this).hasClass('sqz-open')) {
			$('body').removeClass('sqz-menu_open');
			$('.sqz-mobile_navigation').fadeOut(200);
			$(this).removeClass('sqz-open');
		}else{
			$(this).addClass('sqz-open');
			$('body').addClass('sqz-menu_open');
			$('.sqz-mobile_navigation').fadeIn(200);
			e.stopImmediatePropagation();
		}
		//$('ul.sub-menu').slideUp(500);
		$('.sqz-submenu_wrap, .sqz-mobile_menu .sqz-mobile_nav').removeAttr('style');
		$('.sqz-submenu_wrap .sqz-menu_header').hide();
		$('.sub-toggle').removeClass('expand');		
		return false;		
	});
	$('.sqz-close').click(function() {
		$('body').removeClass('sqz-menu_open');
		$('.sqz-mobile_navigation').fadeOut(200);
	});
	$('.sqz-mobile_menu .menu-item-has-children > a').each(function() {
		var activeMenuItem = $(this).text();
		$(this).after("<h4 class='sqz-menu_header'><span class='sub-menu_back'><i class='fa fa-angle-left'></i></span><span class='sqz-menu_title'>"+activeMenuItem+"</span></h4>");
		$(this).append("<span class='sub-toggle'><i class='mdi mdi-chevron-right'></i></span>");
		$(this).nextAll('h4, ul').wrapAll("<div class='sqz-submenu_wrap' />");
	});
	$('.sqz-submenu_wrap').each(function() {
		$(this).find('.sqz-submenu_wrap').addClass('sqz-second');
	});
	$('.sqz-main_navigation .menu-item-has-children > a').click(function(e) {
		// e.preventDefault();
	});
	$('.sqz-mobile_menu .menu-item-has-children > a > span').click(function(e) {
		e.preventDefault();
		
		//$('.sqz-mobile_menu .sqz-mobile_nav').animate({left: '-100%'});
		$(this).parents('ul').animate({left: '-100%'});
		$(this).parent('a').next('.sqz-submenu_wrap').animate({left:0});
	//	$(this).parents('.sqz-submenu_wrap').animate({left: 0});
	$('.sqz-submenu_wrap .sqz-menu_header').hide();
	$(this).parent('a').next('.sqz-submenu_wrap').find('.sqz-menu_header').show();

});
	$(document).on('click', '.sub-menu_back', function() {
		var parentMenu = $(this).parent().parent('.sqz-submenu_wrap');
		if(parentMenu.hasClass('sqz-second')){
			$(this).parent('.sqz-menu_header').hide();
			$(this).parents('.sub-menu').animate({left: 0});
			$(this).parent('.sqz-menu_header').parent('.sqz-submenu_wrap').animate({left: 100+'%'});
			$(this).parents('.sub-menu').prev().show();

		}else{
			$(this).parents('.sqz-submenu_wrap').animate({left:100+'%'});
			$('.sqz-mobile_menu .sqz-mobile_nav').animate({left: 0});
			$(this).parent('.sqz-menu_header').hide();
		}
		
	});


	
	
})(jQuery);

$(window).resize(function(){
	var winWidthNew = $(window).width();
	if($(winWidthNew > 959)) {
		$('.sqz-mobile_navigation, .sqz-mobile_sidebar').hide();
		$('.sqz-toggle_menu, .sqz-side_toggle').removeClass('sqz-open');
		$('body').removeClass('sqz-menu_open');
		$('.sqz-hidden_block').removeAttr('style');
	}

});

window.retinajs();


//equal height

equalheight = function(container){

	var currentTallest = 0,
	currentRowStart = 0,
	rowDivs = new Array(),
	$el,
	topPosition = 0;
	$(container).each(function() {

		$el = $(this);
		$($el).height('auto')
		topPostion = $el.position().top;

		if (currentRowStart != topPostion) {
			for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
				rowDivs[currentDiv].height(currentTallest);
			}
     rowDivs.length = 0; // empty the array
     currentRowStart = topPostion;
     currentTallest = $el.height();
     rowDivs.push($el);
 } else {
 	rowDivs.push($el);
 	currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
 }
 for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
 	rowDivs[currentDiv].height(currentTallest);
 }
});
}
$(window).load(function() {
	equalheight('.sqz-equal_height');
});
$(window).resize(function() {
	equalheight('.sqz-equal_height');
});
<!--//--><![CDATA[//><!--
if (document.images) {
img1 = new Image();

img1.src = "../images/about-full-header.jpg";
}

//--><!]]>