
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Dodaj</title>
</head>
<body>
    
<h1>Dodawanie nowego rekordu</h1>
<form method = "POST">
<label>Numer Lotu</label>
<input type="text" name="numer_lotu"></input><br>
<label> Miejsce wylotu</label>
<input type="text" name="miejsce_wylotu"></input><br>
<label> Miejsce przylotu</label>
<input type="text" name="miejsce_przylotu"></input><br>
<label>Data</label>
<input type="text" name="data"></input><br>
<label>Godzina</label>
<input type="text" name="godzina"></input><br>
<label>Imie</label>
<input type="text" name="imie"></input><br>
<label>Nazwisko</label>
<input type="text" name="nazwisko"></input><br> 
<label>Numer miejsca</label>
<input type="text" name="numer_miejsca"></input><br>
<button type="submit">DODAJ</button>
</form>

<?php               
require_once("db_connection.php");
$numer_lotu = $_POST["numer_lotu"];
$miejsce_wylotu = $_POST["miejsce_wylotu"];
$miejsce_przylotu = $_POST["miejsce_przylotu"];
$data = $_POST["data"];
$godzina = $_POST["godzina"];
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$numer_miejsca = $_POST["numer_miejsca"];

$sql = "INSERT INTO `bilety`(`numer_lotu`, `miejsce_wylotu`, `miejsce_przylotu`, `data`, `godzina`, `imie`, `nazwisko`, `numer_miejsca`) VALUES ('$numer_lotu','$miejsce_wylotu', '$miejsce_przylotu', '$data','$godzina','$imie','$nazwisko', '$numer_miejsca')";


if ($imie == "admin") {
    echo "Błąd: Nie możesz dodać użytkownika o nazwie 'admin'.";
    exit;
}



// include("db_connection.php");

// $sql = "INSERT INTO `users`(`name`, `surname`, `email`) VALUES ('Mateusz','Kowalski','mateuszkowal@gmail.com')";
// $sql = "UPDATE `users` SET `name`= 'Jan' WHERE name = 'Mateusz'";
// $sql = "DELETE FROM `users` WHERE name = 'Jan'";
// $sql =  "Select * from Users";
// $result = mysqli_query($conn, $sql);
// if(mysqli_num_rows($result > 0)){
// while($row = mysqli_fetch_assoc($result)){
// echo $row ["name"]." ".$row["surname"];
// }
// }else{
//     echo "Brak pobranych wierszów";
// }
// if(mysqli_query($conn, $sql)){
// echo "Dodano nowy rekord";  
// }else{
//     echo "Błąd".mysqli_error($conn);
// }                       
// mysqli_close($conn);
?>
</body>
</html>      
