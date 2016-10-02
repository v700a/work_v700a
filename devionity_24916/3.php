<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<?php
     $a = 1;
     $b = 2;
     $c = 3;
     $d = 4;
     $e = 5;
     $f = 6;
     $g = 7;
        $concat = $a.$b.$c.$d.$e.$f.$g;
        echo '<br><br>';
        echo "Число {$concat} отримане за допомогою методу конкатенації окремих чисел 1,2,3,4,5,6,7";
        echo '<br><br>';
        echo $concat;
?>
</b>
</body>
</html>