 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
*The migration class for handling basic database creation tasks.
*/
class Migration extends CI_Controller
{

        public function index()
        {
                $this->load->library('migration');

                if ($this->migration->current() === FALSE)
                {
                        show_error($this->migration->error_string());
                        
                }else {
			echo 'Migration worked!';
		}
        }

}