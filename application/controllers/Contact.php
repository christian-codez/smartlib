<?php
/*
* this is the controller class that loads the contact us page
*/
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	/**
	 * Index method for this controller.
	 */
	 
	public function index()
	{
		//loads the contact us page
		$this->load->view('front/contact');
	}
}
