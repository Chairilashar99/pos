<?php

class Database
{

    private $hostname;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if (!$this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return true;
    }
    private function executeQuery($query)
    {
        $result = $this->conn->query($query);
        if ($result) {
            return $this->conn->insert_id;
        } else {
            echo "Query failed: " . $this->conn->error;
            return false;
        }
    }
    public function fetch($query)
    {
        $result = $this->conn->query($query);
        if (!$result) {
            echo "Query failed: " . $this->conn->error;
            return false;
        }
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        $result->free();
        return $data;
    }
    public function fetchOne($query)
    {
        $result = $this->conn->query($query);
        if (!$result) {
            echo "Query failed: " . $this->conn->error;
            return false;
        }
        $data = $result->fetch_assoc();
        $result->free();
        return $data;
    }
    public function insert($table, $data)
    {
        $fields = implode(',', array_keys($data));
        $values = "'" . implode("','", array_values($data)) . "'";
        $query = "INSERT INTO $table ($fields) VALUES ($values)";
        return $this->executeQuery($query);
    }

    public function upadate($table, $data, $where)
    {
        $setClause = "";
        foreach ($data as $key => $value) {
            $setClause .= "$key= $value";
        }
        $setClause = rtrim($setClause, ',');
        $query = "UPDATE $table SET $setClause WHERE $where";
        return $this->executeQuery($query);
    }
    public function delete($table, $where)
    {
        $query = "DELETE FROM $table WHERE $where";
        return $this->executeQuery($query);
    }
}
