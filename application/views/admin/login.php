<html>
    <head>
        <title>Вход в панель управления сайтом</title>
        <!-- Bootstrap next 5 lines -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </head>
    <body>
        <style type="text/css">
            body {
                height: 100%;
                vertical-align: middle;
                text-align: center;
            }
            form {
                width: 300px;
                margin-top: 100px;
                display: inline-block;
                text-align: center;
            }
            .error {
                color: red;
            }
        </style>
        <?php echo form_open('admin/login'); ?>
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="login" class="form-control" name="login" id="login" placeholder="Логин">
            </div>
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control"  name="password" id="password" placeholder="Пароль">
            </div>
            <?php
                if (isset($error)) {
                    echo "<p class=\"error\">".$error."</p>";
                }
            ?>
            <input type="submit" class="btn btn-default" value="Войти">
            <a href="/">Вернуться на главную</a>
        <?php echo form_close(); ?>
    </body>
</html>






<?php /*

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
        <div style = "margin-left:200px;"><h3><p style = "color:#6CA6CD;font-size:25px;"><?php echo form_prep($this->session->userdata('prop_login')); ?></p></h3></div>
        <div style = "margin-left:200px;"><?php if($this->session->userdata('prop_login') == TRUE){?><a style = "text-decoration: none;color:black;color:#6CA6CD;" href = "<?php echo site_url("admin"); ?>">Меню администратора</a><?php }?></div>
        <div style = "margin-left:200px;"><?php if($this->session->userdata('prop_login') == TRUE){?><a class = "destroy" style = "text-decoration: none;color:white;" href = "<?php echo site_url("main/logout"); ?>">Выйти</a><?php }?></div>

</div>