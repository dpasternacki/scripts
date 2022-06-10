<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Łączenie z bazą danych</title>
</head>

<body>

<div id = 'top'>
<?php
$polaczenie = mysqli_connect('localhost','root','','database');
$zapytanie = 'select * from database';
$wynik = mysqli_query($polaczenie,$zapytanie);

while($wiersz_danych = mysqli_fetch_row($wynik))
{
    for($i = 0;$i<count($wiersz_danych);$i++)
    echo $wiersz_danych[$i].' ';
    echo '<br>';
}


?>
</div>
</body>

</html>
