<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secured extends MY_Controller {

	/**
	 * Index Page for this controller.
	 */
	 
	public function index()
	{
		$this->data['libraries'] = $this->library->getLibraries();
		$this->data['totalLibraries'] = $this->library->getTotalLibraries();
		$this->load->view('back/index', $this->data);
	}
	
	public function totalLibraries(){
	    
	}
}
