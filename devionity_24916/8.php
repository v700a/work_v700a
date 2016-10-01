<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
 <!--   <form action="1.php" method="post">
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
-->
    <?php
    echo 'Задано масив:';
    echo '<br><br>';
    $massiv_int = array(1,3,17,9,45,98,90,27,134,120);
    echo '<pre>';
    print_r($massiv_int);
    echo '</pre>';
    echo '<br><br>';
    echo 'Вивести на екран числа які діляться на 3...';
    echo '<br><br>';
    echo 'Це наступні числа: ';
    foreach ($massiv_int as $key => $chyslo) {
        if ($chyslo % 3 == 0)
            echo "{$chyslo} ";

    }


?>
</b>
</body>
</html