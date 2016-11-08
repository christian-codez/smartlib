<?php
class MY_Controller extends CI_Controller
{

	public $data = array();
	public $ci;

	function __construct()
	{
		   parent::__construct();
		   
           $this->ci =&get_instance();
		   $this->data['ci'] = $this->ci;
		    
		   //setting the site name        
		   $this->data['site_name'] = "Smart Library System";
		   
		   //Loading all the necessary models for the application
		   $this->load->model('LibraryModel','library');
		   	
			

	}




	



}