<?php

class Student
{
    var $id;
    var $student_id;
    var $first_name;
    var $last_name;

    function __construct($id, $student_id, $first_name, $last_name)
    {
        $this->id = $id;
        $this->student_id = $student_id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_student_id($student_id)
    {
        $this->student_id = $student_id;
    }

    public function set_first_name($first_name)
    {
        $this->first_name = $first_name;
    }

    public function set_last_name($last_name)
    {
        $this->last_name = $last_name;
    }

    public function get_id()
    {
        return $this->id;
    }

    public function get_student_id()
    {
        return $this->student_id;
    }

    public function get_first_name()
    {
        return $this->first_name;
    }

    public function get_last_name()
    {
        return $this->last_name;
    }
}
