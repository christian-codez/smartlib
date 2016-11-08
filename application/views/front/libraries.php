
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Life Line</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,900italic,700italic,900,700,500italic,500,400italic,300italic,300,100italic,100|Open+Sans:400,300,400italic,300italic,600,600italic,700italic,700,800|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700' rel='stylesheet' type='text/css'>


<!-- Styles -->
<link href="<?= cssPath("bootstrap.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= fontPath("css/font-awesome.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= cssPath("style.css") ?>" rel="stylesheet" type="text/css" />
<link href="<?= cssPath("responsive.css") ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?= layersliderPath("css/layerslider.css") ?>" type="text/css">
<link rel="icon" type="image/png" sizes="16x16" href="<?= imagePath("favicon.png"); ?>">




<link href="<?= cssPath("contact.css") ?>" rel="stylesheet" type="text/css" /> <!-- AJAX Contact Form Stylesheet -->
	<!-- Scripts -->
		<script src="<?= jsPath("jquery.1.9.1.js") ?>" type="text/javascript"></script>
		<script src='<?= jsPath("testimonials.js") ?>'></script>
		<script src="<?= jsPath("jquery.carouFredSel-6.2.1-packed.js") ?>" type="text/javascript"></script>
		<script src='<?= jsPath("script.js") ?>'></script>
		<script src='<?= jsPath("bootstrap.js") ?>'></script>
		<script src="<?= jsPath("html5lightbox.js") ?>"></script>
		<script src="<?= jsPath("jquery.countdown.js") ?>"></script>
		<script type="text/javascript" src="<?= jsPath("jquery.jigowatt.js") ?>"></script><!-- AJAX Form Submit -->
		<script defer src="<?= jsPath("jquery.flexslider.js") ?>"></script>
		<script defer src="<?= jsPath("jquery.mousewheel.js") ?>"></script>
		<script defer src="<?= jsPath("myjs/testing.js") ?>"></script>
</head>
<body>
<div class="theme-layout">

<div id="top-bar">
	<div class="container">
		<ul>
			<li>
				<i class="icon-home"></i>
				425 Street Name, UK, London
			</li>
			<li>
				<i class="icon-phone"></i>
				(123) 456-7890
			</li>
			<li>
				<i class="icon-envelope"></i>
				contact@companymail.com
			</li>
		</ul> 
		<div class="search-box">
			<input class="submit-button" type="submit" value="" >
			<input class="search-input" type="text" onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value='';"  value="Search">
		</div>
	</div>
</div><!--top bar-->

<?php $this->load->view("_partials/header");?>



	
<section class="page switch" >
	<div class="container" style="width: 100%; height: auto; margin: 0px auto; min-height:420px;">
		<div class="page-title">
			<h1><span>Libraries</span></h1>
		</div><!-- Page Title -->
		<div class="row">


		    <div class="row">	
                	<div class="sidebar col-md-4">
                				<div class="sidebar-widget">
                					<div class="sidebar-search">
                						<input class="search" type="text" placeholder="Enter location or Address" />
                						<input class="search-button" type="submit" value="" />
                					</div>
                				</div><!-- Sidebar Search -->
                		<div class="sidebar-widget">
                			<ul class="sidebar-list">
                			 <?php foreach ($libraries as $lib): ?>
        						<li><a href="javascript:;" url="<?= $lib['url']?>" title=""><b><?= $lib['library']?></b></a></li>
        				     <?php endforeach ; ?>
        					</ul>
                		</div>
                    </div>
                    <div class="col-md-8">
					  <div id="map" style="width:100%;height:500px"></div>
					  <div id="mapdata" style="width:100%;height:500px">map data</div>

			        </div>
		</div>
	</div>

</section>
</div>
 
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>


<script>
	var locations;
	var data;	
    // Define your locations: HTML content for the info window, latitude, longitude
	 $.ajax({
                  type    : "POST",
                  url     :  "https://smartlibrary-e1cerebro.c9users.io/library/librariesAPISetup",
                  success : callback,
                  error   : err
                });

                function callback(d, status)
                { 
                     data =d;
                     $('#mapdata').text(data);
                }
                function err(xhr, reason,ex ){
                  alert('there was an error in your code.'+ ex);
                }
    //make an API call and get all the library information that u need
 var locations = [
						['Bridgeview Library',-83.05012007,42.29699177],
						['Windsor Community Museum ',-83.04243349 ,42.31851448 ],
						['Remington Park Neighbourhood Library ',-83.00621559 ,42.28491598 ],
						['Seminole Community Library ',-82.97930053 ,42.31697264 ],
						['Nikola Budimir Memorial Resource Library ',-83.02671616 ,42.26829665 ],
						['Riverside Resource Library ',-82.96090294 ,42.32979447 ],
						['Forest Glade - Optimist Library ',-82.91584705 ,42.3030678 ],
						['Sandwich Library ',-83.07789316 ,42.29965953 ],
						['Central Resource Library ',-83.03431 ,42.31127001 ],
						['Fontainbleau Library ',-82.95323669 ,42.29525096 ],
					];
 /*     var locations = [
      ['<h4>Bondi Beach</h4>', -33.890542, 151.274856],
      ['<h4>Coogee Beach</h4>', -33.923036, 151.259052],
      ['<h4>Cronulla Beach</h4>', -34.028249, 151.157507],
      ['<h4>Manly Beach</h4>', -33.80010128657071, 151.28747820854187],
      ['<h4>Maroubra Beach</h4>', -33.950198, 151.259302]
    ];*/
    
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
      maxWidth: 160
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
        return function() {
          infowindow.setContent(locations[i][0]);
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
  </script> 

<?php $this->load->view("_partials/footer");?>


</body>
</html>
