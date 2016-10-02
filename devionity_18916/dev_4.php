<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Завдання</title>
</head>
<body>
<?php
    $knyga = array('knyga1'=>'1.','knyga2'=>'2.','knyga3'=>'3.','knyga4'=>'4.',
        'knyga5'=>'5.');
    $nazva = array('nazva1'=>'Книга перша','nazva2'=>'Книга друга','nazva3'=>'Книга третя','nazva4'=>'Книга четверта',
        'nazva5'=>'Книга п\'ята');
    $avtor = array('avtor1'=>'Вася','avtor2'=>'Петя','avtor3'=>'Саня','avtor4'=>'Коля','avtor5'=>'Сєня');
    $style = array('style1'=>'Фентезі','style2'=>'Детектив','style3'=>'Роман','style4'=>'Лірика','style5'=>'Трилер');
    $vartist = array('vartist1'=>'75 uah','vartist2'=>'83 uah','vartist3'=>'55 uah','vartist4'=>'35 uah',
        'vartist5'=>'70 uah');
    $kolekciya = array($knyga,$nazva,$avtor,$style,$vartist);
    echo '<br>';
    echo '<pre>';
    print_r($kolekciya);
    echo '</pre>';

    $knyga = array(
        'knyga1'=>array('nazva1'=>'Книга перша','avtor1'=>'Вася','style1'=>'Фентезі','vartist1'=>'75 uah'),
        'knyga2'=>array('nazva2'=>'Книга друга','avtor2'=>'Петя','style2'=>'Детектив','vartist2'=>'83 uah'),
        'knyga3'=>array('nazva3'=>'Книга третя','avtor3'=>'Федя','style3'=>'Роман','vartist3'=>'55 uah'),
        'knyga4'=>array('nazva4'=>'Книга четверта','avtor4'=>'Коля','style4'=>'Лірика','vartist4'=>'35 uah'),
        'knyga5'=>array('nazva5'=>'Книга п\'ята','avtor5'=>'Сєня','style5'=>'Трилер','vartist5'=>'70 uah')
    );
    echo '<br>';
    echo '<pre>';
    print_r($knyga);
    echo '</pre>';
    echo '<pre>';
    var_dump($knyga);
    echo '</pre>';
?>
</body>
</html>