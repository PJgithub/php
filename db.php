<?php 

class db{

	private $db = array();
	private $connection;

	public function db($arraydata = array()){
		//forbindelses data til databasen
		$this->db['server'] = $arraydata['server'];
		$this->db['username'] = $arraydata['username'];
		$this->db['password'] = $arraydata['password'];
		$this->db['database'] = $arraydata['database'];
	} 
	public function connect(){
		$this->connection = mysqli_connect($this->db["server"],$this->db["username"],$this->db["password"]); 
		$this->select_db();
	} 
	public function select_db(){
		//select database vi skal arbejde i
		mysqli_select_db($this->connection, $this->db["database"]);
	} 
	public function isConnected(){
		return ($this->connection) ? "OK" : "Fejl";
	} 
	public function query($sql){
		return $this->connection->query($sql);
	}
}

?>