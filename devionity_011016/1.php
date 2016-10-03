<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php
    $file = fopen('new_file.txt', 'w');
    for ($i = 1;$i <= 10; $i++ ) :
        for ($j = 1; $j <= $i; $j++) :
            fwrite($file, $i);
        endfor;
            fwrite($file, PHP_EOL );
    endfor;
    fclose($file)
?>
<br>
Текстовий файл успішно записано в директорію \devionity_011016 з іменем new_file.txt
</body>
</html>
