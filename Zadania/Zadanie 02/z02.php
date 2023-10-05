<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Zadanie 02</title>
</head>
<body>
<header>
    <h1>Zadanie 02</h1>
    <h2>Autor: Kacper Zając</h2>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
</header>

<section>
    <p>Napisz program, który dla czterech liczb rzeczywistych oblicza i wyświetla ich średnią arytmetyczną. WYnik wyświetl w dwóch postaciach. Bez zaokrąglenia oraz z zaokrągleniem do trzech miejsc po przecinku.</p>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <label for="val-1">a:</label>
        <input type="number" step="any" id="val-1" name="val-1">

        <label for="val-2">b:</label>
        <input type="number" step="any" id="val-2" name="val-2">

        <label for="val-3">c:</label>
        <input type="text" step="any" id="val-3" name="val-3">

        <label for="val-4">d:</label>
        <input type="text" step="any" id="val-4" name="val-4">

        <input type="submit" value="Wyślij">
    </form>
</section>

<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $val1 = $_POST['val-1'];
    $val2 = $_POST['val-2'];
    $val3 = $_POST['val-3'];
    $val4 = $_POST['val-4'];

    $wynik = ($val1 + $val2 + $val3 + $val4) / 4;
    $rounded = round($wynik);

    echo "<h3>a: $val1</h3>";
    echo "<h3>b: $val2</h3>";
    echo "<h3>c: $val3</h3>";
    echo "<h3>d: $val4</h3>";
    echo "<h2><b>Średnia: $wynik<b></h2>";
    echo "<h2><b>Średnia zaokrąglona: $rounded<b></h2>";
}
?>
</body>
</html>