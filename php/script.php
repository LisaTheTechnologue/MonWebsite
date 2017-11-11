

<!--Personal js-->
<script>
function myMap() {
        var mapOptions = {
            center: new google.maps.LatLng(51.5, -0.12),
            zoom: 10,
            mapTypeId: google.maps.MapTypeId.HYBRID
        }
        var map = new google.maps.Map(document.getElementById("googlemaps"), mapOptions);
}
</script>


<!--Google Maps-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD-Aj0ddzhBaCZTOJRyQi_3MVn01N9yBvs&callback=myMap"></script>
