<?php  $sqz_location = get_field('google_map', 'option'); 
$sqz_add_custom_map_pin_image = get_field('add_custom_map_pin_image', 'option'); 
//print_r($sqz_add_custom_map_pin_image);
?>
<?php //if($location) { ?>
<div class="sqz-map_wrap">
<div id="sqz-map"></div>
</div>

<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEul14DzDyKKtCeMn6_2WPCYkU8DqIYrA"></script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaJeXFhN0ULC_CZ9myQDPrYqZacOHRVlE&sensor=true"></script> 
<script>
// When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
            var markers = [
    ["<h4><?php bloginfo( 'name' ); ?></h4>",<?php echo($sqz_location['lat']); ?>, <?php echo($sqz_location['lng']); ?>,1]
  //,["saad",'-33.889', '151.21128309999995', "http://maps.google.com/mapfiles/ms/micons/green.png"]    
];
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var myLatlng = new google.maps.LatLng(<?php echo($sqz_location['lat']); ?>, <?php echo($sqz_location['lng']); ?>);
                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,
                    // The latitude and longitude to center the map (always required)
                    center: myLatlng,
                       scrollwheel: false,
                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                  styles: [{featureType:"landscape",stylers:[{saturation:-100},{lightness:65},{visibility:"on"}]},{featureType:"poi",stylers:[{saturation:-100},{lightness:51},{visibility:"simplified"}]},{featureType:"road.highway",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"road.arterial",stylers:[{saturation:-100},{lightness:30},{visibility:"on"}]},{featureType:"road.local",stylers:[{saturation:-100},{lightness:40},{visibility:"on"}]},{featureType:"transit",stylers:[{saturation:-100},{visibility:"simplified"}]},{featureType:"administrative.province",stylers:[{visibility:"off"}]/**/},{featureType:"administrative.locality",stylers:[{visibility:"off"}]},{featureType:"administrative.neighborhood",stylers:[{visibility:"on"}]/**/},{featureType:"water",elementType:"labels",stylers:[{visibility:"on"},{lightness:-25},{saturation:-100}]},{featureType:"water",elementType:"geometry",stylers:[{hue:"#1e384b"},{lightness:-25},{saturation:-97}]}]
           };
                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('sqz-map');
                <?php if($sqz_add_custom_map_pin_image){ ?>
                var image = '<?php echo($sqz_add_custom_map_pin_image); ?>';
                <?php } ?>

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);
                var infowindow = new google.maps.InfoWindow(), marker, i;
    for (i = 0; i < markers.length; i++) {  
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(markers[i][1], markers[i][2]),
            map: map,
            icon: image
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(markers[i][0]);
                infowindow.open(map, marker);
            }
        })(marker, i)); 

    }
}


</script> 
