<div id="map">rryryryr</div>
<script>
  (function(){
window.onload =function(){
    
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();

directionsDisplay = new google.maps.DirectionsRenderer();

    var mapDiv = document.getElementById('map');
    var latlng = new google.maps.LatLng(42.31851448,-83.04243349);
    var options ={
        center:latlng,
        zoom:18,
        mapTypeId:google.maps.MapTypeId.ROADMAP

    };

    var map= new google.maps.Map(document.getElementById('map'),options);
     directionsDisplay.setMap(map);

      var marker = new google.maps.Marker({
    position: new google.maps.LatLng(42.31851448,-83.04243349),
  map: map,
  title: 'Click me'
   });

    var infowindow = new google.maps.InfoWindow({
  content: "yes"
   });

    google.maps.event.addListener(marker, 'click', function() {
  // Calling the open method of the infoWindow
  infowindow.open(map, marker);
});


 var start = ( 42.31851448,-83.04243349);
 var end = "42.29699177,-83.05012007";
 var request = {
origin:start,
destination:end,
travelMode: google.maps.TravelMode.DRIVING
  };
    directionsService.route(request, function(result, status) {
    if (status == google.maps.DirectionsStatus.OK) {
  directionsDisplay.setDirections(result);
    }
    });



    };
   })();
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

</body>
</html>