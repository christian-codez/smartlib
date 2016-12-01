
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us | Smart Library</title>
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

	<?php $this->load->view("_partials/header");?>

		

<section class="page switch" >
	<div class="container" style="width: 100%; height: auto; margin: 0px auto; min-height:420px;">
		<div class="page-title">
			<h1>Contact<span> Us</span></h1>
		</div><!-- Page Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="contact-info">
					<h3 class="sub-head">CONTACT INFORMATION</h3>
					<p>Below is our contact information.</p>
					<ul class="contact-details">
						<li>
							<span><i class="icon-home"></i>ADDRESS</span>
							<p>University of windsor, group 20 (Advanced software engineering topics)</p>
						</li>
						<li>
							<span><i class="icon-phone-sign"></i>PHONE NO</span>
							<p>Not availbale</p>
						</li>
						<li>
							<span><i class="icon-envelope-alt"></i>EMAIL ID</span>
							<p>smartLib@gmail.com</p>
						</li>
						<li>
							<span><i class="icon-link"></i>WEB ADDRESS</span>
							<p>https://smartlib-e1cerebro.c9users.io/</p>
						</li>
					</ul>
				</div>
			</div>	<!-- Contact Info -->
			<div class="col-md-6 pull-right">
				<div id="message"></div>
				<div class="form">
					<h3 class="sub-head">CONTACT US BY MESSAGE</h3>
					<p>we love to hear from you. <span>*</span></p>
					
					<form method="post"  action="#" name="contactform" id="contactform">
					    <strong><p id="infoM" class="text-center text-danger"></p></strong>
						<label for="name" accesskey="U">Full name <span>*</span></label>
						<input name="name" id="name" required = "required" class="form-control input-field" type="text" id="name" size="30" value="" />
						<label for="email"  accesskey="E">Email Address <span>*</span></label>
						<input name="email" id="email" required = "required" class="form-control input-field" type="email" id="email" size="30" value="" />
						<label for="comments" accesskey="C">Message <span>*</span></label>
						<textarea name="comments" required = "required" rows="9" id="comments" rows="7" class="form-control input-field"></textarea>
						<input type="button" class="form-button submit" id="submit" value="SEND MESSAGE" />
					</form>
				
				</div>
			</div>	<!-- Message Form -->
		</div>	
	</div>	
		

	</div>

</section>

</div>


<?php $this->load->view("_partials/footer");?>
<script src="<?= base_url() ?>resources/js/myjs/contact.js" type="text/javascript"></script>


</body>
</html>
