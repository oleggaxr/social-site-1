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