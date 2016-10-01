<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
<form action="1.php" method="post">
    Ваше ім'я:<br>
    <input type="text" name="username" size="49" placeholder="Введіть ваше ім'я" autofocus>
    <br><br>Ваш Email:<br>
    <input type="email" name="email" size="49" placeholder="Введіть ваш Email">
    <br><br>Ваше повідомлення:<br>
    <textarea name="message" cols="50" rows="5" placeholder="Введіть текст вашого повідомлення"></textarea>
    <br><br>
    <input type="submit" value="Внести зміни">
    <br><br>
</form>

    <?php
    $forma = $_POST;
    echo 'Дані серіалізації масиву змінної $_POST отримані за допомогою функції serialize()';
    echo '<br><br>';
    echo serialize($forma);
    ?>
</b>
</body>
</html