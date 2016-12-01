function mapLocation() {
 
     var x   = $("#x").text();
     var y   = $("#y").text();
     var lat = $("#lat").text();
     var lng = $("#lng").text();
  
     if(lat.length > 50 || lng.length > 50){
         
         $("#routebtn").hide();
         
     }else{
         
          $("#routebtn").show();
     }


  var directionsDisplay;
  var directionsService = new google.maps.DirectionsService();
  var map;

  function initialize() {
    directionsDisplay = new google.maps.DirectionsRenderer();
    var chicago = new google.maps.LatLng(y,x);
    var mapOptions = {
      zoom: 20,
      center: chicago
    };
    map = new google.maps.Map(document.getElementById('map'), mapOptions);
    var marker = new google.maps.Marker({position:chicago,animation: google.maps.Animation.BOUNCE});
    marker.setMap(map);
    directionsDisplay.setMap(map);
    google.maps.event.addDomListener(document.getElementById('routebtn'), 'click', calcRoute);
  }

  function calcRoute() {
    var start = new google.maps.LatLng(lat,lng);
    var end = new google.maps.LatLng(y, x);
    var request = {
      origin: start,
      destination: end,
      travelMode: google.maps.TravelMode.DRIVING
    };
    directionsService.route(request, function(response, status) {
      if (status == google.maps.DirectionsStatus.OK) {
        directionsDisplay.setDirections(response);
        directionsDisplay.setMap(map);
      } else {
        alert("Directions Request from " + start.toUrlValue(6) + " to " + end.toUrlValue(6) + " failed: " + status);
      }
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
}
mapLocation();