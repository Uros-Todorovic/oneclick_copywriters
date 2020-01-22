<?php

class Database_object {

    public static function find_all(){
        global $database;
        $sql = "SELECT * FROM " .static::$db_table;
        return static::find_querys($sql);
    }

    public static function find_by_id($id){
        global $database;
        $params = [
            'id' => $id
            ];
        $sql = "SELECT * FROM ".static::$db_table." WHERE id = :id";
        $result_array = static::find_by_query($sql, $params);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_query($sql, $params){
        global $database;
        $get_row = $database->get_row($sql, $params);
        $object_array = [];
        $object_array[] = static::instantiation($get_row);
        return $object_array;
    }

    public static function find_querys($sql){
        global $database;
        $get_rows = $database->get_rows($sql);
        $object_array = [];
        foreach($get_rows as $get_row) {
            $object_array[] = static::instantiation($get_row);
        }
       return $object_array;
    }

    public static function instantiation($record){
        $class = get_called_class();
        $instance = new $class;

        foreach ($record as $atribute => $value) {
            if ($instance->has_property($atribute)) {
                $instance->$atribute = $value;
            }
        }
        
        return $instance;    
    }

    private function has_property($atribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($atribute, $object_properties);
    }

    public function properties(){
        return get_object_vars($this);
    }

    public function save(){
        return isset($this->id) ? $this->update() : $this->create();
    } 

    public function create(){
        global $database;
        $properties = $this->properties();
        $obj_keys = array_keys($properties);

        $params = [];
        foreach ($properties as $key => $value) {
            $params[$key] = $this->$key;
        }
        
        $named_parameters = [];
        foreach ($obj_keys as $key => $value) {
            $named_parameters[$key] = ":".$value;
        }

        array_shift($params);
        array_shift($named_parameters);
        array_shift($obj_keys);

        $keys = implode(', ', $obj_keys);
        $placeholders = implode(', ', $named_parameters);

        $sql = "INSERT INTO " .static::$db_table. " ({$keys}) values ({$placeholders})";
        
        if ($database->insert_row($sql, $params)) {
            $this->id = $database->last_insert_id();
            return true;
        } else {
            return false;
        }
    }


    public function update(){
        global $database;
        $properties = $this->properties();
        $obj_keys = array_keys($properties);

        $params = [];
        foreach ($properties as $key => $value) {
            $params[$key] = $this->$key;
        }

        $named_parameters = [];
        foreach ($obj_keys as $key => $value) {
            $named_parameters[$key] = $value." = :".$value;
        }

        $id_param = array_shift($named_parameters);
        $keys = implode(', ', $named_parameters);
        
        $sql = "UPDATE " .static::$db_table. " SET {$keys} WHERE {$id_param}";
        $database->update_row($sql, $params);
    }

    public function delete(){
        global $database;
        $params = [
            "id" => $this->id
            ];
        $sql = "DELETE FROM " .static::$db_table. " WHERE id = :id";
        $database->delete_row($sql, $params);
    }
    

    
}