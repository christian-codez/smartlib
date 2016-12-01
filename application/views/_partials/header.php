<?php
	 $first_uri   = $this->uri->segment(1);
		 
      $home  = "";
      $about = "";
      $contact= "";
       $library = "";

        if($first_uri  == "" ){

                      $home  = "active";
				      $about = "";
				      $contact= "";
				       $library = "";
        }

        if($first_uri  == "about"){

                      $home  = "";
				      $about = "active";
				      $contact= "";
				       $library = "";
        }

        if($first_uri  == "contact"){

                      $home  = "";
				      $about = "";
				      $contact= "active";
				       $library = "";
        }
        if($first_uri  == "library"){

              $home    = "";
				      $about   = "";
				      $contact = "";
				      $library = "active";
        }

?>

<script type="text/javascript">
	var  url = <?= base_url() ?>
</script>
<header>
	<div class="container">
		<div class="logo">
			<a href="<?= base_url()?>" title=""><img src="<?= imagePath('logo.png') ?>" alt="Logo" /><h1><i>S</i>mart <i>L</i>ibrary</h1></a>
		</div><!-- Logo -->
	<nav class="menu visible-sm visible-xs visible-md visible-lg visible-xl pull-right">
			<ul id="menu-navigation">
				<li class="<?= $home?>"><a href="<?= base_url()?>" title="">Home</a></li>
				<li class="<?= $library?>"><a href="<?= base_url()?>library" title="">Library</a></li>
				<li class="<?= $about?>"><a href="<?= base_url()?>about" title="">About us</a></li>
				<li class="<?= $contact?>"><a href="<?= base_url()?>contact" title="">Contact</a></li>
			</ul>   
		</nav><!-- Menu -->
	</div>		
</header><!--header-->
<div class="top-image">
	<img src="<?= imagePath('library.jpg')?>" alt="" />
</div>