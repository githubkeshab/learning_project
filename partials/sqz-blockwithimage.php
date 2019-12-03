<?php
/**
 * The template for displaying content and image
 * @author Squeeze Creative
 * For more information on hooks, actions, and filters,
 * @package Squeeze Toolbox.
 * Version: 1.0
 */

?>
<?php  
$sqz_add_custom_map_pin_image = get_field('add_custom_map_pin_image', 'option'); 
//block background
$sqz_colmn_get_bgr = get_sub_field('_block_background');
$sqz_colmn_get_bgr_solid = get_sub_field('blockimagecol_solid_color'); 

$sqz_colmn_get_bgr_img = get_sub_field('_fc_cbi_image_block');
$sqz_builder_columnimageblock_column_padding = get_sub_field('builder_columnimageblock_column_padding');

     $collum_backgroundimage= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'full');
       $collum_backgroundimage_2x= wp_get_attachment_image_src($sqz_colmn_get_bgr_img,'full');


 if($sqz_colmn_get_bgr_solid == '_dark') {
  $sqz_column_bgr = 'sqz-dark_bgr';
} else if($sqz_colmn_get_bgr_solid == '_light') {
  $sqz_column_bgr = 'sqz-light_bgr';
} else {
  $sqz_column_bgr = 'sqz-plain_bgr';
}




    $sqz_two_imagetext_text = get_sub_field('_fc_cbi_content');
     $sqz_imagepostion = get_sub_field('_fc_cbg_image_postion');
      $sqz_mapshow = get_sub_field('fc_cbix_map_image');
       $sqz_maps = get_sub_field('fc_mbi_map');
    $sqz_img_postion_wrap = $sqz_imagepostion == 'image_right' ? 'sqz-image_right' : 'sqz-image_left'; // returns true
//   $sqz_col_postion = $sqz_imagepostion == 'image_left' ? 'justify-content-end' : ''; // returns true
    
       $sqz_img_postion = $sqz_imagepostion == 'image_right' ? 'order-lg-12' : ''; // returns true
       $sqz_col_postion = $sqz_imagepostion == 'image_left' ? 'justify-content-start' : 'justify-content-end'; // returns true                  
  
        if($collum_backgroundimage || trim($sqz_two_imagetext_text)) { ?>
         
         <div class="sqz-section sqz-image_text_block <?php // echo $sqz_builder_columnimageblock_column_padding ; ?> sqz-section_<?php echo($GLOBALS['buildercount']); ?> sqz-clearfix <?php echo $sqz_img_postion_wrap;?> <?php echo($sqz_column_bgr); ?>" <?php //echo $sqz_column_bgr_img; ?> <?php //echo($sqz_column_datargs); ?>>
              <div class="container-fluid">

                          <div class="row no-gutters <?php echo $sqz_col_postion; ?>">
                            <?php if($collum_backgroundimage && $sqz_mapshow=='image') {  ?>
                              <div class="col-12 col-lg-6 <?php echo $sqz_img_postion; ?> ">
                                    <img src="<?php echo($collum_backgroundimage['0']); ?>">
                              </div>
                              <?php } elseif($sqz_maps && $sqz_mapshow=='map') {  ?>
                              <div class="col-12 col-lg-6 <?php echo $sqz_img_postion; ?> ">
                                   <div id="sqz-map_<?php echo($GLOBALS['buildercount']); ?>" class="sqz-map"></div>
                              </div>
                              <?php } ?>
                               <div class="col-12 col-lg-5 col-xl-4 align-self-center">
                                    <div class="sqz-content_wrap sqz-module_content">
                                            <?php echo(trim($sqz_two_imagetext_text)); ?>
                                    </div>
                                </div>
                          </div> 

              </div>
</div>
<?php if($sqz_maps && $sqz_mapshow=='map'){ ?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaJeXFhN0ULC_CZ9myQDPrYqZacOHRVlE&sensor=true"></script> 
<script>
// When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init<?php echo($GLOBALS["buildercount"]); ?>);
            var markers<?php echo($GLOBALS["buildercount"]); ?> = [
    ["<h4><?php bloginfo( 'name' ); ?></h4>",<?php echo($sqz_maps['lat']); ?>, <?php echo($sqz_maps['lng']); ?>,1]
  //,["saad",'-33.889', '151.21128309999995', "http://maps.google.com/mapfiles/ms/micons/green.png"]    
];
            function init<?php echo($GLOBALS["buildercount"]); ?>() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var myLatlng = new google.maps.LatLng(<?php echo($sqz_maps['lat']); ?>, <?php echo($sqz_maps['lng']); ?>);
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
                // We are using a div with id="map" seen below in the <body>document.getElementsByClassName
              var mapElement<?php echo($GLOBALS["buildercount"]); ?> = document.getElementById('sqz-map_<?php echo($GLOBALS["buildercount"]); ?>');
            //  var mapElement = document.getElementsByClass('sqz-map');
                <?php if($sqz_add_custom_map_pin_image){ ?>
                var image<?php echo($GLOBALS["buildercount"]); ?> = '<?php echo($sqz_add_custom_map_pin_image); ?>';
                <?php } ?>

                // Create the Google Map using out element and options defined above
                var map<?php echo($GLOBALS["buildercount"]); ?> = new google.maps.Map(mapElement<?php echo($GLOBALS["buildercount"]); ?>, mapOptions);
                var infowindow = new google.maps.InfoWindow(), marker, i;
    for (i = 0; i < markers<?php echo($GLOBALS["buildercount"]); ?>.length; i++) {  
        marker<?php echo($GLOBALS["buildercount"]); ?> = new google.maps.Marker({
            position: new google.maps.LatLng(markers<?php echo($GLOBALS["buildercount"]); ?>[i][1], markers<?php echo($GLOBALS["buildercount"]); ?>[i][2]),
            map: map<?php echo($GLOBALS["buildercount"]); ?>,
            icon: image<?php echo($GLOBALS["buildercount"]); ?>
        });
        google.maps.event.addListener(marker<?php echo($GLOBALS["buildercount"]); ?>, 'click', (function(marker, i) {
            return function() {
                infowindow.setContent(markers<?php echo($GLOBALS["buildercount"]); ?>[i][0]);
                infowindow.open(map<?php echo($GLOBALS["buildercount"]); ?>, marker<?php echo($GLOBALS["buildercount"]); ?>);
            }
        })(marker, i)); 

    }
}


</script> 
<?php } ?>

<?php  } ?>

