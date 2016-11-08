   <?php
class Migration_Create_database extends CI_Migration {

	public function up()
	{
    	if ($this->dbforge->create_database('smartLib'))
        {
                echo 'Database created!';
        }else{
            echo "could not create the database";
        }
	}

	public function down()
	{
		if ($this->dbforge->drop_database('smartLib'))
        {
                echo 'Database deleted!';
        }else{
            echo "could not drop the database";
        }
	}
} 
   
    
    