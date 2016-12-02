<?php
/*
*This is the controller class that loads the web page
*/
 
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MY_Controller {

	public function index()
	
	 { 
		 //Loads the about.php file
			$this->load->view('front/about');
	}
	
}
