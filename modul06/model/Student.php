<?php

class Student
{
    var $student_id;
    var $student_name;
    var $student_nim;
    var $student_angkatan;
    var $student_jurusan;

    function __construct($id, $name, $nim, $angkatan, $jurusan)
    {
        $this->student_id = $id;
        $this->student_name = $name;
        $this->student_nim = $nim;
        $this->student_angkatan = $angkatan;
        $this->student_jurusan = $jurusan;
    }

    public function getStudent_id()
    {
        return $this->student_id;

    }

    public function getStudent_name()
    {
        return $this->student_name;
    }

    public function getStudent_nim()
    {
        return $this->student_nim;
    }

    public function getStudent_angkatan()
    {
        return $this->student_angkatan;
    }

    public function getStudent_jurusan()
    {
        return $this->student_jurusan;
    }

    public function setStudent_id($id)
    {
        $this->student_id = $id;
    }

    public function setStudent_name($name)
    {
        $this->student_name = $name;
    }

    public function setStudent_nim($nim)
    {
        $this->student_nim = $nim;
    }

    public function setStudent_angkatan($angkatan)
    {
        $this->student_angkatan = $angkatan;
    }

    public function setStudent_jurusan($jurusan)
    {
        $this->student_jurusan = $jurusan;
    }
}
