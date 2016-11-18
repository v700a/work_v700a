<?php

$book_list = find_book_all();

?>

<table border="3" width="100%">
    <tr>
        <th bgcolor="#87cefa" >Номер книги</th>
        <th bgcolor="#87cefa">Назва книги</th>
        <th bgcolor="#87cefa">Ціна</th>
        <th bgcolor="#87cefa">Наявність</th>
        <th bgcolor="#87cefa" align="сenter" colspan="2">Дії</th>

    </tr>

    <?php
    foreach ($book_list as $value):
    ?>
    <tr>
        <td><?= $value['id'] ?></td>
        <td><a href="#" title="<?= $value['description'] ?>"><?= $value['title'] ?></a></td>
        <td><?= $value['price'] ?></td>
        <td><?= $value['is_active'] ?></td>
        <td><a href="index.php?page=book_edit&id=<?=$value['id']?>">Редагувати</a></td>
        <td><a href="#">Видалити</a></td>
    </tr>
    <?php endforeach;?>
</table>
