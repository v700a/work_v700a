<?php
//$update_book = '';

if (isset($_GET)):
    $update_book_id = $_GET['id'];
    $update_book_array = find_book_by_id($update_book_id);
    $update_book = $update_book_array['0'];
endif;

?>
    <br>
    <h4><b>Форма для редагування книги з каталогу.</b></h4>
    <br><br>

<form method="post">
    <br><br>
    <input type="hidden" name="id" value="<?= $update_book['id']?>">
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
</form>

<?php



if (!isset($_POST['no']) && isset($_POST['id'])):
    save_book_by_id($_POST);
endif;

if ($_SERVER['REQUEST_METHOD'] == 'POST'):
    header('location: index.php?page=book_list');
    die;
endif;


