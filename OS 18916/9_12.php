<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Завдання 9 - 12</title>
</head>
<body>

<b>
    <br><br>
    <form action="9_12.php" method="POST">
        Вкажіть номер дня тижня (Понеділок - 1, Неділя - 7):
        <br><br>
        <input type="text"   name="day"  placeholder="Номер дня тижня" autofocus>
    </form>
    <br><br>
    <?php

// Перевірка $_POST на NULL для уникнення появи повідомлення - "Notice: Undefined index:"
    if ($_POST == null) {
        $_POST = 0;
    }

//    var_dump($_POST);
   $day = $_POST ['day'];

//var_dump($day);

switch ($day) {
    case 1: echo "Понеділок - робочий день"; break;
    case 2: echo "Вівторок - робочий день"; break;
    case 3: echo "Середа - робочий день"; break;
    case 4: echo "Четвер - робочий день"; break;
    case 5: echo "П'ятниця - робочий день"; break;
    case 6: echo "Субота - вихідний день"; break;
    case 7: echo "Неділя - вихідний день"; break;
    default: echo "Такого дня не існує!...";
}


    echo '<br><br>';
    ?>
</b>
</body>
</html>