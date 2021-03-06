<?php

class Session {
    private static $instance = null;
    private  $signed_in = false;
    public  $user_id;
    public $message;

    private function __construct(){
        session_start();
        $this->check_the_login();
        $this->check_message();
    }
    public static function get_session(){
        if (!self::$instance) {
            self::$instance = new Session;
        }
        return self::$instance;
    }

    public function is_signed_in(){
        return $this->signed_in;
    }

    public function login($user){
        if ($user) {
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;
        }
    }
    public function logout(){
        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false; 
    }

    private function check_the_login(){
        if(isset($_SESSION['user_id'])){
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
        } else {
            unset($this->user_id);
            $this->signed_in = false;
        }
    }

    public function message($message=""){
        if (!empty($message)) {
            $_SESSION['message'] = $message;
        } else {
            return $this->message;
        }
    }

    public function check_message(){
        if (isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        } else {
            $this->message = "";
        }
    }

}

