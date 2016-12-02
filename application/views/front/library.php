<?php

             $library = "";
             $url     = "";
             $address = "";
             $x       = "";
             $y       = "";
        
            foreach ($libinfo as $info){
               $library = $info['library'];
               $url     = $info['url'];
               $address = $info['address'];
               $x       = $info['x'];
               $y       = $info['y'];
               
             
            }

   ?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SmartLib | <?= $library?></title>
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
<link href="<?= cssPath("contact.css") ?>" rel="stylesheet" type="text/css" /> 
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
    <!--top header-->
  
    <!--/top header-->
    <?php $this->load->view("_partials/header");?>
     <section class="page switch" >
             <div class="container" style="width: 100%; height: auto; margin: 0px auto; min-height:420px;">
                  <div class="page-title">
                     <h1><span>Libraries</span></h1>
                 </div><!-- Page Title -->
                 
                 <div class="row">
                    
                    <?php $this->load->view("_partials/librarysidebar.php"); ?>
                    
                    <!--col 2-->
                       <div class="col-md-8">
                           
                            <?php  if(empty($library)):  ?>
                                  
                             <h3 class="text-danger text-center">Oops, Library was not found!</h3>
                                          
                             <?php else: ?>
                                    <span class="hidden" id="x"><?= $x?></span>
                                        <span class="hidden" id="y"><?= $y?></span>
                                        <div class="contact-info">
                                            <h3 class="sub-head"><?= strtoupper($library) ?> <span ><input class="cart-btn" type="button" id="routebtn" value="Show route" /></span></h3>
                                            <br/></M><div id="map" style="width:100%;height:500px"></div>
                                                <ul class="contact-details">
                                                <li>
                                                   <div class="well">
                                                      <span><i class="icon-home"></i>ADDRESS</span>
                                                      
                                                      <span class="hidden" id="lat"><?= $_SESSION['lat']?></span>
                                                      <span class="hidden" id="lng"><?= $_SESSION['lng']?></span>
                                                    </div>
                                                      <h4><?= $address ?></h4>
                                                  
                                                </li>
                                                <li>
                                                  <div class="well">
                                                    <span><i class="icon-link"></i>WEB ADDRESS</span>
                                                  </div>
                                                    <h4>Click <a href="<?= $url ?>"> here </a> to get <?= $library ?> operating hours</h4>
                                                  
                                                </li>
                                                
                                            </ul>
                                        </div>
                   
                             <?php endif;?>
                       </div>  <!-- Contact Info -->
                    <!--/ col 2-->
                  
                  
                 </div>
              
              
              </div>
     </section>

</div>
	<?php $this->load->view("_partials/footer");?>


<script src="https://maps.googleapis.com/maps/api/js"></script>

<div id="map-canvas"></div>
<script src="<?= base_url() ?>resources/js/myjs/map.js" type="text/javascript"></script>

</body>
</html>

