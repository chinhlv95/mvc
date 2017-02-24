<?php

namespace MVC\Model;
use \PDO;
/**
* Use PDO
*/
class PDOData
{
	private $db = null;

	function __construct($username, $password) {
		try {
			$servelName = "localhost";
			$databaseName = "co_well";
			$this->db = new PDO("mysql:dbname=$databaseName;host=$servelName", $username, $password);
		} catch(PDOException $ex) {
			echo 'Connection failed: ' . $ex->getMessage();
		}
	}

	function selectData($query) {
		$response = array();
		try {
			$stmt = $this->db->query($query);
			if ($stmt) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $response[] = $row;
                }
            }
        } catch(PDOException $ex) {	
        	echo $ex->getMessage(); 
        }

        return $response;
	}

	function executeData($exec) {
		try {
			$this->db->exec($exec);
		}
		catch(PDOException $e){
	    echo $e->getMessage();
	    }
	}

	function __destruct() {
		try{
            $this->database=null;
        }
        catch(PDOException $ex){
            echo $ex->getMessage();
        }
	}
}