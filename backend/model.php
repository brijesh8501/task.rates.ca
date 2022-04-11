<?php

class Model{

    private $server = 'localhost';
    private $username = 'root';
    private $password;
    private $db = 'ratesca_task';
    private $conn;

    public function __construct(){
        
        try{

            $this->conn = new mysqli( $this->server, $this->username, $this->password, $this->db);

        } catch (Exception $e){

            echo "connection failed".$e->getMessage();

        }

    }

    public function select_all($tablename){

        $list_query = "SELECT * from $tablename";
        $result = $this->conn->query( $list_query);
        $data = $result->fetch_all(MYSQLI_ASSOC);

        if($result->num_rows === 0){

            return 0;

        }else{

            return $data;

        }
        $this->conn->close();

    }
    // insert
    public function insert($insert_array, $insert_array_constraint, $tablename){

        $insert_key = array_keys($insert_array);
        $insert_val = array_values($insert_array);

        $insert_constraint_val = array_values($insert_array_constraint);
        
        
        $insert_query = "INSERT INTO $tablename (" . implode(', ', $insert_key) . ") ". "VALUES (" . substr(str_repeat('?,', count($insert_val)), 0, -1) . ")";
        //echo "INSERT INTO $tablename (" . implode(', ', $insert_key) . ") ". "VALUES ('" . implode('\',\' ', $insert_val) . "')";
        $stmt = $this->conn->prepare($insert_query);
        $types = implode("",$insert_constraint_val);
        $stmt->bind_param($types, ...$insert_val);
        if($stmt->execute()){

            return 1;

        }else{

            return 0;

        }
        $stmt->close();
        
    }

    public function __destruct() {

        $this->conn->close();

    }


}


?>