var locations;
	var data;	
    // Define your locations: HTML content for the info window, latitude, longitude
	        $.ajax({
                  type    : "POST",
                  url     :  "https://smartlib-e1cerebro.c9users.io/library/librariesAPISetup",
                  success : callback,
                  error   : err
                });

                function callback(d, status)
                { 


                }
                function err(xhr, reason,ex ){
                  alert('there was an error in your code.'+ ex);
                }
                
                
    //make an API call and get all the library information that u need

   locations =  [
                     ['Bridgeview Library',-83.05012007,42.29699177],
                     ['Windsor Community Museum',-83.04243349,42.31851448],
                     ['Remington Park Neighbourhood Library',-83.00621559,42.28491598],
                     ['Seminole Community Library',-82.97930053,42.31697264],
                     ['Nikola Budimir Memorial Resource Library',-83.02671616,42.26829665],
                     ['Forest Glade - Optimist Library',-82.91584705,42.3030678],
                     ['Sandwich Library',-83.07789316,42.29965953],
                     ['Central Resource Library',-83.0343100035999,42.3112700129999],
                     ['Fontainbleau Library',-82.95323669,42.29525096],
                 ];

    // Setup the different icons and shadows
    var iconURLPrefix = 'http://maps.google.com/mapfiles/ms/icons/';
    
    var icons = [
      iconURLPrefix + 'red-dot.png',
      iconURLPrefix + 'green-dot.png',
      iconURLPrefix + 'blue-dot.png',
      iconURLPrefix + 'orange-dot.png',
      iconURLPrefix + 'purple-dot.png',
      iconURLPrefix + 'pink-dot.png',      
      iconURLPrefix + 'yellow-dot.png'
    ]
    var iconsLength = icons.length;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 24,
      center: new google.maps.LatLng(42.31697264, -82.97930053 ),
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      mapTypeControl: true,
      streetViewControl: true,
      panControl: true,
      zoomControlOptions: {
         position: google.maps.ControlPosition.RIGHT_BOTTOM
      }
    });

    var infowindow = new google.maps.InfoWindow({
      maxWidth: 250
    });

    var markers = new Array();
    
    var iconCounter = 0;
    
    // Add the markers and infowindows to the map
    for (var i = 0; i < locations.length; i++) {  
      var marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][2], locations[i][1]),
        map: map,
        icon: icons[iconCounter]
      });

      markers.push(marker);
      
      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        var link = "<a href='https://smartlib-e1cerebro.c9users.io/library/singlelibrary/"+locations[i][0]+"/1'>"+locations[i][0]+"</a>";
        return function() {
          infowindow.setContent(link);
          var pos = map.getZoom();
		  map.setZoom(30);
		  map.setCenter(marker.getPosition());
          window.setTimeout(function() {map.setZoom(pos);},3000);
          infowindow.open(map, marker);
        }
      })(marker, i));
      
      iconCounter++;
      // We only have a limited number of possible icon colors, so we may have to restart the counter
      if(iconCounter >= iconsLength) {
      	iconCounter = 0;
      }
    }

    function autoCenter() {
      //  Create a new viewpoint bound
      var bounds = new google.maps.LatLngBounds();
      //  Go through each...
      for (var i = 0; i < markers.length; i++) {  
				bounds.extend(markers[i].position);
      }
      //  Fit these bounds to the map
      map.fitBounds(bounds);
    }
    autoCenter();