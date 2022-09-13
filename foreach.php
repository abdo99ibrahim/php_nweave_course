<?php
$person = [
    "first_name" => "Abdelrahaman",
    "last_name" => "Ibrahim",
    "address" => "Alexandria",
    "city" => "Alexandria",
    "zip_code" => "12345",
];

foreach($person as $attribute => $data){
    $att_nice = ucwords(str_replace("_"," ",$attribute));
    echo "{$att_nice} : {$data}<br>";
}
?>