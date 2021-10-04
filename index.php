<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 03</title>
</head>
<body>
    <h1>Asas PHP</h1>
    
    <?php 
    //komen satu baris
    #komen satu baris
    /* 
        komen banyak baris
    */

    $namapelajar = 'Nur Syafiqa Syazwani Jefri';
    echo '<h2>Hello $namapelajar </h2>'; #output

    $hadir = false;
    $umur = 20;
    $nokp = '010505090048';

    ?>

<?php 
    //addition
    $x = 10;  
    $y = 6;

    echo $x + $y;
    echo "<br>";
    

    //subtraction
    $x = 10;  
    $y = 6;

    echo $x - $y;
    echo "<br>";

    //multiplication
    $x = 10;  
    $y = 6;

    echo $x * $y;
    echo "<br>";

    //Division
    $x = 10;  
    $y = 6;

    echo $x / $y;
    echo "<br>";

    //Modulus
    $x = 10;  
    $y = 6;

    echo $x % $y;
    echo "<br>";
    ?>
<p>
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  
</p>

<?php
$ibubapa ='ibu'; # ibu /bapa/ kedua - duanya
$yatim = 500;
$piatu = 1000;

if ($ibubapa == 'ibu' xor $ibubapa = 'bapa') {
    echo 'Anak yatim , dapat RM' ,$yatim;
} else {
    #
}
?>

<p>
    <?php
    echo 20 . 21;
    ?>

</p>

<h2>
    <?php
    $bandar = 'Arau';
    $baru = 'Bandar ';
    for($x =0; $x < strlen($bandar); $x++) {
        $baru .=$bandar[$x] . ' ';
    }
    echo $baru;
    ?>
</h2>
</body>
</html>