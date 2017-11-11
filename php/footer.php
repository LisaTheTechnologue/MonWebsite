</div>
<!-- GOOGLE MAPS DATA -->
    <script type="text/javascript">
    // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);
    
        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 15,
                
                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.68961985411178, -74.01618003845215), // New York 

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles: [	{		featureType:'water',		stylers:[{color:'#F2F2F2'},{visibility:'on'}]	},{		featureType:'landscape',		stylers:[{color:'#FFFFFF'}]	},{		featureType:'road',		stylers:[{saturation:-100},{lightness:45}]	},{		featureType:'road.highway',		stylers:[{visibility:'simplified'}]	},{		featureType:'road.arterial',		elementType:'labels.icon',		stylers:[{visibility:'off'}]	},{		featureType:'administrative',		elementType:'labels.text.fill',		stylers:[{color:'#ADADAD'}]	},{		featureType:'transit',		stylers:[{visibility:'off'}]	},{		featureType:'poi',		stylers:[{visibility:'off'}]	}]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('googlemaps');

            // Create the Google Map using out element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);
        }
	</script>
</body>
<footer>
    <!--Footer-->
    <div id="footer" class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <h4>Site Map</h4>
            </div>
            <div class="col-md-4">
                <h4>Resources</h4>
                <div id="credit">
                    <ol>
                        <li>Tea: Photo by Toa Heftiba on Unsplash</li>
                        <li>Camera: Photo by ian dooley on Unsplash</li>
                    </ol>
                </div>
            </div>
            <div class="col-md-4">
                <h4>Copyright</h4>
				<p>
				This is a personal website. <br/>
				As I started building my own websites, many codes are generated online. <br/>
				But the idea is mine.
				</p>
            </div>
        </div>
    </div>
</footer>

</html>