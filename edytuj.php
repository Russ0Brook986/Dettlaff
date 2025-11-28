<?php

require_once("db_connection.php");
if(isset($_GET['id'])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM bilety WHERE id = '$id'";

   $result = mysqli_query($conn, $sql);
   $user = mysqli_fetch_assoc($result);
}

if($_SERVER["REQUEST_METHOD"] === "POST"){
$numer_lotu = $_POST["numer_lotu"];
$miejsce_wylotu = $_POST["miejsce_wylotu"];
$miejsce_przylotu = $_POST["miejsce_przylotu"];
$data = $_POST["data"];
$godzina = $_POST["godzina"];
$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$numer_miejsca= $_POST["numer_miejsca"];
$id= $_POST["id"];



$sql = "UPDATE bilety SET numer_lotu='$numer_lotu', miejsce_wylotu='$miejsce_wylotu', miejsce_przylotu='$miejsce_przylotu', data='$data', godzina='$godzina', imie='$imie', nazwisko='$nazwisko', numer_miejsca='$numer_miejsca' WHERE id='$id'";
}
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Update</title>
</head>
<body>
<h1>Edytowanie pasażerów</h1>

<?php if(!empty($user)): ?>

    <form method="POST">
      <label>Numer lotu</label>
      <input type="text" name="numer_lotu" value="<?= $user["numer_lotu"]?>"></input><br>
        <label>Miejsce wylotu</label>
      <input type="text" name="miejsce_wylotu" value="<?= $user["miejsce_wylotu"]?>"></input><br>
      <label>Miejsce przylotu</label>
      <input type="text" name="miejsce_przylotu" value="<?= $user["miejsce_przylotu"]?>"></input><br>
        <label>Data</label>
      <input type="text" name="data" value="<?= $user["data"]?>"></input><br>
      <label>Godzina</label>
      <input type="text" name="godzina" value="<?= $user["godzina"]?>"></input><br>
      <label>Imie</label>
      <input type="text" name="imie" value="<?= $user["imie"]?>"></input><br>
      <label>Nazwisko</label>
      <input type="text" name="nazwisko" value="<?= $user["nazwisko"]?>"></input><br>
      <label>Numer miejsca</label>
      <input type="text" name="numer_miejsca" value="<?= $user["numer_miejsca"]?>"></input><br>
      <label>ID</label>
      <input type="text" name="id" value="<?= $user["id"]?>"></input><br>
       <button type="submit">Edytuj</button>
    </form> 
    <?php else: ?>
        <p>Nie znaleziono Usera</p>
        <?php endif; ?>
</body>
</html>
