<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Завдання 5 - 8</title>
</head>
<body>

<b>

<br><br>

<form action="5_8.php" method="POST">
    Вкажіть ваш вік:
    <br><br>
    <input type="text"   name="age"  placeholder="Скільки вам років" autofocus>
</form>
<br><br>
<?php

// Перевірка $_POST на NULL для уникнення появи повідомлення - "Notice: Undefined index:"
if ($_POST == null) {
    $_POST = 0;
}

$age = $_POST ['age'];

if ($age < 0) {
    echo 'Ваш вік - ( ',$age, ') років. Ще цікавенніше значення!';
}
elseif ($age != is_numeric($age) ) {
    echo 'Ваш вік - ',$age, ' років. Цікавенне значення!';
}
elseif ((3 >= $age) && ($age >= 1)) {
    echo 'Ваш вік - ',$age, ' років. Ви, що, уже дістеєте до клавіатури на столі?!';
}
elseif ((17 >= $age) && ($age > 3)) {
    echo 'Ваш вік - ',$age, ' років. Вам ще зарано працювати!';
}
elseif ((30 >= $age) && ($age > 17)) {
    echo 'Ваш вік - ',$age, ' років. Вам ще довго, дооовго працювати до пенсії';
}
elseif ((49 >= $age) && ($age > 30)) {
    echo 'Ваш вік - ',$age, ' років. Ще довгенько... тримайтесь там...';
}
elseif ((59 >= $age) && ($age > 49)) {
    echo 'Ваш вік - ',$age, ' років. Ну, ще трішечки...';
}
elseif ($age > 59) {
    echo 'Ваш вік - ',$age, ' років. Ну, і чого ви тут товчетесь?..';
}

echo '<br><br>';
?>
</b>
</body>
</html>