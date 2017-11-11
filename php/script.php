<!--Personal js-->
<script>
function myMap() {
		var location = {lat: 43.765659, lng: -79.223871};
        var mapOptions = {
			zoom: 4,
			center: location
        };
        var map = new google.maps.Map(document.getElementById("googlemaps"), mapOptions);
		var marker = new google.maps.Marker({
			postion: location,
			map: map
		});
}
</script>


<!--Google Maps-->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3NrllOvNsguqPW6CW88XIW8zx2BTqUi4&callback=myMap"></script>