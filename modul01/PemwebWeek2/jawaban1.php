<?php
$negara = array(
    "India" => array(
        "ibuKota" => "New Delhi",
        "kodeTel" => "91",
        "mataUang" => "INR"
    ),
    "Indonesia" => array(
        "ibuKota" => "Jakarta",
        "kodeTel" => "62",
        "mataUang" => "IDR",
    ),
    "Japan" => array(
        "ibuKota" => "Tokyo",
        "kodeTel" => "81",
        "mataUang" => "JPY"
    )
);
$newArray = array_keys($negara);
foreach ($negara as $key => $n) {
    echo "<strong><em>" . $n["ibuKota"] . "</em></strong>" . " is capital city of " . "<strong>" . $key . "</strong>" . ". " . "<u>" . $key . "'s calling code is " . $n["kodeTel"] . ' and has "' . $n["mataUang"] . '" as currency code.' . "</u>";
    echo "<br>";
}

