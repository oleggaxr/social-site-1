<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link href="/css/main.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url(); ?>css/header.css">
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
				<td>
						<div style = "margin-left:200px;"><h3><p style = "color:#6CA6CD;font-size:25px;"><?php echo form_prep($this->session->userdata('prop_login')); ?></p></h3></div>
						<div style = "margin-left:200px;"><?php if($this->session->userdata('prop_login') == TRUE){?><a style = "text-decoration: none;color:black;color:#6CA6CD;" href = "<?php echo site_url("admin/admin_news"); ?>">Меню администратора</a><?php }?></div>
						<div style = "margin-left:200px;"><?php if($this->session->userdata('prop_login') == TRUE){?><a class = "destroy" style = "text-decoration: none;color:white;" href = "<?php echo site_url("main/logout"); ?>">Выйти</a><?php }?></div>
				</td>
            </table>

			<div style = "margin-left:480px;"><?php if($this->session->userdata('prop_login') == FALSE){ ?><p><a href="#openModal" class = "downloadavatar" style = "color:#6CA6CD;">ВходДляАдминистратора</a></p><?php }?></div>

			<div id="openModal" class="modalDialog">
						<div>
							<a href="#close" title="Закрыть" class="close">X</a>
							<?php echo form_open('main/input_users'); ?>
									Логин <input type = "text" name = "login"/><br>
									Пароль <input type = "password" name = "password"/><br>
									<input type = "submit" value = "Вход">
							<?php echo form_close();?>
						</div>
			</div>
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
                        Проекты
                        
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
