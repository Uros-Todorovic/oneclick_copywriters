<?php

class Database {

    private static $instance = null;
    private $connection;
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "oneclik_copywriters";
    

    private function __construct(){
        $this->connection = new PDO("mysql:host={$this->host};dbname={$this->db_name}",$this->user,$this->password);
        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    }

    public static function get_instance(){
        if (!self::$instance) {
            self::$instance = new Database;
        }
        return self::$instance;
    }

    public function get_connection(){
        return $this->connection;
    }

    public function get_rows($sql){
        $data = $this->connection->query($sql);
        return $data->fetchAll();
    }

    public function get_row($sql, $params = []){
        $data = $this->connection->prepare($sql);
        $data->execute($params);
        return $data->fetch();
    }

    public function insert_row($sql, $params = []){
        $data = $this->connection->prepare($sql);
        $inserted_row = $data->execute($params);
        return $inserted_row;
    }

    public function last_insert_id(){
        $last_id = $this->connection->lastInsertId();
        return $last_id;
    }

    public function update_row($sql, $params = []){
        $data = $this->connection->prepare($sql);
        $data->execute($params);
        $rows_affected = $data->rowCount();
        return ($rows_affected == 1) ? true : false;
    }

    public function delete_row($sql, $params = []){
        $this->update_row($sql, $params);
    }

}