<?php

require_once("db_connection.php");



$id= $_GET["id"];


$sql = "DELETE FROM bilety WHERE id='$id'";
if(mysqli_query($conn, $sql)){
echo "Dane zostały zaktualizowane";
}else{
    echo "Błąd przy aktualizacji" . mysqli_error($conn);
}
header("Location: index.php")

?>
