<?php

class Hewan
{
    public $nama;
    public $apakahHidup;

    public function __construct($nama)
    {
        $this->nama = $nama;
        $this->apakahHidup = true;
        echo $this->nama . " adalah hewan hidup<br>";
    }

    public function __destruct()
    {
        $this->apakahHidup = false;
        echo $this->nama . " telah wafat<br>";
    }


    public function makan()
    {
        return "nyam nyam";
    }

    public function tidur()
    {
        return "zzzzz";
    }

    public function berjalan()
    {
        return "tuk ku tuk";
    }
}


$momo = new Hewan("Momo");
$mimi = new Hewan("Mimi");
$mumu = new Hewan("Mumu");

echo "<br><br>";
echo $momo->nama . " suka makan, " . $momo->makan() . " " . $momo->makan() . ".<br>";
echo $mimi->nama . " suka tidur, " . $mimi->tidur() . " " . $mimi->tidur() . " " . $mimi->tidur() . ".<br>";
echo $mumu->nama . " suka berjalan, " . $mumu->berjalan() . ".<br>";
echo "<br><br>";
