
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Libraries | Smart Library</title>
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



<?php $this->load->view("_partials/header");?>



	
<section class="page switch" >
	<div class="container" style="width: 100%; height: auto; margin: 0px auto; min-height:420px;">
		<div class="page-title">
			<h1><span>Libraries</span></h1>
		</div><!-- Page Title -->
		<div class="row">


		    <div class="row">	
        <?php $this->load->view("_partials/librarysidebar.php"); ?>   	
        <div class="col-md-8">
					  <div id="map" style="width:100%;height:500px"></div>
					  <div id="mapdata" style="width:100%;height:500px"></div>
			 </div>
		</div>
	</div>

</section>
</div>
 
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>

<script src="<?= base_url() ?>resources/js/myjs/allmaps.js" type="text/javascript"></script>


<?php $this->load->view("_partials/footer");?>


</body>
</html>
