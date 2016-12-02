<?php

$book_model = new book_model();

$book_list = $book_model->find_all();
if (isset($_POST['add'])):
header('location: index.php?page=book_add');
die;
endif;

if (isset($_GET['delete_id'])):
    $book_model->remove_by_id($_GET['delete_id']);
header('location: index.php?page=book_list');
die;
endif;
?>

<form method="post">
    <button  name="add" value="add"><b>Додати нову книгу до каталогу.</b></button>
</form>
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
        <td><a href="index.php?page=book_list&delete_id=<?=$value['id']?>"">Видалити</a></td>
    </tr>
    <?php endforeach;?>
</table>

