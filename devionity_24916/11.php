<?php
/* function test($x, $y)
{
if ($y == 0) {
return false;
}

return $x/$y ;

}

echo test(1,0) or die('Error');
echo 'Unreached line';
*/

echo '<br><br>';

 function test_2($a, $b)
{
    return ($b == 0)? '' : $a/$b;
}


echo test_2(1,0) or die('Error');
echo 'Unreached line';


