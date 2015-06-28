<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">

    <!-- Bootstrap next 5 lines -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    <title>
        <?= $title ?>
    </title>
</head>
<body>

    <div id="header">
        <ul class="nav nav-pills">
            <li class="active"><a href="/">Главная</a></li>
            <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    О нас
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="/about/department">Отдел</a></li>
                    <li><a href="/about/worship">Служба</a></li>
                    <li><a href="/about/documents">Документы</a></li>
                </ul>
            </li>
            <li class="dropdown pull-left">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Проекты
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Центр поддержки материнства</a></li>
                    <li><a href="#">Добровольцы</a></li>
                    <li><a href="#">Сестричество</a></li>
                    <li><a href="#">Трезвость</a></li>
                </ul>
            </li>
            <li class="dropdown pull-left">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Отчёты
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Финансовые отчёты</a></li>
                    <li><a href="#">Кому помогли</a></li>
                    <li><a href="#">Кто помог</a></li>
                </ul>
            </li>
            <li class="dropdown pull-left">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Помощь
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Пожертвовать</a></li>
                    <li><a href="#">Попросить помощи</a></li>
                    <li><a href="#">Стать добровольцем</a></li>
                    <li><a href="#">Помолиться</a></li>
                </ul>
            </li>
            <li class="dropdown pull-left">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Полезное
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">Куда обратиться за помощью</a></li>
                    <li><a href="#">Что делать в трудной ситуации</a></li>
                    <li><a href="#">Полезные книги</a></li>
                </ul>
            </li>
            <li class="dropdown pull-left">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                    Медиа
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">СМИ о нас</a></li>
                    <li><a href="#">Фото</a></li>
                    <li><a href="#">Видео</a></li>
                    <li><a href="#">Работы подопечных</a></li>
                </ul>
            </li>
            <li class="pull-left">
                <a href="#">Проекты</a>
            </li>
        </ul>
    </div>
