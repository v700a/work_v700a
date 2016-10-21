
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Стартовий Шаблон для Bootstrap</title>

    <!-- CSS-ядро Bootstrap -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Підібрані стилі саме для цього шаблона -->
    <link href="starter-template.css" rel="stylesheet">

    <!-- Це чисто для цілей налагодження. Вам не потрібно копіювати цих два рядки! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- Вставка HTML5 поєднується з Respond.js для підтримки в IE8 елементів HTML5 та медіа-запитів -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Назва проекта</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Стартова</a></li>
                <li><a href="#about">Про сайт</a></li>
                <li><a href="#contact">Контакти</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <h1>Стартовий Шаблон для Bootstrap</h1>
        <p class="lead">Використовуйте цей документ як варіант швидкого старту в будь-якому новому проекті.<br> Ви отримаєте лише цей текст та базовий HTML-документ.</p>
    </div>

</div><!-- /.container -->


<!-- JavaScript-ядро Bootstrap
================================================== -->
<!-- Розміщуйте підключення JavaScript в кінці документа щоб сторінки завантажувались швидше -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- viewport для браузера IE10, це зроблено щоб виправити помилку для Surface/desktop Windows 8 -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>