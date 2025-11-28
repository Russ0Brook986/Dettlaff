<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bilety</title>
</head>
<body>

<h1><strong>Główna Strona</strong></h1>


    <div class="blok">
<?php
include("db_connection.php");

$sql = "SELECT * FROM bilety";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
   echo "<table>";


echo "<th>Id</th>";
echo "<th>Nr lotu</th>";
echo "<th>Miejsce wylotu</th>";
echo "<th>Miejsce przylotu</th>";
echo "<th>Data</th>";
echo "<th>Godzina</th>";
echo "<th>Imię</th>";
echo "<th>Nazwisko</th>";
echo "<th>Nr miejsca</th>";
echo "<th>Usuń</th>";

while($row = mysqli_fetch_assoc($result)){
echo "<tr>";
echo "<td>". $row["numer_lotu"] ."</td>";
echo "<td>". $row["miejsce_wylotu"] ."</td>";
echo "<td>". $row["miejsce_przylotu"] ."</td>";
echo "<td>". $row["data"] ."</td>";
echo "<td>". $row["godzina"] ."</td>";
echo "<td>". $row["imie"] ."</td>";
echo "<td>". $row["nazwisko"] ."</td>";
echo "<td>". $row["numer_miejsca"] ."</td>";
echo "<td> <a href='usun.php?id=" .$row['id']. "'>Usuń</a>";
echo "<td> <a href='edytuj.php?id='" .$row['id']. ">Edytuj</a>";
 }  
echo "</table>";
}else{
    echo "Brak wyników";
}
?> 
    </div>
</body>
</html>
       


