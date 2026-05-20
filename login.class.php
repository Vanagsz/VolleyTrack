<?php

    private $username;
    private $password;
    public $error;
    public $success;
    private $storage = "data.json";
    private $stored_users;

    public function __construct($username, $password){
        $this->$username = $username;
        $this->$password = $password;
    }

    private function login(){}
?>