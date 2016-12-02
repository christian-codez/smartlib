

		$(window).load(function(){
			
			if (typeof(Storage) !== "undefined") {
			
							getLocation();
			
			}
		
			
			
			
			
		});
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
	
    var latlon = position.coords.latitude + "," + position.coords.longitude;
     x.innerHTML = "User accepted the request for Geolocation."
    
    saveLatlng(position.coords.latitude,  position.coords.longitude);
}

function saveLatlng(lat, lng){
	 $.ajax({
                  type    : "POST",
                  url     :  "https://smartlib-e1cerebro.c9users.io/library/setLatLng",
                  data    : {lat:lat, lng:lng},
                  success : callback,
                  error   : err
                });

                function callback(d, status)
                { 

                }
                function err(xhr, reason,ex ){
                  $("#info").text('there was an error in your code.'+ ex);
                }
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied the request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
    }
}


	$("#search").click(function(){
		var name = $("#name").val();
		if(name.length < 1){
			
			    $("#info").text("Please enter a library name").delay(2000).fadeOut(2000);
				return false;
		}
	
		
	});
