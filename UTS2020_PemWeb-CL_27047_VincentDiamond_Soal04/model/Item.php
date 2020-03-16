<?php

class Item
{
    var $item_id;
    var $item_name;
    var $item_stock;
    var $item_price;
    var $item_desc;

    function __construct($item_id, $item_name, $item_stock, $item_price, $item_desc)
    {
        $this->item_id = $item_id;
        $this->item_name = $item_name;
        $this->item_stock = $item_stock;
        $this->item_price = $item_price;
        $this->item_desc = $item_desc;
    }

    function get_id()
    {
        return $this->item_id;
    }

    function get_name()
    {
        return $this->item_name;
    }

    function get_stock()
    {
        return $this->item_stock;
    }

    function get_price()
    {
        return $this->item_price;
    }

    function get_desc()
    {
        return $this->item_desc;
    }

    function get_status()
    {
        if ($this->item_stock > 15)
            $status = "Tersedia";
        else if ($this->item_stock >= 5 && $this->item_stock <= 15)
            $status = "Terbatas";
        else if ($this->item_stock > 0 && $this->item_stock < 5)
            $status = "Hampir habis";
        else if ($this->item_stock == 0)
            $status = "Habis";
        return $status;
    }

    function set_id($id)
    {
        $this->id = $id;
    }

    function set_name($str)
    {
        $this->name = $str;
    }

    function set_stock($stock)
    {
        $this->item_stock = $stock;
    }

    function set_price($price)
    {
        $this->item_price = $price;
    }

    function set_desc($str)
    {
        $this->item_desc = $str;
    }
}
