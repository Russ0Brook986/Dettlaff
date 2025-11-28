<?php

// $conn = mysqli_connect("localhost", "root", "", "adrian_pajak");
// if(!$conn){
//     die("Błąd połączenia");
// }else{
// echo "Sukces!";
// }

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_SCHEMA = "loty_przeloty";
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_SCHEMA);

if(!$conn){
die("Błąd połązcenia") . mysqli_error($conn);   
}
?> 
