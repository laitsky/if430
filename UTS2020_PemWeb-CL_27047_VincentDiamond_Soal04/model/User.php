<?php

class User
{
    var $user_id;
    var $first_name;
    var $last_name;
    var $role_id;
    var $address;

    function __construct($user_id, $first_name, $last_name, $role_id, $address)
    {
        $this->user_id = $user_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->role_id = $role_id;
        $this->address = $address;
    }

    public function get_user_id()
    {
        return $this->user_id;
    }

    public function get_first_name()
    {
        return $this->first_name;
    }

    public function get_last_name()
    {
        return $this->last_name;
    }

    public function get_name()
    {
        return $this->first_name . " " . $this->last_name;
    }
    public function get_role()
    {
        return $this->role_id;
    }

    public function get_role_name()
    {
        if ($this->role_id == 1)
            $role_name = "Admin";
        else if ($this->role_id == 2)
            $role_name = "Manager";
        else if ($this->role_id == 3)
            $role_name = "Kasir";
        else
            $role_name = "Pembeli";
        return $role_name;
    }

    public function get_address()
    {
        return $this->address;
    }

    public function set_user_id($user_id)
    {
        $this->user_id = $user_id;
    }

    public function set_first_name($str)
    {
        $this->first_name = $str;
    }

    public function set_last_name($str)
    {
        $this->last_name = $str;
    }

    public function set_role($role)
    {
        $this->role_id = $role;
    }

    public function set_address($adr)
    {
        $this->address = $adr;
    }
}
