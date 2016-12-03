<?php

/*
* 
*/
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
        
        
        public function getLibrary($name){
            
             $query = $this->db->query(" SELECT * FROM $this->_table WHERE library = '$name'");
             
             if($query->num_rows() > 0){
                 return $query->result_array();
                 
             }else{
                 
                 return false;
                 
             }
            
        }
        
        public function getTotalLibraries(){
            
             $query = $this->db->query(" SELECT * FROM $this->_table");
             
             return $query->num_rows();
            
        }
        
        public function getLibrariesAPISetup(){
             
             $locations = "";
             $query = $this->db->query(" SELECT * FROM $this->_table ORDER BY 'library' ASC");
             
             if($query->num_rows() > 0){
                
                $locations.=" [";

                        foreach ($query->result_array() as $result) {
                                 $locations .= "['".trim($result['library'])."',".trim($result['x']).",". trim($result['y'])."],";
                        }
                 $locations.="]";
                 //return json_encode($locations);
                 return trim($locations, '"');
                 
             }else{
                 
                 return false;
                 
             }
	        
	}
	
	
	
	public function getX($name){
	
           $libName = trim($name);
           
           $this->db->where('library',$libName);
           $query = $this->db->get($this->_table);
    		
    		if ($query->num_rows() > 0)
    		{
    		        $row = $query->row_array();
    
    		        return $row['address'];
    
    		}
           
    }
        
        
      //saveLatLng($lat, $lng)  
      
 public function saveLatLng($lat, $lng) {
       $args = array(

						'lat'     => trim($lat),
						'lng'     => trim($lng),
					);

			       $saved = $this->db->insert(' latlng',$args);

			       if($saved){

			       	   echo "Saved";

			       }else {

                    echo "Not saved";
			       }
   }
   public function save(){
       $args = array(

						'library'     => trim('Fontainbleau Library'),
						'address'     => trim('3030 Rivard Ave'),
						'url'         => trim('http://www.windsorpubliclibrary.com/branches/fontainebleau/hours.php'),
						'x'           => trim('-82.95323669'),
						'y'           => trim('42.29525096'),
		
					);

			       $saved = $this->db->insert($this->_table,$args);

			       if($saved){

			       	   echo "Saved";

			       }else {

                    echo "Not saved";
			       }
   }
   
   
   
    public function editLib(){
        
        
                    $name    = $_POST['name'];
                	$url     = $_POST['url'];
                	$address = $_POST['address'];
                	$lat     = $_POST['lat'];
                	$long    = $_POST['long'];
                	$id      = $_POST['id'];
                		
            	   $this->db->where('id =',$id);
            	   $args= array(
            	        'library'  => $name,
            			'url'      => $url,
            			'address'  => $address,
            			'x'        => $lat,
            			'y'        => $long

            		);
			       $saved = $this->db->update($this->_table,$args);

			       if($saved){

			       	   echo "edited";

			       }else {

                    echo "Not edited";
                    
			       }
   }
}