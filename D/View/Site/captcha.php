<?php
function generate_code()
{
    $chars = '23456789'; // Задаем символы, используемые в капче. Разделитель использовать не надо.
    $length = rand(3, 5); // Задаем длину капчи, в нашем случае - от 4 до 7
    $numChars = strlen($chars); // Узнаем, сколько у нас задано символов
    $str = '';
    for ($i = 0; $i < $length; $i++) {
        $str .= substr($chars, rand(1, $numChars) - 1, 1);
    } // Генерируем код

    // Перемешиваем, на всякий случай
    $array_mix = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
    srand ((float)microtime()*1000000);
    shuffle ($array_mix);
    // Возвращаем полученный код
    return implode("", $array_mix);
}

// Пишем функцию генерации изображения
function img_code($code) // $code - код нашей капчи, который мы укажем при вызове функции
{
    $linenum = rand(3, 7);
    // Шрифты для капчи. Задавать можно сколько угодно, они будут выбираться случайно
    $font_arr = array();
    $font_arr[0]["fname"] = "/DroidSans.ttf";	// Имя шрифта. Я выбрал Droid Sans, он тонкий, плохо выделяется среди линий.
    $font_arr[0]["size"] = rand(20, 30);				// Размер в pt
    // Генерируем "подстилку" для капчи со случайным фоном
    $n = rand(0,sizeof($font_arr)-1);
    $im = imagecreatefrompng ( __DIR__.'/'.'cap.png');
    $q = "DroidSans.ttf";
    // Рисуем линии на подстилке
    for ($i=0; $i<$linenum; $i++)
    {
        $color = imagecolorallocate($im, rand(0, 150), rand(0, 100), rand(0, 150)); // Случайный цвет c изображения
        imageline($im, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
    }
    $color = imagecolorallocate($im, rand(0, 200), 0, rand(0, 200)); // Опять случайный цвет. Уже для текста.
    // Накладываем текст капчи
    $x = rand(0, 35);
    for($i = 0; $i < strlen($code); $i++) {
        $x+=15;
        $letter=substr($code, $i, 1);
        imagettftext ($im, $font_arr[$n]["size"], rand(2, 4), $x, rand(50, 55), $color, $q , $letter);
    }

    // Опять линии, уже сверху текста
    for ($i=0; $i<$linenum; $i++)
    {
        $color = imagecolorallocate($im, rand(0, 255), rand(0, 200), rand(0, 255));
        imageline($im, rand(0, 20), rand(1, 50), rand(150, 180), rand(1, 50), $color);
    }
    // Возвращаем получившееся изображение
    $file = fopen('captcha.png', 'w+');
    ImagePNG ($im, $file);
}



    // Устанавливаем переменную img_dir, которая примет значение пути к папке со шрифтами и (если потребуется) изображениями
    define('DOCUMENT_ROOT', dirname(__FILE__));
    define("img_dir", DOCUMENT_ROOT . "\\");

    $captcha = generate_code();

    $cookie = md5($captcha);
    $cookietime = time() + 320; // Можно указать любое другое время
    setcookie("captcha", $cookie, $cookietime);

    img_code($captcha); // Выводим изображение

//}