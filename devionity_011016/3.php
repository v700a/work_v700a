<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>

    <form action="3.php" method="post">
        Яку функцію використати для відображення масиву:<br><br>
        <input type="radio" name="vardump" value="0"> print_r ()<br><br>
        <input type="radio" name="vardump" value="1"> var_dump ()<br><br>
        <input type="submit">
    </form>
    <br><br>
<?php
    function print_array_tag_pre (array $a, $b = 0)
    {
        if ($b == 1) :
            echo '<pre>';
            var_dump ($a);
            echo '</pre>';
        else :
            echo '<pre>';
            print_r ($a);
            echo '</pre>';
        endif;
    }

    if ($_POST == null) {
        $_POST = 0;
    }
    $vardump = (int)$_POST ['vardump'];
    $krayny = array('Київ'=>'Україна', 'Варшава'=>'Польща', 'Бухарест'=>'Румунія', 'Прага'=>'Чехія',
        'Братислава'=>'Словаччина','Будапешт'=>'Угорщина', 'Мінськ'=>'Білорусія');
    print_array_tag_pre($krayny, $vardump)
?>
</b>
</body>
</html>
