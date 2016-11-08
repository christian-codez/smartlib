<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller {

	/**
	 * Index Page for this controller.
	 */
	 
	public function index()
	{
		//load all libraries by calling the library model.
		$this->data['libraries'] = $this->library->getLibraries();
		$this->data['librariessetup'] = $this->library->getLibrariesAPISetup();
		
		$this->load->view('front/libraries', $this->data);
	}
    public function singlelibrary()
	{
		//load all libraries by calling the library model.
		$this->data['libraries'] = $this->library->getLibraries();
		$this->data['librariessetup'] = $this->library->getLibrariesAPISetup();
		
		$this->load->view('front/library', $this->data);
	}
	public function librariesAPISetup()
	{
		

		//load all libraries by calling the Library model.
		$this->data['librariessetup'] = $this->library->getLibrariesAPISetup();
		
	    echo $this->data['librariessetup'];
	
		//$this->load->view('front/libraries', $this->data);
	}
	
	
}
