
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome | Smart Library</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



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

<!--[if lt IE 9]>
<link rel="stylesheet" type="text/css" href="css/ie.css" />
<script type="text/javascript" language="javascript" src="js/html5shiv.js"></script>
<![endif]-->


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


<!-- Scripts For Layer Slider  -->
<script src="<?= layersliderPath("JQuery/jquery-easing-1.3.js") ?>" type="text/javascript"></script>
<script src="<?= layersliderPath("JQuery/jquery-easing-1.3.js") ?>" type="text/javascript"></script>
<script src="<?= layersliderPath("js/layerslider.transitions.js") ?>" type="text/javascript"></script>
<script src="<?= layersliderPath("js/layerslider.kreaturamedia.jquery.js") ?>" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('#layerslider').layerSlider({
			skinsPath : base_url()+'resources/layerslider/skins/',
			skin : 'defaultskin',
			responsive: true,
			responsiveUnder: 1200,			
			pauseOnHover: false,
			showCircleTimer: false,
			navStartStop:false,
			navButtons:false,
		}); // LAYER SLIDER
		
	});		
</script>		
<script>
$(window).load(function(){
  $('.causes-carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	controlNav: false,	
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
  $('.footer_carousel').flexslider({
	animation: "slide",
	animationLoop: false,
	slideShow:false,
	controlNav: true,	
    maxItems: 1,
	pausePlay: false,
	mousewheel:true,
	start: function(slider){
	  $('body').removeClass('loading');
	}
	});
	
});		
</script>
<script>
$(window).load(function(){
	
});		
</script>
	

</head><!-- Head -->

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
	<div class="container">
		<div class="page-title">
			<h1>Welcome<span> Back</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			
			<div class="col-md-5 col-sm-12">
				<div class="footer-widget-title">
					<h4><strong><span>Features</span></strong></h4>
				</div>
				<div class="footer_carousel">
					<ul class="slides">
						<li>
							<div class="review">
								<i>L</i><p class="text-justify"><span>orem</span> 
							     	ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
									quis nostrud exerci tation ullamcorper suscipit lobortis nisl
									ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
									dolor in hendrerit in vulputate velit esse molestie consequat,
									vel illum dolore eu feugiat nulla facilisis at vero eros et
									accumsan et iusto odio dignissim qui blandit praesent luptatum
									zzril delenit augue duis dolore te feugait nulla facilisi.
									Nam liber tempor cum soluta nobis eleifend option congue
									nihil imperdiet doming id quod mazim placerat facer possim
									assum. Typi non habent claritatem insitam; est usus legentis
									in iis qui facit eorum claritatem. Investigationes
									demonstraverunt lectores legere me lius quod ii legunt saepius.
									Claritas est etiam processus dynamicus, qui sequitur mutationem
									consuetudium lectorum. Mirum est notare quam littera gothica,
									quam nunc putamus parum claram, anteposuerit litterarum formas
									humanitatis per seacula quarta decima et quinta decima. Eodem
									modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
									in futurum.
								</p>
							</div>						
							<div class="from">
								<h6>Admin Name</h6>
								<span>Post</span>
							</div>
						</li>
						<li>
							<div class="review text-justify">
								<span>L</span><p><span>orem</span> 
							     	ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
									quis nostrud exerci tation ullamcorper suscipit lobortis nisl
									ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
									dolor in hendrerit in vulputate velit esse molestie consequat,
									vel illum dolore eu feugiat nulla facilisis at vero eros et
									accumsan et iusto odio dignissim qui blandit praesent luptatum
									zzril delenit augue duis dolore te feugait nulla facilisi.
									Nam liber tempor cum soluta nobis eleifend option congue
									nihil imperdiet doming id quod mazim placerat facer possim
									assum. Typi non habent claritatem insitam; est usus legentis
									in iis qui facit eorum claritatem. Investigationes
									demonstraverunt lectores legere me lius quod ii legunt saepius.
									Claritas est etiam processus dynamicus, qui sequitur mutationem
									consuetudium lectorum. Mirum est notare quam littera gothica,
									quam nunc putamus parum claram, anteposuerit litterarum formas
									humanitatis per seacula quarta decima et quinta decima. Eodem
									modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
									in futurum.
								</p>
							</div>						
							<div class="from">
								<h6>Admin name</h6>
								<span>Post</span>
							</div>
						</li>
					</ul>
				</div>
			</div><!-- Reviews Widget -->
			<div class="col-md-1 col-sm-12"></div>
			<div class="col-md-6 col-sm-12">
				<div class="row">
					<div class="sec-title">
				    	<h1><span style="color:#fff;"></span><span>Welcome,</span></h1>
			     	</div>
			     	
				</div>
				<div class="row">
				    <strong><p class="text-success">Click <a href="<?= base_url()?>library">here</a> to view all the libraries</p></strong>
					<form method="post"  action="<?= base_url()?>/library/singlelibrary">
						<input name="name" class="form-control input-lg" placeholder="Enter your search keyword..." type="text" id="name" size="30" value="" /><br/>
					    <input type="submit" class="form-button pull-right " value="Search" />
					</form>
				</div>
				<div class="row" id="demo">
					<br>
					<div id="mapholder"></div>
				</div>

				</div>
				
			</div><!-- Flickr Widget -->
		</div>
		
	</div>

</section>

</div>


	<?php $this->load->view("_partials/footer");?>


</script> 
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script>
		$(window).load(function(){
			
			getLocation();
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

    var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
    +latlon+"&zoom=14&size=600x300&sensor=false";
    document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
    
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
</script>
</body>
</html>
