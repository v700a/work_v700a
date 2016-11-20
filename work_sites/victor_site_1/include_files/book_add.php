<?php

//if (!isset($_POST['title'])):
    $update_book['title'] = null;
    $update_book['price'] = null;
    $update_book['is_active'] = null;
    $update_book['description'] = null;
//else:
//    $update_book['title'] = $_POST['title'];
//    $update_book['price'] = $_POST['price'];
//    $update_book['is_active'] = $_POST['is_active'];
//    $update_book['description'] = $_POST['description'];
//endif;
//var_dump($_POST);

//if (isset($_GET)):
//    $update_book_id = $_GET['id'];
//    $update_book_array = find_book_by_id($update_book_id);
//    $update_book = $update_book_array['0'];
//endif;

?>
    <br>
<h4><b>Форма для додавання книги до каталогу.</b></h4>
    <br><br>
    <form method="post">
        <label for="title">Назва книги</label>
        <br>
        <input type="text" name = "title" value = "<?= $update_book['title']?>" placeholder="">
        <br><br>
        <label for="price">Ціна книги</label>
        <br>
        <input type="number" name = "price" value = "<?= $update_book['price']?>">
        <br><br>
        <label for="is_active">Наявність</label>
        <br>
        <input type="number" max="1" name = "is_active" value = "<?= $update_book['is_active']?>">
        <br><br>
        <label for="description">Короткий зміст</label>
        <br>
        <textarea type="text" name = "description" cols="150" rows="15" ><?= $update_book['description']?></textarea>
        <br><br>
        <button>Зберегти зміни</button>
        <button name="no" value="no">Сасувати зміни</button>
        <button name="exit" value="exit">Вийти</button>
    </form>

<?php



if (!isset($_POST['no']) && !isset($_POST['exit'])):
    $_POST['id'] = 'no_id';
    save_book_by_id($_POST);
elseif (isset($_POST['no'])):
//    $_POST['title'] = $update_book['title'];
//    $_POST['price'] = $update_book['price'] = null;
//    $_POST['is_active'] = $update_book['is_active'] = null;
//    $_POST['description'] = $update_book['description'] = null;

    header('location: index.php?page=book_add');
    die;
elseif (isset($_POST['exit'])):
    header('location: index.php?page=book_list');
    die;

endif;

if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    header('location: index.php?page=book_list');
    die;
endif;


