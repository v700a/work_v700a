<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<b>
    <form action="2.php" method="post">
        Введіть кількість років:<br>
        <input type="number" name="years" autofocus>
        <br><br>
    </form>

    <?php
    if ($_POST == null) {
        $_POST = 0;
    }
        $forma = $_POST['years'];
    if ($forma == null) {
        $forma = 0;
    }
    if ($forma < 0){
        echo "Роки не можуть мати відємного значення!... напевно...";
    }
    else {
        echo "Кількість років = {$forma}";
        echo '<br><br>';
        $mis = $forma * 12;
        echo "Кількість місяців = {$mis}";
        echo '<br><br>';
        $dniv = $forma * 365;
        echo "Кількість днів = {$dniv}";
        echo '<br><br>';
        $godyn = $dniv * 24;
        echo "Кількість годин = {$godyn}";
        echo '<br><br>';
        $hvilyn = $godyn * 60;
        echo "Кількість хвилин = {$hvilyn}";
        echo '<br><br>';
        $sekund = $hvilyn * 60;
        echo "Кількість секунд = {$sekund}";
        echo '<br><br>';
        $sec_2 = $sekund % 2;
        echo "Залишок від ділення кількості секунд на 2 = {$sec_2}";
    }

    ?>
</b>
</body>
</html