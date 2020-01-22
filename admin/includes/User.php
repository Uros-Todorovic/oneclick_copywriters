<?php

class User extends Database_object{
    protected static $db_table = "users";
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;

    
    public static function verify_user($username, $password){
        global $database;
        $params = ["username" => $username,
                   "password" => $password
                  ];
        $sql = "SELECT * FROM ".self::$db_table." WHERE username = :username AND password = :password";
        $result_array = static::find_by_query($sql, $params);
        return !empty($result_array) ? array_shift($result_array) : false;
    }


}