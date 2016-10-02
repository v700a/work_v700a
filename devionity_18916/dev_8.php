<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Повторення матеріалу</title>
</head>
<body>

<form action="dev_8.php" method="get">
    Ваше ім'я:<br>
    <input type="text" name="name" placeholder="Введіть ім'я" autofocus>
    <br><br>
    Ваш Email:<br>
    <input type="email" name="email" placeholder="Введіть ваш Email">
    <br><br>
    Ваш номер телефону:<br>
    <input type="number" name="phone" placeholder="Введіть номер телефону">
    <br><br>
    <input type="submit" value="Відправити методом - GET">
    <br><br>

    <?php
    if ($_GET !== null) {
        echo 'Значення змінної $_GET :';
        echo '<br>';
        echo '<pre>';
        print_r($_GET);
        echo '</pre>';
    }
    ?>

</form><form action="dev_8.php" method="post">
    Ваше ім'я:<br>
    <input type="text" name="name" placeholder="Введіть ім'я">
    <br><br>
    Ваш Email:<br>
    <input type="email" name="email" placeholder="Введіть ваш Email">
    <br><br>
    Ваш номер телефону:<br>
    <input type="number" name="phone" placeholder="Введіть номер телефону">
    <br><br>
    <input type="submit" value="Відправити методом - POST">
    <br><br>

    <?php
    if ($_POST !== null) {
        echo 'Значення змінної $_POST :';
        echo '<br>';
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    ?>
</form>

</body>
</html>