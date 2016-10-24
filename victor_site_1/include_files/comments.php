<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

    function read_write_file($a)
    {
        if ($a !== ''):
            if (!file_exists('comment_file.txt')):
                $new_file_txt = fopen('comment_file.txt' , 'c+');
                fclose($new_file_txt);
            endif;
            $file_content = file_get_contents('comment_file.txt');
            if ($file_content !== ''):
                $file_content_uns = unserialize($file_content);
                $current_count = count($file_content_uns);
                $new_count = $current_count / 3;
                $new_count++;
                $file_content_uns["name_$new_count"] = $_COOKIE['username_in'] . ' ' . date('m-d-y р. H:i');
                $file_content_uns["textarea_$new_count"] = $a;
                $file_content_uns["rating_$new_count"] = 0;
                $string_array = serialize($file_content_uns );
                $file_content_new = $string_array;
                file_put_contents('comment_file.txt',$file_content_new);
            else:
                $file_content_uns["name_1"] = $_COOKIE['username_in'] . ' ' . date('m-d-y р. H:i');
                $file_content_uns["textarea_1"] = $a;
                $file_content_uns["rating_1"] = 0;
                $string_array = serialize($file_content_uns );
                $file_content_new = $string_array;
                file_put_contents('comment_file.txt',$file_content_new);
            endif;
        endif;
    }

    function reorg_array ()
    {
        $file_content_read = file_get_contents('comment_file.txt');
        $file_content_read_uns = unserialize($file_content_read);
        $f = 0;
        $d = 1;
        $file_content_read_uns_new = '';
            foreach ($file_content_read_uns as $value):
                if ($f == 0):
                    $file_content_read_uns_new["name_$d"] = $value;
                    $f = 1;
                elseif ($f == 1):
                    $file_content_read_uns_new["textarea_$d"] = $value;
                    $f = 2;
                elseif ($f == 2):
                    $file_content_read_uns_new["rating_$d"] = $value;
                    $f = 0;
                    $d++;
                endif;
            endforeach;
        $file_save_content = serialize($file_content_read_uns_new);
        if ($file_save_content == 's:0:"";'):
            file_put_contents('comment_file.txt', null);
        else:
            file_put_contents('comment_file.txt', $file_save_content);
        endif;
    }

    function set_rating (array $e)
    {
        if (isset($e)):
            if (isset($e['r_plus']) || isset($e['r_minus'])):
                $file_content_read_rating = file_get_contents('comment_file.txt');
                $file_content_read_rating_uns = unserialize($file_content_read_rating);
                    if (isset($e['r_plus'])):
                        $index_r_plus = $e['r_plus'];
                        $file_content_read_rating_uns["rating_$index_r_plus"] =
                            $file_content_read_rating_uns["rating_$index_r_plus"] + 1;
                    elseif (isset($e['r_minus'])):
                        $index_r_minus = $e['r_minus'];
                        $file_content_read_rating_uns["rating_$index_r_minus"] =
                            $file_content_read_rating_uns["rating_$index_r_minus"] - 1;
                    endif;
                $file_save_content_rating = serialize($file_content_read_rating_uns);
                file_put_contents('comment_file.txt', $file_save_content_rating);
            endif;
        endif;
    }

//****************************************FUNCTIONS**************************************************************
    if (isset($_COOKIE)):
        if (isset($_COOKIE['username_in'])):
                    if (!$_POST){
                        $_POST = 0;
                    }

                    if ($_POST ['ar1'] !== null):
                        $arr_1 = $_POST ['ar1'];
                        read_write_file($arr_1);
                    endif;
            if (!file_exists('comment_file.txt')):
                $new_file_txt = fopen('comment_file.txt' , 'c+');
                fclose($new_file_txt);
            endif;
            set_rating($_GET);

            $read_file_content = file_get_contents('comment_file.txt');
                    $read_file_content_uns = unserialize($read_file_content);
//                    echo '<pre>';
//                    print_r($read_file_content_uns);
//                    print_r($_GET);
//                    echo '</pre>';
                    if (isset($_GET['delete'])):
                        $number_delete = $_GET['delete'];
                        if ((int)$number_delete !== null):
                            unset($read_file_content_uns["name_$number_delete"]);
                            unset($read_file_content_uns["rating_$number_delete"]);
                            unset($read_file_content_uns["textarea_$number_delete"]);
                            $save_file_content = serialize($read_file_content_uns);
                            file_put_contents('comment_file.txt', $save_file_content);
                            reorg_array();
                            header("location:/index.php?page=comments");
                            die;
                        endif;
                    endif;
            if ((bool)$read_file_content_uns !== false):
                $count_arr_read_file = count($read_file_content_uns) / 3;
                echo $count_arr_read_file;
            else:
                $count_arr_read_file = 0;
            endif;

?>

                    <form method="post">

<?php
                        for ($i = 1 ; $i <= $count_arr_read_file; $i++ ):
                                echo $read_file_content_uns["name_$i"];
                                echo '&nbsp&nbsp Рейтинг комантаря: &nbsp';
                                echo $read_file_content_uns["rating_$i"];
                                echo '<br>';
                                echo $read_file_content_uns["textarea_$i"];
                                echo '<br>';
                                echo "<a href=\"index.php?page=comments&delete=$i \">
                                      <b>Видалити&nbsp&nbsp&nbsp</b></a>";
                                echo ' Зміна рейтингу: &nbsp&nbsp&nbsp';
                                echo "<a href=\"index.php?page=comments&r_plus=$i \">
                                      <b><big><big>+</big></big></b></a>";
                                echo '&nbsp&nbsp&nbsp';
                                echo "<a href=\"index.php?page=comments&r_minus=$i \">
                                      <b><big><big>-</big></big></b></a>";
                                echo '<br><br>';
                        endfor;
//                   if ($_SERVER['REQUEST_METHOD'] == 'POST'):
//                        header("location:/index.php?page=comments");
//                        die;
//                    endif;

                        ?>

                    <hr>
                        Залиште коментар на сторінці:<br>
                        <br><br>
                        <textarea name="ar1" cols="130" rows="10" placeholder="Текст коментаря" autofocus></textarea>
                        <br><br>
                        <input type="submit">
                        <br><br>
                    </form>
<?php
        else:
            echo '<h2>Ви не авторизовані! Доступ до цієї сторінки заборонено!</h2>';
        endif;
    endif;

?>


</body>
</html>