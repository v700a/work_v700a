<?php
    $book_model = new book_model();
print_r($_GET);

    $update_book['title'] = null;
    $update_book['price'] = null;
    $update_book['is_active'] = null;
    $update_book['description'] = null;

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
        <button name="no" value="no">Сасувати зміни</button>
        <button>Зберегти зміни</button>
        <button name="exit" value="exit">Вийти</button>
    </form>

<?php



if (!isset($_POST['no']) && !isset($_POST['exit'])):
    $_POST['id'] = 'no_id';

    $book_model->save_by_id($_POST);
elseif (isset($_POST['no'])):
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


