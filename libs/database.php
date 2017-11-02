<?php
    
    class database{

    	public $host    = DB_HOST;
    	public $user    = DB_USER;
    	public $pass    = DB_PASS;
    	public $db_name = DB_NAME;
        
        public $link;
        public $error;
         
         // Connecting the database
        public function __construct(){
        	$this-> connect();
        }
         
        // Database configuration and connection 
    	private function connect(){
           $this-> link = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
           if (!$this->link) {
           	   $this->error = "Connection failed".$this->link->connect_error;
           }
    	}
        
        // Select a query
    	public function select($query){

              $result = $this->link->query($query);
              if ($result-> num_rows > 0) {
              	return $result;
              }else{
              	return false;
              }
    	}
        
        // Insert a query
    	public function insert($query){

    		$insert = $this->link->query($query);
    		if ($insert) {
    			header('location: index.php?msg= Post Inserted....');
    		}else{
    			echo "Did not insert";
    		}
    	}
        
        // Update a query
    	public function update($query){

    		$update = $this->link->query($query);
    		if ($update) {
    			header('location: index.php?msg= Post Updated....');
    		}else{
    			echo "Did not updated";
    		}
    	}
        
        // Delete a query
    	public function delete($query){

    		$delete = $this->link->query($query);
    		if ($delete) {
    			header('location: index.php?msg= Post Delete....');
    		}else{
    			echo "Did not deleted";
    		}
    	}
    }
?>