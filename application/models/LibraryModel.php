<?php
class  LibraryModel extends CI_Model {
	
	
		private $_table    = "libraries";

	    public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }
        
        public function getLibraries(){
            
             $query = $this->db->query(" SELECT * FROM $this->_table ORDER BY 'library' ASC");
             
             if($query->num_rows() > 0){
                 return $query->result_array();
                 
             }else{
                 
                 return false;
                 
             }
            
        }
        
        public function getLibrariesAPISetup(){
             
             $locations = "";
             $query = $this->db->query(" SELECT * FROM $this->_table ORDER BY 'library' ASC");
             
             if($query->num_rows() > 0){
                
                $locations.=" [\n";
                //$locations.=" [\n";

                foreach ($query->result_array() as $result) {
                         $locations .= "['".$result['library']."',".$result['x'].",". $result['y']."],\n";
                }
                 $locations.="\n]";
                 return $locations;
                 
             }else{
                 
                 return false;
                 
             }
	        
	}
}