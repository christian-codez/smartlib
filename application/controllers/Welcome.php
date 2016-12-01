<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	/**
	 * Index Page for this controller.
	 */
	 
	public function index()
	{
			$this->data['libraries'] = $this->library->getLibraries();
		$this->load->view('front/index', $this->data);
	}
}
