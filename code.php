/*Slick Slider css*/

.main-slider.main-home .slick-slide img{height:200px!important;object-fit:cover;}
.main-slider.main-home .slick-slide{height:200px!important;}
.main-home .slider-txt h2{font-size:24px;padding:0 20px;margin:0 0 7px;}
.main-home .slider-txt h2 br:nth-child(2){display:none;}
.main-slider.main-home .slider-txt .about-btn{    width: auto !important;display:block;margin:0;text-align:right;margin:0 20px 0 0;}
.main-slider.main-home .slider-txt a.wp-block-button__link{padding:7px 10px;display:inline-block!important;width:auto;background:#f58e7d;}
.main-slider.main-home .slick-list{height:200px!important;}
.main-slider.main-home button.slick-arrow{    display: none !important;}
.cat-service .wp-block-columns{text-align:center;margin:0 0 20px;}
.cat-service .wp-block-columns .cat-txt{margin:20px 0 0;}

/*sub-menu to sub-menu css*/
.main-menu ul li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .sub-menu {
    top: 0px;
    left: 173px;
    visibility: hidden;
    opacity: 0;
}

/*sub-menu css*/
.page-header__center ul li.menu-item-has-children {position: relative;}
.page-header__center ul li.menu-item-has-children:hover .sub-menu {opacity: 1; visibility: visible;}
.page-header__center ul li.menu-item-has-children .sub-menu {position: absolute;top: 58px;left: 20px;width: 210px;background: #FFFFFF !important;box-shadow: inset 0 3px 5px rgb(0 0 0 / 20%);display: block;z-index: 9; opacity: 0;  visibility: hidden;}
.page-header__center ul li.menu-item-has-children .sub-menu li {display: block; text-align: left;}
.page-header__center ul li.menu-item-has-children .sub-menu li a {font-size: 12px;padding: 10px 10px;display: block;border-bottom: solid 1px #404040;text-decoration: none;}

Woocommerce Product Filter 

Advanced AJAX Product Filters



/*Animation CSS*/
.page-id-40 .testimonials-slider .owl-nav, .page-id-21 .testimonials-slider .owl-nav{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;animation-name:fadeInRight;animation-delay:1.1s;}


/*Form Pop with position select option Js*/ 
$('.featured-sec .prdtl .data-pop ul li').click(function(e){
		var src = $(this).text();
		$('#position_ttl').val(src).prop('disabled', true);
		$('.prdtl').stop(0,0).fadeOut();
		$('html,body').animate({scrollTop:$('.form-sec').offset().top},500);
	});
	
	
/*Loader HTML CSS And JS*/

<div class="preloader">
	<figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"></figure>
</div>

@viewport{user-zoom: fixed;}
   .preloader {
	background-color: #070807;
	height: 100%;
	left: 0px;
	position: fixed;
	top: 0px;
	width: 100%;
	z-index: 99999999;
}

.preloader figure img {animation: pulse 1s linear infinite;max-width: 100px;}
.preloader figure {position: absolute;top: 40%;left: 0;right: 0;margin: 0px auto;text-align: center;}

@keyframes pulse {
  0% {
    opacity: 0.9;
    transform: scale(0.8);
  }
  30% {
    opacity: 1;
    transform: scale(1);
  }
  70% {
    opacity: 1;
    transform: scale(1);
  }
  100% {
    opacity: 0.9;
    transform: scale(0.8);
  }
}


=== Slick slider Zoom Effect Css ===
	
.main-slider .wp-block-getwid-media-text-slider-slide { overflow:hidden; }
.main-slider img { animation:100s ease 0s normal none infinite running zoomEffect; }

@keyframes zoomEffect {
    from {transform: scale(1, 1)}
    to {transform: scale(2, 2)}
}


$(window).on('load', function() { 	
var wow = new WOW({
	boxClass:     'wow',
	animateClass: 'animated',
	offset:       300,
	mobile:       false,
	live:         true,
	callback:     function(box) {
	},
	scrollContainer: null,
	resetAnimation: true,
  });
wow.init();
});
/*END PRELOADER JS*/  