'use strict';

var scrollTimer;
var canLoadMaps = true;

var initMap = function() {
	var jindatheme = { lat: 13.902299, lng: 100.516311 };
	var markerIcon = new google.maps.MarkerImage(
		'https://www.jindatheme.com/assets/marker.png',
		null,
		null,
		null,
		new google.maps.Size(42, 55)
	);
	var styledMap = new google.maps.StyledMapType(
		[
			{
				featureType: 'administrative',
				elementType: 'labels.text.fill',
				stylers: [{ color: '#444444' }]
			},
			{
				featureType: 'landscape',
				elementType: 'all',
				stylers: [{ color: '#f2f2f2' }]
			},
			{
				featureType: 'poi',
				elementType: 'all',
				stylers: [{ visibility: 'simplified' }, { hue: '#007bff' }]
			},
			{
				featureType: 'poi.business',
				elementType: 'geometry.fill',
				stylers: [{ visibility: 'on' }]
			},
			{
				featureType: 'road',
				elementType: 'all',
				stylers: [{ saturation: -100 }, { lightness: 45 }]
			},
			{
				featureType: 'road.highway',
				elementType: 'all',
				stylers: [{ visibility: 'simplified' }]
			},
			{
				featureType: 'road.arterial',
				elementType: 'labels.icon',
				stylers: [{ visibility: 'off' }]
			},
			{
				featureType: 'transit',
				elementType: 'all',
				stylers: [{ visibility: 'off' }]
			},
			{
				featureType: 'water',
				elementType: 'all',
				stylers: [{ color: '#b4d4e1' }, { visibility: 'on' }]
			}
		],
		{ name: 'Styled Map' }
	);
	var map = new google.maps.Map(document.getElementById('map-canvas'), {
		zoom: 13,
		center: jindatheme,
		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		draggable: true
	});
	map.mapTypes.set('styled_map', styledMap);
	map.setMapTypeId('styled_map');
	var marker = new google.maps.Marker({
		position: jindatheme,
		map: map,
		icon: markerIcon,
		animation: google.maps.Animation.DROP,
		optimized: false
	});
};

var checkFixedHeader = function() {
	var headerHeight = 0;

	if (jQuery('.hero-block').length > 0)
		headerHeight = jQuery('.hero-block').outerHeight();
	else headerHeight = jQuery('.header').outerHeight();

	if (jQuery(window).scrollTop() > headerHeight) {
		jQuery('.header').addClass('fixed');
	} else {
		jQuery('.header').removeClass('fixed');
	}
};

jQuery(document).ready(function() {

	var myLazyLoad = new LazyLoad({
    elements_selector: ".lazy"
	});

	if (jQuery('.portfolio-block').length > 0) {
		jQuery('.portfolio-block').magnificPopup({
			delegate: 'a.image-popup',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0, 1],
				tCounter: ''
			}
		});
	}

	if (jQuery('.owl-carousel').length > 0) {
		jQuery('.owl-carousel').owlCarousel({
			loop: true,
			lazyLoad: true,
			margin: 30,
			items: 4,
			dots: false,
			nav: true,
			autoplay: true,
			autoplaySpeed: 1200,
			navText: [
				"<span class='i-nav-left'></span>",
				"<span class='i-nav-right'></span>"
			],
			responsive: {
				0: {
					items: 1,
					dots: true,
					nav: false,
					autoplay: true,
					loop: true
				},
				768: {
					items: 3,
					dots: true,
					nav: false,
					autoplay: true,
					loop: true
				},
				1200: {
					items: 4,
					dots: false,
					nav: true,
					autoplay: true,
					loop: true
				}
			}
		});
	}

	if (jQuery('.blog-sidebar').length > 0) {
		jQuery('.blog-sidebar').stickit({
			top: 101,
			screenMinWidth: jQuery('.header').outerHeight() + 30
		});
	}

	jQuery(document).on('click', '.nav-scroll-link a', function(e) {
		var section = jQuery(this).attr('title');
		var headerHeight = jQuery('.header').outerHeight();
		if (jQuery('#' + section).length > 0) {
			e.preventDefault();
			var positionFromTop = jQuery('#' + section).offset().top;
			jQuery('html, body')
				.stop()
				.animate(
					{
						scrollTop: positionFromTop - headerHeight
					},
					600
				);
		}
	});

	jQuery(document).on('click', '.mobile-navigation-button', function(e) {
		e.preventDefault();
		jQuery(this).toggleClass('active');
		jQuery('.top-navigation, .top-navigation ul').toggleClass('active');
	});
});

jQuery(window).load(function(){
	if (jQuery('.blog-list').length > 0) {
		var grid = jQuery('.blog-list').isotope({
			itemSelector: '.grid-item'
		});

		jQuery(document).on('click', '.blog-filter-bar ul li a', function(e) {
			e.preventDefault();
			jQuery('.blog-filter-bar ul li').removeClass('active');
			jQuery(this)
				.parent('li')
				.addClass('active');
			var slug = jQuery(this).data('filter');
			grid.isotope({ filter: slug });
		});
	}
});

jQuery(window).scroll(function() {
	checkFixedHeader();
});

jQuery(document).on('click', '#map-canvas', function() {
	if (canLoadMaps) {
		jQuery.getScript('https://maps.googleapis.com/maps/api/js?key=AIzaSyCCq_YDQn6963EdIfS7WbiJpiR5MORtx7Q&callback=initMap');
		canLoadMaps = false;
	}
});
