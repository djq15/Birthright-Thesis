<?php 

	//include_once "./assets/objects/References.php";
	
	class Database {
		// Internal Variables
		private $hostname = "";
		private $user = "";
		private $password = "";
		private $database = "";
		
		public $connection = NULL;
		
		//Assign Database Connection Parameters
		public function __construct(){
			$config = parse_ini_file("settings.ini");
			
			$this->hostname = $config["HOSTNAME"];
			$this->user = $config["USER"];
			$this->password = $config["PASSWORD"];
			$this->database = $config["DATABASE"];
		}
		
		//Function that Performs SQL Queries
		public function query($sql){
			$qryObj = array();
			
			try {
				$this->open(); // Open Connection
				
				if($qryObj["query"] = mysqli_query($this->connection, $sql)){
					
					if($qryObj["query"]){	//There are present records
						setResponse($qryObj, "OK", "Records Found!");
						//$qryObj["result"] = $this->get_results($qryObj["query"]);
					} else {
						setResponse($qryObj, "ERROR", "No Records Found!");
					}
				} else {
					setResponse($qryObj, "ERROR", "[MYSQLI QUERY]: " . mysqli_error($this->connection) . PHP_EOL . "SQL QUERY: " . $sql);
				}
				
				$this->close(); // Close Connection
				
			} catch(Exception $e) {
				setResponse($qryObj, "ERROR", $e->getMessage());
			}
			
			return $qryObj;
		}
		
		//Function that returns SQL Query results
		public function get_query_result($sql){
			$qry = $this->query($sql);
			return $this->get_results($qry);
		}
		
		public function get_results($qry){
			$rows = array();
			$count = 0;
			if($qry["STATUS"] == "OK"){
				while($row = $qry["query"]->fetch_assoc())
					$rows[$count++] = $row;	
				mysqli_free_result($qry["query"]);
			}
			return $rows;
		}
		
		//Internal Functions
		private function open(){
			$this->connection = mysqli_connect($this->hostname, $this->user, $this->password, $this->database);
			$this->connection->set_charset('utf8');
					
			if (!$this->connection) {
				echo "Error: Unable to connect to MySQL." . PHP_EOL;
				echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
				echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
				die();
			}
		}
		
		private function close(){
			$this->connection->close();
		}
	}	
	
	function setResponse(&$ResponseArray, $Status, $Message){
		$ResponseArray["STATUS"] = $Status;
		$ResponseArray["MESSAGE"] = $Message;
	}
	
?>