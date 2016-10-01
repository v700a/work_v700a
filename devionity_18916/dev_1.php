<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Просто практика</title>
</head>
<body>



<?php
/** Багаторядковий коментар
 * Created by PhpStorm.
 * User: Victor
 * Date: 19.09.2016
 * Time: 20:51
 */
/* Our dynamic content here */

// однорядковий коментар

// Оператор echo
echo 'Моє вітаннячко <br><br>' ;



?>



<?= 'Ще раз - "Моє вітаннячко" <br><br>';

// Альтернативний запис оператора echo

?>

<?php

// Приклад задання змінної

$_text = "та, блін...";
echo "$_text <br><br>" ;

?>

<?php

// Булево значення у відображенні - echo

$t = true;
echo "true -  {$t} ";

$f = false;
echo "<br> false -  $f <br>";

?>

<?php
/* числові значення змінних */
$aa = 32; //ціле число
$ab = -325; //відємне ціле число
$ac = 0xabc; //шіснадцяткове число
$ad = 0b11001; //двійкове число
$ae = 0235; //вісімкове число
$af = 12.5e-11; //експоненціальне подання числа

echo "<br><br>$aa<br><br>$ab<br><br>$ac<br><br>$ad<br><br>$ae<br><br>$af<br><br>";

?>

<?php

$name_1 = 'Віктор';
$name_2 = 'Пастух';
$stan = 'студент';

echo "Моє ім'я: $name_1<br>Моє прізвище: $name_2<br>Мій поточний стан: $stan<br>"

?>


<?php

$fruits = array(5, 10, 3);

$var = 'Something';
$arr = array(5, 10, 3, 'some string', false, 2.54, $var);

$apples_amount = $fruits[0];
$bananas_amount = $fruits[1];
$oranges_amount = $fruits[2];

$fruits[2] = 24; // now we get array of 5, 10, 24

echo "<br>$fruits[2]<br>";
//echo "<br>$arr[2]<br>";

echo '<br>';

$numbers = array(22 => 'twenty two', '100' => 'one hundred', 45 => 'fourty five');
echo "$numbers[45]<br>"; // we get 'one hundred'

print_r($arr);

echo '<pre>';
print_r($arr);
echo '<br>';
print_r($fruits);
echo '<br>';
print_r($numbers);
echo '<br>';
echo '</pre>';


?>

</body>
</html>
