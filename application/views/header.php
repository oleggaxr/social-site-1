<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link href="/css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/css/header.css">
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
    <div id="wrapper">
        <div id="header">
            <table>
            <tr/><td><img src="/images/logo.png" class="logo" height="180" width="180"></td>
                <td class="text"><p>При отделе Социального служения Казанской Епархии</p></td>
                <td></td>
                <td></td>
                <?php
                echo "<td style='text-align: right'>";
                if ($this->session->userdata('prop_login') == TRUE) {
                    echo "Вы вошли как <b>".$this->session->userdata('prop_login')."</b><br>";
                    echo "<a href='/admin'>Панель администратора</a><br>";
                    echo "<a href='/admin/logout'>Выйти</a><br>";
                } else {
                    echo "<a href='/admin/login'>Войти</a><br>";
                }
                echo "</td>";
                ?>
            </table>
        </div>
            <ul id="nav">
                <li class="<?= $controller_name === "main" ? "active" : ""?>"><a href="/">Главная</a></li>
                <li class="<?= $controller_name === "about" ? "active" : ""?> dropdown">
                    <a href="#">
                        О нас
                        
                    </a>
                    <ul>
                        <li><a href="/about/department">Отдел</a></li>
                        <li><a href="/about/worship">Служба</a></li>
                        <li><a href="/about/documents">Документы</a></li>
                    </ul>
                </li>
                <li class="<?= $controller_name === "projects" ? "active" : ""?>">
                    <a href="#">
                        Направления
                        
                    </a>
                    <ul>
                        <li><a href="/projects/cpm">Центр поддержки материнства</a></li>
                        <li><a href="/projects/volunteers">Добровольцы</a></li>
                        <li><a href="/projects/sisterhood">Сестричество</a></li>
                        <li><a href="/projects/soberness">Трезвость</a></li>
                    </ul>
                </li>
                <li class="<?= $controller_name === "reports" ? "active" : ""?>">
                    <a href="#">
                        Отчёты
                        
                    </a>
                    <ul>
                        <li><a href="/reports/shares">Акции</a></li>
                        <li><a href="/reports/financial">Финансовые отчёты</a></li>
                        <li><a href="/reports/helpto">Кому помогли</a></li>
                        <li><a href="/reports/helpfrom">Кто помог</a></li>
                    </ul>
                </li>
                <li class="<?= $controller_name === "benefactor" ? "active" : ""?>">
                    <a href="#">
                        Помощь
                        
                    </a>
                    <ul>
                        <li><a href="/benefactor/to">Пожертвовать</a></li>
                        <li><a href="/benefactor/from">Попросить помощи</a></li>
                        <li><a href="/benefactor/be">Стать добровольцем</a></li>
                        <li><a href="/benefactor/pray">Помолиться</a></li>
                    </ul>
                </li>
                <li class="<?= $controller_name === "help" ? "active" : ""?>">
                    <a href="#">
                        Полезное
                        
                    </a>
                    <ul>
                        <li><a href="/help/where">Куда обратиться за помощью</a></li>
                        <li><a href="/help/todo">Что делать в трудной ситуации</a></li>
                        <li><a href="/help/books">Полезные книги</a></li>
                    </ul>
                </li>
                <li class="<?= $controller_name === "media" ? "active" : ""?>">
                    <a href="#">
                        Медиа
                        
                    </a>
                    <ul>
                        <li><a href="/media/about">СМИ о нас</a></li>
                        <li><a href="/media/photo">Фото</a></li>
                        <li><a href="/media/video">Видео</a></li>
                        <li><a href="/media/results">Работы подопечных</a></li>
                    </ul>
                </li>
                <li class="<?= $controller_name === "contact" ? "active" : ""?>">
                    <a href="/main/contact">Контакты</a>
                </li>
            </ul>
