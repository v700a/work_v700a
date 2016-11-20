<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/starter-template.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ><?=isset($_COOKIE['username_in']) ? "Вітаємо, ". $_COOKIE['username_in'] : '!' ?></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Головна</a></li>
                <li><a href="index.php?page=book_list">Книги</a></li>
                <li><a href="index.php?page=comments">Коментарі</a></li>
                <li><a href="index.php?page=gallery">Галерея</a></li>
                <?php if (!isset($_COOKIE['username_in'])):
                echo '<li><a href="index.php?page=login">Авторизація</a></li>';
                echo '<li><a href="index.php?page=registration">Реєстрація</a></li>';
                else:
                    echo '<li><a href="index.php?page=login&msg=end">Вихід</a></li>';
                endif; ?>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<!-- JavaScript-ядро Bootstrap
================================================== -->
<!-- Розміщуйте підключення JavaScript в кінці документа щоб сторінки завантажувались швидше -->
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

</body>
</html>