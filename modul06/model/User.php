<?php

class User
{
    var $username;
    var $password;
    var $salt;

    function __construct($username, $password, $salt)
    {
        $this->username = $username;
        $this->password = $password;
        $this->salt = $salt;
    }

    public function get_username()
    {
        return $this->username;
    }

    public function get_password()
    {
        return $this->password;
    }

    public function get_salt()
    {
        return $this->salt;
    }

    public function set_username($str)
    {
        $this->username = $str;
    }

    public function set_password($str)
    {
        $this->password = $str;
    }

    public function set_salt($str)
    {
        $this->salt = $str;
    }
}
