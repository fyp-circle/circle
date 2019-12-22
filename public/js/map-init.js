//google map
if ($("#map-canvas").length) {
jQuery(document).ready(function($) {

	"use strict";

		var map;
		function initialize() {
		  var mapOptions = {
		    zoom: 12,
		    center: new google.maps.LatLng(24.926294, 67.022095)
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
		      mapOptions);
		      var marker = new google.maps.Marker({
		        map: map,
		        icon: "images/map-marker.png",
		        title: "Basit Ali",
		        position: map.getCenter(24.9415492, 67.1523507)
		      });
		      var marker2 = new google.maps.Marker({
		        map: map,
		        icon: "images/map-marker2.png",
		        title: "Munir Hassan",
		        position: new google.maps.LatLng(24.9238073, 67.1146239,19)
		      });
		      var marker3 = new google.maps.Marker({
		        map: map,
		        icon: "images/map-marker3.png",
		        title: "Malik Obaid",
		        position: new google.maps.LatLng(24.8697863,67.022789)
		      });



		      var infowindow = new google.maps.InfoWindow();
		      infowindow.setContent('<b>Basit Ali</b><br>ID: 16k-3762');

		      var infowindow2 = new google.maps.InfoWindow();
		      infowindow2.setContent('<b>Munir Hassan</b><br>ID: 16k-3761');

		      var infowindow3 = new google.maps.InfoWindow();
		      infowindow3.setContent('<b>Malik Obaid</b><br>ID: 16k-3767');

		      infowindow.open(map, marker);


		      google.maps.event.addListener(marker, 'click', function() {
		        infowindow.open(map, marker);
		      });
		      google.maps.event.addListener(marker2, 'click', function() {
		        infowindow2.open(map, marker2);
		      });
		      google.maps.event.addListener(marker3, 'click', function() {
		        infowindow3.open(map, marker3);
		      });
		}

		google.maps.event.addDomListener(window, 'load', initialize);
});
}
