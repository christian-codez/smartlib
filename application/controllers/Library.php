<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*This page handles the all the requests that are related to the libraries
* It is a controller for the Libraries.
*/
class Library extends MY_Controller {

  //Caling the parent constructor.
	function __construct(){

		parent::__construct();

	}
	
	/**
	 * 
	 * Index Page for this controller.
	 * 
	 */
	public function index()
	{
		//load all libraries by calling the library model.
		$this->data['libraries'] = $this->library->getLibraries();
		
     //Loads the library API set-up
		$this->data['librariessetup'] = $this->library->getLibrariesAPISetup();
		
     //Load the library.php page		
		$this->load->view('front/libraries', $this->data);
		
	}
	
 //Loads the sinlge library	
    public function singlelibrary()
	{
		//load all libraries by calling the library model.
		$this->data['libraries'] = $this->library->getLibraries();
	
	  //Loads the library API set-up.
		$this->data['librariessetup'] = $this->library->getLibrariesAPISetup();
		
   //gets the user search and determine if the request is coming from a form or a URI	
		if(!empty($this->uri->segment(3))){
		    $name       =  urldecode($this->uri->segment(3));
	        $source     = $this->uri->segment(4);
		}else {
			$name       =  trim($_POST["name"]);
	    	$source     =  trim($_POST["source"]);
		}

    //Gets the library information		
	    $this->data['libinfo'] = $this->library->getLibrary($name);
   
   //Gets all the libraries information	    
	    $this->data['libraries'] = $this->library->getLibraries();
	    
   //checks if the request is a valid request	    
	    if($source == "1"){
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
