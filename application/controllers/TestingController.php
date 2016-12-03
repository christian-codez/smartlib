<?php

/* The testing class was used to run series of test on the methods that were 
*  used in the mode and checked againast expected results and unexpected results
*/
    class TestingController  extends MY_Controller {

          //Caling the parent constructor.
        	function __construct(){
            		parent::__construct();
                    $this->load->library("unit_test");
                
        
        	}
        	
    //Testing if a libraries were returned.
    public function index(){
        
          $this->unit->run($this->library->getLibraries(), is_array,"Testing get library");
          $this->unit->run($this->library->getLibrary("Bridgeview Library"), is_array,"Testing for a specific library e.g Bridgeview Library");
          $this->unit->run($this->library->getLibrary(1), is_array,"Testing for a specific library e.g using an integer as a name example 1");
          $this->unit->run($this->library->getTotalLibraries(), is_int,"Testing total libraries returned by the API");
          $this->unit->run($this->library->getTotalLibraries(), is_string,"Testing total libraries returned by the API");
          $this->unit->run($this->library->getX("Bridgeview Library"), is_int,"Testing the Get latitude function and expecting an int");
          $this->unit->run($this->library->getX("Bridgeview Library"), is_string,"Testing the Get latitude function and expecting a string");
          $this->unit->run($this->library->getX("Bridgeview Library"), is_array,"Testing the Get latitude function and expecting an array");
          $this->load->view("front/testing");
          
    }
    
    
    
     
}
