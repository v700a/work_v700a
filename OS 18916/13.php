<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Завдання 13</title>
</head>
<body>
<b>
    <br><br>
    <form action="13.php" method="POST">
        Для того, щоб визначити середню швидкість автомобіля:
        <br><br>
        Вкажіть відстань яку проїхав автомобіль, км:
        <br><br>
        <input type="text"   name="vidstan" placeholder="Введіть відстань">
        <br><br>
        Вкажіть час руху автомобіля, годин:
        <br><br>
        <input type="text"   name="chas" placeholder="Введіть час руху, годин">
        <br><br>
        <input type="submit" value="Підтвердити">
    </form>
    <br><br>

<?php

// Перевірка $_POST на NULL для уникнення появи повідомлення - "Notice: Undefined index:"
if ($_POST == null) {
    $_POST = 0;
}

$vidstan = $_POST ['vidstan'];
$chas = $_POST ['chas'];

//echo $vidstan, $chas;

if ($chas == 0) {
    $shvydkist = 0;
}
else {
    $shvydkist_km_god = round(($vidstan / $chas),2);
    $shvydkist_m_hv = round((($vidstan*1000) / ($chas*60)),2);
}

echo "Відстань - {$vidstan}<br><br>";
echo "Час - {$chas}<br><br>";
echo "Швидкість - {$shvydkist_km_god} км/год <br><br>";
echo "або: <br><br>";
echo "Швидкість - {$shvydkist_m_hv} м/хв <br><br>";

    ?>
</b>
</body>
</html>