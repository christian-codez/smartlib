 <?php

// defined('BASEPATH') OR exit('No direct script access allowed');

// class Migration_Add_blog extends CI_Migration {

// 	public function __construct ()
// 	{
// 		parent::__construct();
// 	}

// 	public function index ()
// 	{
// 		$this->load->library('migration');
// 		if (! $this->migration->current()) {
// 			show_error($this->migration->error_string());
// 		}
// 		else {
// 			echo 'Migration worked!';
// 		}
	
// 	}

// }



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