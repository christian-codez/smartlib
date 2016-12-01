<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends MY_Controller {

	/**
	 * 
	 * Index Page for this controller.
	 * 
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
		
	
		if(!empty($this->uri->segment(3))){
		   $name       =  urldecode($this->uri->segment(3));
	        $source     = $this->uri->segment(4);
		}else {
			$name       =  trim($_POST["name"]);
	    	$source     =  trim($_POST["source"]);
		}
		
	    $this->data['libinfo'] = $this->library->getLibrary($name);
	    $this->data['libraries'] = $this->library->getLibraries();
	    if($source == "1"  ){
	       $this->load->view('front/library', $this->data);
	    }else{
	    	redirect("welcome");
	    }
	}
	public function librariesAPISetup()
	{
		//load all libraries by calling the Library model.
		$this->data['librariessetup'] = $this->library->getLibrariesAPISetup();
		
	    echo $this->data['librariessetup'];
	
		//$this->load->view('front/libraries', $this->data);
	}
	
		public function save()
	{

		echo $this->library->save();
	}
	
	
	public function setLatLng(){
		
		$lat = $_POST['lat'];
		$lng = $_POST['lng'];
		
		
		$newdata = array(
	        'lat'  => $lat,
			'lng'     => $lng
		);
		
		echo $lat." and ".$lng;
		$this->session->set_userdata($newdata);
		
	//	$this->library->saveLatLng($lat, $lng);
		
	}
	
	public function editLibrary(){
		
		
		
		//$this->session->set_userdata($newdata);
		
		$this->library->editLib();
		
	}
	

}
