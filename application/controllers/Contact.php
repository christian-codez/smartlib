<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MY_Controller {

	/**
	 * Index Page for this controller.
	 */
	 
	public function index()
	{
		$this->load->view('front/contact');
	}
}