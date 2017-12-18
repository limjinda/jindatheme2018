'use strict';

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

jQuery(document).ready(function() {
	var grid = jQuery('.blog-list').isotope({
		itemSelector: '.grid-item'
	});

	jQuery(document).on('click', '.blog-filter-bar ul li a', function() {
		jQuery('.blog-filter-bar ul li').removeClass('active');
		jQuery(this).parent('li').addClass('active');
		var slug = jQuery(this).data('filter');
		grid.isotope({ filter: slug });
	});
});

jQuery(window).load(function() {});
